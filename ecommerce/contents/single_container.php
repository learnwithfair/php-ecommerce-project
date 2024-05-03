 <?php
if(isset($_GET['status'])){
    if($_GET['status']='single_item'){
        $id = $_GET['id'];
        $details = $obj1->display_feature_items_by_id($id);
        $imgs = $obj1->display_feature_img_by_id($id);
        $imgs1 = $obj1->display_feature_img_by_id($id);
        $thumnail_img = $obj1->display_feature_items_details($id);
    }
    
}


?>
 
 
 <!-- Page Content -->
    <!-- Single Starts Here -->
    <div class="single-product">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Single Product</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div class="product-slider">
              <div id="slider" class="flexslider">
                <ul class="slides">
                <?php  $title = str_replace(" ","-",$details['product_name']);?>
                <li>
                  <img src="./uploads/<?php echo $thumnail_img['product_img']?>" alt="Thumnail is not Found" title = <?php echo $title?>>
                   
                  </li>
                <?php 
                    

                     while($img = mysqli_fetch_assoc( $imgs )){
                       
                ?>
                  <li>
                  <img src="./uploads/<?php echo $img['product_img']?>" alt="Thumnail is not Found" title = <?php echo $title?>>
                   
                  </li>
                <?php
                     }
                ?>
                </ul>
              </div>
              <div id="carousel" class="flexslider">
                <ul class="slides">
                <li style = "cursor:pointer;">
                  <img src="./uploads/<?php echo $thumnail_img['product_img']?>" alt="Thumnail is not Found" title = <?php echo $title?>>
                   
                  </li>
                <?php 
                     while($img1 = mysqli_fetch_assoc( $imgs1 )){
                       
                ?>
                  <li  style = "cursor:pointer;">
                  <img src="./uploads/<?php echo $img1['product_img']?>" alt="Thumnail is not Found" title = <?php echo $title?>>
                   
                  </li>
                <?php
                     }
                ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
            <h4><?php echo $details['product_name']?></h4>
             <h6><?php
                                    $product_price_number = "";
                                        if ( $details['product_price_name'] == "$" ) {
                                            $product_price_number = $details['product_price_name'] . $details['product_price'];
                                        } else {
                                            $product_price_number = $details['product_price'] . $details['product_price_name'];
                                        }

                                        echo $product_price_number;
                                    ?>
               </h6>
              <p style = "text-align:justify;"><?php echo $details['product_des']?></p>
              <span><?php echo $details['product_stock']?> left on stock</span>
              <form action="" method="post">
                <label for="quantity">Quantity:</label>
                <input name="quantity" type="quantity" class="quantity-text" id="quantity" 
                	onfocus="if(this.value == '1') { this.value = ''; }" 
                    onBlur="if(this.value == '') { this.value = '1';}"
                    value="1">
                <input type="submit" class="button" value="Order Now!">
              </form>
              <div class="down-content">
                <div class="categories">
                  <h6>Category: <span><?php echo $details['product_cat']?></span></h6>
                </div>
                <div class="share">
                  <h6>Share: <span><a href="https://www.facebook.com/learnwithfair"><i class="fa fa-facebook"></i></a><a href="https://www.instagram.com/learnwithfair"><i class="fa fa-instagram"></i></a><a href="https://www.twitter.com/learnwithfair"><i class="fa fa-twitter"></i></a></span></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Single Page Ends Here -->