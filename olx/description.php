<?php
 $id=$_GET["id"];

   $db=mysqli_connect("localhost","root","");
   mysqli_select_db($db,"olx_product");
   $result=mysqli_query($db,"select * from posting where product_code='$id'");
   while($row=mysqli_fetch_array($result))
   {
	   echo "Category: ".$row[1];
	   echo "Description: ".$row[5];
   }
   mysqli_close($db);
?>
<br>
<h2>Product Discription</h2>
<img src="Upload_Pic/<?php echo $id; ?>.jpg" width="200px"
	alt=" picture of product" title ="running with this is not recommended."
	align="left"/>

