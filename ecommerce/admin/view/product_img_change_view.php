<?php
if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] = "change_img" ) {
        $img_id = $_GET['id'];
    }
}
if ( isset( $_POST['product_img_edit'] ) ) {
    $return_mgs = $obj->product_img_change_by_id( $_POST );
}
?>
<form action="" class="shadow p-5 m-5" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="upload_thumbnail" style="color:black; ">
            <h6 style="color:red;"><?php if ( isset( $return_mgs ) ) {echo $return_mgs;}?></h6>
            <h6>Upload Image:</h6>
        </label>
        <input type="file" name='u_product_img' class='form-control py4'>
        <input type="hidden" name='u_product_img_id' class='form-control py4' value="<?php echo $img_id ?>">
    </div><br><br>
    <div class="form-group">
        <input type="submit" name='product_img_edit' value="Change Image" class='form-control btn btn-block my-btn'>
    </div>
</form>