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
		<title>Thêm mới nhân viên</title>
	</head>
</html>
<body>
<?php 
include('connect.php');
if(isset($_POST['them']))
{
	//check lỗi sql injection
	$manv = mysqli_escape_string($con,$_POST['manv']);
	$hoten = mysqli_escape_string($con,$_POST['hoten']);
	$ngaysinh = mysqli_escape_string($con,$_POST['ngaysinh']);
	$gioitinh = mysqli_escape_string($con,$_POST['gioitinh']);
	$diachi = mysqli_escape_string($con,$_POST['diachi']);
	$anh = $_FILES['anh']['name'];
	$loainhanvien = mysqli_escape_string($con,$_POST['loainhanvien']);
	$phongban = mysqli_escape_string($con,$_POST['phongban']);
	
	
	if($anh != null)
	{
		$path = "upload/";
		$tmp_name = $_FILES['anh']['tmp_name'];
		$anh = $_FILES['anh']['name'];
		move_uploaded_file($tmp_name,$path.$anh);
		$sql = "INSERT INTO `nhanvien`(`manv`, `hoten`, `ngaysinh`, `gioitinh`, `diachi`, `anh`, `maloainv`, `maphong`) VALUES('$manv','$hoten','$ngaysinh','$gioitinh','$diachi','$anh','$loainhanvien','$phongban')";
		mysqli_query($con,$sql);
		header('Location: list_nv.php');
	}
}
?>
	<div class="container">
		<h2 align="center" style="color: red;">Thêm mới nhân viên</h2><br>
		<form action="add_nv.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Mã nhân viên</label>
				<input type="text" name="manv" placeholder="Nhập mã nhân viên" class="form-control">
			</div>
			<br>
			<div class="form-group">
				<label>Tên nhân viên</label>
				<input type="text" name="hoten" placeholder="Tên nhân viên" class="form-control">
			</div>
			<br>
			<div class="form-group">
				<label>Ngày sinh</label>
				<input type="date" name="ngaysinh" placeholder="Ngày sinh" class="form-control">
			</div>
			<br>
			<div class="form-group">
				<label>Giới tính</label><br>
				<input type="radio" name="gioitinh" value="1" checked>Nam
				<input type="radio" name="gioitinh" value="0">Nữ
			</div>
			<br>
			<div class="form-group">
				<label>Địa chỉ</label>
				<textarea style="height:200px" type="text" name="diachi" placeholder="Địa chỉ" class="form-control">
					
				</textarea>
			</div>
			<br>
			<div class="form-group">
				<label>Ảnh</label><br>
				<input type="file" name="anh" class="form-control">
			</div>
			<br>
			<div class="form-group">
				<label>Loại nhân viên</label><br>
				<select name="loainhanvien">
					<?php 
						$query = "select * from loainv";
						$result = mysqli_query($con,$query);
						if(mysqli_num_rows($result)<>0){
							while($row=mysqli_fetch_array($result)){
								$manhanvien=$row['maloainv'];
								$tenloainv=$row['tenloainv'];
								echo "<option value='$manhanvien' "; 
										if(isset($_REQUEST['loainhanvien']) && ($_REQUEST['loainhanvien']==$manhanvien)) echo "selected='selected'";
								echo ">$tenloainv</option>";
							}
						}
						mysqli_free_result($result);
					?>
				</select>
			</div>
			<br>
			<div class="form-group">
				<label>Phòng ban</label><br>
				<select name="phongban">
					<?php 
						$query = "select * from phongban";
						$result = mysqli_query($con,$query);
						if(mysqli_num_rows($result)<>0){
							while($row=mysqli_fetch_array($result)){
								$maphong=$row['maphong'];
								$tenphong=$row['tenphong'];
								echo "<option value='$maphong' "; 
										if(isset($_REQUEST['phongban']) && ($_REQUEST['phongban']==$maphong)) echo "selected='selected'";
								echo ">$tenphong</option>";
							}
						}
						mysqli_free_result($result);
					?>
				</select>
			</div>
			<br>
			<input type="submit" name="them" value="Add" class="btn btn-success">
		</form>
	</div>
