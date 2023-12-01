<?php
include 'admin.php';
include 'connection.php';
?>

<div class="container" style="margin: 50px 50px 50px 250px;">
  <form method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="name">Product Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="txtname" required="required">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="rate">Product Rate</label>
      </div>
      <div class="col-75">
          <input type="number" id="rate" name="txtrate" required="required">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="rate">Product category</label>
      </div>
      <vcdiv class="col-75">
       <select id="c" name="txtc">
         <option>vegitarian</option>
        <option> non vegitarian</option>
        <option>not applicable</option>
       </select>
       </div> 
       category
      <div class="col-75">
      <select id="category" name="txtcategory">
       <?php
       $q="select * from tblcategory where status='1'";
       $s=mysqli_query($conn,$q);
       while($result=mysqli_fetch_array($s))
       {
        echo '<option value="'.$result['category_id'].'">'.$result['category'].'</option>';
       }
       ?>
       </select>
      </div>
    <div class="row">
      <div class="col-25">
        <label for="img">Product Image</label>
      </div>
      <div class="col-75">
        <input type="file" id="img" name="img" required="required">
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
    $category=$_REQUEST['txtc'];
    $c=$_REQUEST['txtcategory'];
    $folder="images/";
    $file=$folder.basename($_FILES['img']['name']);  
    move_uploaded_file($_FILES['img']['tmp_name'], $file);
    $q="select count(*) as count from tblproduct where product_name='$name'";
    $s=mysqli_query($conn,$q);
    $f=mysqli_fetch_array($s);
    if($f['count']==0)
    {
      $q="insert into tblproduct(product_name,product_rate,product_category,product_image,category_id) values('$name','$rate',
      '$category','$file','$c')";
      $s=mysqli_query($conn,$q);
      if($s)
        {
          echo "<script>alert('product insertion successful')</script>";
          echo "<script>location.href='product.php'</script>";
        }
        else
        {
          echo "<script>alert('sorry error')</script>";
          echo "<script>location.href='product.php'</script>";
        }
      }
      
    else
    {
      echo "<script> alert('Product already exist')</script>";
    }           
  }
  $q="select * from tblproduct";
$result=mysqli_query($conn,$q);
echo "<br>";
echo "<table border=1><tr><th>Product Id</th><th>Product Name</th><th>Product Rate</th><th>Product Category</th>
<th>Product Image</th></tr>";
while($row=mysqli_fetch_row($result))
{ 
  echo "<tr>";
  echo "<td>"."$row[0]"."</td>";
  echo "<td>"."$row[1]"."</td>";
  echo "<td>"."$row[2]"."</td>";
  echo "<td>"."$row[3]"."</td>";
  echo "<td><img src='"."$row[4]"."' height='100px' width='100px'></td>";
  echo "</tr>";
}
echo "</table>";

?>
    </div> 
<?php
include 'footer.php';
?>
