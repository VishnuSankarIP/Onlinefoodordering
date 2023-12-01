<?php
include 'admin.php';
?>
<div class="container" style="margin: 50px 50px 50px 250px;">
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
          <input type="number" id="ph" name="txtph" placeholder="Your Phone Number.." required="required">
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
        <label for="qualification">Qualification</label>
      </div>
      <div class="col-75">
        <input type="text" id="qualification" name="txtqualification" placeholder="Your Qualification.." required="required">
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label for="img">Employee Image</label>
      </div>
      <div class="col-75">
        <input type="file" id="img" name="img" required="required">
      </div>
    </div>
    <div class="row">
        <div class="col-75">
      <input type="submit" value="Register" name="btnsubmit">
    </div>
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
$qualification=$_REQUEST['txtqualification'];
$folder="images/";
    $file=$folder.basename($_FILES['img']['name']);  
            move_uploaded_file($_FILES['img']['tmp_name'], $file);
$q="select count(*) as count from tblregister where emp_email='$email'";
$s=mysqli_query($conn,$q);
$f=mysqli_fetch_array($s);
if($f['count']==0)
{
    $q="insert into tblemployee(emp_name,emp_phno,emp_email,emp_address,emp_qualification,emp_image,status) values('$name','$phno','$email','$address','$qualification','$file','1')";
    $s=mysqli_query($conn,$q);
    if($s)
    {
        $q="insert into tbllogin(username,password,usertype,status) values('$email','$email','employee','1')";
        $s=mysqli_query($conn,$q);
        if($s)
        {
            echo "<script>alert('Registration Successfull')</script>";
            echo "<script>location.href='adminhome.php'</script>";
        }
        else
        {
            echo "<script>alert('Sorry Login Error')</script>";
            echo "<script>location.href='adminhome.php'</script>";
        }
    }
    else
    {
        // echo $q;
        echo "<script>alert('Sorry Registration Error')</script>";
        echo "<script>location.href='adminhome.php'</script>";
    }
}
else
{
    echo "<script>alert('User already exist')</script>";
}
}
?>