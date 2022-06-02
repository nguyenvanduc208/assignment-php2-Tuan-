<?php

require_once './vendor/autoload.php';
require_once './commons/db.php';
// về nhà cài đặt phần mềm composer vào máy tính của mình
// https://getcomposer.org/download/
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\Admin\ProductController as AdminProductController;
// $ctr = new HomeController();
// $ctr->index();
$url = !isset($_GET['url']) ? "/" : $_GET['url'];
switch ($url) {
    case 'admin':
        $ctr = new AdminProductController();
        $ctr->index();
        break;
    default:
        echo "Đường dẫn không tồn tại";
        break;
}


?>