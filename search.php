<?php
include 'connection.php'; 
include 'user.php';
	
$category=$_GET['cat'];
$item=$_GET['item'];
$q="select count(*) as count from tblproduct where product_category='$category' AND product_name like '$item'";
$s=mysqli_query($conn,$q);
$f=mysqli_fetch_array($s);
if($f['count']!=0)
{
	$q="select * from tblproduct where product_category='$category' AND product_name like '$item'";
	$s=mysqli_query($conn,$q);
	echo "<table><tr><th>Product Id</th><th>Product Name</th><th>Product Rate</th><th>Product Image</th></tr>";
	while($row=mysqli_fetch_array($s))
	{
	  echo "<tr>";
	  echo "<td>"."$row[0]"."</td>";
	  echo "<td>"."$row[1]"."</td>";
	  echo "<td>"."$row[2]"."</td>";
	  echo "<td>"."$row[4]"."</td>";
	  echo "</tr>";
	}
	echo "</table>";
}
else
{
	echo "Search could'nt found";
}
include 'footer.php';
?>