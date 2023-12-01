<?php
include 'admin.php';
?>
<div class="container" style="margin: 50px 50px 50px 250px;">
  <form method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="name">Category</label>
      </div>
      <div class="col-75">
        <input type="text" id="c" name="txtcategory" required="required">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" name="btnsubmit">
    </div>
  </form>
</div>
<?php
include 'connection.php';
if(isset($_REQUEST['btnsubmit']))
{
$category=$_REQUEST['txtcategory'];
$q="insert into tblcategory(category,status) values('$category','1')";
$s=mysqli_query($conn,$q);
if($s)
{
	echo "<script>alert('Insertion Successfull')</script>";
}
else
{
	echo "<script>alert('Insertion failed')</script>";
}
}
?>
<?php
include 'footer.php';
?>