<?php
  $msg="";
  if(isset($_POST["submit"]))
  {
   $Product_Code=$_POST["t1"];
   $Category=$_POST["t2"];
   $Name=$_POST["t3"];
   $Price=$_POST["t4"];
   $Company=$_POST["t5"];
   $Description =$_POST["t6"];
   
   $db=mysqli_connect("localhost","root","");
   mysqli_select_db($db,"olx_product");
   mysqli_query($db,"insert into posting values('$Product_Code','$Category','$Name','$Price','$Company','$Description')");
   $a=mysqli_affected_rows($db);
   mysqli_close($db);
   $msg=$a."posting Record Inserted";
   move_uploaded_file($_FILES["f1"]["tmp_name"],"Upload_Pic/".$Product_Code.".jpg"); 
  }
 ?>
   
<form method="post" action="post.php" enctype="multipart/form-data">
<h1>POST</h1>

<table border="0">
<tr>
   <td> <label for="text"><b>Product Code</b></label></td>
   <td><input type="text"  Name" name="t1" required><br></td>
</tr>
<tr>
    <td><label for="text"><b>Category</b></label></td>
   <td> <input type="text" placeholder="" name="t2" required><br></td>
</tr>
<tr>
	<td><label for="text"><b>Name</b></label></td>
   <td> <input type="text" placeholder="" name="t3" required><br></td>
</tr>
<tr>
	<td><label for="text"><b>Price</b></label></td>
    <td><input type="text" placeholder="" name="t4" required><br></td>
</tr>
<tr>
   <td> <label for="text"><b>Company </b></label></td>
    <td><input type="text" placeholder=" " name="t5" required><br></td>
</tr>
<tr>
	<td><label for="text"><b>Description </b></label></td>
   <td> <input type="text" placeholder="" name="t6" required><br></td>
</tr>
<tr>
    <td> Choose File <input type="file" name="f1"></td>
</tr>
<tr>
   <td> <input type="submit" class="btn" name="submit" value="Submit"></td>
</tr>
<td><a href="inbox1.php">User Inbox</a></td>
</table>
</form>
<?php echo $msg;?>