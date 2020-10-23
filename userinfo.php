<?php 

$con = mysqli_connect('localhost','root');


if($con){
	echo "Connection Successful";
} else {
	echo "No Connection";	
}

mysqli_select_db($con, 'userformdetails');

$name = $_POST['username'];
$email = $_POST['email'];
$mess = $_POST['message'];

$query = " insert into userinfo (name,email,message)
values ('$name', '$email', '$mess') ";

mysqli_query($con,$query);

header('location:index.html');



?>