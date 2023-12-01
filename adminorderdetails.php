<?php
include 'connection.php';
include 'admin.php';
$oid=$_GET['oid'];
echo "<center><br><h1>Order Details..</h1>";
$q="select tblproduct.*,tblorder_child.* from tblorder_child,tblproduct where tblorder_child.order_id='$oid' and tblorder_child.product_id=tblproduct.product_id";
$result=mysqli_query($conn,$q);
echo "<br>";
echo "<table border=1><tr><th>Item</th><th>Quantity</th><th colspan='3'>Total Amount</th></tr>";
while($row=mysqli_fetch_row($result))
{ 
  echo "<tr>";
  echo "<td>"."$row[1]"."</td>";
  echo "<td>"."$row[9]"."</td>";
  echo "<td>"."$row[10]"."</td>";
echo "<td><a href='delivered.php?oid=".$row[7]."'>Delivered</a></td>";
  echo "<td><a href='ordercancel.php?oid=".$row[7]."'>Cancel</a></td>";  
  echo "</tr>";
}
echo "</table></center><br><br>";
?>
<!--<a style="margin-left: 600px;" href="allocation.php?oid=<?php  echo $oid;?>">Allocate employee</a>-->

<?php
include 'footer.php';
?>
