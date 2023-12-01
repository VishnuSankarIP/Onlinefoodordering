<?php
include 'connection.php';
include 'admin.php';
echo "PRODUCT DETAILS...<br>";
$q="select * from tblproduct";
$result=mysqli_query($conn,$q);
echo "<table border=1><tr><th>Product Id</th><th>Product Name</th><th>Product Rate</th><th>Product Image</th></tr>";
while($row=mysqli_fetch_row($result))
{ 
	echo "<tr>";
	echo "<td>"."$row[0]"."</td>";
	echo "<td>"."$row[1]"."</td>";
	echo "<td>"."$row[2]"."</td>";
	echo "<td>"."$row[3]"."</td>";
	echo "</tr>";
}
echo "</table>";
include 'footer.php';
?>
