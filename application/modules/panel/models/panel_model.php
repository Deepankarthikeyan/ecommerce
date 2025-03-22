<?php defined('BASEPATH') OR exit('No direct script access allowed');

class panel_model extends CI_Model {
    public function __construct() {
        parent::__construct();

    }

    public function insert_users_data($data) {
      return $this->db->insert('user_details',$data);
     
    }

    public function get_user_by_email($email){
      $this->db->select('*');
      $this->db->from('user_details');
      $this->db->where('user_email',$email);
      $query = $this->db->get();
      return $query->row_array();
      }
      
      public function update_password($data,$email){

        $this->db->where('user_email',$email);
        return $this->db->update('user_details',$data);

      }

      public function insert_our_product_details($data){
       return $this->db->insert('our_product',$data);
      }

      public function get_our_products(){
        $this->db->select('*');
        $this->db->from('our_product');
        $query = $this->db->get();
        return $query->result_array();
      }

      public function get_food_and_drinks_products(){
        $this->db->select('*');
        $this->db->from('our_product');
        $this->db->where('p_category',1);
        $query = $this->db->get();
        return $query->result_array();
      }

  public function get_product_details($product_id){
    $this->db->select('*');
    $this->db->from('our_product');
    $this->db->where('p_id',$product_id);
    $query = $this->db->get();
    return $query->row_array();
  }

  public function edit_our_product_details($data,$product_id){
    $this->db->where('p_id',$product_id);
    return $this->db->update('our_product',$data);
  }

  public function delete_our_product($product_id){
    $this->db->where('p_id',$product_id);
    return $this->db->delete('our_product');
  }

  public function search($query) {
    $this->db->select("*");
    $this->db->from('our_product');
    $this->db->group_start();
    $this->db->like('p_name', $query); 
    $this->db->or_like('p_price', $query); 
    $this->db->group_end();
    $query = $this->db->get(); 
    return $query->result_array(); 
}

public function options($category){
  $this->db->select("*");
  $this->db->from('our_product');
  $this->db->group_start();
  $this->db->like('p_category', $category); 
  $this->db->group_end();
  $query = $this->db->get(); 
  return $query->result_array(); 
}

public function insert_feature_product_details($data){
  return $this->db->insert("feature_product",$data);
}

public function get_feature_product(){
  $this->db->select("*");
  $this->db->from("feature_product");
  $query = $this->db->get();
  return $query->result_array();
}

public function delete_feature_product($product_id){
  $this->db->where('fp_id',$product_id);
  return $this->db->delete('feature_product');
}

public function get_feature_product_details($product_id){
  $this->db->select("*");
  $this->db->from('feature_product');
  $this->db->where('fp_id',$product_id);
  $query = $this->db->get();
  return $query->row_array();
}

public function edit_feature_product_details($data,$product_id){
  $this->db->where('fp_id',$product_id);
  return $this->db->update('feature_product',$data);

}

public function insert_testimonials_data($data){
 return $this->db->insert('testimonial_list',$data);
}

public function get_testimonials_list(){
  $this->db->select('*');
  $this->db->from('testimonial_list');
  $query = $this->db->get();
  return $query->result_array();

}

public function delete_testimonial_data($test_id){
  $this->db->where('t_id',$test_id);
  return $this->db->delete('testimonial_list');
}

public function get_testimonials_details_by_id($test_id){
  $this->db->select('*');
  $this->db->from('testimonial_list');
  $this->db->where('t_id',$test_id);
  $query = $this->db->get();
  return $query->row_array();
}

public function update_testimonials_data($test_id,$data){
  $this->db->where('t_id',$test_id);
  return $this->db->update('testimonial_list',$data);
}

public function insert_coupon_data($data){
  return $this->db->insert(' coupon_list',$data);

}

public function get_coupon_data(){
  $this->db->select('*');
  $this->db->from('coupon_list');
  $query = $this->db->get();
  return $query->result_array();
}

public function get_coupon_data_by_id($coupon_id){
  $this->db->select('*');
  $this->db->from('coupon_list');
  $this->db->where('cp_id',$coupon_id);
  $query = $this->db->get();
  return $query->row_array();
}

public function update_coupon_data($data,$cp_id){
  $this->db->where('cp_id ',$cp_id);
  return $this->db->update('coupon_list',$data);
}

public function delete_coupon_data($coupon_id){
  $this->db->where('cp_id',$coupon_id);
  return $this->db->delete('coupon_list');
}

public function get_searched_coupon_data($items){
  $this->db->select("*");
  $this->db->from('coupon_list');
  $this->db->group_start();
  $this->db->like('cp_name', $items); 
  $this->db->or_like('cp_price', $items); 
  $this->db->or_like('cp_details', $items); 
  $this->db->group_end();
  $query = $this->db->get(); 
  return $query->result_array(); 
}

public function get_product_viewed_list(){
  $this->db->select('*');
  $this->db->from('product_viewed_list');
 $query =  $this->db->get();
 return $query->result_array();
}

public function get_product_add_cart_list(){
  $this->db->select('*');
  $this->db->from('product_add_cart_list');
 $query =  $this->db->get();
 return $query->result_array();
}

public function get_notification_list(){
  $this->db->select('*');
  $this->db->from('notification');
 $query =  $this->db->get();
 return $query->result_array();
}

public function update_activity($data){
  $this->db->where('not_activity',0);
  return $this->db->update('notification',$data);
}

public function get_not_act(){
  $this->db->select('*');
  $this->db->from('notification');
  $this->db->where('not_activity',0);
 $query =  $this->db->get();
 return $query->result_array();
}

public function insert_notification($data){
  return $this->db->insert('notification',$data);
}
}
