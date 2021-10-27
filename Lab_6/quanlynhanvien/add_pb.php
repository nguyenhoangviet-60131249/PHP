<?php 
include("header.php");
?>
<!DOCTYPE html>
<html>
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<title>Thêm mới phòng ban</title>
	</head>
</html>
<body>
<?php 
include('connect.php');
if(isset($_POST['them']))
{
	$maphong = mysqli_escape_string($con,$_POST['maphong']);
	$tenphong = mysqli_escape_string($con,$_POST['tenphong']);
	$sql = "INSERT INTO `phongban`(`maphong`, `tenphong`) VALUES('$maphong','$tenphong')";
	mysqli_query($con,$sql);
	header('Location: list_pb.php');
}
?>
	<div class="container">
		<h2 align="center" style="color: red;">Thêm mới phòng ban</h2><br>
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Mã phòng</label>
				<input type="text" name="maphong" placeholder="Nhập mã phòng" class="form-control">
			</div>
			<br>
			<div class="form-group">
				<label>Tên phòng</label>
				<input type="text" name="tenphong" placeholder="Tên phòng" class="form-control">
			</div>
			<br>
			<input type="submit" name="them" value="Add" class="btn btn-success">
		</form>
	</div>
<?php

?>
</body>
