<?php 
include "partials/header.php";
 require_once "class/Product.php";
 require_once "class/Brand.php";


 $brad = new Brand();
$get_brand = $brad->fetch_all_brands();
// echo "<pre>";
// print_r($get_brand);
// exit();


 if (isset($_POST["submit_btn"])) {
  $prod_name = $_POST['prodname'];
  $prod_desc = $_POST['proddesc'];
  $prod_amt = $_POST['prodamount'];
  $targetDirectory = "uploads/";
  $prod_image = $targetDirectory . basename($_FILES['prodimg']['name']);
  move_uploaded_file($_FILES['prodimg']['tmp_name'], $prod_image);
  $brand_id = $_POST['prod_brand'];

  $prod = new Product();
  $prod->add_product($prod_name, $prod_desc, $prod_amt, $prod_image, $brand_id);

}
?>

<div class='row my-5'>
  <div class="col-md-4 m-auto">
  <form method="post" enctype="multipart/form-data">
    <div>
      <label for="prodname">Product Name </label>
      <input type="text" name="prodname" class="form-control mb-3">
    </div>
    <div>
      <label for="proddesc">Product Description </label>
      <input type="text" name="proddesc" class="form-control mb-3">
    </div>
    <div>
      <label for="prodamount">Product Amount</label>
      <input type="number" name="prodamount" class="form-control mb-3">
    </div>    
    <div>
      <label for="prodimg">Product Image</label>
      <input type="file" name="prodimg" class="form-control mb-3">
    </div>
    <select name="prod_brand" class="form-select text-dark mb-3">
      <option value="">Select Product Brand</option>
      <?php foreach ($get_brand as $key) { ?>
        <option value="<?php echo $key['brand_id']; ?>">
          <?php echo $key['brand_name']; ?>
        </option>
      <?php } ?>
    </select>     
    <div>
      <input type="submit" class="btn btn-danger w-100" value="Click here to Add" name="submit_btn">
    </div>
  </form>
  </div>
</div>

<?php include "partials/footer.php"; ?>