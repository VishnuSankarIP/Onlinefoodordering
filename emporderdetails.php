<?php
include 'connection.php';
include 'emplayout.php';
$aid=$_GET['aid'];
echo "<center><br><h1>Order Details..</h1>";
$q="select tblproduct.*,tblorder_child.* from tblorder_child,tblproduct where tblorder_child.order_id in(select order_id from tblallocation where allocation_id= '$aid') and tblorder_child.product_id=tblproduct.product_id";
$result=mysqli_query($conn,$q);
echo "<br>";
echo "<table border=1><tr><th>Item</th><th>Quantity</th><th colspan='2'>Total Amount</th></tr>";
while($row=mysqli_fetch_row($result))
{ 
  echo "<tr>";
  echo "<td>"."$row[1]"."</td>";
  echo "<td>"."$row[9]"."</td>";
  echo "<td>"."$row[10]"."</td>";
  
  
  echo "</tr>";
}
echo "</table></center><br><br>";
?>
<?php
include 'footer.php';
?>
