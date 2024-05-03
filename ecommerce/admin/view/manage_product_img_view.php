<?php
if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] == "product_img" ) {
        $display_id = $_GET['id'];
        $data1      = $obj->display_product_img_by_id( $display_id );
        $data2      = $obj->display_product_img_by_id( $display_id );
        $item_count = mysqli_num_rows( $data1 );

    }
}
if ( isset( $_GET['view'] ) ) {
    if ( $_GET['view'] == "product_img_dlt_by_id" ) {
        $dlt_id            = $_GET['dlt_id'];
        $return_product_id = $obj->product_img_dlt_by_id( $dlt_id );
        if ( isset( $return_product_id ) ) {
            $product_dlt_mgs = "Image Deleted Successfully";
            $data1           = $obj->display_product_img_by_id( $return_product_id );
            $data2           = $obj->display_product_img_by_id( $return_product_id );
            $item_count      = mysqli_num_rows( $data1 );
        }

    }
}
if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] == "product_img_dlt_all" ) {
        $dlt_id            = $_GET['id'];
        $return_product_id = $obj->product_img_all_dlt_by_id( $dlt_id );
        if ( isset( $return_product_id ) ) {
            $product_dlt_mgs = "All Image Deleted Successfully";
            $data1           = $obj->display_product_img_by_id( $return_product_id );
            $data2           = $obj->display_product_img_by_id( $return_product_id );
            $item_count      = mysqli_num_rows( $data1 );
        }

    }
}
// if ( isset( $_POST['post_img_change'] ) ) {
//     $return_mgs = $obj->post_img_change_by_id( $_POST );
// }
?>


<div class="card mb-4">
    <div class="card-header">

        <h2> <i class="fas fa-table mr-1"></i> Manage Product Images:</h2>
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
                        <?php for ( $i = 1; $i <= $item_count; $i++ ) {?>
                        <th>Item-<?php echo $i; ?></th>
                        <?php }?>

                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>S/N</th>
                        <th style="text-align:center;">Product ID</th>
                        <th>Product Name</th>
                        <?php for ( $i = 1; $i <= $item_count; $i++ ) {?>
                        <th>Item-<?php echo $i; ?></th>
                        <?php }?>

                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $cout = 1;while ( $info1 = mysqli_fetch_assoc( $data1 ) ) {
    if ( $cout == 2 ) {
        break;}?>

                    <tr>
                        <td><?php echo $cout++; ?></td>
                        <td><?php echo $info1['product_id']; ?></td>
                        <td>
                            <?php
$product_name = $obj->display_prduct_datas_by_id( $info1['product_id'] );
    if ( $product_name ) {
        echo $product_name['product_name'];
    }

    ?>
                        </td>
                        <?php while ( $info2 = mysqli_fetch_assoc( $data2 ) ) {?>
                        <td>
                            <!-- ############################ -->
                            <a
                                href="?view=product_img_dlt_by_id&&dlt_id=<?php echo $info2['img_id']; ?>">Delete <span style = "color:red;font-weight:bold"><?php if($info2['thumnail_status']==1){echo "*";}  ?></span></a><br><br>
                            <!-- Featured Starts Here -->

                            <div class="featured-items">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="owl-carousel owl-theme">
                                                <span>
                                                    <div class="featured-item">
                                                        <img height='100px' width='100px'
                                                            src="../uploads/<?php echo $info2['product_img'] ?>" alt="r" title = <?php if($info2['thumnail_status']==1){ echo ("Thumnail/".$info2['product_img']);} else{echo $info2['product_img'];} ?>>

                                                    </div>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><br>

                            <a
                                href="./product_img_change.php?status=change_img&&id=<?php echo $info2['img_id']; ?>">Change</a>

                            <!-- Featred Ends Here -->
                            <!-- ############################ -->
                        </td><?php }?>
                        <td method='post'>

                            <a href="?status=product_img_dlt_all&&id=<?php echo $info1['product_id']; ?>"
                                class="btn btn-danger" name="product_img_dlt_all_btn">Delete All</a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>