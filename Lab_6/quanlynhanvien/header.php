<?php 
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['user_name']))

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="list_nv.php">Quản lý nhân viên <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="list_pb.php">Quản lý phòng ban</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="list_lnv.php">Quan lý loại nhân viên</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle p-0" data-toggle="dropdown" href="#">
                        <img class="rounded-circle" style="width:60px" src="style/images/user.png">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">
                            Tài khoản <?php echo $_SESSION['name']; ?>
                        </a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">
                            Đăng xuất
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
<?php include("footer.php");?>
