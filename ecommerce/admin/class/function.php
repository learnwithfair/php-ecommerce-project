<?php
class blogProject {
    private $conn1;
    public function __CONSTRUCT() {
        $bdhost     = "localhost";
        $dbuser     = "root";
        $dbpassword = "";
        $dbname     = "ecommerce_project";
        $this->conn1 = mysqli_connect( $bdhost, $dbuser, $dbpassword, $dbname );
        if ( !( $this->conn1 ) ) {
            die( "Database connection Error!!" );
        }
    }

    public function getAdminData( $data ) {
        $admin_check    = "find";
        $email          = $data['email'];
        $password       = md5( $data['password'] );
        $get_query      = "SELECT * FROM admin_info";
        $all_admin_info = mysqli_query( $this->conn1, $get_query );
        // checking query admin table
        while ( $match_data = mysqli_fetch_assoc( $all_admin_info ) ) {
            if ( $email == $match_data['Email'] && $password == $match_data['Password'] ) {
                $admin_check = "finded";
                session_start();
                $_SESSION['ID']   = $match_data['ID'];
                $_SESSION['Name'] = $match_data['Name'];

                header( "location:template.php" );
                break;
            }
        }
        if ( $admin_check == "find" ) {
            echo "<script>alert('Email or Password is incorrect!!')</script>";
        }
    }

    public function logout_info() {
        unset( $_SESSION['ID'] );
        unset( $_SESSION['Name'] );
        header( "location: index.php" );
    }

    

    public function add_product( $data ) {
        $product_id         = $data['product_id'];
        $product_name       = $data['product_name'];
        $product_des        = $data['product_des'];
        $product_stock      = $data['product_stock'];
        $product_price      = $data['product_price'];
        $product_price_name = $data['product_price_name'];

        $product_cat    = $data['product_cat'];
        $product_status = $data['product_status'];

        $product_display_query = "SELECT * FROM add_product WHERE product_id=$product_id";
        $datas                 = mysqli_query( $this->conn1, $product_display_query );
        if ( mysqli_fetch_assoc( $datas ) ) {
            return "This Product ID Already used. Please check Product ID!!";
        } else {
            $add_product_query      = "INSERT INTO add_product(product_id,product_name,product_des,product_stock,product_price,product_price_name,product_cat,product_status) VALUES($product_id,'$product_name','$product_des',$product_stock,$product_price,'$product_price_name','$product_cat', '$product_status')";
            $return_add_product_mgs = mysqli_query( $this->conn1, $add_product_query );
            if ( $return_add_product_mgs ) {
                // move_uploaded_file( $post_img_temname, '../uploads/' . $post_img_name );
                return "Product stored successfully.";
            }
        }

    }

    public function add_product_img( $data ) {
        $product_id           = $data['product_id'];
      
        if(isset($data['thumnail_status'])){
                $thumnail_status = $data['thumnail_status'];

                $display_feature_items_query = "SELECT * FROM add_product_img WHERE product_id=$product_id&&thumnail_status=$thumnail_status";
                $data              = mysqli_query( $this->conn1, $display_feature_items_query );
                if($data){
                    while($u_thumnail = mysqli_fetch_assoc($data)){
                        $img_id = $u_thumnail['img_id'];
                        $u_thumnail_query   = "UPDATE add_product_img SET thumnail_status=0 WHERE img_id=$img_id";
                        mysqli_query( $this->conn1, $u_thumnail_query );
                    }
                }

        }else{
            $thumnail_status      = 0;
        }
       

        $product_img_name     = $_FILES['product_img']['name'];
        $product_img_tmp_name = $_FILES['product_img']['tmp_name'];
        $product_img_query    = "INSERT add_product_img(product_id,product_img,thumnail_status) VALUES($product_id,'$product_img_name',$thumnail_status)";
        $result               = mysqli_query( $this->conn1, $product_img_query );
        if ( $result ) {
            move_uploaded_file( $product_img_tmp_name, "../uploads/" . $product_img_name );
            return "Image Uploaded Successfully.";
        } else {
            return "Image cann't Upload Successfully.";

        }
    }
 

    public function update_product( $data ) {

        $u_id                 = $data['u_id'];
        $u_product_id         = $data['u_product_id'];
        $u_product_name       = $data['u_product_name'];
        $u_product_des        = $data['u_product_des'];
        $u_product_stock      = $data['u_product_stock'];
        $u_product_price      = $data['u_product_price'];
        $u_product_price_name = $data['u_product_price_name'];

        $u_product_cat    = $data['u_product_cat'];
        $u_product_status = $data['u_product_status'];

        $u_product_query   = "UPDATE add_product SET product_id=$u_product_id,product_name='$u_product_name',product_des='$u_product_des',product_stock=$u_product_stock,product_price= $u_product_price, product_price_name='$u_product_price_name',product_cat='$u_product_cat',product_status='$u_product_status' WHERE ID=$u_id";
        $return_update_mgs = mysqli_query( $this->conn1, $u_product_query );
        if ( $return_update_mgs ) {
            return "Data Updated successfully.";
        } else {
            return "Data cann't Updated successfully.";
        }

    }

