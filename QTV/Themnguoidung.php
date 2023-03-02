<?php
ob_start();
session_start();
if(isset($_SESSION['matk']))
{
	$layid_dangnhap = $_SESSION['matk'];
}
include("../class/class-lms.php");
$p = new lms();
if(isset($_SESSION['matk']))
{
	$phanquyen = $p->laycot("SELECT PhanQuyen FROM taikhoan WHERE MaTK = '$layid_dangnhap' LIMIT 1");
    if($phanquyen != 1){
        header('location: ../dangnhap.php');
    }
}
else{
    header('location: ../dangnhap.php');
}
?>
<!DOCTYPE html>
<!-- saved from url=(0032)http://127.0.0.1:5500/index.html -->
<html lang="en" style="height: auto;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ITC - KN | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="../dist/js/jquery-3.6.0.js"></script>
  <script src="../dist/js/bootstrap.js"></script>
  <script>
        var count=1;
        $(document).ready(function()
        {
            function ktmatk()
                {
                    var regten=/^(([A-Z]{2,5})([0-9]{3,5}))$/;
                    var ten=$("#form-matk").val();
                    if(regten.test(ten)  )
                    {
                        
                        $("#matk").html("*")
                    return true;

                    }
                    else
                    {
                        $("#matk").html("Sai định dạng")
                        return false;
                    }
                }
                $("#form-matk").blur(ktmatk)
                //-------------//
                function ktmand()
                {
                    var regten=/^(([A-Z]{2,4})([0-9]{3,6})([_])([A-Z]{1}[a-z]{1,10}))$/;
                    var ten=$("#form-manguoidung").val();
                    if(regten.test(ten))
                    {
                        $("#mand").html("*")
                    return true;
                    }
                    else
                    {
                        $("#mand").html("Sai định dạng")
                        return false;
                    }
                }
                $("#form-manguoidung").blur(ktmand)
                
                function ktten()
                {
                    var regten=/^([A-Z|Đ]{1}[a-z|á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|í|ì|ỉ|ĩ|ị|ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|ý|ỳ|ỷ|ỹ|ỵ]*\s)*([A-Z|Ý|Đ]{1}[á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|í|ì|ỉ|ĩ|ị|ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|ý|ỳ|ỷ|ỹ|ỵ|a-z]*)$/;
                    var ten=$("#form-tennguoidung").val();
                    if(regten.test(ten))
                    {
                        $("#ten").html("*")
                    return true;
                    }
                    else
                    {
                        $("#ten").html("Sai định dạng")
                        return false;
                    }
                }
                $("#form-tennguoidung").blur(ktten)
                //------------//
                function ktsdt()
                {
                    var regten=/^([0-9]{10})$/;
                    var ten=$("#form-sodienthoai").val();
                    if(regten.test(ten))
                    {
                        $("#sdt").html("*")
                    return true;
                    }
                    else
                    {
                        $("#sdt").html("Sai định dạng")
                        return false;
                    }
                }
                $("#form-sodienthoai").blur(ktsdt)
                //------------//
                function ktemail()
                {
                    var regten=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                    var ten=$("#form-email").val();
                    if(regten.test(ten))
                    {
                        $("#email").html("*")
                    return true;
                    }
                    else
                    {
                        $("#email").html("Sai định dạng")
                        return false;
                    }
                }
                $("#form-email").blur(ktemail)
                //------------//
                $("#btn-themnguoidung").click(function()
                    {
                        if(ktmatk()==false)
                        {
                            alert("Mã tài khoản không hợp lệ! Vui lòng nhập lại")
                        }
                        if(ktmand()==false) 
                        {
                        alert("Mã người dùng không Hợp Lệ! Vui lòng nhập lại");
                        return false;
                        }
                        //----//
                        if(ktten()==false) 
                        {
                        alert("Tên người dùng không Hợp Lệ! Vui lòng nhập lại");
                        return false;
                        }
                        if(ktsdt()==false) 
                        {
                        alert("Số điện thoại không hợp lệ! Vui lòng nhập lại");
                        return false;
                        }
                        if(ktemail()==false) 
                        {
                        alert("Email không hợp lệ! Vui lòng nhập lại");
                        return false;
                        }
                    })
            })

    </script>
