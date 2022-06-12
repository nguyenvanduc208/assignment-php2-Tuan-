<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Product;

class ProductController extends BaseController{

    public function __construct(){
        $_SESSION['active'] = 'product';
    }

    public function index(){
        $title = "Danh sách sản phẩm";
        $data = Product::all();
        $cate = Category::all();
        return $this->render('admin.product.index',compact('title', 'data', 'cate'));
    }

    public function add(){
        $categories = Category::all();
        $title = "Thêm sản phẩm";
        return $this->render('admin.product.form-data',compact('title','categories'));
    }

    public function edit(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }else{
            header('Location:'.ADMIN_URL.'product');
        }
        $categories = Category::all();
        $product = Product::find($id);
        $title = "Sửa sản phẩm";
        return $this->render('admin.product.form-data',compact('title','categories','product'));
    }

    public function save(){
        $data = $_POST;
        $filename = "";
        $imageFile = $_FILES['image'];
        if ($imageFile['size'] > 0) {
            $filename = uniqid() . '-' . $imageFile['name'];
            move_uploaded_file($imageFile['tmp_name'], './public/uploads/' . $filename);
            $filename = "public/uploads/" . $filename;
        }
        if(isset($_POST['id'])){
            $model = Product::find($_POST['id']);
        }else{
            $model = new Product();
        }
        $model->fill($data);
        if(!empty($filename)){
            $model->image =  $filename;
        }
        $model->save();

        header('Location:'.ADMIN_URL.'product');
    }

    public function delete(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }else{
            header('Location:'.ADMIN_URL.'product');
        }
        Product::destroy($id);
        header('Location:'.ADMIN_URL.'product');
    }
}