<?php
include 'connection.php';
include 'user.php';
$oid=$_GET['id'];
echo "<h3>Payment Details</h3>";
$q="select tblview_payment.*, tblorder_child.* from tblview_payment,tblorder_child 
where tblorder_child.order_id='$oid' and tblview_payment.order_id='$oid'";
$result=mysqli_query($conn,$q);
echo "<br>";
echo "<table><tr><th>Payment Id</th><th>Order Id</th><th>Quantity</th><th>Total Amount</th>
</tr>";
while($row=mysqli_fetch_row($result))
{	
  echo "<tr>";
  echo "<td>".$row['0']."</td>";
  echo "<td>".$row['1']."</td>";
  echo "<td>".$row['2']."</td>";
  echo "<td>".$row['7']."</td>";
  echo "</tr>";
}
echo "</table>";
echo "<script><a href=feedback.php>Feedback</a></script>";
include 'footer.php';
?>