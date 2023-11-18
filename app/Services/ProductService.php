<?php

namespace App\Services;

use App\Models\Product;

class ProductService{

    public function getAllProduct(){
        return Product::all();
    }

    public function createProduct($data){
        Product::create($data);
    }

    public function updateProduct(Product $product,$data){
        $product->update($data);
    }

    public function deleteProduct(){
        
    }
}
