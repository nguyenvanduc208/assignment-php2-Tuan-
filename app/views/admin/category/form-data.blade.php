@extends('admin.layout.main-layout')
@section('content')
    <div class="row justify-content-md-center">
        <div class="col-10 ">
            <form action="{{ADMIN_URL}}category/save" method="post" enctype="multipart/form-data">
                @if (isset($category))
                    <input type="hidden" name="id" value="{{$category->id}}">
                @endif
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{isset($category) ? $category->name : ''}}" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 form-check">
                    <input type="radio" class="form-check-input" name="status" id="exampleCheck1" {{ isset($category) && $category->status == 1 ? "checked" : "" }} value="1">
                    <label class="form-check-label" for="exampleCheck1">Hiển thị</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="radio" class="form-check-input" name="status" id="exampleCheck1"  {{ isset($category) && $category->status == 0 ? "checked" : "" }} value="0">
                    <label class="form-check-label" for="exampleCheck1">Không hiển thị</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
