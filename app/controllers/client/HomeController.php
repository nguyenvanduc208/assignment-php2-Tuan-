<?php
namespace App\Controllers\Client;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Controllers\BaseController;

class HomeController extends BaseController{
    public function __construct(){
        $cate = Category::all();
        $_SESSION['category'] = $cate;
    }
    public function index(){
        $title = "Sản phẩm của chúng tôi";
        $data = Product::all();
       include_once './app/views/client/home.php';
    }

    public function cate(){
        $id = isset($_GET['id']) ? $_GET['id'] : die();
        $data =  Product::where('cate_id', $id)->get();
        $name = Category::find($id)->name;
        $title = $name;
        include_once './app/views/client/home.php';
    }

    public function test(){
        $test = 'Nguyen Van Duc';
        return $this->render('test',compact('test'));
    }

}

?>