<?php
include 'connection.php';
include 'admin.php';
echo "<center><br><h1>Employee Details..</h1>";
$q="select * from tblemployee";
$result=mysqli_query($conn,$q);
echo "<br>";
echo "<table border=1><tr><th>Employee Id</th><th>Employee name</th><th>Employee phno</th><th>Employee email</th>
<th>Employee address</th><th>Employee Qualification</th><th>Employee image </th><th>Employee status </th></tr>";
while($row=mysqli_fetch_row($result))
{ 
  echo "<tr>";
  echo "<td>"."$row[0]"."</td>";
  echo "<td>"."$row[1]"."</td>";
  echo "<td>"."$row[2]"."</td>";
  echo "<td>"."$row[3]"."</td>";
  echo "<td>"."$row[4]"."</td>";
  echo "<td>"."$row[5]"."</td>";
  echo "<td>"."$row[6]"."</td>";
  echo "<td>"."$row[7]"."</td>";
  echo "</tr>";
}
echo "</table></center><br><br>";
?>
<?php
include 'footer.php';
?>
