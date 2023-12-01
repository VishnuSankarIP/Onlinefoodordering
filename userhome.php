<?php
include 'user.php';
?>
<style type="text/css">
  td,th{
    /*padding:10px 10px 10px 10px;*/
    
  }
  th{
    color:red;
    font-size: large;
  }
</style>

<?php
include 'connection.php';
echo '<center><h1>Menu</h1></center>';
$q="select * from tblproduct order by product_name";
$result=mysqli_query($conn,$q);
echo "<br>";
echo "<table style='margin-left:350px;'><tr><th>Item</th><th>Rate</th></tr>";
while($row=mysqli_fetch_row($result))
{ 
  echo "<tr>";
  echo "<td>"."$row[1]"."</a></td>";
  echo "<td>"."$row[2]"."</td>";
  echo "<td><a href='order.php?id=".$row[0]."'><img src='images/add to cart.png' height='50px' width='150px';></a></td>";
  echo "</tr>";
}
echo "</table>";
include 'footer.php';
?>