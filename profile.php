<?php
session_start();
include 'user.php';
include 'connection.php';
$id=$_SESSION['id'];
$q="select * from tblregister where customer_id='$id'";
$s=mysqli_query($conn,$q);
$r=  mysqli_fetch_array($s);
?>
<br><br>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
          <input type="text" id="fname" name="txtname" value="<?php echo $r[1]; ?>" placeholder="Your name.." required="required">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="add">Address</label>
      </div>
      <div class="col-75">
        <textarea id="add" name="txtadd" placeholder="Write Your Address .."  style="height:200px" required="required"><?php echo $r[2]; ?></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="ph">Phone Number</label>
      </div>
      <div class="col-75">
        <input type="text" id="ph" name="txtph" placeholder="Your Phone Number.." value="<?php echo $r[3]; ?>" required="required">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="txtemail" placeholder="Your Email.." value="<?php echo $r[4]; ?>" required="required">
      </div>
    </div>
   
  </form>
</div> 
<br><br>
<?php
include 'footer.php';
?>