<h2>Bài 1</h2>
<?php 
// Câu a
$num = rand(10,1000);
echo("Số nguyên tố bé hơn {$num} là :");
echo "<br>";
for($i=1; $i<$num; $i++)
{
	$dem = 0;//đếm ước số của num
	for($j=2; $j <= sqrt($i); $j++)
	{
		if($i % $j==0)
		{
			$dem++;
		}
	}
	if($dem==0 && $i > 1)
	{
		echo("\t".$i);
	}
}

// Câu b
echo "<br><br>";

$n = (int)(log($num, 10) + 1);
echo("{$num} có : ".$n." chữ số");
echo "<br><br>";

// Câu c
$max = 0;
while($num > 0){
	$tam = $num % 10;
	$num = $num / 10;
	if($tam > $max)
	{
		$max = $tam;
	}
}
echo("Số lớn nhất là: ".$max);



?>
