<?php
if ( isset( $_GET['view'] ) ) {
    if ( $_GET['view'] == "product_img_dlt_by_id" ) {
        $dlt_id            = $_GET['dlt_id'];
        $return_product_id = $obj->product_img_dlt_by_id( $dlt_id );
        if ( isset( $return_product_id ) ) {
            $product_dlt_mgs = "Image Deleted Successfully";
        }

    }
}

$data = $obj->display_product_img();

?>


<div class="card mb-4">
    <div class="card-header">

        <h2> <i class="fas fa-table mr-1"></i> Product Images:</h2>
        <h6 style="color:red;"><?php if ( isset( $product_dlt_mgs ) ) {echo $product_dlt_mgs;}?></h6>
        <div></div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th style="text-align:center;">Product ID</th>
                        <th>Product Name</th>

                        <th>Image</th>


                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>S/N</th>
                        <th style="text-align:center;">Product ID</th>
                        <th>Product Name</th>

                        <th>Image</th>


                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $cout = 1;while ( $info = mysqli_fetch_assoc( $data ) ) {?>

                    <tr>
                        <td><?php echo $cout++; ?></td>
                        <td><?php echo $info['product_id']; ?></td>
                        <td>
                            <?php
$product_name = $obj->display_prduct_datas_by_id( $info['product_id'] );
    if ( $product_name ) {
        echo $product_name['product_name'];
    }

    ?>
                        </td>

                        <td>
                            <!-- ############################ -->
                            <span style = "color:red;"> <?php if($info['thumnail_status']==1){
                                echo "*Thumnail".'</br></br>';
                            }  ?></span>
                            <!-- Featured Starts Here -->
                            <div class="featured-items">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="owl-carousel owl-theme">
                                                <a href="single-product.html">
                                                    <div class="featured-item">
                                                        <img height='100px' width='100px'
                                                            src="../uploads/<?php echo $info['product_img'] ?>" alt="">

                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><br>

                            <a
                                href="./product_img_change.php?status=change_img&&id=<?php echo $info['img_id']; ?>">Change</a>
                            <!-- Featred Ends Here -->
                            <!-- ############################ -->
                        </td>
                        <td method='post'>
                            <a href="?view=product_img_dlt_by_id&&dlt_id=<?php echo $info['img_id']; ?>"
                                class="btn btn-danger" name="product_img_dlt_btn">Delete</a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>