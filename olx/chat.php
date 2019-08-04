<?php
  $msg="";
  if(isset($_POST["submit"]))
  {
   $ID=$_POST["t1"];
   $Date=$_POST["t2"];
   $Product_Code=$_POST["t3"];
   $Message=$_POST["t4"]; 
   $db=mysqli_connect("localhost","root","");
   mysqli_select_db($db,"olx_product");
   mysqli_query($db,"insert into chat values('$ID','$Date','$Product_Code','$Message')");
   $a=mysqli_affected_rows($db);
   mysqli_close($db);
   $msg=$a."chat Record Inserted";
   
  }
 ?>
<form method="post" action="chat.php">
<h1>CHAT</h1>

<table border="0">
<tr>
   <td> <label for="text"><b>ID</b></label></td>
   <td><input type="text"  Name" name="t1" required><br></td>
</tr>
<tr>
    <td><label for="text"><b>Date</b></label></td>
   <td> <input type="Date" placeholder="" name="t2" required><br></td>
</tr>
<tr>
	<td><label for="text"><b>Product Code</b></label></td>
   <td> <input type="text" placeholder="" name="t3" required><br></td>
</tr>
<tr>
	<td><label for="text"><b>Message</b></label></td>
    <td><input type="text" placeholder="" name="t4" required><br></td>
</tr>

   <td> <input type="submit" class="btn" name="submit" value="Submit"></td>
	</table>
</tr>
</form>
<?php echo $msg;?>