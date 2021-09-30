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
    echo "<fonr color:'red'>Không được để rỗng</font>";
}



?>
<form align='center' action="ketquapheptinh.php" method="post">
<table>
    <thead>
        <th colspan="2" align="center"><h3>PHÉP TÍNH TRÊN 2 SỐ</h3></th>
    </thead>
    <tr>
        <td>
            <input type="radio" name="pt" value="Cộng" <?php if(isset($_POST['pt'])&&$_POST['pt']=='Cộng') echo 'checked="checked"';?>>Cộng<br>
        </td>
        <td>
            <input type="radio" name="pt" value="Trừ" <?php if(isset($_POST['pt'])&&$_POST['pt']=='Trừ') echo 'checked="checked"';?>>Trừ<br>
        </td>
        <td>
            <input type="radio" name="pt" value="Nhân" <?php if(isset($_POST['pt'])&&$_POST['pt']=='Nhân') echo 'checked="checked"';?>>Nhân<br>
        </td>
        <td>
            <input type="radio" name="pt" value="Chia" <?php if(isset($_POST['pt'])&&$_POST['pt']=='Chia') echo 'checked="checked"';?>>Chia
        </td>
    </tr>
    <tr><td>Số thứ 1:</td>
     <td><input type="text" name="so1"  value="<?php echo $so1 ?>"></td>
    </tr>
	
    <tr>
	 <td>Số thứ 2:</td>
     <td><input type="text" name="so2" value="<?php echo $so2 ?>"></td>
    </tr>
    
    <tr>
     <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
    </tr>
</table>
</form>
</body>


</html>
	