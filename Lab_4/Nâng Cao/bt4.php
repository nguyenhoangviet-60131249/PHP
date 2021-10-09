<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>MA TRẬN</title>
</head>

<body>
    <?php
    if(isset($_POST['n'])) $n=$_POST['n'];
	else $n=0;
    if(isset($_POST['m'])) $m=$_POST['m'];
	else $m=0;
	$ketqua="";
	//$count=0;
	
	// hàm tìm số cuối là số lẻ
	function soLe($array,$m,$n)
	{
		$count=0;
		for($i=0;$i<$m;$i++)
		{			
			for($j=0;$j<$n;$j++)
			{
				$soCuoi = $array[$i][$j] % 10;
				if($soCuoi %2 != 0) $count++;
			}
		}
		return $count;
	}

    if(isset($_POST['hthi']))
	{
		// tạo mảng random
        $array = array();
        for ($i = 0; $i < $m; $i++) 
		{
            for ($j = 0; $j < $n; $j++) 
			{
                $array[$i][$j] = rand(-200, 200);
            }
        }
		
		//đếm chữ số lẻ
		$ketqua = soLe($array,$m,$n);
		// for($i=0;$i<$m;$i++)
		// {			
		// 	for($j=0;$j<$n;$j++)
		// 	{
		// 	$soCuoi = $array[$i][$j] % 10;
		// 	if($soCuoi %2 != 0) $count++;
		// 	}
		// 	
    }
   
    
    ?>
     <div class="form">
        <div class="container">
            <form class="signup" action="" method="post">
                <div class="header">
                    <h3>MA TRẬN</h3>
                </div>
                <div class="inputs">
                <table>
                  <tr>
                      <td> Số dòng:</td>
                      <td><input type="text" name="m" value="<?php echo $m;?>"></td>
                  </tr>
                  <tr>
                      <td>Số cột:</td>
                      <td><input type="text" name="n" value="<?php echo $n;?>"></td>
                  </tr>
                </table>
                <input type="submit" name="hthi" value="Hiển thị"/><br>
                <textarea cols="70" rows="10" wrap="off"> 
                <?php 
                     echo "Ma trận vừa nhập:\n";
					 for ($i = 0; $i < $m; $i++) 
					 {  
						 for ($j = 0; $j < $n; $j++) 
						{
							echo $array[$i][$j]. " ";
						}
					 echo "\n"; 
					 }
					 //đếm chữ số lẻ
					 echo "Đếm chữ số lẻ ".$ketqua."\n";
					 

					 //thay phần từ
					 echo "Ma trận sau khi thay thế \n";
					 for ($i = 0; $i < $m; $i++) 
					 {  
						for ($j = 0; $j < $n; $j++) 
						{

							if($array[$i][$j] != 0)
							{
								echo "	".$array[$i][$j] = 1;
							}	
						}
						echo "\n";
					 }
					 
                    ?>
                </textarea>
            </div>
        </form>
    </div>
</div>
</body>
</html>
