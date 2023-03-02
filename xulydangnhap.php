<?php
ob_start();
session_start();
if(isset($_SESSION['matk']))
{
	$layid_dangnhap = $_SESSION['matk'];
}
include("class/class-lms.php");
$p = new lms();
if(isset($_SESSION['matk']))
{
	$phanquyen = $p->laycot("SELECT PhanQuyen FROM taikhoan WHERE MaTK = '$layid_dangnhap' LIMIT 1");
    if($phanquyen == 1){
        header('location: QTV/indexquantrivien.php');
    }
		if($phanquyen == 2){
			header('location: QLDT/indexqldt.php');
		}
			if($phanquyen == 3){
				header('location: Giangvien/indexgiangvien.php');
			}
				if($phanquyen == 4){
					header('location: Hocvien/indexhocvien.php');
				}
		
}
?>