<div class="container">
<form  method="POST">
	<div class="col-75">
       <select id="category" name="txtcategory">
         <option>vegitarian</option>
        <option> non vegitarian</option>
        <option>not applicable</option>
       </select>
      </div>
	
    <div class="row">
      <div class="col-25">
        <label for="item"></label>
      </div>
      <div class="col-75">
        <input type="text" id="item" name="txtitem" placeholder="Item name">
      </div>
    </div>

    <div class="row">
      <input type="submit" value="Search" name="btnsubmit">
    </div>
</form>
</div> 

<?php
include 'connection.php';
 if(isset($_REQUEST['btnsubmit']))
 {
 $category=$_REQUEST['txtcategory'];
 $item="%".$_REQUEST['txtitem']."%";
 echo "<script>location.href='search.php?cat=".$category."&item=".$item."'</script>";
 }