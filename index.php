<?php 
include "partials/header.php";


// echo "<pre>";
// print_r($get_brand);
// exit();
?>

<!--------------------------------------------CAROUSEL------------------------------------------------->
<div class="row">
  <div class="col-md-11 m-auto my-2">
    <div class="row">
      <div class="col-md-8">
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/carousel/pix.jpg" class="d-block w-100" style="height:400px">
            </div>
            <div class="carousel-item">
              <img src="images/carousel/pix2.jpg" class="d-block w-100" style="height:400px">
            </div>
            <div class="carousel-item">
              <img src="images/carousel/pix3.jpg" class="d-block w-100" style="height:400px">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-md-4">
        <a href="product.php">
          <img src="images/carousel/pix4.png" style="height:400px;">
        </a>
      </div>
    </div>
  </div>
</div>
<!---------------------------------------------SHOP BY BRAND----------------------------------------->
    <div class="row">
      <div class="col-md-12 mb-3 rounded-3" style='background-color:rgba(90,155,200,0.6);'>
        <h3 class='text-center text-dark fw-bolder py-2'>Shop by Brands</h3>
      </div>
    </div>
    <div class="row">
      <?php foreach($get_brand as $value) { ?>
      <div class="col-md-2 text-center m-auto">
        <div class="card border-1  w-100">
          <a href="Product.php?id=<?php echo $value['brand_id'];?>">
          <img src="<?php echo $value['brand_image']; ?>" style="height:100px; width:200px;" class='img-fluid'>
          </a>
        </div>
      </div>
      <?php } ?>      
    </div>
<!----------------------------------------------OUR PRODUCTS------------------------------------------>
  
    <div class="row">
      <div class="col-md-12 mt-3" style='background-color:rgba(90,155,200,0.6);'>
        <h3 class='text-center text-dark fw-bolder py-2'>Our Products</h3>
      </div>
    </div>
    <div class="row">
  <div class="col-md-11 m-auto">
    <div class = "row" >
        <?php foreach ($get_all as $key) { ?>
      <div class="col-md-3">      
        <div class="border-1 my-3" style="width: 18rem; height:520px;">
          <img src="<?php echo $key['prod_image']; ?>" class="card-img-top">
          <div class="card-body">
            <h4 class='fw-bold'><?php echo $key['prod_name']; ?></h4>
            <h6 class="card-title"><?php echo $key['prod_desc']; ?></h6>
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