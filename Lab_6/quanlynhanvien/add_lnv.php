<?php 
include("header.php");
?>
<body>
<?php 
include('connect.php');
if(isset($_POST['them']))
{
	$maloainv = mysqli_escape_string($con,$_POST['maloainv']);
	$tenloainv = mysqli_escape_string($con,$_POST['tenloainv']);
	$sql = "INSERT INTO `loainv`(`maloainv`, `tenloainv`) VALUES('$maloainv','$tenloainv')";
	mysqli_query($con,$sql);
	header('Location: list_lnv.php');
}
?>
	<div class="container">
		<h2 align="center" style="color: red;">Thêm mới loại nhân viên</h2><br>
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Mã nhân viên</label>
				<input type="text" name="maloainv" placeholder="Nhập mã loại nhân viên" class="form-control">
			</div>
			<br>
			<div class="form-group">
				<label>Tên nhân viên</label>
				<input type="text" name="tenloainv" placeholder="Tên loại nhân viên" class="form-control">
			</div>
			<br>
			<input type="submit" name="them" value="Add" class="btn btn-success">
		</form>
	</div>
<?php

?>
</body>
