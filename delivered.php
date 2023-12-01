<?php
include 'connection.php';
$oid=$_GET['oid'];
$q="update tblallocation set status='delivered' where order_id='$oid'";
$s=mysqli_query($conn,$q);
if($s)
{
	$q="update tblorder_master set status='delivered' where order_id='$oid'";
	$s=mysqli_query($conn,$q);
	echo "<script>location.href='orderdtls.php'</script>";
}
else
{
	echo "<script>location.href='orderdtls.php'</script>"; 
}
?>