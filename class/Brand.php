<?php
require_once "Db.php";
class Brand extends Db
{
  public function add_brand($brand_name, $brand_image)
  {
    $sql = "INSERT INTO brands(brand_name, brand_image) VALUES(?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->bindParam(1, $brand_name, PDO::PARAM_STR);
    $stmt->bindParam(2, $brand_image, PDO::PARAM_STR);
    $stmt->execute();
    echo "<script>alert('Product created successfully')</script>";
  }

  public function fetch_all_brands()
  {
    $sql = "SELECT * FROM brands";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    $category = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $category;
  }
}

$brad = new Brand();
//$prod->add_product('hp2534', 'durable laptop you will enjoy', 750000);
?>