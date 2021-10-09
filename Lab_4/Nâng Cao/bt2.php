<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>TÍNH TỔNG DÃY SỐ</title>

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

            /* text-anchor: middle; */

            color: #ff8100;

            font-size: medium;

        }

    </style>

</head>
<body>
<?php 
if(isset($_POST['dayso']))
        $dayso=$_POST['dayso'];
else $dayso=0;
function total($dayso)
{
    $lenght = array();
    $lenght = explode(",",$dayso);
    $lenght = array_sum($lenght);
    return $lenght;
}
if(isset($_POST['tinh']))
{
    total($dayso);
}
?>
<form align='center' action="" method="post">
<table>
    <thead>
        <th colspan="2" align="center"><h3>TÍNH TỔNG DÃY SỐ</h3></th>
    </thead>
    <tr><td>Dãy số:</td>
     <td><input type="text" name="dayso" value="<?php  echo $dayso;?> "/></td>
    </tr>
    <tr><td>Kết quả:</td>
     <td><input type="text" name="ketqua" disabled="disabled" value="<?php  echo total($dayso);?> "/></td>
    </tr>
    <tr>
     <td colspan="2" align="center"><input type="submit" value="tinh" name="tinh" /></td>
    </tr>
</table>
</form>
</body>
</html>
