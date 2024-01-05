<?php
require_once "class/Brand.php";
require_once "class/Product.php";

$prod = new Product();
$get_all = $prod->fetch_all_account_type();

$brad = new Brand();
$get_brand = $brad->fetch_all_brands();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./bootstrap/bootstrap.css">
  <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid">
      <a class="navbar-brand text-danger fw-bolder" href="index.php"><span>Allianz</span><span class='text-warning'>Gadgets</span> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active fw-bold " aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold " href="about.php">About Us</a>
          </li> 
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fw-bold" href="product.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu">
          
            

            
                  <?php foreach($get_brand as $value) { ?>
                    
                    <li> <a class="dropdown-item"  href="Product.php?id=<?php echo $value['brand_id'];?>">
                        <?php echo $value['brand_name'];  ?>
                    </a></li>
                  
                <?php } ?>  
          
          </ul>
        </li>       
        </ul>
      </div>
    </div>
  </nav>
  
