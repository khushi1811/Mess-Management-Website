<?php


session_start();


$con = mysqli_connect('localhost', 'root');
if($con){
	echo "connection successful";
}else{
	echo "no connection";
}

mysqli_select_db($con, 'messmanagement');


$name = $_POST['user'];
$pass = $_POST['password'];

$q = " select * from vendors where id = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['id'] = $name;
	header('location:vendorhome.php');
}
else{
	header('location:vendorlogin.php');
}









?>