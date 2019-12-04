<?php include 'conn.php'?>
<html>

<?php

$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['gmail'];
$upass=$_REQUEST['upass'];
$cpass=$_REQUEST['cpass'];

	



$sql="Insert into details values('$fname','$lname','$email','$upass','cpass')";
mysqli_query($conn,$sql);
mysqli_close($conn);
?>