<?php
  $msg="";
  if(isset($_POST["submit"]))
  {
   $LoginID=$_POST["t1"];
   $Password=$_POST["t2"];
   $username=$_POST["t3"];
   $phoneno=$_POST["t4"];
   $Email=$_POST["t5"];
   
   $db=mysqli_connect("localhost","root","");
   mysqli_select_db($db,"olx_product");
   mysqli_query($db,"insert into registrationol values('$LoginID','$username','$Password','$phoneno','$Email')");
   mysqli_query($db,"insert into loginid values('$LoginID','$Password')");
   $a=mysqli_affected_rows($db);
   mysqli_close($db);
   $msg=$a."registrationol Record Inserted";
   
}
 ?>
  
<form method="post" action="olxregistration.php">
<h1 style="border: 2px solid DodgerBlue;">REGISTRATION FORM FOR OLX</h1>

<table border="0">
<tr>

    <td><label for="text"><b>Login ID</b></label></td>
    <td><input type="text" placeholder="Enter Name" name="t1" required><br></td>
</tr>
<tr>
    <td><label for="psw"><b>Password</b></label></td>
    <td><input type="password" placeholder="Enter Password" name="t2" required><br></td>
</tr>
<tr>
	<td><label for="text"><b>User Name</b></label></td>
    <td><input type="text" placeholder="Enter Name" name="t3" required><br></td>
</tr>
<tr>
	<td><label for="text"><b>Phone No.</b></label></td>
    <td><input type="text" placeholder="Enter number" name="t4" required><br></td>
</tr>
<tr>
    <td><label for="email"><b>Email </b></label></td>
    <td><input type="text" placeholder="Enter Email " name="t5" required><br></td>
</tr>
	<br>
<tr>
    <td><input type="submit" class="btn" name="submit" value="Register"></td>
	<td><a href="login.php">Login</a></td>
</tr>
</form>
<?php echo $msg;
?>
