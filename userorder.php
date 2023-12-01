<?php
SESSION_START();
$uid=$_SESSION['id'];
include 'connection.php';
include 'user.php';
echo "<br><h1>Order Details..</h1>";
$q="select * from tblorder_master where customer_id='$uid' order by order_id desc";
$result=mysqli_query($conn,$q);
echo "<br>";
echo "<table border=1><tr><th>Order Id</th><th>Order Date</th><th>Total Amount</th>
<th>Status</th></tr>";
while($row=mysqli_fetch_row($result))
{ 
  echo "<tr>";
  echo "<td>"."$row[0]"."</td>";
  echo "<td>"."$row[2]"."</td>";
  echo "<td>"."$row[3]"."</td>";
  echo "<td>"."$row[4]"."</td>";
  echo "</tr>";
}
echo "</table>";
?>
<?php
include 'footer.php';
?>
<style type="text/css">
  td,th{
    padding:10px 10px 10px 10px;
    
  }
  th{
    color:red;
    font-size: large;
  }
  table{
      width:450px;
      margin:10px 10px 50px 450px; 
  }
</style>
