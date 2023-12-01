<?php
SESSION_START();
$uid=$_SESSION['id'];
include 'user.php';
?>
<div class="container">
<form method="POST">
<div class="row">
      <div class="col-25">
        <label for="address">Feedback</label>
        <div class="row">
          <div class="col-25">
      </div>
      <div class="col-75">
        <textarea id="feedback" name="feedback" placeholder="your feedbacks.." style="height:200px" ></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" name="submit" value="submit">
    </div>
  </form>
</div>
<?php
include 'connection.php';
if(isset($_REQUEST['submit']))
{
	$fb=$_REQUEST['feedback'];
	$q="insert into tblfeedback(customer_id,feedback) values('$uid','$fb')";
    $s=mysqli_query($conn,$q);
    if($s)
    {
    	echo "<script>alert('feedback entered successfully')</script>";
        echo '<script>location.href="userhome.php"</script>';
    }
    else
    {
    	echo "<script>alert('Sorry feedback error')</script>";
        echo '<script>location.href="feedback.php"</script>';
    }
}
  include 'footer.php';
?>
