@extends('admin.layout.main-layout')
@section('content')
    <div class="row justify-content-md-center">
        <div class="col-10 ">
            <form action="{{ ADMIN_URL }}product/save" method="post" enctype="multipart/form-data">
                @if (isset($product))
                    <input type="hidden" name="id" value="{{ $product->id }}">
                @endif
                <div class="mb-3">
                    <label for="exampleFormControlSelect1">Chọn danh mục</label>
                    <select class="form-control" name="cate_id" id="exampleFormControlSelect1">
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}" @if (isset($product) && $product->cate_id == $item->id) selected @endif>
                                {{ $item->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                        value="{{ isset($product) ? $product->name : '' }}" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Giá</label>
                    <input type="text" class="form-control" name="price" id="exampleInputEmail1"
                        value="{{ isset($product) ? $product->price : '' }}" aria-describedby="emailHelp">
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose image</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
