<?php 
include("header.php");
include("connect.php");

//câu truy vấn lấy dữ liệu của nhân viên có manv
$query = "SELECT * FROM `loainv` WHERE maloainv = $_GET[id] ";

//thực thi câu truy vấn
$result = mysqli_query($con,$query);


$row = mysqli_fetch_array($result);

//check POST???
if(isset($_POST['update']))
{
	$tenloainv = mysqli_escape_string($con,$_POST['tenloainv']);
	$sql = "UPDATE `loainv` set `tenloainv` = '$tenloainv' where maloainv = $_GET[id] ";
	mysqli_query($con,$sql);
	header('Location: list_lnv.php');
}


?>

<div>
	<div><h2 style="color: red; padding-top: 20px; text-align: center;">Cập nhật</h2></div>
	<form action="" method="POST"  enctype="multipart/form-data">
		<table width="500"  border="1" style="margin: auto;">
			<tr>
				<td>Mã loại nhân viên</td>
				<td><input type="text" name="maloainv" value="<?php echo $row['maloainv']; ?>"  disabled="disabled"></td>
			</tr>
			<tr>
				<td>Tên loại nhân viên</td>
				<td><input type="text" name="tenloainv" value="<?php echo $row['tenloainv']; ?>" ></td>
			</tr>
			<tr>
				<td></td>
			<td><input type="submit" name="update" value="Update" ></td>
			</tr>
		</table>
	</form> 
</div>
