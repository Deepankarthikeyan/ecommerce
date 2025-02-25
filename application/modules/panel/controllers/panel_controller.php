<?php defined('BASEPATH') OR exit('No direct script access allowed');

class panel_controller extends MY_Controller {

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
		$this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('panel_model');
		// $this->load->library('upload');
    }

    /**
     * [index description]
     *
     * @method index
     *
     * @return 
     */
	public function login_page()
	{
		$this->load->view('login.php');
	}
	
	public function create_account_page() {
		$this->load->view('create_account.php');

	}

	public function create_account() {
		$this->load->library('form_validation');
	
		$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$hashed_password = password_hash($password, PASSWORD_DEFAULT);
	  if($username != "" && $password != "" && $email != ""){
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
	
		if ($this->form_validation->run() == FALSE) {
			if (form_error('username')) {
				echo 1; 
			} else if (form_error('email')) {
				echo 2; 
			} else if (form_error('password')) {
				echo 3; 
			} else {
				echo 4;
			}
		} else {
		 $data = array(
			"user_ref_id" => 'U' . mt_rand(1000, 9999),
            "user_name"=> $username,
			 "user_email" => $email,
			 "user_password" => $hashed_password
		 );
	
		 $inserted = $this->panel_model->insert_users_data($data);
		 if($inserted) { 
			echo 6;
		 }
		 else{
			echo 7;
		 }
		
		}
	} else{
		echo 5;
	}

	}

	public function login_account() {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

    if ($this->form_validation->run() == FALSE) {
        if (form_error('email')) {
            echo 1; 
        } else if (form_error('password')) {
            echo 2; 
        } else {
            echo 3; 
        }
        return; 
    }


    $user = $this->panel_model->get_user_by_email($email); 
	$user_name = $user['user_name'];
	$user_email = $user['user_email'];

    if ($user) {
        if (password_verify($password, $user['user_password'])) { 
            $this->session->set_userdata('user_email', $user_email);
            $this->session->set_userdata('user_name', $user_name);
			// if($this->session->userdata('email')){
			// 	$sess = $this->session->userdata('email');
			// }
			echo 5;
			// $this->load->view('dashboard',$email);
        } else {
        echo 6;
        }
    } else {
        echo 7; 
    }
}

public function dasboard(){
	$this->load->view('dashboard.php');
}

public function logout(){
	$this->session->sess_destroy();
	redirect('login');
}

public function change_password_page() {

    // $data['get_user'] = $this->panel_model->get_user_by_email($email);
    $this->load->view('dashboard');
    $this->load->view('change_password_page');
	// print_r($email);
}

public function header(){
	$this->load->view('header.php');
}

public function sidebar(){
	$this->load->view('sidebar.php');
}

public function change_password(){	
$email = $this->input->post('email');
$newPassword = $this->input->post('newPassword');
$confirmPassword = $this->input->post('confirmPassword');
$hash_pass = password_hash($confirmPassword, PASSWORD_DEFAULT);

$get_user = $this->panel_model->get_user_by_email($email);

if($get_user != ''){
	$data = array(
		'user_password' => $hash_pass 
	);
	$update_psd = $this->panel_model->update_password($data , $email);
	if($update_psd){
            echo 1;
	} else{
		echo 2;
	}
}
 else {
	echo 3;
 }

}

public function our_product_page(){
	$data['get_our_products'] = $this->panel_model->get_our_products();
		$this->load->view('dashboard');
		$this->load->view('our_products_page.php', $data);
}

