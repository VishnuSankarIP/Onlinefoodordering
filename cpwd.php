<?php
SESSION_START();
$uid=$_SESSION['uname'];
include 'connection.php';
include 'emplayout.php';

?>
<form action="" method="POST">
	<table class='p1'>
		<tr>
			<td>Current Password</td>
			<td><input type="text" name="oldpass" required=""></td>
		</tr>
		<tr>
			<td>New Password</td>
			<td><input type="password" name="npass" required=""></td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td><input type="password" name="cpass" required=""></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" id='sub' value="Change Password"></td>
		</tr>
	</table>
</form>
<?php
if(isset($_REQUEST['submit']))
{
	
	$oldpass=$_REQUEST['oldpass'];
	$npass=$_REQUEST['npass'];
	$cpass=$_REQUEST['cpass'];
	if($npass != $cpass)
		echo "<script>alert('Password not match')</script>";
	else
	{
      
      $q="select password from tbllogin where username='$uid'";
      $s=mysqli_query($conn,$q);
      $f=mysqli_fetch_array($s);

      if($oldpass == $f[0])
      {
      	$q="update tbllogin set password='$npass' where username='$uid'";
      	$s=mysqli_query($conn,$q);
      	if($s)
      	{
      		echo "<script>alert('Updation successfull')</script>";
			echo "<script>location.href='cpwd.php'</script>";
      	}
      	else
      	{
      	    echo "<script>alert('Updation failed')</script>";
			echo "<script>location.href='cpwd.php'</script>";	
      	}
      }
      else
      { 
      	 	
      	    echo "<script>alert('Incorrect Password')</script>";
			echo "<script>location.href='cpwd.php'</script>";
      }
	}
}
?>
<?php
include 'footer.php';
?>