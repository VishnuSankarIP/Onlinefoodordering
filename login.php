<?php
SESSION_START();
include 'header.php';
?>
<center>
<h3> Not registered yet....!!</h3><a href="register.php">Register Here...</a><br><br>
<form  method="POST">
<table>
	<tr>
		<td>USERNAME</td>
		<td><input type="text" id="txtname" name="txtuname" required="required"></td>
	</tr>
	<tr>
		<td>PASSWORD</td>
		<td><input type="password" id="txtpassword" name="txtpwd" required="required"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="btnsubmit" value="LOGIN"></td>
	</tr>
</table>
</form>
</center>
<?php
 include 'connection.php';
 $q="delete from temp";
 $s=mysqli_query($conn,$q);

 if(isset($_REQUEST['btnsubmit']))
 {
 $uname=$_REQUEST['txtuname'];
 $_SESSION['uname']=$uname;
 $pwd=$_REQUEST['txtpwd'];
 $q="select count(*) as count from tbllogin where username='$uname'";
 $s=mysqli_query($conn,$q);
 $f=mysqli_fetch_array($s);
 if($f['count'] != 0)
 {
 	 $q="select * from tbllogin where username='$uname'";
 	 $s=mysqli_query($conn,$q);
 	 $row=mysqli_fetch_array($s);
 	 	$p=$row[1];
 	 	$utype=$row[2];
 	 	$status=$row[3];
 	 if($p==$pwd)
 	 {
 	 	if($status=='1')
 	 	{
 	 		if($utype=='admin')
 	 		{
 	 			echo "<script>location.href='adminhome.php'</script>";
 	 		}
 	 		else if($utype=='user')
 	 		{
 	 			$q="select customer_id from tblregister where customer_email='$uname'";
 	 			$s=mysqli_query($conn,$q);
 	 			$f=mysqli_fetch_array($s);
 	 			$_SESSION['id']=$f[0];
 	 			echo "<script>location.href='userhome.php'</script>";
 	 		}	
 	 		else if($utype=='employee')
 	 		{
                                $q="select emp_id from tblemployee where emp_email='$uname'";
 	 			$s=mysqli_query($conn,$q);
 	 			$f=mysqli_fetch_array($s);
 	 			$_SESSION['id']=$f[0];
 	 			echo "<script>location.href='emphome.php'</script>";
 	 		}
 	 	}

 	 }
 	 else
 	 {
 	 	echo "Wrong Password";
 	 }
 }
 else
 	 {
 	 	echo "User doesn't exist";
 	 }
} 	 
?>
<?php
include 'footer.php';
?>