public function our_product(){
    $p_category = $this->input->post('p_category');
    $p_price = $this->input->post('p_price');
    $p_name = $this->input->post('p_name');
    $p_others = $this->input->post('p_others');
    $filename = ''; 

    if($p_category != '' && $p_price != '' && $p_name != '' && $p_others != '') {
	if ($_FILES['p_image']['name']) {
        $config['upload_path'] = 'assets/images'; 
        $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
        $config['max_size'] = 2048; 
        $this->load->library('upload', $config);
        $this->upload->initialize($config);    

        if ($this->upload->do_upload('p_image')) {
            $data = $this->upload->data();
            $filename = $data['file_name'];
        } else {
            echo 1; 
            return; 
        } 
	}

        $data = array(
            'p_name' => $p_name,
            'p_category' => $p_category,
            'p_price' => $p_price,
            'p_image' => $filename,
			'p_others' => $p_others
        );      

        $product_insert = $this->panel_model->insert_our_product_details($data);
        if($product_insert){
            echo 2;    
        } else {
            echo 3; 
        }
    } else {
        echo 4; 
    }
}

public function our_product_List(){

	$query = $this->input->get('query'); 
	$data['results'] = [];
	$category = $this->input->get('category');

	if ($query) {
        $data['results'] = $this->panel_model->search($query); 
		
    } else if($category) {
		
        $data['results'] = $this->panel_model->options($category); 

	} else {
  	$data['results'] = $this->panel_model->get_our_products();
    }
		$this->load->view('dashboard');
	$this->load->view('our_product_List',$data);
}

public function view_our_product_list($product_id){
	$data['product'] = $this->panel_model->get_product_details($product_id);
	$data['feature_product'] = $this->panel_model->get_feature_product_details($product_id);
	$this->load->view('dashboard');
	$this->load->view("view_our_product",$data);
}

public function edit_our_products() {
$product_id = $this->input->post('p_id');
$get_product = $this->panel_model->get_product_details($product_id);
$old_image = $get_product['p_image'];
$p_name = $this->input->post('p_name');
$p_category = $this->input->post('p_category');
$p_price = $this->input->post('p_price');
$filename = $old_image; 

if($p_name != '' && $p_category != '' && $p_price != ''){
	if ($_FILES['p_image']['name']) {
	$config['upload_path'] = 'assets/images'; 
	$config['allowed_types'] = 'jpg|jpeg|png|gif'; 
	$config['max_size'] = 2048; 
	$this->load->library('upload', $config);
	$this->upload->initialize($config);    

	if ($this->upload->do_upload('p_image')) {
		$data = $this->upload->data();
		$filename = $data['file_name'];
	} else {
		echo 1; 
		return; 
	} 
}

	$data = array(
		'p_name' => $p_name,
		'p_category' => $p_category,
		'p_price' => $p_price,
		'p_image' => $filename
	);      

	$edit_product = $this->panel_model->edit_our_product_details($data,$product_id);
	if($edit_product){
		echo 2;    
	} else {
		echo 3; 
	}
} else {
   echo 4;
}
}

public function delete_our_product($product_id){
$delete_product = $this->panel_model->delete_our_product($product_id);
if($delete_product){
	$this->session->set_flashdata('product_succ', 'Product Deleted Successfully.');
	redirect($_SERVER['HTTP_REFERER']);
} else{
	$this->session->set_flashdata('product_err', 'Product Not Deleted.');
	redirect($_SERVER['HTTP_REFERER']);

}
}

public function feature_product_page(){
	$this->load->view('dashboard');
	$this->load->view('feature_products');
}

public function feature_product(){

    $fp_price = $this->input->post('fp_price');
    $fp_name = $this->input->post('fp_name');
    $filename = ''; 

    if($fp_price != '' && $fp_name != '') {
		if ($_FILES['fp_image']['name']) {
        $config['upload_path'] = 'assets/images'; 
        $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
        $config['max_size'] = 2048; 
        $this->load->library('upload', $config);
        $this->upload->initialize($config);    

        if ($this->upload->do_upload('fp_image')) {
            $data = $this->upload->data();
            $filename = $data['file_name'];
        } else {
            echo 1; 
            return; 
        } 
	}

        $data = array(
			'fp_ref_id'=> "FP" . mt_rand(0000,1111),
            'fp_name' => $fp_name,
            'fp_price' => $fp_price,
            'fp_image' => $filename
        );      

        $product_insert = $this->panel_model->insert_feature_product_details($data);
        if($product_insert){
            echo 2;    
        } else {
            echo 3; 
        }
    } else {
        echo 4; 
    }

}

