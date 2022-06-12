<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends BaseController{
    public function __construct(){
        $_SESSION['active'] = 'category';
    }

    public function index(){
        $title = "Danh sách danh mục";
       $data = Category::all();
       return $this->render('admin.category.index',compact('title', 'data'));
    }

    public function add(){
        $title = "Thêm danh mục";
        return $this->render('admin.category.form-data',compact('title'));
    }

    public function edit(){
        if(isset($_GET['id']) || !empty($_GET['id'])){
            $id = $_GET['id'];
        }else{
            header('Location:'.ADMIN_URL.'category');
        }

        $title = "Sửa sản phẩm";
        $category = Category::find($id);
        return $this->render('admin.category.form-data',compact('title','category'));
    }

    public function save(){
        $data = $_POST;
        if(isset($data['id'])){
            $model = Category::find($data['id']);
        }else{
            $model = new Category();
        }
        
        $model->fill($data);
        $model->save();
        header("Location:".ADMIN_URL."category");
    }

    public function delete(){
        if(isset($_GET['id']) || !empty($_GET['id'])){
            $id = $_GET['id'];
        }else{
            header('Location:'.ADMIN_URL.'category');
        }

        $products = Product::where('cate_id',$id)->get();

        foreach($products as $product){
            $md = Product::find($product->id);
            $md->cate_id = 1;
            $md->save();
        }

        Category::destroy($id);
        header('Location:'.ADMIN_URL.'category');

    }

}

?>