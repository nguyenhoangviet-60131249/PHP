<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=button] {
  background-color: #58257b;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=button]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Bố cục linh hoạt: khi màn hình có chiều rộng dưới 600px thì hai cột chồng 
lên nhau thay vì nằm cạnh nhau */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
}
}
</style>
</head>
<body>
	
<?php 

$ten = $_POST['ten'];
$diachi = $_POST['diachi'];
$sdt = $_POST['sdt'];
$gt = $_POST['gt'];
$qt = $_POST['qt'];
$ghichu = $_POST['ghichu'];
?>
<div class="container">
  <form action="" method="POST">
	<div class="row">
		<div class="col-25">
			<label for="fname">Họ và tên</label>
		</div>
		<div class="col-75">
			<input type="text" id="fname" name="ten" value="<?php echo $ten; ?>">
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="fname">Địa chỉ</label>
		</div>
		<div class="col-75">
			<input type="text" id="fname" name="diachi" value="<?php echo $diachi; ?>">
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="fname">Số điện thoại</label>
		</div>
		<div class="col-75">
			<input type="text" id="fname" name="sdt" value="<?php echo $sdt; ?>">
		</div>
	</div>
	
	<div class="row">
		<div class="col-25">
			<label for="fname">Giới tính</label>
		</div>
		<div class="col-75">
			<input type="text" id="fname" name="gt" value="<?php echo $gt; ?>">
		</div>
	</div>
	
	<div class="row">
		<div class="col-25">
			<label for="country">Quốc tịch</label>
		</div>
		<div class="col-75">
			<input type="text" id="fname" name="qt" value="<?php echo $qt; ?>">
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-25">
			<label for="fname">Các môn đã học</label>
		</div>
		<div class="col-75">
			<?php
				if(isset($_POST['mh1'])) echo " " . $_POST['mh1'] . ",";
				if(isset($_POST['mh2'])) echo " " . $_POST['mh2'].",";
				if(isset($_POST['mh3'])) echo " " . $_POST['mh3'] . ",";
				if(isset($_POST['mh4'])) echo " " . $_POST['mh4'];	
			?>
		</div>
	</div>

	<div class="row">
		<div class="col-25">
			<label for="subject">Ghi chú</label>
		</div>
		<div class="col-75">
			<input type="text" id="fname" name="ghichu" value="<?php echo $ghichu; ?>">
		</div>
	</div>
	<div class="row">
		<a href="javascript:window.history.back(-1);"><input type="button" value="Quay lại"></a>
	</div>
  </form>
</div>

</body>
</html>