public function feature_product_list(){
	$data['results'] = $this->panel_model->get_feature_product();
	$this->load->view('dashboard');
	$this->load->view("feature_product_list.php", $data);
}

public function delete_feature_product($product_id){
	$delete_product = $this->panel_model->delete_feature_product($product_id);
if($delete_product){
	$this->session->set_flashdata('product_succ', 'Product Deleted Successfully.');
	redirect($_SERVER['HTTP_REFERER']);
} else{
	$this->session->set_flashdata('product_err', 'Product Not Deleted.');
	redirect($_SERVER['HTTP_REFERER']);

}
}

public function feature_product_details($product_id){
	$data['feature_product'] = $this->panel_model->get_feature_product_details($product_id);
	$this->load->view('dashboard');
	$this->load->view("view_feature_product",$data);
}

public function edit_feature_product() {
    $product_id = $this->input->post('fp_id');
    $fp_name = $this->input->post('fp_name'); 
    $fp_price = $this->input->post('fp_price'); 
    $feature_product = $this->panel_model->get_feature_product_details($product_id);
    $old_image = $feature_product['fp_image'];
    $filename = $old_image;

    if ($fp_name != '' && $fp_price != '') {
        if ($_FILES['fp_image']['name']) {
            $config['upload_path'] = 'assets/images'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
            $config['max_size'] = 2048; 
            $this->load->library('upload', $config);
            $this->upload->initialize($config);    

            if ($this->upload->do_upload('fp_image')) {
                $data = $this->upload->data();
                $filename = $data['file_name']; 
            } else {
                echo 1; 
                return; 
            } 
        }

        // Prepare data for update
        $data = array(
            'fp_name' => $fp_name,
            'fp_price' => $fp_price,
            'fp_image' => $filename // Use the new filename or the old one
        );      

        // Update the feature product
        $edit_product = $this->panel_model->edit_feature_product_details($data, $product_id);
        if ($edit_product) {
            echo 2; // Update successful
        } else {
            echo 3; // Update failed
        }
    } else {
        echo 4; // Validation failed
    }
}

public function Testimonial_page(){
	$this->load->view('dashboard');
	$this->load->view('testimonial_form');
}

public function insert_testimonial(){

    $t_name = $this->input->post('t_name');
    $t_others = $this->input->post('t_others');
    $filename = ''; 

    if($t_name != '' && $t_others != '') {
		if ($_FILES['t_image']['name']) {
        $config['upload_path'] = 'assets/images'; 
        $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
        $config['max_size'] = 2048; 
        $this->load->library('upload', $config);
        $this->upload->initialize($config);    

        if ($this->upload->do_upload('t_image')) {
            $data = $this->upload->data();
            $filename = $data['file_name'];
        } else {
            echo 1; 
            return; 
        } 
	}

        $data = array(
            't_name' => $t_name,
            't_image' => $filename,
			't_others' => $t_others
        );      

        $test_insert = $this->panel_model->insert_testimonials_data($data);
        if($test_insert){
            echo 2;    
        } else {
            echo 3; 
        }
    } else {
        echo 4; 
    }
}

public function Testimonial_list(){
	$data['test'] = $this->panel_model->get_testimonials_list();
	$this->load->view('dashboard');
	$this->load->view('testimonials_list',$data);
}

