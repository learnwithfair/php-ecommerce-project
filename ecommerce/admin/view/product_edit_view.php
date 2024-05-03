  <?php
if ( isset( $_POST['u_add_product'] ) ) {
    $u_post_return_mgs = $obj->update_product( $_POST );
}
?>
  <?php
if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] = "product_edit" ) {
        $update_id    = $_GET['id'];
        $product_data = $obj->display_prduct_datas_by_id( $update_id );

    }
}

?>

  <h2>Update Product:</h2><br>
  <h5 style="color: red;"><?php if ( isset( $u_post_return_mgs ) ) {echo $u_post_return_mgs;}?></h5>
  <form action="" method='POST' class='form' enctype="multipart/form-data">
      <div class="form-group">
          <input type="hidden" name='u_id' $id="u_id" class='form-control py4'
              value="<?php echo $product_data['ID']; ?>">
          <label for="u_product_id" style="color:black; ">
              <h6>Product ID:</h6>
          </label>
          <h5 $id="u_product_id" class='form-control py4'><?php echo $product_data['product_id']; ?></h5>

      </div>
      <input type="hidden" name='u_product_id' $id="u_product_id" 
              value="<?php echo $product_data['product_id']; ?>">
      <div class="form-group">
          <label for="u_product_name" style="color:black; ">
              <h6>New Product Name:</h6>
          </label>
          <input type="text" name='u_product_name' $id="u_product_name" class='form-control py4'
              value="<?php echo $product_data['product_name']; ?>" placeholder='Enter Product Name'>
      </div>
      <div class="form-group">
          <label for="u_product_des" style="color:black; ">
              <h6>New Product Descriptions:</h6>
          </label>
          <textarea type="text" name='u_product_des' id="u_product_des" class='form-control py4' rows='6'
              placeholder='Write your Product Description here..'><?php echo $product_data['product_des']; ?></textarea>
      </div>
      <div class="form-group">
          <label for="u_product_stock" style="color:black; ">
              <h6>New Product Stock:</h6>
          </label>
          <input type="number" name='u_product_stock' $id="u_product_stock" class='form-control py4'
              value="<?php echo $product_data['product_stock']; ?>" placeholder='14'>
      </div>
      <div class="form-group">
          <label for="u_product_price" style="color:black; ">
              <h6>New Product Price:</h6>
          </label>
          <input type="number" name='u_product_price' $id="u_product_price" class=' ' style="width:50%;"
              value="<?php echo $product_data['product_price']; ?>" placeholder='20'>
          <select name="u_product_price_name" id="u_product_price_name" class='' style="width:10%" required>
              <option value="">Select</option>
              <option value="$">Dollar</option>
              <option value="₨">Rupee</option>
              <option value="৳">Taka</option>
              <option value="Rp">Rupiah</option>
              <option value="€">Euro</option>
          </select>

      </div>



      <div class="form-group">
          <label for="u_product_cat" style="color:black; ">
              <h6>New Product Category:</h6>
          </label>
          <input type="text" name='u_product_cat' $id="u_product_cat" class='form-control py4'
              placeholder='Jacket, T-Shirt' value="<?php echo $product_data['product_cat']; ?>">
      </div>
      <div>
          <label for="u_product_status" style="color:black;">
              <h6>New Product Status:</h6>
          </label>
          <div style="text-align:center;margin-top:-35px">
              <input type="radio" name='u_product_status' $id="u_product_status" value="1" checked> Published
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" name='u_product_status' $id="u_product_status" value="0"> Unpublished
          </div>

      </div><br><br>
      <div class="form-group">
          <input type="submit" name='u_add_product' value="Update Product" class='form-control btn btn-block my-btn'>
      </div>
      <div>

      </div>
  </form>