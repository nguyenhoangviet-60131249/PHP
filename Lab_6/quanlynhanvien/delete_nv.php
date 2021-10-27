<?php

		include("connect.php");
		$sql = "delete from nhanvien where manv = '$_GET[id]'";
		mysqli_query($con,$sql);
		header('Location: list_nv.php');

?>
