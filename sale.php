<?php
SESSION_START();
$cid=$_SESSION['id'];
include 'user.php';
include 'connection.php';
  $q="insert into tblorder_master(customer_id,order_date,total_amount,status) values('$cid',(select sysdate()),'0','ordered')";
  $s=mysqli_query($conn,$q);
  if($s)
  { 

    $x="select MAX(order_id) from tblorder_master";
    $o=mysqli_query($conn,$x);
    $od=mysqli_fetch_array($o);
    $oid=$od[0];
    
    $q="select * from temp where customer_id=$cid";
    $s=mysqli_query($conn,$q);
    while($row=mysqli_fetch_array($s))
    {
    $q1="select * from tblproduct where product_id=$row[1]";
    $s1=mysqli_query($conn,$q1);
    $row1=mysqli_fetch_array($s1);
    $pid=$row1[0];
    $rate=$row1[2]*$row[2];
    $q2="insert into tblorder_child(order_id,product_id,quantity,price) values('$oid','$pid','$row[2]','$rate')";
    $s2=mysqli_query($conn,$q2);
    
    }
    echo "<script>location.href='payment.php?id=".$oid."'</script>";
   } 
   else
   {
    echo "Failed";
   }
?>