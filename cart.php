<?php
session_start();
include 'user.php';
$cid=$_SESSION['id'];
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
  }
</style>
<?php
include 'connection.php';
echo '<br><center><h1>Cart</h1></center>';
$q="select tblproduct.product_name,temp.* from tblproduct,temp where temp.product_id=tblproduct.product_id and temp.customer_id='$cid'";
$result=mysqli_query($conn,$q);
echo "<br>";
echo "<table style='margin-left:450px;' border='1'><tr><th>Item</th><th>Quantity</th><th>Rate</th></tr>";
while($row=mysqli_fetch_row($result))
{ 
  echo "<tr>";
  echo "<td>"."$row[0]"."</a></td>";
  echo "<td>"."$row[3]"."</td>";
  echo "<td>"."$row[4]"."</td>";
  echo "</tr>";
}
echo "</table>";
?>
<a style="margin-left: 450px;" href="userhome.php">Add new item</a>
<a style="margin-left: 250px;" href="sale.php"><img src="images/checkout.jpg" height="100px" width="100px"></a>
<?php
include 'footer.php';
?>