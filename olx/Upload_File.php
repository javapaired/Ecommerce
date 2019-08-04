<?php
 if(isset($_POST["submit"]))
 {     
     move_uploaded_file($_FILES["f1"]["tmp_name"],"test.jpg");
     move_uploaded_file($_FILES["f1"]["tmp_name"],"Upload_Pic/mypic.jpg");
     //move_uploaded_file($_FILES["f1"]["tmp_name"],"Upload_Pic/".$_FILES["f1"]["name"]);
     echo "File Upload Successfully..";
 }
?>

<form action="Upload_File.php" method="post" enctype="multipart/form-data">
    Choose File <input type="file" name="f1">    <br>
	<input type="submit" value="Upload" name="submit">
<form>
  
  
  