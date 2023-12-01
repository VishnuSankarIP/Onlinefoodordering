<?php
include 'connection.php';
$oid=$_GET['oid'];
$empid=$_GET['empid'];
$q="insert into tblallocation(order_id,emp_id,status) values($oid,$empid,'allocated')";
$s=mysqli_query($conn,$q);
if($s)
{
	$q="update tblorder_master set status='employee allocated' where order_id='$oid'";
	$s=mysqli_query($conn,$q);
	if ($s) 
	{
		echo "<script>location.href='orderdtls.php'</script>";
	}
}
else
{
	echo "failed";
}
?>