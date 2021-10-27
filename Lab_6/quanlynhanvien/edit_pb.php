<?php 
include("header.php");
include("connect.php");

//câu truy vấn lấy dữ liệu của nhân viên có manv
$query = "SELECT * FROM `phongban` WHERE maphong = $_GET[id] ";

//thực thi câu truy vấn
$result = mysqli_query($con,$query);


$row = mysqli_fetch_array($result);

//check POST???
if(isset($_POST['update']))
{
	$tenphong = mysqli_escape_string($con,$_POST['tenphong']);
	$sql = "UPDATE `phongban` set `tenphong` = '$tenphong' where maphong = $_GET[id] ";
	mysqli_query($con,$sql);
	header('Location: list_pb.php');
}


?>

<div>
	<div><h2 style="color: red; padding-top: 20px; text-align: center;">Cập nhật</h2></div>
	<form action="" method="POST"  enctype="multipart/form-data">
		<table width="500"  border="1" style="margin: auto;">
			<tr>
				<td>Mã phòng</td>
				<td><input type="text" name="maloainv" value="<?php echo $row['maphong']; ?>"  disabled="disabled"></td>
			</tr>
			<tr>
				<td>Tên phòng</td>
				<td><input type="text" name="tenphong" value="<?php echo $row['tenphong']; ?>" ></td>
			</tr>
			<tr>
				<td></td>
			<td><input type="submit" name="update" value="Update" ></td>
			</tr>
		</table>
	</form> 
</div>
