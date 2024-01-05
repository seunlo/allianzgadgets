<?php 
include "partials/header.php";


// echo "<pre>";
// print_r($get_brand);
// exit();
?>

<div class="row">
  <div class="col-md-11 m-auto">
    <div class="row">
      <div class="col-md">
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/lapsale.jpeg" class="d-block w-100" style="height:300px">
            </div>
            <div class="carousel-item">
              <img src="images/laplogo.jpeg" class="d-block w-100" style="height:300px">
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
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-11 m-auto">
  <div class = "row">
                <div class="col-md-12 my-3 bg-info rounded-3 ">
                  <h3 class='text-center text-danger fw-bolder'>Shop by Brands</h3>
                </div>
        </div>
    <div class="row">
      <?php foreach($get_brand as $value) { ?>
      <div class="col-md-3">
        <div class="card w-75">
          <a href="Product.php?id=<?php echo $value['brand_id'];?>">
          <img src="<?php echo $value['brand_image']; ?>" style="height:180px; width:220px;" class='img-fluid'>
          </a>
        </div>
      </div>
      <?php } ?>      
    </div>
  </div>
</div>




<div class="row">
  <div class="col-md-11 m-auto">
        <div class = "row">
                <div class="col-md-12 mt-3 bg-info rounded-3 ">
                  <h3 class='text-center text-danger fw-bolder'>Our Products</h3>
                </div>
        </div>

        <div class = "row" >
        <?php foreach ($get_all as $key) { ?>
      <div class="col-md-3">      
        <div class="border-1 my-3" style="width: 18rem; height:520px;">
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