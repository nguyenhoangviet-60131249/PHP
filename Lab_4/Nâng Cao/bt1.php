<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Xử lý n</title>
</head>
<body>
	

<?php
if(isset($_POST['n']))
	$n=$_POST['n'];
else $n=0;

if(isset($_POST['val']))
	$val=$_POST['val'];
else $val=0;

if(isset($_POST['pos']))
	$pos=$_POST['pos'];
else $pos=0;
$str = "";
// hàm tạo mảng random
function arrRan(&$arr,$n,&$str)
{
	for($i=0;$i<$n;$i++)
	{
		$ran=rand(-200,200);
		$arr[$i]=$ran;
	}
	$str.="Mảng là : ".implode(" ",$arr)."&#13;&#10;";
}

//hàm sắp xếp tăng dần
function sortArr(&$arr,&$str)
{
	asort($arr);
	$str.="Sắp xếp tăng dần : ".implode(" ",$arr)."\n";
}

// chèn 1 số vào 1 vị trí
function addVal(&$arr,$n,$val,$pos,&$str)
{
	for($i = $n; $i > $pos ; $i--)
	{
		$arr[$i]=$arr[$i-1];
	}
	$arr[$pos] = $val;
	$n++;
	
	$str.="Số $val đã được thêm tại vị trí $pos : ".implode(" ",$arr)."\n";
}


// Từ phần tử đầu tiên đến phần tử được chèn vào là tăng dần; từ phần tử được chèn vào đến phần tử cuối là giảm dần.
function sort1(&$arr,$n,$val,$pos,&$str)
{
	++$n;
	for($i = $n; $i > $pos ; $i--)
	{
		$arr[$i]=$arr[$i-1];
	}
	$arr[$pos] = $val;
	$array1=array();
	for($a = 0 ; $a < $pos ;$a++)
	{
		$array1[$a]=$arr[$a];
	}
	asort($array1);
	
	$array2 = array();
    for ($a = $n; $a > $pos; $a--) 
	{
        $array2[$a] = $arr[$a];
    }
    arsort($array2);
	
	$arr = $array1 + $array2;
	$str.="Mảng sau khi sắp xếp : ".implode(" ",$arr)."\n";
}


if(isset($_POST['hthi']))
{
	$arr=array();
	arrRan($arr,$n,$str);
	addVal($arr,$n,$val,$pos,$str);
	sort1($arr,$n,$val,$pos,$str);
	sortArr($arr,$str);
	
}
?>
<form action="" method="post">
	Nhập n: <input type="text" name="n" value="<?php echo $n;?>"/>
	Nhập số cần chèn:<input type="text" name="val" value="<?php echo $val;?>"/>
	Nhập vị trí cần chèn:<input type="text" name="pos" value="<?php echo $pos;?>"/>
	<input type="submit" name="hthi" value="Hiển thị"/>
	Kết quả: <br>
	<textarea cols="70" rows="10" name="ketqua"> <?php echo $str;?></textarea>
</form>
</body>
</html>
