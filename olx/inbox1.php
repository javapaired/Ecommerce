

<h2>Product Gallery</h2>

<table>

<?php
   $db=mysqli_connect("localhost","root","");
   mysqli_select_db($db,"olx_product");
   $result=mysqli_query($db,"select * from posting");
   while($row=mysqli_fetch_array($result))
   {
	   echo "<tr>";
	   echo "<td><a href='description.php?id=$row[0]'><img src='Upload_Pic/$row[0].jpg' width='200px'></a></td><td>$row[1]</td>";
	   echo "</tr>";
   }
   mysqli_close($db);
?>
</table>
