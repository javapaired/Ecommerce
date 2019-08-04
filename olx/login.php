<?php
session_start();
   $flag=false;
  if(isset($_POST["submit"]))
  {
   $id=$_POST["t1"];
   $Password=$_POST["t2"];
   $db=mysqli_connect("localhost","root","");
   mysqli_select_db($db,"olx_product");
   $result=mysqli_query($db,"select * from login where LoginID='$id' and Password='$Password'");
   while($row=mysqli_fetch_array($result))
   {
	$flag=true;
   }
   mysqli_close($db);
   
   if($flag==true)
   {
	   $_SESSION["loginid"]=$id;
	   header("location:inbox1.php");
   }
   else
	   echo "Invalid";
  }
 ?>
 
<form method="post" action="login.php">
 LoginID <input type="text" name="t1" ><br>
  Password<input type="password" name="t2" ><br>
  <input type="submit" value="Login" name="submit">
  <br><br>
  <td><a href="olxregistration.php">Registration</a></td>
</form>