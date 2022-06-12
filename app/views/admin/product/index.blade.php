@extends('admin.layout.main-layout')
@section('content')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card-body">
          <table class="table table-bordered text-center ">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Danh mục</th>
                <th style="width:120px">Hình ảnh</th>
                <th style="width: 60px"><a href="{{ADMIN_URL}}product/add" class="btn btn-info">Tạo mới</a></th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 0;
              foreach ($data as $row) {
                $i++ ?>
                <tr>
                  <td><?= $i ?></td>
                  <td class="fw-normal"><?= $row->name ?></td>
                  <td><?= number_format($row->price, 2, '.', ',') ?>₫</td>
                  <td><?php foreach ($cate as $item) {
                        if ($row->cate_id == $item->id) {
                          echo $item->name;
                        }
                      } ?></td>
                  <td><img src="{{strpos($row->image,'://') == false ? BASE_URL . $row->image :  $row->image}}" alt="" width="120px"></td>
                  <td>
                    <a href="{{ ADMIN_URL . "product/edit?id=$row->id" }}" class="btn btn-primary">Sửa</a>
                    <a href="{{ ADMIN_URL . "product/delete?id=$row->id" }}" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này ?');" class="btn btn-danger ">Xóa</a>
                  </td>
                </tr>
              <?php  } ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div><!-- /.container-fluid -->
</section>
@endsection




