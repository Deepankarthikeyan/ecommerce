<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Landing_controller extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    /**
     * [__construct description]
     *
     * @method __construct
     */
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
		$this->load->helper('url');
		$this->load->model('website_model');
    }

    /**
     * [index description]
     *
     * @method index
     *
     * @return [type] [description]
     */
	public function website()
	{
		$userid = $this->session->userdata("web_user_ref_id");
		$items_id = $this->input->get('id');
		$data['foods_and_drink'] = $this->website_model->get_food_and_drink_products();
		$data['vegetable'] = $this->website_model->get_vegetable_products();
		$data['fruit'] = $this->website_model->get_fruit_products();	
		$data['bread_and_cake'] = $this->website_model->get_bread_and_cake_products();	
		$data['fish_and_meat'] = $this->website_model->get_fish_and_meat_products();
		$data['feature_product'] = $this->website_model->get_feature_products();
		$data['cartlist'] = $this->website_model->get_cart_list_by_id($userid);
		$data['whislist'] = $this->website_model->get_all_whislist($userid);
		$data['testimonial'] = $this->website_model->get_testimonial_datas();
	  
		// print_r($data['testimonial']);

		$this->load->view('Landing_page.php', $data);

	}

	public function get_cart_detail(){
		$userid = $this->session->userdata("web_user_ref_id");
		// print_r($username);
		if($userid != ''){
		ob_start();

		$items_id = $this->input->post('id');
		$our_product = $this->website_model->get_product_details($items_id);
	

		$cart_id = $our_product['p_id'];
	

		$data = array(
			'web_user_id' => $userid,
			"ct_id" => $our_product['p_id'],   
			"ct_name" => $our_product['p_name'],   
			"ct_image" => $our_product['p_image'],   
			"ct_price" => $our_product['p_price'],   
			"ct_quantity" => 1 
		);
		
		$insert_data = array(
			'p_ins_ref_id' => 'pv_' .mt_rand(0000,1111),
			'p_ins_userid' => $userid,
			'p_id' => $our_product['p_id'],
			'p_name' => $our_product['p_name']
		  );
		  $inserted = $this->website_model->insert_product_cart_user_data($insert_data);
		

		$existing_item = $this->website_model->get_cart_item_by_id($cart_id);
		
		$item_details = $this->website_model->get_product_details($cart_id);
		
		
		if ($existing_item) {

			$new_quantity = $existing_item['ct_quantity'] + 1;
			$update_data = array(
				"ct_quantity" => $new_quantity	
			);
			$update = $this->website_model->update_cart_item($cart_id, $update_data);
			
			if ($update) {
				$update_item = $this->website_model->get_cart_item_by_id($cart_id);
				$response['status'] = 1; 
				$response['cart'] = $update_item;
				$response['prod'] = $item_details;
			} else {
				$response['status'] = 2;
			}
		} else {

			$insert = $this->website_model->insert_cart_items($data);
			
			if ($insert) {
				$insert_item = $this->website_model->get_cart_item_by_id($cart_id);
				$response['status'] = 1; 
				$response['cart'] = $insert_item;
				$response['prod'] = $item_details;
	
			} else {
				$response['status'] = 2; 
			}
		}

		$response['whis'] = $this->website_model->get_cart_for_modal($items_id);
		ob_end_clean();
		header('Content-Type: application/json');
		
	} else{
		$response['status'] = 3;
	}
	echo json_encode($response);
	}

	public function get_cart_datas(){
		$userid = $this->session->userdata("web_user_ref_id");
		$applied = $this->website_model->applied_coupon_list_id($userid);
		$data['cartlist'] = $this->website_model->get_cart_list_by_id($userid);
		$coupon = $this->website_model->get_coupon_list();

         

		$subtotal = 0;
		$item_total = 0;
		foreach ($data['cartlist'] as $cart) {
			$subtotal += $cart['ct_quantity'] * $cart['ct_price']; 
			$item_total = $cart['ct_quantity'] * $cart['ct_price'];
	
		}

		
		$response = [
			'cartlist' => $data['cartlist'],
			'subtotal' => $subtotal,
			'item_total' => $item_total,
			'count' => count($data['cartlist']),
			'applied' => $applied,
			'coupon' => $coupon
		];
	

		echo json_encode($response);
	}

	public function reduce_product_count(){
		$cart_id = $this->input->post('ct_id');
		$our_product = $this->website_model->get_product_details($cart_id);
		$item = $this->website_model->get_cart_item_by_id($cart_id);
        if($item){
			$new_quantity = $item['ct_quantity'] - 1;
			$update_data = array(
				"ct_quantity" => $new_quantity	
			);
				$update = $this->website_model->update_cart_item($cart_id, $update_data);
				if($update){
					$response['status'] = 1;
					$response['ct_quantity'] = $new_quantity;
					$response['ct_id'] = $cart_id;
					$response['item'] = $item; 
					$response['details'] = $our_product; 
				
					
				} else{
					$response['status'] = 2;
				}
				header('Content-Type: application/json');
                echo json_encode($response);
			
			
		}
	}

	public function increase_product_count(){
    $cart_id = $this->input->post('ct_id');
    $item = $this->website_model->get_cart_item_by_id($cart_id);
    if($item){
	$new_quantity = $item['ct_quantity'] + 1;
	$update_data = array(
		"ct_quantity" => $new_quantity	
	);
		$update = $this->website_model->update_cart_item($cart_id, $update_data);
		if($update){
			$response['status'] = 1;
			$response['ct_quantity'] = $new_quantity;
			$response['ct_id'] = $cart_id;
		} else{
			$response['status'] = 2;
		}
		header('Content-Type: application/json');
		echo json_encode($response);
}
	}

	public function delete_cart_item(){
		$cart_id = $this->input->post('ct_id');
        $item = $this->website_model->get_cart_item_by_id($cart_id);

		if($item){
			$delete = $this->website_model->delete_cart_item($cart_id);
			if($delete){

				$response['status'] = 1;
				
			}
			else {
				$response['status'] = 2;

			}
			header('Content-Type: application/json');
			echo json_encode($response);
		}
	}

	public function view_cart_page(){
		$userid = $this->session->userdata("web_user_ref_id");
		$data['cartlist'] = $this->website_model->get_cart_list_by_id($userid);
		$data['coupon'] = $this->website_model->get_coupon_list();
		$data['apply'] = $this->website_model->applied_coupon_list();
		$this->load->view("view_cart_page",$data);
	}

	public function get_product_detail(){
		ob_start();
		$userid = $this->session->userdata("web_user_ref_id");
		$cart_id = $this->input->post('id');
        $item_details = $this->website_model->get_product_details($cart_id);
		$cart = $this->website_model->get_cart_item_by_id($cart_id);


		if ($item_details != '') {
			$response['status'] = 1; 
			$response['details'] = $item_details; 
			$response['cart'] = $cart; 
			$data = array(
              'p_v_ref_id' => 'pv_' .mt_rand(0000,1111),
			  'p_v_userid' => $userid,
			  'p_id' => $cart_id,
			  'p_name' => $item_details['p_name']
			);
			$insert = $this->website_model->insert_product_viewed_user_data($data);

		} else {
			$response['status'] = 2;
		}
		ob_end_clean();
		header('Content-Type: application/json');
		echo json_encode($response);
	}

	public function add_to_cart() {
		ob_start();
		$userid = $this->session->userdata("web_user_ref_id");
		$cart_id = $this->input->post('cartId');
		$our_product = $this->website_model->get_product_details($cart_id);
		$cart = $this->website_model->get_cart_item_by_id($cart_id);
	
		if ($cart === '' || $cart === NULL) {

			$data = array(
				"ct_id" => $our_product['p_id'],   
				"ct_name" => $our_product['p_name'],   
				"ct_image" => $our_product['p_image'],   
				"ct_price" => $our_product['p_price'],   
				"ct_quantity" => 1 
			);
	
			$insert = $this->website_model->insert_cart_items($data);
		
			if ($insert) {
				$cart = $this->website_model->get_cart_item_by_id($cart_id);
				$response['status'] = 1;
				$response['cart'] = $cart; 
				$response['details'] = $our_product; 
				$cart_quantity = $cart['ct_quantity'];
				$new_quantity = $cart_quantity + 1;
				$response['quantity'] = $new_quantity;
			} else {
				$response['status'] = 0;
				
			}
		} else {
			$response['status'] = 2;
			$cart_quantity = $cart['ct_quantity'];
			$new_quantity = $cart_quantity + 1;
				$update_data = array(
					"ct_quantity" => $new_quantity	
				); 
			$update = $this->website_model->update_cart_item($cart_id, $update_data);
			if($update){
		$carts = $this->website_model->get_cart_item_by_id($cart_id);
				$response['cart'] = $carts; 
				$response['quantity'] = $new_quantity;
				$response['details'] = $our_product; 
			}
		

		}
	
		ob_end_clean();
		header('Content-Type: application/json');
		echo json_encode($response);
	}



	public function reduce_count_in_view(){ 
		$cart_id = $this->input->post('ct_id');
		$our_product = $this->website_model->get_product_details($cart_id);
		$item = $this->website_model->get_cart_item_by_id($cart_id);
        if($item){
			$new_quantity = $item['ct_quantity'] - 1;
			$update_data = array(
				"ct_quantity" => $new_quantity	
			);
				$update = $this->website_model->update_cart_item($cart_id, $update_data);
				if($update){
					$response['status'] = 1;
		            $item = $this->website_model->get_cart_item_by_id($cart_id);
					$response['ct_quantity'] = $new_quantity;
					$response['ct_id'] = $cart_id;
					$response['item'] = $item; 
					$response['details'] = $our_product; 
				
				} else{
					$response['status'] = 2;
				}
				header('Content-Type: application/json');
                echo json_encode($response);
			
		}
	}

	public function get_whislist_detail(){
		$userid = $this->session->userdata('web_user_ref_id');
		if($userid != ''){
		ob_start();
		$cart_id = $this->input->post('id');
		$our_product = $this->website_model->get_product_details($cart_id);
		$whislist_items = $this->website_model->get_whistlist_items($cart_id,$userid);

		$data = array(
			'web_user_id' => $userid,
			"wl_id" => $our_product['p_id'],   
			"wl_name" => $our_product['p_name'],   
			"wl_image" => $our_product['p_image'],   
			"wl_price" => $our_product['p_price'] 
		);
		if($whislist_items == ''){
			$insert = $this->website_model->insert_product_into_whislist($data);
			if($insert){
				$response['status'] = 1;
				$response['product'] = $our_product;
			}
			else{
				$response['status'] = 2;
			}
		}
		else {
			$response['status'] = 3;

		}

	} else{
		$response['status'] = 4;
	}
	ob_end_clean();
	header('Content-Type:application/json');
	echo json_encode($response);
}

	public function whislist_list(){
		$userid = $this->session->userdata('web_user_ref_id');
		$search = $this->input->get('search');
		if($search){
			$data['whislist'] = $this->website_model->get_search_whislist($search);
		}
		else{
		$data['whislist'] = $this->website_model->get_all_whislist($userid);
		}
    $this->load->view("view_whislist_list",$data);
	}

	public function delete_whislist(){
		$wl_id = $this->input->post('wl_id');
		$delete = $this->website_model->delete_whislist_by_id($wl_id);
		if($delete){
			echo 1;
		} else{
			echo 2;
		}
	}

	public function get_whislist_datas(){
		$userid = $this->session->userdata('web_user_ref_id');
		$response['whislist'] = $this->website_model->get_all_whislist($userid);
		header('Content-Type:application/json');
		echo json_encode($response);
	}

    public function search_whislist() {
		ob_start();
		$userid = $this->session->userdata('web_user_ref_id');
        $search = $this->input->get('search');
		$response['whislist'] = $this->website_model->get_search_whislist($search,$userid);
		$response['status'] = 1;
        ob_end_clean();
        header('Content-Type:application/json');
        echo json_encode($response);
    }
	
	public function add_cart_and_delete_whis(){
		$userid = $this->session->userdata('web_user_ref_id');
		$cart_id = $this->input->post('id');
		$our_product = $this->website_model->get_product_details($cart_id);
		$data = array(
			'web_user_id' => $userid,
           'ct_id' => $our_product['p_id'],
           'ct_name' => $our_product['p_name'],
           'ct_image' => $our_product['p_image'],
           'ct_price' => $our_product['p_price'],
           'ct_quantity' => 1
		);
		$item = $this->website_model->get_cart_item_by_id($cart_id);
		if($item == ''){
			$insert = $this->website_model->insert_cart_items($data);
			if($insert){
				// $remove = $this->website_model->remove_in_whislist($cart_id);
				$response['status'] = 1;
				$response['our_product'] = $our_product;

			}
		}
		else {
			$response['status'] = 2;
			$response['our_product'] = $our_product;

		}
		echo json_encode($response);
	
    
	}
	

	public function search_cartlist(){
		ob_start();
		$userid = $this->session->userdata('web_user_ref_id');
        $search = $this->input->get('search');
		$response['cartlist'] = $this->website_model->get_search_cartlist($search,$userid);
		$response['status'] = 1;
        ob_end_clean();
        header('Content-Type:application/json');
        echo json_encode($response);
	}

	public function login_website(){
		$userid = $this->session->userdata('web_user_ref_id');
		if($userid == ''){
			// $this->load->view('login_page');
			echo 1;
		} else{
			echo 2;
			// redirect($_SERVER['HTTP_REFERER']);
			// '<script>alert("please logout")</script>';

		}
	
	}

	public function login_page() {
		$this->load->view('login_page');
	}

	public function login_into_website() {
		$emailOrNumber = $this->input->post('emailOrNumber');
		$password = $this->input->post('password');

		$this->load->library('form_validation');

		$this->form_validation->set_rules('emailOrNumber', 'Email or Number', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
	

		if ($this->form_validation->run() == FALSE) {
			if (form_error('emailOrNumber')) {
				echo 1; 
			} else if (form_error('password')) {
				echo 2; 
			} else {
				echo 3;
			}
			return; 
		}
	
		$user = null;
		if (filter_var($emailOrNumber, FILTER_VALIDATE_EMAIL)) {
			$user = $this->website_model->get_user_by_email($emailOrNumber);
		} else if (preg_match('/^\d+$/', $emailOrNumber)) {
			$user = $this->website_model->get_user_by_phone($emailOrNumber);
		}
        
	
		if ($user) {
			if (password_verify($password, $user['web_user_password'])) { 
				$this->session->set_userdata('web_user_mail', $user['web_user_mail']);
				$this->session->set_userdata('web_user_name', $user['web_user_name']);
				$this->session->set_userdata('web_user_ref_id', $user['web_user_ref_id']);
				$this->session->set_userdata('web_user_number', $user['web_user_number']);
				echo 5;
			} else {
				echo 6; 
			}
		} else {
			echo 7; 
		}
	}


	public function create_account() {

		$username = $this->input->post('username');
		$emailOrNumber = $this->input->post('emailOrNumber');
		$password = $this->input->post('password');


		if($username !== '' && $emailOrNumber !== '' && $password !== '') {
			$this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[20]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
			if ($this->form_validation->run() == FALSE) {
				if (form_error('username')) {
					echo 1; 
				} else if (form_error('emailOrNumber')) {
					echo 2; 
				} else if (form_error('password')) {
					echo 3; 
				} else {
					echo 4;
				}
			} else {
                 
				// if(!(is_nan($emailOrNumber))) {
					
				// }
	
				$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
	
				$data = [
					'web_user_ref_id' => 'web_' . mt_rand(0000,1111),
					'web_user_name' => $username,
					'web_user_mail' => $emailOrNumber,
					'web_user_number' => $emailOrNumber,
					'web_user_password' => $hashedPassword
				];
			
			
				$inserted = $this->website_model->create_user_account_for_website($data);
			
				if ($inserted) {
				      redirect('website');
				} else {
					echo 5;
				}
			}
		
	} else {
		echo 6;
	}
}
	

	
	public function create_account_page(){
		$this->load->view('signup_page');
	}


	public function logout(){
		$this->session->sess_destroy();
		redirect('website');
	}
	

	public function send_email_to_subscribe(){
		$this->load->library('form_validation');
		$mailid = $this->input->post('mailid');
		$get_mail_details = $this->website_model->get_same_mailid($mailid);
        $old_mail = $get_mail_details['sub_email'];

		if($mailid != ''){
			$this->form_validation->set_rules('mailid', 'Mailid', 'required|valid_email');
			if ($this->form_validation->run() == FALSE) {
				if (form_error('mailid')) {
					echo 1; 
				}
			} else { 
               $data = array(
			    'sub_ref_id	' => 'Sub_'. mt_rand(00000,11111),
                'sub_email' => $mailid
			   );
			   
			   if ($mailid != $old_mail) {
			   $insert_mail = $this->website_model->insert_subscribed_mailid($data);
                 if($insert_mail) {
					echo 2;
				 } else {
					echo 3;
				 }
				} else {
					echo 4;
				}
			}
		} else {
			echo 5;
		}
		
	}

	public function apply_coupon_datas() {
		$userid = $this->session->userdata('web_user_ref_id');
		$cp_id = $this->input->post('id');
		$old_datas = $this->website_model->applied_coupon_list_id($userid);
	
		if ($userid != '' && $cp_id != '') {
			$coupon = $this->website_model->get_coupon_datas($cp_id);
			$coupon_list = $this->website_model->get_coupon_list();
	
			if ($old_datas == '') { 
				$data = array (
					'applied_ref_id' => 'APP_' . mt_rand(0000, 1111),
					'applied_user_id' => $userid,
					'applied_coupon_id' => $cp_id,
					'applied_coupon_name' => $coupon['cp_name'],
					'applied_coupon_price' => $coupon['cp_price'],
					'applied_coupon_details' => $coupon['cp_details']
				);
	
				$applied = $this->website_model->coupon_applied_details($data);
				if ($applied) {
					$data['cartlist'] = $this->website_model->get_cart_list_by_id($userid);
					$subtotal = 0;
					$item_total = 0;
					foreach ($data['cartlist'] as $cart) {
						$subtotal += $cart['ct_quantity'] * $cart['ct_price']; 
						$item_total = $cart['ct_quantity'] * $cart['ct_price'];
					}
			
					$old = $this->website_model->coupon_applied_list($cp_id, $userid);
			        $old_price = $old['applied_coupon_price'];
					$response = [
						'cartlist' => $data['cartlist'],
						'subtotal' => $subtotal,
						'item_total' => $item_total,
						'count' => count($data['cartlist']),
						'dis_price' => $old_price,
						'old' => $old,
					];
					$response['apply'] = $this->website_model->applied_coupon_list();
					$response['status'] = 1;
					$response['coupon'] = $coupon;
					$response['coupon_list'] = $coupon_list;
				} else {
					$response['status'] = 2; 
				}
			} else {
				$response['status'] = 3; 
			}
		} else {
			$response['status'] = 0; 
		}


		header('Content-Type:application/json');
		echo json_encode($response);
	}



	public function remove_coupon_by_id() {
		$userid = $this->session->userdata('web_user_ref_id');
		$ref_id = $this->input->post('ref_id');
		$data['cartlist'] = $this->website_model->get_cart_list_by_id($userid);
		$subtotal = 0;
		$item_total = 0;
		foreach ($data['cartlist'] as $cart) {
			$subtotal += $cart['ct_quantity'] * $cart['ct_price']; 
			$item_total = $cart['ct_quantity'] * $cart['ct_price'];
		}
               
	    $delete = $this->website_model->delete_coupon_by_id($ref_id);
		if($delete){
			echo 1;
		} else {
			echo 2;
		}
	}



	public function get_applied_list() {
		ob_start();
		$userid = $this->session->userdata('web_user_ref_id');
		$response['applied'] = $this->website_model->applied_coupon_list_id($userid);
		ob_end_clean();
		header('Content-Type:application/json');
		echo json_encode($response);
	}



	public function get_coupon_list_by_name(){
      ob_start();
	  $userid = $this->session->userdata('web_user_ref_id');
	  $cop = $this->input->get('cop');
	  if($cop != ''){
	  $data['cartlist'] = $this->website_model->get_cart_list_by_id($userid);

					$subtotal = 0;
					$item_total = 0;
					foreach ($data['cartlist'] as $cart) {
						$subtotal += $cart['ct_quantity'] * $cart['ct_price']; 
						$item_total = $cart['ct_quantity'] * $cart['ct_price'];
					}
					$response = [
						'cartlist' => $data['cartlist'],
						'subtotal' => $subtotal,
						'item_total' => $item_total,
						'count' => count($data['cartlist']),
					];
					$response['status'] = 1;
	  $response['applied'] = $this->website_model->applied_coupon_list_id($userid);
	  $response['cop'] = $this->website_model->get_coupon_by_name($cop);
				} else if($cop == ''){
					$response['status'] = 2;
				} else{
					$response['status'] = 3;
				}
	  ob_end_clean();
	  header('Content-Type:application/json');
	  echo json_encode($response);

	}
 	   


}