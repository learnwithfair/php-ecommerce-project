<?php
if ( isset( $_POST['add_product_img'] ) ) {
    $add_product_return_mgs = $obj->add_product_img( $_POST );
}
?>
<h2>Add Product Images:</h2><br>
<h5 style="color: red;"><?php if ( isset( $add_product_return_mgs ) ) {echo $add_product_return_mgs;}?></h5>
<form action="" method='POST' class='form' enctype="multipart/form-data">
    <div class="form-group">
        <label for="product_id" style="color:black; ">
            <h6>Product ID:</h6>
        </label>
        <input type="number" name='product_id' $id="product_id" class='form-control py4' placeholder='101' required>
    </div>
    
    <div class="form-group">
        <label for="product_img" style="color:black; ">
            <h6>Product Image:</h6>
        </label>
        <input type="file" name='product_img' $id="product_img" class='form-control py4' required>
    </div>
    <div class="form-group">
        <label for="thumnail_status" style="">
            <h6 style = "">Are you want to used as a Thumnail:</h6>
        </label>
       
        <input type="checkbox" name='thumnail_status' $id="thumnail_status" style = "width:60px;height:18px;cursor:pointer;margin-top:10px" value=1>
    </div>
    <br><br>
    <div class="form-group">
        <input type="submit" name='add_product_img' value="Add Product Image" class='form-control btn btn-block my-btn'>
    </div>
    <div>

    </div>
</form>