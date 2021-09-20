<h2>Bài 5</h2>
<?php
$num = rand(-100,100);
if($num < 2)
{
	echo $num." không phải là số nguyên tố <br>";
	return 0;
}
$dem = 0; //đếm ước của num
for($i=2; $i<=sqrt($num); $i++)
{
	if($num % $i == 0) $dem++;
}
// kiểm tra ước số
if($dem == 0)
{
	echo $num." là số nguyên tố"."<br>";
	$fp = @fopen("soNT.txt","a+");  //mở file
	//kiểm tra mở file
	if(!$fp)
	{
		echo "mở file ko thành công";
	}
	else{
		$data = $num." là số nguyên tố"."\n";
		fwrite($fp, $data);
		fclose($fp);
	}
}
else{
	echo $num." không phải là số nguyên tố"."<br>";
}
?>
