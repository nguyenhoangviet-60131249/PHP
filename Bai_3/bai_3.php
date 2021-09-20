<h2>Bài 3</h2>
<?php
echo "Bảng cửu chương từ 1-10 <br>";
for($i = 1; $i < 10; $i ++) 
{
	for($j = 1; $j <= 10; $j ++) 
	{
		echo "$i x $j = " . ($i * $j);
		echo "<br>";
	}
	echo "<br>";
}	
?>

