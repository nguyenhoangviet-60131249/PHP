<?php 
include("header.php");
// Ket noi CSDL
include("connect.php");
// Chuan bi cau truy van & Thuc thi cau truy van
$strSQL = "SELECT * FROM nhanvien";
$result = mysqli_query($con,$strSQL);
?>
<body>
    <div class="container">
        <h2 align="center" style="color: red;">Danh sách nhân viên</h2>
        <div class="table-responsive">
            <a href="add_nv.php" class="btn btn-success">Thêm mới nhân viên</a>
            <br><br>
            <table id="myTable" class="table table-hover" data-page-length="25">
                <thead>
                    <tr>
                        <th>Mã NV</th>
                        <th>Họ tên NV</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                        <th>Địa chỉ</th>
                        <th>Ảnh</th>
                        <th style="text-align: center;">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()){
						if($row['gioitinh']==1) $gioitinh="Nam";
						else $gioitinh="Nữ";?>
                    <tr>
                        <td><?= $row['manv']; ?></td>
                        <td><?= $row['hoten']; ?></td>
                        <td><?= $row['ngaysinh']; ?></td>
                        <td><?= $gioitinh; ?></td>
                        <td><?= $row['diachi']; ?></td>
                        <td><img src="upload/<?php echo $row['anh']; ?>" style="max-width: 100px;"></td>
                        <td><a href="detail_nv.php?id=<?= $row["manv"]; ?>" class="btn btn-info">Chi tiết</a></td>
                        <td><a href="edit_nv.php?id=<?= $row["manv"]; ?>" class="btn btn-success">Sửa</a></td>
                        <td><a onclick="return window.confirm('Bạn muốn xóa không');" href="delete_nv.php?id=<?= $row["manv"]; ?>" class="btn btn-warning">Xóa</a></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</body>


</html>
