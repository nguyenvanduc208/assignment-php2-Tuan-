<?php
session_start();
require_once './vendor/autoload.php';
require_once './commons/db.php';
require_once './commons/config.php';
use App\Controllers\Client\HomeController;
use App\Controllers\Admin\ProductController as AdminProductController;
use App\Controllers\Admin\CategoryController as AdminCategoryController;

// $ctr = new HomeController();
// $ctr->index();
$url = !isset($_GET['url']) ? "/" : $_GET['url'];
switch ($url) {
    // ----------Client------------
    case '/':
        $ctr = new HomeController();
        $ctr->index();
        break;
        case 'category':
            $ctr = new HomeController();
            $ctr->cate();
            break;



    //----------Admin------------
    case 'admin':
        $ctr = new AdminCategoryController();
        $ctr->index();
        break;



    //------------------------------Category------------
    case 'admin/category':
        $ctr = new AdminCategoryController();
        $ctr->index();
        break;
    case 'admin/category/add':
        $ctr = new AdminCategoryController();
        $ctr->add();
        break;
    case 'admin/category/edit':
        $ctr = new AdminCategoryController();
        $ctr->edit();
        break;
    case 'admin/category/save':
        $ctr = new AdminCategoryController();
        $ctr->save();
        break;
    case 'admin/category/delete':
        $ctr = new AdminCategoryController();
        $ctr->delete();
        break;


        
    //------------------------------Product------------
    case 'admin/product':
        $ctr = new AdminProductController();
        $ctr->index();
        break;
    case 'admin/product/add':
        $ctr = new AdminProductController();
        $ctr->add();
        break;
    case 'admin/product/edit':
        $ctr = new AdminProductController();
        $ctr->edit();
        break;
    case 'admin/product/save':
        $ctr = new AdminProductController();
        $ctr->save();
        break;
    case 'admin/product/delete':
        $ctr = new AdminProductController();
        $ctr->delete();
        break;
    default:
        echo "Đường dẫn không tồn tại";
        break;
}
