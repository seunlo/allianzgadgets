<?php 
include "partials/header.php";
require_once "class/Product.php";
$prod = new Product();
$get_all = $prod->fetch_all_account_type();
// echo "<pre>";
// print_r($get_all);
// exit();
?>

<div class="row">
  <div class="col-md-11 m-auto">
    <div class="row">
    <?php foreach ($get_all as $key) { ?>
      <div class="col-md-3">      
        <div class="card my-3" style="width: 18rem; height:520px;">
          <img src="<?php echo $key['prod_image']; ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?php echo $key['prod_desc']; ?></h5>
            <hr>
            <p class="fw-bold">N<?php echo number_format($key['prod_amt'], 2); ?></p>
            <a href="#" class="btn btn-danger">Buy Now</a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>

<?php include "partials/footer.php"; ?>