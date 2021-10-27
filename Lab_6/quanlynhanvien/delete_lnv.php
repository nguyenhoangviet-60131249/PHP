<?php

		include("connect.php");
		$sql = "delete from loainv where maloainv = '$_GET[id]'";
		mysqli_query($con,$sql);
		header('Location: list_lnv.php');

?>