</head>
<body class="sidebar-mini layout-fixed sidebar-closed sidebar-collapse" style="height: auto;">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center" style="height: 0px;">
    <img class="animation__shake" src="./ITC - KN _ Dashboard_files/main-logo.png" alt="AdminLTELogo" height="60" width="60" style="display: none;">
  </div>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <img src="../img/main-img/main-logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ITC - KN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition os-host-overflow os-host-overflow-y"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 590px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible os-viewport-native-scrollbars-overlaid" style="overflow-y: scroll;"><div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="indexquantrivien.php" class="d-block"><?php echo $p->laycot("SELECT TenDangNhap FROM taikhoan WHERE MaTK = '$layid_dangnhap' LIMIT 1");?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="indexquantrivien.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              QUẢN TRỊ VIÊN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Themnguoidung.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Người Dùng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Quanlynguoidung.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản Lý người dùng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Quanlythongtinnguoidung.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý thông tin người dùng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Logout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Đăng xuất</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="height: 91.2037%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 534px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable ui-sortable">
            <!-- TO DO List -->
            <div class="card">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  <?php echo $p->laycot("SELECT TenDangNhap FROM taikhoan WHERE MaTK = '$layid_dangnhap' LIMIT 1");?>
                </h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body" style="text-align: center;">
              <form action="" method="post">
                <caption><strong style="color: deepskyblue; padding-top: 40px;padding-bottom: 40px; font-size: 30px; font-family: 'Times New Roman', Times, serif; text-indent: 20px;">Thêm người dùng</strong></caption><br>
                <div>
               
                    <input type="text" name="form-matk" id="form-matk" style="height: 40px; min-width: 400px; margin-top: 40px; border: 3px double navy; border-top-style: hidden; border-left-style: hidden; border-right-style: hidden; font-family: 'Times New Roman', Times, serif; text-align: center;" placeholder="Mã TK: (GV001-HV001-QLDT001)ADMIN001"  > </div><br>
                    <div id="matk"  style="color: red;"></div>
                <div>
                <div>
                    <input type="text"  name="form-manguoidung" style="height: 40px; min-width: 400px; margin-top: 40px; border: 3px double navy; border-top-style: hidden; border-left-style: hidden; border-right-style: hidden; font-family: 'Times New Roman', Times, serif; text-align: center;"id="form-manguoidung" placeholder="Mã ND: (GV001_,HV001_,QLDT001_)ADM001_Khang"><br>
                <div id="mand" style="color: red;"> </div>
                </div>
                <div>
                    <input type="text" style="height: 40px; min-width: 400px; margin-top: 40px; border: 3px double navy; border-top-style: hidden; border-left-style: hidden; border-right-style: hidden; font-family: 'Times New Roman', Times, serif; text-align: center;"name="form-tennguoidung" id="form-tennguoidung" placeholder="Họ và tên: Nguyen Hoang Khang"><br>
                    <div id="ten"style="color: red;"></div>
                </div>
                <div>
                <select name="form-vaitro" id="form-vaitro" style="height: 40px; min-width: 400px; margin-top: 40px; border: 3px double navy; border-top-style: hidden; border-left-style: hidden; border-right-style: hidden; font-family: 'Times New Roman', Times, serif; text-align: center;">
                    <option value="1">Quản trị viên</option>
                    <option value="2">Quản lý đào tạo</option>
                    <option value="3">Giảng viên</option>
                    <option value="4">Học viên</option>
                </select><br>
                <div id="vaitr"></div>
                </div>
                <div>
                    <input type="tel" style="height: 40px; min-width: 400px; margin-top: 40px; border: 3px double navy; border-top-style: hidden; border-left-style: hidden; border-right-style: hidden; font-family: 'Times New Roman', Times, serif;  text-align: center;"name="form-sodienthoai" id="form-sodienthoai" placeholder="Số điện thoại:092796785"><br>
                    <div id="sdt" style="color: red;"></div>
                </div>
                <div>
                    <input type="email" style="height: 40px; min-width: 400px; margin-top: 40px; border: 3px double navy; border-top-style: hidden; border-left-style: hidden; border-right-style: hidden; font-family: 'Times New Roman', Times, serif; text-align: center;"name="form-email" id="form-email" placeholder="Email: tngaan39@gmail.com"><br>
                    <div id="email"style="color: red;"></div>
                </div>
                <div>
                    <input type="submit" value="Xác nhận" id="btn-themnguoidung" name="btn-themnguoidung" class="btn btn-primary float-right">
                    <div id=""></div>
                </div>
            </form>
            <?php
                    			switch($_POST['btn-themnguoidung'] ?? null)
                                {
                                    case 'Xác nhận':
                                    { 
                                        $matk = $_REQUEST['form-matk'];
                                        $tendangnhap = $_REQUEST['form-manguoidung'];
                                        $tennguoidung = $_REQUEST['form-tennguoidung'];
                                        $vaitro = $_REQUEST['form-vaitro'];
                                        if($_REQUEST['form-vaitro'] == 1){
                                            $phanquyen = 'Quản Trị Viên';
                                        }
                                            if($_REQUEST['form-vaitro'] == 2){
                                                $phanquyen = 'Quản Lý Đào Tạo';
                                            }
                                                if($_REQUEST['form-vaitro'] == 3){
                                                    $phanquyen = 'Giảng Viên';
                                                }
                                                    if($_REQUEST['form-vaitro'] == 4){
                                                        $phanquyen = 'Học Viên';
                                                    }
                                        $sdt = $_REQUEST['form-sodienthoai'];
                                        $email = $_REQUEST['form-email'];
                                        if($matk != '' && $matk!="select MaTK from taikhoan where MaTK"&& $tendangnhap != '' && $tennguoidung != '' && $vaitro != '' && $sdt != '' && $email != '')
                                        {
                                           
                                            if($p->themxoasua("INSERT INTO taikhoan(MaTK,TenDangNhap,PhanQuyen,VaiTro) VALUES('$matk','$tendangnhap','$vaitro','$phanquyen')")==1)
                                            {
                                                echo '<script> alert("Thêm người dùng thành công");</script>';
                                            }
                                            else
                                            {
                                                echo '<script> alert("Thêm người dùng không thành công. Thông tin đã có. Vui lòng kiểm tra lại thông tin người dùng");</script>';
                                            }
                                        }
                                        else
                                        {
                                            echo '<script> alert("Vui lòng nhập đầy đủ thông tin người dùng");</script>';
                                        }
                                        break;
                                    }
                    
                                }
                ?>
              </div>
              <!-- /.card-body -->
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright © 2014-2021 ITC KN.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>NGUYỄN HOÀNG KHANG - NGÔ THANH NGÂN</b>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none; bottom: 8px; top: 57px; height: 591px;">
    <!-- Control sidebar content goes here -->
  <div class="p-3 control-sidebar-content os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition" style="height: 591px;"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: -16px; width: 0px; height: 0px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible os-viewport-native-scrollbars-overlaid"><div class="os-content" style="padding: 16px; height: 100%; width: 100%;"><h5>Customize AdminLTE</h5><hr class="mb-2"><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Dark Mode</span></div><h6>Header Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Dropdown Legacy Offset</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>No border</span></div><h6>Sidebar Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Collapsed</span></div><div class="mb-1"><input type="checkbox" value="1" checked="checked" class="mr-1"><span>Fixed</span></div><div class="mb-1"><input type="checkbox" value="1" checked="checked" class="mr-1"><span>Sidebar Mini</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini MD</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini XS</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Flat Style</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Legacy Style</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Compact</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Indent</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Hide on Collapse</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Disable Hover/Focus Auto-Expand</span></div><h6>Footer Options</h6><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div><h6>Small Text Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Body</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Navbar</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Brand</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Nav</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Footer</span></div><h6>Navbar Variants</h6><div class="d-flex"><select class="custom-select mb-3 text-light border-0 bg-white"><option class="bg-primary">Primary</option><option class="bg-secondary">Secondary</option><option class="bg-info">Info</option><option class="bg-success">Success</option><option class="bg-danger">Danger</option><option class="bg-indigo">Indigo</option><option class="bg-purple">Purple</option><option class="bg-pink">Pink</option><option class="bg-navy">Navy</option><option class="bg-lightblue">Lightblue</option><option class="bg-teal">Teal</option><option class="bg-cyan">Cyan</option><option class="bg-dark">Dark</option><option class="bg-gray-dark">Gray dark</option><option class="bg-gray">Gray</option><option class="bg-light">Light</option><option class="bg-warning">Warning</option><option class="bg-white">White</option><option class="bg-orange">Orange</option></select></div><h6>Accent Color Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Dark Sidebar Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 text-light border-0 bg-primary"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Light Sidebar Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Brand Logo Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-secondary">Secondary</option><option class="bg-info">Info</option><option class="bg-success">Success</option><option class="bg-danger">Danger</option><option class="bg-indigo">Indigo</option><option class="bg-purple">Purple</option><option class="bg-pink">Pink</option><option class="bg-navy">Navy</option><option class="bg-lightblue">Lightblue</option><option class="bg-teal">Teal</option><option class="bg-cyan">Cyan</option><option class="bg-dark">Dark</option><option class="bg-gray-dark">Gray dark</option><option class="bg-gray">Gray</option><option class="bg-light">Light</option><option class="bg-warning">Warning</option><option class="bg-white">White</option><option class="bg-orange">Orange</option><a href="http://127.0.0.1:5500/index.html#">clear</a></select></div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div></aside>
  <!-- /.control-sidebar -->
