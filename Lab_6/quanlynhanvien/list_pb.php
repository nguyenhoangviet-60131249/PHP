<?php 
// Ket noi CSDL
include("connect.php");
// Chuan bi cau truy van & Thuc thi cau truy van
$strSQL = "SELECT * FROM phongban";
$result = mysqli_query($con,$strSQL);
?>
<?php 
include("header.php");
?>
<body>
	<div class="container">
		<h2 align="center" style="color: red;">Danh sách phòng ban</h2>
		<div class="table-responsive">
			<a href="add_pb.php" class="btn btn-success">Thêm mới phòng ban</a>
			<table class="table table-hover" id="my-table">
				<thead>
					<tr>
						<th>Mã phòng ban</th>
						<th>Tên phòng ban</th>
						<th style="text-align: center;">Chức năng</th>
					</tr>
				</thead>
				<tbody>
					<?php while ($row = $result->fetch_assoc()){?>
						<tr>
							<td><?= $row['maphong']; ?></td>
							<td><?= $row['tenphong']; ?></td>
							<td><a href="edit_pb.php?id=<?= $row["maphong"]; ?>" class="btn btn-success">Sửa</a></td>
							<td><a onclick="return window.confirm('Bạn muốn xóa không');" href="delete_pb.php?id=<?= $row["maphong"]; ?>" class="btn btn-warning">Xóa</a></td>
						</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</div>
</body>
<script src="http://code.jquery.com/jquery.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="C:/xampp/htdocs/PHP_NTU/Lab_6/quanlynhanvien/style/jquery.dataTables.js"></script>
<script type="text/javascript">
	$('#my-table').DataTable();
</script>
</html>
