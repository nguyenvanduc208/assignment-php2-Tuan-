<?php
namespace App\Controllers\Admin;

use App\Models\Category;
use App\Models\Product;

class ProductController{

    public function __construct(){
        $_SESSION['active'] = 'product';
    }

    public function index(){
        $title = "Danh sách sản phẩm";
        $data = Product::all();
        $cate = Category::all();
        include_once './app/views/admin/product/index.php';
    }
}

?>