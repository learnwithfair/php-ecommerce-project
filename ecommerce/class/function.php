<?php
class blogProject {
    private $conn;
    public function __CONSTRUCT() {
        $bdhost     = "localhost";
        $dbuser     = "root";
        $dbpassword = "";
        $this->conn1 = mysqli_connect( $bdhost, $dbuser, $dbpassword, "ecommerce_project" );
        if ( !( $this->conn1 ) ) {
            die( "Database connection Error!!" );
        }
    }
    public function display_all_product_data( $pegi_start, $pegi_end ) {
        $post_display_query = "SELECT * FROM add_product WHERE product_status=1 ORDER BY product_id ASC LIMIT $pegi_start,$pegi_end";
        $data               = mysqli_query( $this->conn1, $post_display_query );
        return $data;
    }
 
    public function display_all_products() {
        $display_product_query = "SELECT * FROM add_product WHERE product_status=1 ORDER BY product_id DESC";
        $product_data              = mysqli_query( $this->conn1, $display_product_query );
        if($product_data){
            return $product_data;
        }
    }
    
    public function display_new_products($pegi_start,$pegi_end) {
        $display_product_query = "SELECT * FROM add_product WHERE product_status=1 ORDER BY product_id DESC LIMIT $pegi_start,$pegi_end";
        $product_data              = mysqli_query( $this->conn1, $display_product_query );
        if($product_data){
            return $product_data;
        }

        
    }
    public function display_feature_items_by_id($id) {
        $display_product_query = "SELECT * FROM add_product WHERE product_id=$id&&product_status=1";
        $product_data              = mysqli_query( $this->conn1, $display_product_query );
        $info = mysqli_fetch_assoc( $product_data );
        if($info){
            return $info;
        }

        
    }


    public function display_low_products($pegi_start,$pegi_end) {
        $display_product_query = "SELECT * FROM add_product WHERE product_status=1 ORDER BY product_price ASC LIMIT $pegi_start,$pegi_end";
        $product_data              = mysqli_query( $this->conn1, $display_product_query );
        if($product_data){
            return $product_data;
        }
    }
    public function display_high_products($pegi_start,$pegi_end) {
        $display_product_query = "SELECT * FROM add_product WHERE product_status=1 ORDER BY product_price DESC LIMIT $pegi_start,$pegi_end";
        $product_data              = mysqli_query( $this->conn1, $display_product_query );
        if($product_data){
            return $product_data;
        }
    }
    public function display_feature_items_details($id) {
        $display_feature_items_details_query = "SELECT * FROM add_product_img WHERE product_id=$id&&thumnail_status=1";
        $data              = mysqli_query( $this->conn1, $display_feature_items_details_query );
        $info1 = mysqli_fetch_assoc( $data );
        
        if($info1){
            return $info1;
        }
    }
    public function display_feature_img_by_id($id) {
        $display_feature_items_details_query = "SELECT * FROM add_product_img WHERE product_id=$id&&thumnail_status=0";
        $data              = mysqli_query( $this->conn1, $display_feature_items_details_query );
       
        
        if($data){
            return $data;
        }
    }
   
    public function display_menu_item() {
        $display_menu_item_query = "SELECT * FROM menu";
        $return_header_menu_mgs  = mysqli_query( $this->conn1, $display_menu_item_query );
        if ( isset( $return_header_menu_mgs ) ) {
            return $return_header_menu_mgs;
        }

    }

    public function submit_message( $data ) {        
        $message_name            = $data['message_name'];
        $message_email           = $data['message_email'];
        $message_subject         = $data['message_subject'];
        $message_content         = $data['message_content'];
        $add_message_query       = "INSERT INTO message_info(message_name, message_email, message_subject, message_content, message_date) VALUES('$message_name','$message_email','$message_subject','$message_content',now())";
        $result_add_message      = mysqli_query( $this->conn1, $add_message_query );
        if ( $result_add_message ) {
            return "Message send successfully.";
        }
        else{
            return "Message is not send successfully.";
        }

    }
  
}

