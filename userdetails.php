<?php
include 'connection.php';
include 'admin.php';
echo "<br><h1>User Details..</h1>";
$q="select * from tblregister";
$result=mysqli_query($conn,$q);
echo "<br>";
echo "<table border=1><tr><th>customer Id</th><th>customer name</th><th>customer address</th><th>customer phno</th>
<th>customer email</th></tr>";
while($row=mysqli_fetch_row($result))
{ 
  echo "<tr>";
  echo "<td>"."$row[0]"."</td>";
  echo "<td>"."$row[1]"."</td>";
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
