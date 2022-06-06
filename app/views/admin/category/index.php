<?php
include_once './app/views/admin/layout/head.php';
include_once './app/views/admin/layout/header.php';
include_once './app/views/admin/layout/sidebar.php';

?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
              <div class="card-body">
                <table class="table table-bordered text-center">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Tên danh mục</th>
                      <th>Trạng thái</th>
                      <th style="width: 60px" ></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 0 ; foreach ($data as $row) { $i++ ?>
                      <tr>
                      <td><?= $i ?></td>
                      <td><?= $row->name ?></td>
                      <td><?= $row->status == 1 ? "Hiển thị" : "Không hiển thị" ?></td>
                      <td>
                        <a href="" class="btn btn-primary" >Sửa</a>
                        <a href="" class="btn btn-danger " >Xóa</a>
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
<?php
include_once './app/views/admin/layout/footer.php';



?>