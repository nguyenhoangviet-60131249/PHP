<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Phép tính 2 số</title>
    <style type="text/css">
        body {  
            background-color: #d24dff;
        }
        table{
            background: #ffd94d;
            border: 0 solid yellow;
        }
        thead{

           background: #fff14d;    
        }
        td {

            color: blue;
        }
        h3{
            font-family: verdana;
            text-align: center;
            color: #ff8100;
            font-size: medium;
        }
    </style>
</head>
<body>
	
<?php

if (isset($_POST['so1'])){
    $so1 = trim($_POST['so1']);
}
else $so1=0;


if (isset($_POST['so2'])){
    $so2 = trim($_POST['so2']);
}
else $so2=0;

//check số rỗng
if($so1 == "" or $so2 == "")
{
    echo "<fonr color='red'>Không được để số 1 hoặc số 2 rỗng</font><br>";
}



if (isset($_POST['pt']))
{
    $pt=trim($_POST['pt']);
}
else $pt='';


if ($pt == "")
{
    echo "<fonr color='red'>Vui lòng chọn phép toán</font>";
}

//thực hiện phép tính
if (isset($_POST['tinh']))
{
    if(is_numeric($so1) && is_numeric($so2)){
        switch($pt){
            case "Cộng":
                $pt = "Cộng";
                $kq = $so1+$so2;
                break;
            case "Trừ":
                $pt = "Trừ";
                $kq = $so1-$so2;
                break;
            case "Nhân":
                $pt = "Nhân";
                $kq = $so1 * $so2;
                break;
            case "Chia":
                $pt = "Chia";
                $kq = $so1 / $so2;
                break;
        }
    }
    else {
        echo '<font>Vui lòng nhập số</font>';
    }
    
}
else $kq=0;
	
?>

<form align='center' action="pheptinh.php" >
<table>
    <thead>
        <th colspan="2" align="center"><h3>PHÉP TÍNH TRÊN 2 SỐ</h3></th>
    </thead>
    <tr>
		<td name="pt"> Phép tính là &nbsp;&nbsp;
        	<?php if (isset($_POST['pt'])) echo "".$_POST['pt'] ?>
		</td>
    </tr>
    <tr><td>Số thứ 1:</td>
     <td><input type="text" name="so1" value="<?php if (isset($_POST['so1'])) echo "".$_POST["so1"]?>"></td>
    </tr>
	
    <tr>
	 <td>Số thứ 2:</td>
     <td><input type="text" name="so2" value="<?php if (isset($_POST['so2'])) echo "".$_POST['so2']?>"></td>
    </tr>
	
	<tr>
	 <td>Kết quả</td>
	 <td><input type="text" disabled="disabled" name="kq" value="<?php echo $kq; ?>"> </td>
    </tr>
    
    <tr>
        <td><a href="javascript:window.history.back(-1);">Quay lại trang trước</a></td>
    </tr>
    
</table>
</form>
</body>
</html>
