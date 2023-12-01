<?php
include 'connection.php';
include 'admin.php';
echo "<br><center><h3>FEEDBACK...</h3>";
$q="select tblfeedback.feedback,tblregister.customer_name from tblfeedback,tblregister where tblfeedback.customer_id=tblregister.customer_id ";
$result=mysqli_query($conn,$q);
echo "<br><table>";
//echo "<table><tr><th>Payment Id</th><th>Order Id</th><th>Total Amount</th><th>Quantity</th>
//</tr>";
while($row=mysqli_fetch_row($result))
{	
  echo "<tr>";
  echo "<td>".$row['1']." : </td>";
  echo "<td>".$row['0']."</td>";
 
  echo "</tr>";
}
echo "</table></center><br>";
include 'footer.php';
?>