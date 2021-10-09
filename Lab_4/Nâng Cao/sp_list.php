<?php
// khởi tạo biến session
session_start();
//kiểm tra xem cái biến session[sanpham]
if(isset($_SESSION['sanpham']))
{
	//gán biến sp_data bằng mảng sanpham mà mình đã input dữ liệu vào 
	$sp_data = $_SESSION['sanpham'];
}
else
{
	// nếu chưa có session thì cho nó vào 1 cái array rỗng
	$sp_data=array();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Nguyễn Hoàng Việt</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<h2>Danh sách sản phẩm</h2>
		<a href="bt5.php">Thêm mới</a>
		<?php 
			if(isset($_COOKIE['msg'])){	
		?>
		<div class="alert alert-success">
			<strong>Thông báo : </strong>
			<?php echo $_COOKIE['msg']; ?>
		</div>
		<?php } ?>
		<table class="table table">
			<thead>
				<tr>
					<th>STT</th>
					<th>Mã sản phẩm</th>
					<th>Tên sản phẩm</th>
					<th>Đơn vị tính</th>
					<th>Số lượng</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$i=0;
				foreach($sp_data as $value){
						$i++;	
				?>
				<tr>
					<td><?php echo $i;  ?></td>
					<td><?php echo $value['masp'];  ?></td>
					<td><?php echo $value['tensp'];  ?></td>
					<td><?php echo $value['dvt'];  ?></td>
					<td><?php echo $value['soluong'];  ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>
