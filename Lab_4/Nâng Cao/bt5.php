<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Nguyễn Hoangfg Việt</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid mt-3">
        <h2>Nhập thông tin sản phẩm</h2>
        <form action="bt5_sp.php" method="POST" role="form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Mã sản phẩm" name="masp"><br>
                <input type="text" class="form-control" placeholder="Tên sản phẩm" name="tensp"><br>
                <input type="text" class="form-control" placeholder="Đơn vị tính" name="dvt"><br>
                <input type="number" class="form-control" placeholder="Số lượng" name="soluong"><br>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>

</html>
