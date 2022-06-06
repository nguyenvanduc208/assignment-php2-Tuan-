  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= BASE_URL . "public/dist/img/AdminLTELogo.png" ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= BASE_URL . "public/dist/img/user2-160x160.jpg" ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Lưu Anh Tuấn</a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= ADMIN_URL . "category" ?>" class=" nav-link <?= isset($_SESSION['active']) && $_SESSION['active'] == 'category' ? 'active' : '' ?>">
              <i class="fa fa-list-alt" aria-hidden="true"></i>
              <p>
                Quản trị danh mục
              </p>
            </a> 
          </li>
          <li class="nav-item">
            <a href="<?= ADMIN_URL . "product" ?>" class="nav-link <?= isset($_SESSION['active']) && $_SESSION['active'] == 'product' ? 'active' : '' ?>">
              <i class="fa fa-list-alt" aria-hidden="true"></i>
              <p>
                Quản trị sản phẩm
              </p>
            </a> 
          </li>
        </ul>
      </nav>
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1><?= $title ?></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>