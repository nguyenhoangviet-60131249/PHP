<h2>Bài 4</h2>
<?php 
echo "Ma trận 2x5 <br>";
$array=[];
for($i=0;$i<2;$i++)
{
	for($j=0;$j<5;$j++)
	{
		echo $array[$i][$j]=rand(-100,100)."\t";
	}
	echo "<br>";
}
?>

