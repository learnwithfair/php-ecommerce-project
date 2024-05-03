
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                    <?php $count = 0;while ( $info = mysqli_fetch_assoc( $data ) ) {
                    
                    $count++;
                    if($count==9){
                        break;
                    }
                       
                      
                        
                        ?>
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
                        <?php }?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featred Ends Here -->

    