<?php
$servername="localhost";
$username="root";
$password="";
$database="reg";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
echo("not connected");
}else
{
	echo(" Connected");
}

?>