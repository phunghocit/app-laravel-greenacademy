<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Green Academy</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('master/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('master/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('master/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('master/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('master/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('master/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('master/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('master/plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('master/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('master/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('master/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}
    {{-- ============================test --}}
    <script src="{{ asset('lib/js/myjs.js')}}"></script>

    <script src="{{ asset('bootstrapnew/js/bootstrap.min.js')}}"></script>

    <script src="{{ asset('bootstrapnew/css/bootstrap.min.css')}}"></script>
    
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    <script src="{{ asset('lib/js/jquery/jquery-1.12.3.min.js')}}" type="text/javascript" ></script>

    <link href="{{ asset('lib/css/customize-template.css')}}" type="text/css" media="screen, projection" rel="stylesheet" />
  </head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('images/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Green Academy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('master/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
           <!-- Sidebar Menu -->
           <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Hệ thống
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @if(Auth::user()->role == 1 ||Auth::user()->role == 2 ||Auth::user()->role == 4) 
              <li class="nav-item">
                <a href="{{ route('logout')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Đăng Xuất</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('nhanvien.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tạo tài khoản</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Đổi mật khẩu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Phân quyền</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thông tin</p>
                </a>
              </li>
            </ul>
          </li>
          @elseif (Auth::user()->role == 3)
          <li class="nav-item">
            <a href="{{ route('logout')}}" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Đăng Xuất</p>
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Đổi mật khẩu</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Thông tin</p>
            </a>
          </li>
        </ul>
      </li>
      @endif
          <!-- =================================DanhMuc======================================== -->
      @if(Auth::user()->role == 1 ||Auth::user()->role == 2 ||Auth::user()->role == 4) 
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Danh mục
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('khuvuc.index')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Khu vực</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('nhasanxuat.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nhà sản xuất</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('nhaphanphoi.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nhà phân phối</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('vattu.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vật tư</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('nhomvattu.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nhóm vật tư</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('donvitinh.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Đơn vị tính</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('chatluong.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chất lượng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('kho.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kho</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('congtrinh.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Công trình</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('phongban.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Phòng ban</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('nhanvien.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nhân viên</p>
                </a>
              </li>
            </ul>
          </li>
      @endif
        <!-- ============================================================ -->
      @if(Auth::user()->role == 1 ||Auth::user()->role == 2 ) 
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Chức năng
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('nhapkho.index')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nhập kho</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('xuatkho.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Xuất kho</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('chuyenkho.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chuyển kho</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thẻ kho</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('baocao.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kho hàng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Báo cáo</p>
                </a>
              </li>
            </ul>
          </li>
      @elseif (Auth::user()->role == 3 ||Auth::user()->role == 4)
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Chức năng
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thẻ kho</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('baocao.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kho hàng</p>
                </a>
              </li>
            </ul>
          </li>
      @endif
          <!-- =============================================================== -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Trợ giúp
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hướng dẫn</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liên hệ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thông tin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Phản hồi</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- =============================================================== -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            @yield('header-content')
            <!-- <h1 class="m-0">Starter Page</h1> -->
          </div><!-- /.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div> -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      @yield('main-content')
  </div><!-- /.container-fluid -->
</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023-2024 <a href="https://adminlte.io">Green Academy</a>.</strong> Quản lý kho hàng thông minh.
  </footer>
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{ asset('master/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('master/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('master/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('master/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('master/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('master/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('master/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('master/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('master/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('master/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('master/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('master/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('master/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('master/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purpplugins/jquery/jquery.min.jsoses) -->
<script src="{{ asset('master/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('master/dist/js/demo.js') }}"></script>
<!-- CKEditor -->
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
<script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script> -->
<script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
{{-- ====================================================== --}}
<script src="{{ asset('lib/js/jquery/jquery-tablesorter.js')}}" type="text/javascript" ></script>

<script src="{{ asset('lib/js/bootstrap/bootstrap-collapse.js')}}" type="text/javascript" ></script>

{{-- <script src="{{ asset('lib/js/bootstrap/bootstrap-modal.js')}}" type="text/javascript" ></script> --}}

<script src="{{ asset('lib/js/bootstrap/bootstrap-transition.js')}}" type="text/javascript" ></script>
{{-- <script src="{{ asset('lib/js/bootstrap/bootstrap-alert.js')}}" type="text/javascript" ></script> --}}

<script src="{{ asset('lib/js/bootstrap/bootstrap-dropdown.js')}}" type="text/javascript" ></script>
<script src="{{ asset('lib/js/bootstrap/bootstrap-scrollspy.js')}}" type="text/javascript" ></script>
<script src="{{ asset('lib/js/bootstrap/bootstrap-tab.js')}}" type="text/javascript" ></script>
<script src="{{ asset('lib/js/bootstrap/bootstrap-tooltip.js')}}" type="text/javascript" ></script>
<script src="{{ asset('lib/js/bootstrap/bootstrap-popover.js')}}" type="text/javascript" ></script>
<script src="{{ asset('lib/js/bootstrap/bootstrap-button.js')}}" type="text/javascript" ></script>

<script src="{{ asset('lib/js/bootstrap/bootstrap-carousel.js')}}" type="text/javascript" ></script>
<script src="{{ asset('lib/js/bootstrap/bootstrap-typeahead.js')}}" type="text/javascript" ></script>
<script src="{{ asset('lib/js/bootstrap/bootstrap-affix.js')}}" type="text/javascript" ></script>
<script src="{{ asset('lib/js/bootstrap/bootstrap-datepicker.js')}}" type="text/javascript" ></script>

<script src="{{ asset('lib/js/jquery/jquery-chosen.js')}}" type="text/javascript" ></script>
<script src="{{ asset('lib/js/jquery/virtual-tour.js')}}" type="text/javascript" ></script>
{{-- ====================================================== --}}

{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> --}}
<script src="sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@yield('js-custom')

</body>
</html>
