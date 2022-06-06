<?php
namespace App\Controllers\Admin;
use App\Models\Category;

class CategoryController{
    public function __construct(){
        $_SESSION['active'] = 'category';
    }

    public function index(){
        $title = "Danh sách danh mục";
       $data = Category::all();
       include_once './app/views/admin/category/index.php';
    }

}

?>