<div id="sidebar-overlay"></div></div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="./ITC - KN _ Dashboard_files/jquery.min.js.tải xuống"></script>
<!-- jQuery UI 1.11.4 -->
<script src="./ITC - KN _ Dashboard_files/jquery-ui.min.js.tải xuống"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="./ITC - KN _ Dashboard_files/bootstrap.bundle.min.js.tải xuống"></script>
<!-- ChartJS -->
<script src="./ITC - KN _ Dashboard_files/Chart.min.js.tải xuống"></script>
<!-- Sparkline -->
<script src="./ITC - KN _ Dashboard_files/sparkline.js.tải xuống"></script>
<!-- JQVMap -->
<script src="./ITC - KN _ Dashboard_files/jquery.vmap.min.js.tải xuống"></script>
<script src="./ITC - KN _ Dashboard_files/jquery.vmap.usa.js.tải xuống"></script>
<!-- jQuery Knob Chart -->
<script src="./ITC - KN _ Dashboard_files/jquery.knob.min.js.tải xuống"></script>
<!-- daterangepicker -->
<script src="./ITC - KN _ Dashboard_files/moment.min.js.tải xuống"></script>
<script src="./ITC - KN _ Dashboard_files/daterangepicker.js.tải xuống"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="./ITC - KN _ Dashboard_files/tempusdominus-bootstrap-4.min.js.tải xuống"></script>
<!-- Summernote -->
<script src="./ITC - KN _ Dashboard_files/summernote-bs4.min.js.tải xuống"></script>
<!-- overlayScrollbars -->
<script src="./ITC - KN _ Dashboard_files/jquery.overlayScrollbars.min.js.tải xuống"></script>
<!-- AdminLTE App -->
<script src="./ITC - KN _ Dashboard_files/adminlte.js.tải xuống"></script>
<!-- AdminLTE for demo purposes -->
<script src="./ITC - KN _ Dashboard_files/demo.js.tải xuống"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="./ITC - KN _ Dashboard_files/dashboard.js.tải xuống"></script>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>


<div class="daterangepicker ltr show-ranges opensright"><div class="ranges"><ul><li data-range-key="Today">Today</li><li data-range-key="Yesterday">Yesterday</li><li data-range-key="Last 7 Days">Last 7 Days</li><li data-range-key="Last 30 Days">Last 30 Days</li><li data-range-key="This Month">This Month</li><li data-range-key="Last Month">Last Month</li><li data-range-key="Custom Range">Custom Range</li></ul></div><div class="drp-calendar left"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-calendar right"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div></div><div class="jqvmap-label" style="display: none;"></div></body></html>