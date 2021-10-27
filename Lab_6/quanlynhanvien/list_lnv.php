<?php 
// Ket noi CSDL
include("connect.php");
// Chuan bi cau truy van & Thuc thi cau truy van
$strSQL = "SELECT * FROM loainv";
$result = mysqli_query($con,$strSQL);
?>
<?php 
include("header.php");
?>
<body>
	<div class="container">
		<h2 align="center" style="color: red;">Danh sách loại nhân viên</h2>
		<div class="table-responsive">
			<a href="add_lnv.php" class="btn btn-success">Thêm mới loại nhân viên</a>
			<table class="table table-hover" id="my-table">
				<thead>
					<tr>
						<th>Mã loại NV</th>
						<th>Tên loại NV</th>
						<th style="text-align: center;">Chức năng</th>
					</tr>
				</thead>
				<tbody>
					<?php while ($row = $result->fetch_assoc()){?>
						<tr>
							<td><?= $row['maloainv']; ?></td>
							<td><?= $row['tenloainv']; ?></td>
							<td><a href="edit_lnv.php?id=<?= $row["maloainv"]; ?>" class="btn btn-success">Sửa</a></td>
							<td><a onclick="return window.confirm('Bạn muốn xóa không');" href="delete_lnv.php?id=<?= $row["maloainv"]; ?>" class="btn btn-warning">Xóa</a></td>
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

