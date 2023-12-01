<?php
include 'connection.php';
include 'admin.php';
echo "<center><br><h1>Order Details..</h1>";
$q="select tblorder_master.*,tblregister.* from tblorder_master,tblregister where tblorder_master.status<>'ordered' and tblorder_master.customer_id=tblregister.customer_id
";
$result=mysqli_query($conn,$q);
echo "<br>";
echo "<table border=1><tr><th>Order Id</th><th>Customer </th><th>Order Date</th><th >Total Amount</th>
<th colspan='2'>Status</th></tr>";
while($row=mysqli_fetch_row($result))
{ 
  echo "<tr>";
  echo "<td>"."$row[0]"."</td>";
  echo "<td>"."$row[6]"."</td>";
  echo "<td>"."$row[2]"."</td>";
  echo "<td>"."$row[3]"."</td>";
  echo "<td>"."$row[4]"."</td>";
  echo "<td>"."<a href='orderdetails.php?oid=".$row[0]."'>View Details</a></td>";
  echo "</tr>";
}
echo "</table></center><br><br>";
?>
<?php
include 'footer.php';
?>
