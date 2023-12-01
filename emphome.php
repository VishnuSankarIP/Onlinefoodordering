<?php
SESSION_START();
$id=$_SESSION['id'];
include 'emplayout.php';
echo $id;
include 'footer.php';
?>