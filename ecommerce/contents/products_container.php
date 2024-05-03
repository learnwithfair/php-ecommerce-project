
 
 <!-- Items Starts Here -->
 <div class="featured-page">
     <div class="container">
         <div class="row">
             <div class="col-md-4 col-sm-12">
                 <div class="section-heading">
                     <div class="line-dec"></div>
                     <h1>Featured Items</h1>
                 </div>
             </div>
            
 
<?php 

 if(isset($_GET['status'])){
     if($_GET['status']="sub-menu"){
         $sub_menu_id = $_GET['id'];
         if($sub_menu_id==1){
            include_once 'product_content/all_products.php';
         }
         elseif($sub_menu_id==2){
            include_once 'product_content/new_products.php'; 
         }
         elseif($sub_menu_id==3){
            include_once 'product_content/low_products.php';
         }
         elseif($sub_menu_id==4){
            include_once 'product_content/high_products.php';;
         }
     }
    }else{
        $sub_menu_id = 1;
        include_once 'product_content/all_products.php';
     }
    
    ?>
   
    
   


</div>
<?php include_once 'product_content/pegi.php';?>