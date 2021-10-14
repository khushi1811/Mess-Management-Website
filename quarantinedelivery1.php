<?php
session_start();


$con = mysqli_connect('localhost', 'root');
if($con){
	//echo "connection successful";
}else{
	echo "no connection";
}

mysqli_select_db($con, 'messmanagement');
$id = $_POST['id'];
$breakfasttime = $_POST['breakfasttime'];
$lunchtime = $_POST['lunchtime'];
$dinnertime = $_POST['dinnertime'];

$q = " select * from students where id = '$id'";
$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	$q1 = "insert into quarantinedelivery(id, breakfast_timings,lunch_timings, dinner_timings ) values('$id', '$breakfasttime', '$lunchtime', '$dinnertime')";
	mysqli_query($con, $q1);
	header('location:studenthome.php');
}
else{
	echo "id not found";
}
?>


