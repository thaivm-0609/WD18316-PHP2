<?php
namespace App\Controllers;
// require_once "app\models\Product.php";
use App\Models\Product;

class ProductController {
    public function getAllProduct() {
        $productModel = new Product();
        $products = $productModel->listProduct();
        include "app/views/products.php";
    }
    public function getTopTen() {

    }
}
?>