<?php
// xử lý khi người dùng nhập vào
// khởi tạo biến session để lưu trữ thông tin
session_start();
if(isset($_POST['submit']))
{
	$masp = $_POST['masp'];
	$tensp=$_POST['tensp'];
	$dvt = $_POST['dvt'];
	$soluong=$_POST['soluong'];
	$_SESSION['sanpham'][$masp]=[
		'masp' => $masp,
		'tensp' => $tensp,
		'dvt' => $dvt,
		'soluong' => $soluong,
	];
	setcookie('msg','Thêm sản phẩm thành công',time() + 5);
	header("Location: sp_list.php");
}
?>
