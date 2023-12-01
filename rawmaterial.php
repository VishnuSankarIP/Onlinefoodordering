<?php
include 'admin.php';
include 'connection.php';
?>
<div class="container" style="margin: 50px 50px 50px 250px;">
  <form method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="name">Rawmaterial Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="txtname" required="required">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="rate">Rawmaterial Rate</label>
      </div>
      <div class="col-75">
          <input type="number" id="rate" name="txtrate" required="required">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" name="btnsubmit">
    </div>
  </form>

<?php

  if(isset($_REQUEST["btnsubmit"]))
  {
    $name=$_REQUEST['txtname'];
    $rate=$_REQUEST['txtrate'];
    $q="insert into tblrawmaterial(raw_name,raw_rate,status) values('$name','$rate','1')";
      $s=mysqli_query($conn,$q);
      if($s)
        {
          echo "<script>alert('product insertion successful')</script>";
        }
        else
        {
          echo "<script>alert('sorry error')</script>";
        }
  }   
  $q="select * from tblrawmaterial";
$result=mysqli_query($conn,$q);
echo "<br>";
echo "<table border=1><tr><th>raw_id</th><th>raw_name</th><th>raw_rate</th></tr>";
while($row=mysqli_fetch_row($result))
{ 
  echo "<tr>";
  echo "<td>"."$row[0]"."</td>";
  echo "<td>"."$row[1]"."</td>";
  echo "<td>"."$row[2]"."</td>";
 
  echo "</tr>";
}
echo "</table>";
?>
</div>
<?php
include 'footer.php';
?>