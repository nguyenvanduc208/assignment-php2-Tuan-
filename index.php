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
