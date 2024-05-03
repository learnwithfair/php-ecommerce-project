<?php

if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] == "product_dlt" ) {
        $dlt_id  = $_GET['id'];
        $dlt_mgs = $obj->product_dlt( $dlt_id );
    }
}
$data = $obj->display_product_datas();
// if ( isset( $_POST['post_img_change'] ) ) {
//     $return_mgs = $obj->post_img_change_by_id( $_POST );
// }
?>


<div class="card mb-4">
    <div class="card-header">

        <h2> <i class="fas fa-table mr-1"></i> Manage Product:</h2>
        <h6 style="color:red;"><?php if ( isset( $dlt_mgs ) ) {echo $dlt_mgs;}?></h6>
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
                        <th>Product Description</th>
                        <th>Stock Amount</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Images</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>S/N</th>
                        <th style="text-align:center;">Product ID</th>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Stock Amount</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Images</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $cout = 1;while ( $info = mysqli_fetch_assoc( $data ) ) {?>
                    <tr>
                        <td><?php echo $cout++; ?></td>
                        <td><?php echo $info['product_id']; ?></td>
                        <td><?php echo $info['product_name']; ?></td>
                        <td style="text-align:justify;"><?php echo $info['product_des']; ?></td>
                        <td><?php echo $info['product_stock']; ?></td>
                        <td>
                            <?php
$product_price_number = "";
    if ( $info['product_price_name'] == "$" ) {
        $product_price_number = $info['product_price_name'] . $info['product_price'];
    } else {
        $product_price_number = $info['product_price'] . $info['product_price_name'];
    }

    echo $product_price_number;
    ?>
                        </td>
                        <td><?php echo $info['product_cat']; ?></td>
                        <td>
                            <!-- ############################ -->
                            <!-- Featured Starts Here -->
                            <!-- <div class="featured-items">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="owl-carousel owl-theme"> -->
                            <?php
$img_data = $obj->display_product_img_by_id( $info['product_id'] );
    while ( $imgs = mysqli_fetch_assoc( $img_data ) ) {
        ?>


                            <div class="featured-item">
                                <img height='100px' width='100px' src="../uploads/<?php echo $imgs['product_img'] ?>"
                                    alt="">

                            </div>

                            <br>
                            <?php }?>

        </div>
    </div>
</div>
</div>
</div>
<!-- Featred Ends Here -->
<!-- ############################ -->
<a href="./manage_product_img.php?status=product_img&&id=<?php echo $info['product_id']; ?>">
    Manage Images
</a>
</td>
<td><?php if ( $info['product_status'] == 1 ) {echo "Published";} else {echo "Unpublished";}?>
</td>
<td method='post'>
    <a href="./product_edit.php?status=product_edit&&id=<?php echo $info['product_id']; ?>" class="btn my-btn"
        name="product_edit_btn">Edit</a>
    <div></div><br>
    <a href="?status=product_dlt&&id=<?php echo $info['product_id']; ?>" class="btn btn-danger"
        name="product_dlt_btn">Delete</a>
</td>
</tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>