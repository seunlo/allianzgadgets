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


    <?php 
          // Select products by brand
          if(isset ($_GET['id'])){
            $id = $_GET['id'];
            $get_all_by_brand = $prod->fetch_prod_by_brand($id);
            if(!empty($get_all_by_brand)){
              foreach ($get_all_by_brand as $key) { ?>
                <div class="col-md-3">      
                  <div class="card card_hover border-1 bg-info my-3" style="width: 18rem; height:520px;">
                    <img src="<?php echo $key['prod_image']; ?>" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $key['prod_desc']; ?></h5>
                      <hr>
                      <p class="fw-bold">N<?php echo number_format($key['prod_amt'], 2); ?></p>
                      <a href="#" class="btn btn-danger">Buy Now</a>
                    </div>
                  </div>
                </div>
                <?php } 

            }else{
                  echo 
                  "<script>
                  alert('Product is not available');
                  window.location.href='index.php';
                  </script>";
            }

          }else{
    // Select All Products
    foreach ($get_all as $key) { ?>
      <div class="col-md-3">      
        <div class="card card_hover border-1 bg-info my-3" style="width: 18rem; height:520px;">
          <img src="<?php echo $key['prod_image']; ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?php echo $key['prod_desc']; ?></h5>
            <hr>
            <p class="fw-bold">N<?php echo number_format($key['prod_amt'], 2); ?></p>
            <a href="#" class="btn btn-danger">Buy Now</a>
          </div>
        </div>
      </div>
      <?php } }?>
    </div>
  </div>
</div>

<?php include "partials/footer.php"; ?>