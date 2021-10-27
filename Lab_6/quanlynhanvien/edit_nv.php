<?php 
include("header.php");
include("connect.php");

//câu truy vấn lấy dữ liệu của nhân viên có manv
$query = "SELECT * FROM `nhanvien` WHERE manv = '$_GET[id]'";

//thực thi câu truy vấn
$result = mysqli_query($con,$query);


$row = mysqli_fetch_array($result);

//check POST???
if(isset($_POST['sua']))
{
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
		$sql = "UPDATE nhanvien set anh = '$anh' where manv =$_GET[id]";
		mysqli_query($con,$sql);
		header("Location: list_nv.php");
	}
	$sql = " UPDATE `nhanvien` set  `hoten` = '$hoten', `ngaysinh` = '$ngaysinh' , `gioitinh` = $gioitinh,
					`diachi` = '$diachi',`anh`=$anh,`maloainv`=$loainhanvien,`maphong`=$phongban where manv = $_GET[id] ";
	mysqli_query($con,$sql);
	header('Location: list_nv.php');
}


?>

<div>
	<div><h2 style="color: red; padding-top: 20px; text-align: center;">Cập nhật</h2></div>
	<form action="" method="POST"  enctype="multipart/form-data">
		<table width="500"  border="1" style="margin: auto;">
			<tr>
				<td>Mã nhân viên</td>
				<td><input type="text" name="manv"  value="<?php echo $row['manv']; ?>" disabled="disabled" ></td>
			</tr>
			<tr>
				<td>Họ tên nhân viên</td>
				<td><input type="text" name="hoten" value="<?php echo $row['hoten']; ?>" ></td>
			</tr>
			<tr>
				<td>Ngày sinh</td>
				<td><input type="date" name="ngaysinh"  value="<?php echo $row['ngaysinh']; ?>"></td>
			</tr>
			<tr>
				<td>Giới tính</td>
				<td>
					<input type="radio" name="gioitinh" value="1" <?php if ($row['gioitinh']==1) echo "checked";?> >Nam
					<input type="radio" name="gioitinh" value="0" <?php if ($row['gioitinh']==0) echo "checked";?> >Nữ
				</td>
			</tr>
			<tr>
				<td>Địa chỉ</td>
				<td><input type="text" name="diachi" value="<?php echo $row['diachi']; ?>" ></td>
			</tr>
			<tr>
				<td>ảnh</td>
				<td><input type="file" name="anh"></td>
				<td><img src="upload/<?php echo $row['anh']; ?>" style="max-width: 100px;"></td>
			</tr>
			
			<tr>
				<td>Loại nhân viên</td>
				<td>
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
				</td>
			</tr>
			<tr>
				<td>Phòng ban</td>
				<td>
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
				</td>
			</tr>
			<tr>
				<td></td>
			<td><input type="submit" name="sua" value="Update" ></td>
			</tr>
		</table>
	</form> 
</div>