    public function display_product_datas() {
        $product_display_query = "SELECT * FROM add_product ORDER BY product_id ASC";
        $data                  = mysqli_query( $this->conn1, $product_display_query );
        return $data;

    }

    public function display_prduct_datas_by_id( $id ) {
        $product_display_by_id_query = "SELECT * FROM add_product WHERE product_id=$id";
        $data                        = mysqli_query( $this->conn1, $product_display_by_id_query );
        $product_data                = mysqli_fetch_assoc( $data );
        if ( isset( $product_data ) ) {
            return $product_data;
        }

    }

    public function display_product_img() {
        $display_product_img_query = "SELECT * FROM add_product_img ORDER BY product_id ASC";
        $product_img_data          = mysqli_query( $this->conn1, $display_product_img_query );

        if ( isset( $product_img_data ) ) {
            return $product_img_data;
        }

    }

    public function display_product_img_by_id( $id ) {
        $display_product_img_query = "SELECT * FROM add_product_img WHERE product_id=$id";
        $product_img_data          = mysqli_query( $this->conn1, $display_product_img_query );

        if ( isset( $product_img_data ) ) {
            return $product_img_data;
        } else {
            return "Something went wrong";
        }

    }

    public function product_img_change_by_id( $data ) {
        $id                       = $data['u_product_img_id'];
        $product_img_name         = $_FILES['u_product_img']['name'];
        $product_img_tmp_name     = $_FILES['u_product_img']['tmp_name'];
        $product_img_update_query = "UPDATE add_product_img SET product_img='$product_img_name' WHERE img_id=$id";
        $result                   = mysqli_query( $this->conn1, $product_img_update_query );
        if ( $result ) {
            move_uploaded_file( $product_img_tmp_name, "../uploads/" . $product_img_name );
            return "Image Changed Successfully.";
        }
    }

    public function product_img_dlt_by_id( $id ) {

        $search_product_img        = "SELECT * FROM add_product_img WHERE img_id=$id";
        $search_product_img_result = mysqli_query( $this->conn1, $search_product_img );
        $img_datas                 = mysqli_fetch_assoc( $search_product_img_result );

        $product_img_dlt_query = "DELETE FROM add_product_img WHERE img_id=$id";
        $result                = mysqli_query( $this->conn1, $product_img_dlt_query );
        if ( $result ) {
            $img = $img_datas['product_img'];
            unlink( "../uploads/$img" );
            return $img_datas['product_id'];
        } else {
            return "Data is not deleted.";
        }
    }

    public function product_img_all_dlt_by_id( $id ) {

        $search_product_img        = "SELECT * FROM add_product_img WHERE product_id=$id";
        $search_product_img_result = mysqli_query( $this->conn1, $search_product_img );

        $product_img_dlt_query = "DELETE FROM add_product_img WHERE product_id=$id";
        $result                = mysqli_query( $this->conn1, $product_img_dlt_query );
        if ( $result ) {
            while ( $image = mysqli_fetch_assoc( $search_product_img_result ) ) {
                $img = $image['product_img'];
                unlink( "../uploads/$img" );
            }

            return -789;
        } else {
            return "Image is not deleted.";
        }
    }

    public function product_dlt( $id ) {

        $search_product_img        = "SELECT * FROM add_product_img WHERE product_id=$id";
        $search_product_img_result = mysqli_query( $this->conn1, $search_product_img );

        $product_dlt_query = "DELETE FROM add_product WHERE product_id=$id";
        $result2           = mysqli_query( $this->conn1, $product_dlt_query );

        $product_img_dlt_query = "DELETE FROM add_product_img WHERE product_id=$id";
        $result1               = mysqli_query( $this->conn1, $product_img_dlt_query );

        if ( $result2 ) {

            if ( $result1 ) {
                while ( $image = mysqli_fetch_assoc( $search_product_img_result ) ) {
                    $img = $image['product_img'];
                    unlink( "../uploads/$img" );
                }

                return "Product deleted Successfully.";
            }

        } else {
            return "Product is not deleted.";
        }
    }

   

    public function display_message() {
        $display_message_query      = "SELECT * FROM message_info ORDER BY message_id DESC";
        $return_display_content_mgs = mysqli_query( $this->conn1, $display_message_query );
        if ( isset( $return_display_content_mgs ) ) {
            return $return_display_content_mgs;
        } else {
            die( "Data is not found!!" );
        }

    }

    public function mgs_dlt( $id ) {
        $mgs_dlt_query = "DELETE FROM message_info WHERE message_id=$id";
        $result2           = mysqli_query( $this->conn1, $mgs_dlt_query );

        if ( $result2 ) {
                return "Product deleted Successfully.";
           
        } else {
            return "Product is not deleted.";
        }
    }


}