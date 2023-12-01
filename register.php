<?php
include 'header.php';
?>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="txtname" placeholder="Your name.." required="required">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="add">Address</label>
      </div>
      <div class="col-75">
        <textarea id="add" name="txtadd" placeholder="Write Your Address .." style="height:200px" required="required"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="ph">Phone Number</label>
      </div>
      <div class="col-75">
        <input type="text" id="ph" name="txtph" placeholder="Your Phone Number.." required="required">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="txtemail" placeholder="Your Email.." required="required">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="pwd">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="pwd" name="txtpwd" placeholder="Your Password.." required="required">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" name="btnsubmit">
    </div>
  </form>
</div> 
<?php
include 'footer.php';
?>
<?php
include 'connection.php';
if(isset($_REQUEST['btnsubmit']))
{
$name=$_REQUEST['txtname'];
$address=$_REQUEST['txtadd'];
$phno=$_REQUEST['txtph'];
$email=$_REQUEST['txtemail'];
$pwd=$_REQUEST['txtpwd'];
$q="select count(*) as count from tblregister where customer_email='$email'";
$s=mysqli_query($conn,$q);
$f=mysqli_fetch_array($s);
if($f['count']==0)
{
	$q="insert into tblregister(customer_name,customer_address,customer_phno,
		customer_email) values('$name','$address','$phno','$email')";
	$s=mysqli_query($conn,$q);
	if($s)
	{
		$q="insert into tbllogin(username,password,usertype,status) values('$email','$pwd','user','1')";
		$s=mysqli_query($conn,$q);
		if($s)
		{
			echo "<script>alert('Registration Successfull')</script>";
			echo "<script>location.href='index.php'</script>";
		}
		else
		{
			echo "<script>alert('Sorry Login Error')</script>";
			echo "<script>location.href='index.php'</script>";
		}
	}
	else
	{
		// echo $q;
		echo "<script>alert('Sorry Registration Error')</script>";
		echo "<script>location.href='index.php'</script>";
	}
}
else
{
	echo "<script>alert('User already exist')</script>";
}
}
?>