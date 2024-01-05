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
}

$prod = new Product();
//$prod->add_product('hp2534', 'durable laptop you will enjoy', 750000);
?>