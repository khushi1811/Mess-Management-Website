<?php


session_start();
header('location:professorlogin.php');

$con = mysqli_connect('localhost', 'root');
if($con){
	echo "connection successful";
}else{
	echo "no connection";
}

mysqli_select_db($con, 'messmanagement');


$name = $_POST['userId'];
$pass = $_POST['password'];
$username = $_POST['username'];
$userlastname = $_POST['userlastname'];
$userhostel = $_POST['userhostel'];
$userroom = $_POST['userroom'];
$userage = $_POST['userage'];
$gender = $_POST['gender'];
$userphone = $_POST['userphone'];
$useremail = $_POST['useremail'];
$userdob = $_POST['userdob'];

$q = " select * from professors where id = '$name' && password = '$pass' && snu_email = 'useremail' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "duplicate data";
}
else{
	$q1 = "insert into professors(id, password,first_name,last_name,hostel,room_no,age,gender,mobile_no,snu_email,dob_ddmmyyyy,balance) values('$name', '$pass', '$username', '$userlastname', '$userhostel', '$userroom', '$userage', '$gender', '$userphone', '$useremail', '$userdob',4000 )";
	mysqli_query($con, $q1);
}








?>