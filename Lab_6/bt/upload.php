<?php
if($_FILES['ProductImg']['name']!=NULL)
{
move_uploaded_file($_FILES["ProductImg"]["tmp_name"],"upload/".$_FILES["ProductImg"]["name"]);
echo "<h3>Upload thành công</h3>";
echo "Name: " .$_FILES["ProductImg"]["name"]."<br>";
echo "Type: " .$_FILES["ProductImg"]["type"]."<br>";
echo "Size: " .($_FILES["ProductImg"]["size"]/1024)."Kb<br>";
}
else echo "Vui lòng chọn file upload!";
?>
    <form method="post" enctype="multipart/form-data">
        <input type="FILE" name="ProductImg"><br>
        <input type="submit" value="Submit">
    </form>
