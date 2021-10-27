<?php

		include("connect.php");
		$sql = "delete from phongban where maphong = '$_GET[id]'";
		mysqli_query($con,$sql);
		header('Location: list_pb.php');

?>
