<?php 
include "partials/header.php";
 require_once "class/Brand.php"; 


 if (isset($_POST["submit_btn"])) {
  $brand_name = $_POST['form_name'];
  $targetDirectory = "uploads/";
  $brand_image = $targetDirectory . basename($_FILES['form_img']['name']);
  move_uploaded_file($_FILES['form_img']['tmp_name'], $brand_image);

  $brad = new Brand();
  $brad->add_brand($brand_name, $brand_image);

}
?>

<div class='row my-5'>
  <div class="col-md-4 m-auto">
  <form method="post" enctype="multipart/form-data">
    <div>
      <label for="form_name">Brand Name </label>
      <input type="text" name="form_name" class="form-control mb-3">
    </div>   
    <div>
      <label for="form_img">Brand Image</label>
      <input type="file" name="form_img" class="form-control mb-3">
    </div>    
    <div>
      <input type="submit" class="btn btn-danger w-100" value="Click here to Add" name="submit_btn">
    </div>
  </form>
  </div>
</div>

<?php include "partials/footer.php"; ?>