<?php
namespace App\Models;

use App\Models\db;

class Product extends db {
    /**DRY: Don't repeat yourself */
    protected $table="products";

    public function listProduct() {
        $sql = "SELECT * FROM ".$this->table." WHERE 1";
    
        return $this->getData($sql); //để 1 blank line (dòng trống) trước return
    }

    public function getById($id) {
        $sql = "SELECT * FROM ".$this->table." WHERE id =".$id;
    
        return $this->getDataById($sql);
    }
} 
?>
<!-- để 1 dòng blank line (dòng trống) ở cuối file -->
