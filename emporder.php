<?php
SESSION_START();
$id=$_SESSION['id'];
echo $id;
include 'connection.php';
include 'emplayout.php';
echo'<center><br><br>';
$q="select tblallocation.allocation_id,tblorder_master.order_id,tblregister.customer_name,customer_address,customer_phno "
        . "from tblallocation,tblorder_master,tblregister "
        . "where tblallocation.emp_id='$id' and tblallocation.status='allocated' and tblallocation.order_id=tblorder_master.order_id and tblorder_master.customer_id=tblregister.customer_id";
$s=mysqli_query($conn,$q);
echo "<table border=1><tr><th>Order Id</th><th>Customer name</th><th>Address</th><th colspan='4'>Phone</th></tr>";
while($row=mysqli_fetch_array($s))
{
  echo "<tr>";
  echo "<td>".$row['order_id']."</td>";
  echo "<td>".$row['customer_name']."</td>";
  echo "<td>".$row['customer_address']."</td>";
  echo "<td>".$row['customer_phno']."</td>";
  echo "<td><a href='emporderdetails.php?aid=".$row['allocation_id']."'>View order details</a></td>";
  echo "<td><a href='delivered.php?oid=".$row['order_id']."'>Delivered</a></td>";
  echo "<td><a href='ordercancel.php?oid=".$row['order_id']."'>Cancel</a></td>";
  echo "</tr>";
}
echo "</table><br><br></center>";
include 'footer.php';
?>