public function delete_testimonial($test_id){
	$delete = $this->panel_model->delete_testimonial_data($test_id);
	if($delete){
		$this->session->set_flashdata('product_succ', 'Testimonial Deleted Successfully.');
		redirect($_SERVER['HTTP_REFERER']);
	} else{
		$this->session->set_flashdata('product_err', 'Testimonial Not Deleted.');
		redirect($_SERVER['HTTP_REFERER']);
	
	}
	}

	public function view_testimonial_details($test_id){
	$data['test'] = $this->panel_model->get_testimonials_details_by_id($test_id);
	$this->load->view('dashboard');
		$this->load->view('view_testimonial_details',$data);
	}

	public function update_testimonial() {
		$test_id = $this->input->post('t_id');
		$test_details = $this->panel_model->get_testimonials_details_by_id($test_id);
		$old_image = $test_details['t_image'];
		$t_name = $this->input->post('t_name');
		$t_others = $this->input->post('t_others');
		$filename = $old_image; 
	
		if ($t_name != '' && $t_others != '') {
			if ($_FILES['t_image']['name']) {
				$config['upload_path'] = 'assets/images'; 
				$config['allowed_types'] = 'jpg|jpeg|png|gif'; 
				$config['max_size'] = 2048; 
				$this->load->library('upload', $config);
				$this->upload->initialize($config);    
	
				if ($this->upload->do_upload('t_image')) {
					$data = $this->upload->data();
					$filename = $data['file_name']; 
				} else {
					echo 1; 
					return; 
				}
			}
	
			$data = array(
				't_name' => $t_name,
				't_image' => $filename,
				't_others' => $t_others
			);      
	
			$test_insert = $this->panel_model->update_testimonials_data($test_id, $data);
			if ($test_insert) {
				echo 2; 
			} else {
				echo 3; 
			}
		} else {
			echo 4; 
		}
	}

	public function coupon_form(){
	$this->load->view('dashboard');
		$this->load->view('coupon_form.php');
	}

	public function insert_coupon(){
		$cp_name = $this->input->post('cp_name');
		$cp_details = $this->input->post('cp_details');
		$cp_price = $this->input->post('cp_price');
		$cp_min_price = $this->input->post('cp_min_price');
	
		if($cp_name != '' && $cp_details != '' && $cp_price != '') {
	
			$data = array(
				'cp_name' => $cp_name,
				'cp_details' => $cp_details,
				'cp_price' => $cp_price,
				'cp_min_price' => $cp_min_price
			);      
	
			$coupon_insert = $this->panel_model->insert_coupon_data($data);
			if($coupon_insert){
				echo 2;    
			} else {
				echo 3; 
			}
		} else {
			echo 4; 
		}
	}

	public function coupon_list(){
		$data['coupon'] = $this->panel_model->get_coupon_data();
	$this->load->view('dashboard');
		$this->load->view('coupon_list.php',$data);
	}

	public function view_coupon_details($coupon_id){
	$this->load->view('dashboard');
		$data['coupon'] = $this->panel_model->get_coupon_data_by_id($coupon_id);
		$this->load->view('view_coupon_details',$data);
	}


	public function delete_coupon($coupon_id){
		$delete = $this->panel_model->delete_coupon_data($coupon_id);
		if($delete){
			$this->session->set_flashdata('coupon_succ', 'Coupon Deleted Successfully.');
			redirect($_SERVER['HTTP_REFERER']);
		} else{
			$this->session->set_flashdata('coupon_err', 'Coupon Not Deleted.');
			redirect($_SERVER['HTTP_REFERER']);
		
		}
	}

	public function update_coupon(){
		$cp_id = $this->input->post('cp_id');
		$cp_name = $this->input->post('cp_name');
		$cp_details = $this->input->post('cp_details');
		$cp_price = $this->input->post('cp_price');
	
		if($cp_name != '' && $cp_details != '' && $cp_price != '') {
	
			$data = array(
				'cp_name' => $cp_name,
				'cp_details' => $cp_details,
				'cp_price' => $cp_price
			);      
	
			$coupon_insert = $this->panel_model->update_coupon_data($data,$cp_id);
			if($coupon_insert){
				echo 2;    
			} else {
				echo 3; 
			}
		} else {
			echo 4; 
		}
	}
}
