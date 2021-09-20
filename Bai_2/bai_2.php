<h2>Bài 2</h2>

<?php
$n = rand(1,10);
echo "Số được tạo là: $n <br>";
for($i = 1; $i <= 10; $i ++) 
{
	echo "$n x $i = " . ($n * $i);
	echo "<br>";
}
?>

