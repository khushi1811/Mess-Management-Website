<?php


session_start();


$con = mysqli_connect('localhost', 'root');
header('location:studenthome.php');
if($con){
	echo "connection successful";
}else{
	echo "no connection";
}

mysqli_select_db($con, 'messmanagement');
$name = $_POST['name'];
$snu_id = $_POST['userId'];
$comment = $_POST['message'];


$q = " select * from students where id = '$snu_id' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 0){
	echo "you are not registered";
}
else{
	
	$q1 = "insert into feedback(name , id, message) values('$name', '$snu_id', '$comment')";
     mysqli_query($con, $q1);
    //$que = "CREATE TRIGGER deltrigger AFTER insert on feedback for each row BEGIN UPDATE  NEW.message = '$comment' END";
	//mysqli_query($con, $que);
}





?>