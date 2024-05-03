<?php
 $all_products = $obj1->display_new_products( $start, $per_page);
 ?>
<div class="col-md-8 col-sm-12" >
                 <div id="filters" class="button-group">
                     <div class = "my-btn">
                        <a href="?status=sub-menu&&id=1" name = 'all_products'>All Products</a>
                        <a href="?status=sub-menu&&id=2" name = 'new_products'  style =  "color:blue;">Newest</a>
                        <a href="?status=sub-menu&&id=3" name = 'low_products'>Low Price</a>
                        <a href="?status=sub-menu&&id=4" name = 'high_products'>High Price</a>
                    </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <div class="featured container no-gutter">
<div class="row posts">
        <?php $id = 0;while($info = mysqli_fetch_assoc( $all_products )){
            $id++;
            ?>
        <div id='<?php echo $id?>' class="item new col-md-4">
             <a href="./single-product.php?status=single_item&&id=<?php echo $info['product_id'];?>">
             <div class="featured-item">
                                
                                <?php 
                                $data1 = $obj1->display_feature_items_details($info['product_id']);
                               
                               ?>
                               <?php 
                                $title = str_replace(" ","-",$info['product_name']);
                                if(isset($data1['product_img'])){?>
                                    <img src="./uploads/<?php echo $data1['product_img']?>" alt="Thumnail is not Found" title = <?php echo $title?>>
                                <?php
                                }else{
                                    ?>
                                         <img src="./admin/assets/img/error-404-monochrome.svg" alt="Thumnail is not Found" title = <?php echo "Thumnail-is-not-Found"?>>
                                    <?php
                                }
                               ?>
                               
                               
                                <h4><?php echo $info['product_name']?></h4>
                                <h6><?php
                                    $product_price_number = "";
                                        if ( $info['product_price_name'] == "$" ) {
                                            $product_price_number = $info['product_price_name'] . $info['product_price'];
                                        } else {
                                            $product_price_number = $info['product_price'] . $info['product_price_name'];
                                        }

                                        echo $product_price_number;
                                    ?>
                                </h6>
                                
                            </div>
                        </a>
         </div>
         <?php }?>
         
 </div>
