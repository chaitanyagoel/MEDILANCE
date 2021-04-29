<?php

$name = $_POST['name'];
$email = $_POST['email'];
$con = mysqli_connect("localhost",'root','','insertdb');
$query = "INSERT INTO `userdata`( `name`,`email`) VALUES ('$name','$email')";
$run = mysqli_query($con,$query);
if($run==TRUE)
{
	echo "Signed up";
}
else
{
	echo "Failed";
}
?>