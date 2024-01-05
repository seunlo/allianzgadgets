<?php
require_once "Db.php";
class Product extends Db
{
  public function add_product($prod_name, $prod_desc, $prod_amt, $prod_image)
  {
    $sql = "INSERT INTO products(prod_name, prod_desc, prod_amt, prod_image) VALUES(?, ?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->bindParam(1, $prod_name, PDO::PARAM_STR);
    $stmt->bindParam(2, $prod_desc, PDO::PARAM_STR);
    $stmt->bindParam(3, $prod_amt, PDO::PARAM_STR);
    $stmt->bindParam(4, $prod_image, PDO::PARAM_STR);
    $stmt->execute();
    echo "<script>alert('Product created successfully')</script>";
  }

  public function fetch_all_account_type()
  {
    $sql = "SELECT * FROM products";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    $category = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $category;
  }

  public function fetch_prod_by_brand($brand_id)
  {

 

    $sql = "SELECT * FROM products where brand_id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->bindParam(1, $brand_id, PDO::PARAM_INT);
    $stmt->execute();
    $prodbrand = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $prodbrand;
  }
}

$prod = new Product();
// $prod->fetch_prod_by_brand(1);
?>