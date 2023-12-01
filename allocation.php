<?php
include 'connection.php';
include 'admin.php';
$oid=$_GET['oid'];
echo "<center><br><h1>Employee Details..</h1>";
$q="select * from tblemployee where emp_id NOT IN(select emp_id from tblallocation where order_id IN(select order_id from tblorder_master where status='employee allocated'))";
$result=mysqli_query($conn,$q);
echo "<br>";
echo "<table border=1><tr><th>Employee Id</th><th>Employee name</th><th>Employee phno</th><th colspan='2'>Employee email</th></tr>";
while($row=mysqli_fetch_row($result))
{ 
  echo "<tr>";
  echo "<td>"."$row[0]"."</td>";
  echo "<td>"."$row[1]"."</td>";
  echo "<td>"."$row[2]"."</td>";
  echo "<td>"."$row[3]"."</td>";
  echo "<td>"."<a href='allocate.php?empid=".$row[0]."&& oid=".$oid."'>Allocate</a></td>";
  echo "</tr>";
}
echo "</table></center><br><br>";
?>
<?php
include 'footer.php';
?>
