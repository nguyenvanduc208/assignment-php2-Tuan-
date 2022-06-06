<?php
session_start();
require_once './vendor/autoload.php';
require_once './commons/db.php';
require_once './commons/config.php';
// về nhà cài đặt phần mềm composer vào máy tính của mình
// https://getcomposer.org/download/
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\Admin\ProductController as AdminProductController;
use App\Controllers\Admin\CategoryController as AdminCategoryController;

// $ctr = new HomeController();
// $ctr->index();
$url = !isset($_GET['url']) ? "/" : $_GET['url'];
switch ($url) {
    case 'admin':
        $ctr = new AdminProductController();
        $ctr->index();
        break;
    case 'admin/category':
        $ctr = new AdminCategoryController();
        $ctr->index();
        break;
    case 'admin/product':
        $ctr = new AdminProductController();
        $ctr->index();
        break;
    // case 'admin':
    //     $ctr = new AdminProductController();
    //     $ctr->index();
    //     break;
    // case 'admin':
    //     $ctr = new AdminProductController();
    //     $ctr->index();
    //     break;
    default:
        echo "Đường dẫn không tồn tại";
        break;
}
