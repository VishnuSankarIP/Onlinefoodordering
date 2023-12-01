<?php
include 'connection.php';
include 'admin.php';
echo "<center><br><h3>Payment Details</h3>";
$q="select * from tblview_payment ";
$result=mysqli_query($conn,$q);
echo "<br>";
echo "<table border='1'><tr><th>Payment Id</th><th>Order Id</th><th>Total Amount</th>
</tr>";
while($row=mysqli_fetch_row($result))
{	
  echo "<tr>";
  echo "<td>".$row['0']."</td>";
  echo "<td>".$row['1']."</td>";
  echo "<td>".$row['2']."</td>";
  echo "</tr>";
}
echo "</table></center><br>";
include 'footer.php';
?>