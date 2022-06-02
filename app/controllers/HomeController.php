<?php
namespace App\Controllers;
use App\Models\User;
use App\Models\Product;

class HomeController{

    public function index(){
        
       include_once './app/views/home/index.php';
    }

    public function listProduct(){
        $products = Product::all();
        
        include_once "./app/views/product/list.php";
    }
}

?>