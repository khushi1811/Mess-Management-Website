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

$q = " select * from students where id = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){

	while ($row = mysqli_fetch_array($result)) 
	{
		$_SESSION['id'] = $name;
		$_SESSION['password'] = $row['password'];
		$_SESSION['first_name'] = $row['first_name'];
		$_SESSION['last_name'] = $row['last_name'];
		$_SESSION['hostel'] = $row['hostel'];
		$_SESSION['room_no'] = $row['room_no'];
		$_SESSION['age'] = $row['age'];
		$_SESSION['gender'] = $row['gender'];
		$_SESSION['mobile_no'] = $row['mobile_no']; 
		$_SESSION['snu_email'] = $row['snu_email'];
		$_SESSION['grad_year'] = $row['grad_year'];
		$_SESSION['dob_ddmmyyyy'] = $row['dob_ddmmyyyy'];
		header('location:studenthome.php');
			
	}
	
	
}
else{
	header('location:studentlogin.php');
}









?>