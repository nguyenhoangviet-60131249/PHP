<?php
//lấy mã nhân viên 
$manv = $_GET['id'];

include("connect.php");
// câu truy vấn
$query = "SELECT * FROM `nhanvien` WHERE manv = '".$manv."'";

//thực thi câu truy vấn
$result = $con->query($query);

$nhanvien = $result->fetch_array();

if($nhanvien['gioitinh']==1)
{
	$gioitinh="Nam";
}	
else 
	$gioitinh="Nữ";
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
		<title>Chi tiết nhân viên</title>
	</head>
</html>
<body>
	<h2>Thông tin nhân viên</h2>
	<p>Ảnh : <img src="upload/<?php echo $nhanvien['anh']; ?>" style="max-width: 100px;"></p>
	<p>Mã nhân viên : <?php echo $nhanvien['manv'];?></p>
	<p>Họ tên nhân viên : <?php echo $nhanvien['hoten'];?></p>
	<p>Ngày sinh : <?php echo $nhanvien['ngaysinh'];?></p>
	<p>Giới tính : <?php echo $gioitinh;?></p>
	<p>Địa chỉ : <?php echo $nhanvien['diachi'];?></p>
	<p>Mã loại nhân viên : <?php echo $nhanvien['maloainv'];?></p>
	<p>Mã phòng : <?php echo $nhanvien['maphong'];?></p>
</body>
</html>
