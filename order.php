<?php
SESSION_START();
$cid=$_SESSION['id'];
include 'user.php';
include 'connection.php';
?>
<div class="container">
  <form method="POST">
    <div class="row">
      <div class="col-25">
        <label for="q">Quantity</label>
      </div>
      <div class="col-75">
        <input type="text" id="q" name="txtq" required="required">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Add to cart" name="btnsubmit">
    </div>
<!--    <div class="row">
        
      <input type="submit" value="Add New" name="btnadd">
    </div>-->
  </form>
</div>

<?php
if(isset($_REQUEST['btnsubmit']))
{
  $id=$_GET['id'];
  $quantity=$_REQUEST['txtq'];
//  $q="insert into tblorder_master(customer_id,order_date,total_amount,status) values('$cid',(select sysdate()),'0','ordered')";
//  $s=mysqli_query($conn,$q);
//  if($s)
//  { 
//
//    $x="select MAX(order_id) from tblorder_master";
//    $o=mysqli_query($conn,$x);
//    $od=mysqli_fetch_array($o);
//    $oid=$od[0];
    $q="select * from tblproduct where product_id=$id";
    $s=mysqli_query($conn,$q);
    $row=mysqli_fetch_array($s);
    $pid=$row[0];
    $rate=$row[2]*$quantity;
//    $q="insert into tblorder_child(order_id,product_id,quantity,price) values('$oid','$pid','$quantity','$rate')";
//    $s=mysqli_query($conn,$q);
//    if($s)
//    {
//     
//      echo "<script>location.href='payment.php?id=".$oid."'</script>";
//    }
//   } 
//   else
//   {
//    echo "Failed";
//   }
    $q="insert into temp(customer_id,product_id,qty,rate) values('$cid','$id','$quantity','$rate')";
    $r=  mysqli_query($conn, $q);
    if($s)
    {
     
      echo "<script>location.href='cart.php'</script>";
    }
    
   else
   {
    echo "Failed";
   }
}
include 'footer.php';
?>
       