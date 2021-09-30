<html>
<body>
<form method="post" action="checkbox.php">
	<input type="checkbox" name="chk1" value="en" 
		<?php if(isset($_POST['chk1'])&& $_POST['chk1']=='en') echo 'checked'; else echo ""?>/>English <br> 
	<input type="checkbox" name="chk2" value="vn"
		<?php if(isset($_POST['chk2'])&& $_POST['chk2']=='vn') echo 'checked'; else echo ""?>/>Vietnam<br>
	
	<input type="submit" value="submit"><br>
</form>



</body>
</html>
