<?php
namespace App\Controllers;
// require_once "app\models\Product.php";
use App\Models\Product;

class ProductController {
    protected $productModel;

    public function __construct() {
        $this->productModel = new Product();
    }
    public function getAllProduct() {
        $products = $this->productModel->listProduct();
        include "app/views/products.php";
    }
    public function getTopTen() {

    }


    public function edit($id) {
        $product = $this->productModel->getById($id);
        include "app/views/edit.php";
    }

    public function update($id) {
        var_dump($_POST);
    }
}
?>