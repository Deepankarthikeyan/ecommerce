<?php defined('BASEPATH') OR exit('No direct script access allowed');

class website_model extends CI_Model {
    public function __construct() {
        parent::__construct();

    }

    public function get_food_and_drink_products(){
        $this->db->select("*");
        $this->db->from('our_product');
        $this->db->where('p_category',1);   
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_vegetable_products(){
        $this->db->select("*");
        $this->db->from('our_product');
        $this->db->where('p_category',2);   
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_fruit_products(){
        $this->db->select("*");
        $this->db->from('our_product');
        $this->db->where('p_category',3);   
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_bread_and_cake_products(){
        $this->db->select("*");
        $this->db->from('our_product');
        $this->db->where('p_category',4);   
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_fish_and_meat_products(){
        $this->db->select("*");
        $this->db->from('our_product');
        $this->db->where('p_category',5);   
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_feature_products(){
        $this->db->select("*");
        $this->db->from("feature_product");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_product_details($cart_id){
        $this->db->select("*");
        $this->db->from("our_product");
        $this->db->where("p_id",$cart_id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insert_cart_items($data){
       return $this->db->insert('cart_items',$data);
    }

    public function get_cart_for_modal($items_id){
        $this->db->select("*");
        $this->db->from("cart_items");
        $this->db->where("ct_id",$items_id);
        $this->db->group_by("ct_id");
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_cart_list_by_id($userid){
        $this->db->select("*");
        $this->db->from("cart_items");
        $this->db->where("web_user_id",$userid);
        $this->db->group_by("ct_id");
        $query = $this->db->get();
        return $query->result_array();
    }



    public function get_each_product_count($items_id){
        $this->db->select("*");
        $this->db->from("whistlist_items");
        $this->db->where("wl_id",$items_id);
        $query = $this->db->get();
        return $query->result_array();
    }

      public function get_cart_item_by_id($cart_id){
        $this->db->select("*");
        $this->db->from("cart_items");
        $this->db->where("ct_id",$cart_id);
        $query = $this->db->get();
        return $query->row_array();
      }

      public function update_cart_item($cart_id, $update_data){
        $this->db->where('ct_id',$cart_id);
       return $this->db->update('cart_items',$update_data);
      }

      public function delete_cart_item($cart_id){
        $this->db->where('ct_id',$cart_id);
        return $this->db->delete('cart_items');
      }

      public function insert_product_into_whislist($data){
        return $this->db->insert('whistlist_items',$data);
      }
public function get_whistlist_items($cart_id,$userid){
   $this->db->select("*");
   $this->db->from('whistlist_items');
   $this->db->where('wl_id',$cart_id);
   $this->db->where('web_user_id',$userid);
   $query = $this->db->get();
   return $query->row_array();

}

public function get_all_whislist($userid){
    $this->db->select("*");
    $this->db->from('whistlist_items');
    $this->db->where('web_user_id',$userid);
    $query = $this->db->get();
    return $query->result_array();
}
public function delete_whislist_by_id($wl_id){
    $this->db->where('wl_id',$wl_id);
    return $this->db->delete('whistlist_items');
}
public function get_search_whislist($search,$userid){
    $this->db->select("*");
    $this->db->from('whistlist_items');
    $this->db->where('web_user_id',$userid);
    $this->db->group_start();
    $this->db->like('wl_name', $search); 
    $this->db->or_like('wl_price', $search); 
    $this->db->group_end();
    $query = $this->db->get(); 
    return $query->result_array(); 
}

public function remove_in_whislist($cart_id){
    $this->db->where('wl_id',$cart_id);
    return $this->db->delete('whistlist_items');
}

public function get_whislist_list(){
    $this->db->select("*");
    $this->db->from('whistlist_items');
    $query = $this->db->get();
    return $query->result_array();
}

public function get_search_cartlist($search,$userid){
    $this->db->select("*");
    $this->db->from('cart_items');
    $this->db->where('web_user_id', $userid); 
    $this->db->group_start();
    $this->db->like('ct_name', $search); 
    $this->db->or_like('ct_price', $search); 
    $this->db->group_end();
    $query = $this->db->get(); 
    return $query->result_array();
}

public function get_coupon_list(){
    $this->db->select("*");
    // $this->db->join('coupon_applied_list','coupon_applied_list.applied_coupon_id = coupon_list.cp_id');
    $this->db->from('coupon_list');
    $query = $this->db->get();
    return $query->result_array();
}

public function create_user_account_for_website($data){
   return $this->db->insert('website_users',$data);
}

public function get_user_by_email($emailOrNumber){
    $this->db->select('*');
    $this->db->from('website_users');
    $this->db->where('web_user_mail',$emailOrNumber);
    $query = $this->db->get();
    return $query->row_array();
}

public function get_user_by_phone($emailOrNumber){
    $this->db->select('*');
    $this->db->from('website_users');
    $this->db->where('web_user_number',$emailOrNumber);
    $query = $this->db->get();
    return $query->row_array();
}

public function insert_subscribed_mailid($data){
    return $this->db->insert('subscription_list',$data);
}

public function get_same_mailid($mailid){
    $this->db->select('*');
    $this->db->from('subscription_list');
    $this->db->where('sub_email',$mailid);
    $query = $this->db->get();
    return $query->row_array();
}

public function coupon_applied_list($cp_id,$userid){
    $this->db->select('*');
    // $this->db->join('coupon_applied_list','coupon_applied_list.applied_coupon_id = coupon_list.cp_id');
    $this->db->from('coupon_applied_list');
    $this->db->where('applied_coupon_id',$cp_id);
    $this->db->where('applied_user_id',$userid);
    $query = $this->db->get();
    return $query->row_array();
}

public function coupon_applied_details($data){
    return $this->db->insert('coupon_applied_list',$data);
}

public function get_coupon_datas($cp_id){
    $this->db->select('*');
    $this->db->from('coupon_list');
    $this->db->where('cp_id',$cp_id);
    $query = $this->db->get();
    return $query->row_array();
}

public function applied_coupon_list() {
    $this->db->select('*'); 
    $this->db->from('coupon_list'); 
    $this->db->join('coupon_applied_list', 'coupon_applied_list.applied_coupon_id = coupon_list.cp_id', 'left'); 

    $query = $this->db->get();
    $results = $query->result_array();

    foreach ($results as &$item) {
        if (empty($item['applied_ref_id'])) {
            unset($item['applied_ref_id']);
        }
        if (empty($item['applied_user_id'])) {
            unset($item['applied_user_id']);
        }
        if (empty($item['applied_coupon_id'])) {
            unset($item['applied_coupon_id']);
        }
        if (empty($item['applied_coupon_name'])) {
            unset($item['applied_coupon_name']);
        }
        if (empty($item['applied_coupon_price'])) {
            unset($item['applied_coupon_price']);
        }
        if (empty($item['applied_coupon_details'])) {
            unset($item['applied_coupon_details']);
        }
    }

    return $results; 
}

public function delete_coupon_by_id($ref_id){
    $this->db->where('applied_ref_id',$ref_id);
    return $this->db->delete('coupon_applied_list');
}

public function applied_coupon_list_id($userid){
    $this->db->select('*');
    $this->db->from('coupon_applied_list');
    $this->db->where('applied_user_id',$userid);
    $query = $this->db->get();
    return $query->row_array();
}


}