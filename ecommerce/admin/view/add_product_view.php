<?php
if ( isset( $_POST['add_product'] ) ) {
    $add_product_return_mgs = $obj->add_product( $_POST );
}
?>
<h2>Add Product:</h2><br>
<h5 style="color: red;"><?php if ( isset( $add_product_return_mgs ) ) {echo $add_product_return_mgs;}?></h5>
<form action="" method='POST' class='form' enctype="multipart/form-data">
    <div class="form-group">
        <label for="product_id" style="color:black; ">
            <h6>Product ID:</h6>
        </label>
        <input type="number" name='product_id' $id="product_id" class='form-control py4' placeholder='14' required>
    </div>
    <div class="form-group">
        <label for="product_name" style="color:black; ">
            <h6>Product Name:</h6>
        </label>
        <input type="text" name='product_name' $id="product_name" class='form-control py4'
            placeholder='Enter Product Name'>
    </div>
    <div class="form-group">
        <label for="product_des" style="color:black; ">
            <h6>Product Descriptions:</h6>
        </label>
        <textarea type="text" name='product_des' id="product_des" class='form-control py4' rows='6'
            placeholder='Write your Product Description here..'></textarea>
    </div>
    <div class="form-group">
        <label for="product_stock" style="color:black; ">
            <h6>Product Stock:</h6>
        </label>
        <input type="number" name='product_stock' $id="product_stock" class='form-control py4' placeholder='14'>
    </div>
    <div class="form-group">
        <label for="product_price" style="color:black; ">
            <h6>Product Price:</h6>
        </label>
        <input type="number" name='product_price' $id="product_price" class=' ' style="width:50%;" placeholder='20'>
        <select name="product_price_name" id="product_price_name" class='' style="width:10%" required>
            <option value="">Select</option>
            <option value="$">Dollar</option>
            <option value="₨">Rupee</option>
            <option value="৳">Taka</option>
            <option value="Rp">Rupiah</option>
            <option value="€">Euro</option>
        </select>

    </div>
    <div class="form-group">
        <label for="upload_thumbnail" style="color:black; ">
            <a href="./add_product_img.php">
                <h6>Upload Images</h6>
            </a>
        </label>

    </div>


    <div class="form-group">
        <label for="product_cat" style="color:black; ">
            <h6>Product Category:</h6>
        </label>
        <input type="text" name='product_cat' $id="product_cat" class='form-control py4' placeholder='Jacket, T-Shirt'>
    </div>
    <div>
        <label for="product_status" style="color:black;">
            <h6>Product Status:</h6>
        </label>
        <div style="text-align:center;margin-top:-35px">
            <input type="radio" name='product_status' $id="product_status" value="1" checked> Published
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name='product_status' $id="product_status" value="0"> Unpublished
        </div>

    </div><br><br>
    <div class="form-group">
        <input type="submit" name='add_product' value="Add Product" class='form-control btn btn-block my-btn'>
    </div>
    <div>

    </div>
</form>
