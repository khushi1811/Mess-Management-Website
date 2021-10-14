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

$option = $_POST['option'];
$fooditem1 = $_POST['fooditem1'];
$quantity1 = $_POST['quantity1'];
$fooditem2 = $_POST['fooditem2'];
$quantity2 = $_POST['quantity2'];




if($option == "breakfast")
{
	
	
	$q3 = "select food_price from fooditems where food_item_no='$fooditem1'";
	$amount1 = mysqli_query($con, $q3);
	$row = mysqli_fetch_assoc($amount1);
	$num3 =  $row['food_price'];
	$q4 = "select food_price from fooditems where food_item_no='$fooditem2'";
	$amount2 = mysqli_query($con, $q4);
	$row1 = mysqli_fetch_assoc($amount2);
	$num4 = $row1['food_price'];
	
	$q5 = "insert into breakfastorders(id,food_item1,food_price1, food_quantity1, food_item2,food_price2, food_quantity2) values('$id','$fooditem1','$num3', '$quantity1', '$fooditem2', '$num4','$quantity2')";
	
	mysqli_query($con, $q5);
	$q7 = "UPDATE breakfastorders SET total_amount = (food_price1*food_quantity1) + (food_price2*food_quantity2)"; 
	 mysqli_query($con, $q7);
	

	$q8 = "INSERT into preorders(id,breakfast_orders,total_amount) SELECT DISTINCT id,breakfast_orders,total_amount from breakfastorders getLastRecord ORDER BY breakfast_orders DESC LIMIT 1";
	 mysqli_query($con, $q8);
	
	$q9 = "SELECT DISTINCT id,breakfast_orders,total_amount from preorders getLastRecord ORDER BY breakfast_orders DESC LIMIT 1";

	$a = mysqli_query($con, $q9);
	$row1 = mysqli_num_rows($a);
	if($row1 == 1){

	while ($row4 = mysqli_fetch_array($a))
	{
		$_SESSION['total_amount'] = $row4['total_amount'];
	} 
}

$b = $_SESSION['total_amount'];
$q13 = "select * from transactions where snuid='$id'";
    $result13 = mysqli_query($con, $q13);

	$num13 = mysqli_num_rows($result13);
	if($num13 == 1){
	$q14 = "UPDATE students SET students.balance = (SELECT transactions.newbalance from transactions where students.id = transactions.snuid)";	
	mysqli_query($con, $q14);
	$q15 = "DELETE from transactions where snuid = '$id'";
	mysqli_query($con, $q15);
}


    $q3 = "select balance from students where id='$id'";
    $result = mysqli_query($con, $q3);

	$num = mysqli_num_rows($result);
	if($num == 1){

	while ($row5 = mysqli_fetch_array($result))
	{
		$_SESSION['balance'] = $row5['balance'];
	} 
}
$c = $_SESSION['balance'];
	
	$q10 = "INSERT into transactions(snuid,balance,transaction_type,amount,order_type) values ('$id','$c','foodorder','$b','$option')";
	 mysqli_query($con, $q10);
	$q11 = "UPDATE transactions SET newbalance = balance-amount";
	 mysqli_query($con, $q11);
    
	header('location:studenthome.php');


}

if($option == "lunch")
{
	
	
	$q3 = "select food_price from fooditems where food_item_no='$fooditem1'";
	$amount1 = mysqli_query($con, $q3);
	$row = mysqli_fetch_assoc($amount1);
	$num3 =  $row['food_price'];

	$q4 = "select food_price from fooditems where food_item_no='$fooditem2'";
	$amount2 = mysqli_query($con, $q4);
	$row1 = mysqli_fetch_assoc($amount2);
	$num4 = $row1['food_price'];
	
	
	$q5 = "insert into lunchorders(id,food_item1,food_price1, food_quantity1, food_item2,food_price2, food_quantity2) values('$id','$fooditem1','$num3', '$quantity1', '$fooditem2', '$num4','$quantity2')";
	
	mysqli_query($con, $q5);
	$q7 = "UPDATE lunchorders SET total_amount = (food_price1*food_quantity1) + (food_price2*food_quantity2)"; 
	 mysqli_query($con, $q7);
	 $q8 = "INSERT into preorders(id,lunch_orders,total_amount) SELECT DISTINCT id,lunch_orders,total_amount from lunchorders getLastRecord ORDER BY lunch_orders DESC LIMIT 1";
	 mysqli_query($con, $q8);
	
	$q9 = "SELECT DISTINCT id,lunch_orders,total_amount from preorders getLastRecord ORDER BY lunch_orders DESC LIMIT 1";

	$a = mysqli_query($con, $q9);
	$row1 = mysqli_num_rows($a);
	if($row1 == 1){

	while ($row4 = mysqli_fetch_array($a))
	{
		$_SESSION['total_amount'] = $row4['total_amount'];
	} 
}

$b = $_SESSION['total_amount'];

$q13 = "select * from transactions where snuid='$id'";
    $result13 = mysqli_query($con, $q13);

	$num13 = mysqli_num_rows($result13);
	if($num13 == 1){
	$q14 = "UPDATE students SET students.balance = (SELECT transactions.newbalance from transactions where students.id = transactions.snuid)";	
	mysqli_query($con, $q14);
	$q15 = "DELETE from transactions where snuid = '$id'";
	mysqli_query($con, $q15);
}


    $q3 = "select balance from students where id='$id'";
    $result = mysqli_query($con, $q3);

	$num = mysqli_num_rows($result);
	if($num == 1){

	while ($row5 = mysqli_fetch_array($result))
	{
		$_SESSION['balance'] = $row5['balance'];
	} 
}
$c = $_SESSION['balance'];


	
	$q10 = "INSERT into transactions(snuid,balance,transaction_type,amount,order_type) values ('$id','$c','foodorder','$b','$option')";
	 mysqli_query($con, $q10);
	 $q11 = "UPDATE transactions SET newbalance = balance-amount";
	 mysqli_query($con, $q11);
    
	header('location:studenthome.php');

}
if($option == "dinner")
{
	
	$q3 = "select food_price from fooditems where food_item_no='$fooditem1'";
	$amount1 = mysqli_query($con, $q3);
	
	$row = mysqli_fetch_assoc($amount1);
	$num3 =  $row['food_price'];

	$q4 = "select food_price from fooditems where food_item_no='$fooditem2'";
	$amount2 = mysqli_query($con, $q4);
	$row1 = mysqli_fetch_assoc($amount2);
	$num4 = $row1['food_price'];
	
	$q5 = "insert into dinnerorders(id,food_item1,food_price1, food_quantity1, food_item2,food_price2, food_quantity2) values('$id','$fooditem1','$num3', '$quantity1', '$fooditem2', '$num4','$quantity2')";
	
	mysqli_query($con, $q5);
	$q7 = "UPDATE dinnerorders SET total_amount = (food_price1*food_quantity1) + (food_price2*food_quantity2)"; 
	 mysqli_query($con, $q7);

	 $q8 = "INSERT into preorders(id,dinner_orders,total_amount) SELECT DISTINCT id,dinner_orders,total_amount from dinnerorders getLastRecord ORDER BY dinner_orders DESC LIMIT 1";
	 mysqli_query($con, $q8);
	$q10 = "SELECT DISTINCT id,dinner_orders,total_amount from preorders getLastRecord ORDER BY dinner_orders DESC LIMIT 1";

	$a = mysqli_query($con, $q10);

	$row1 = mysqli_num_rows($a);
	if($row1 == 1){

	while ($row4 = mysqli_fetch_array($a))
	{
		$_SESSION['total_amount'] = $row4['total_amount'];
	} 
}

$b = $_SESSION['total_amount'];


   
	$q13 = "select * from transactions where snuid='$id'";
    $result13 = mysqli_query($con, $q13);

	$num13 = mysqli_num_rows($result13);
	if($num13 == 1){
	$q14 = "UPDATE students SET students.balance = (SELECT transactions.newbalance from transactions where students.id = transactions.snuid)";	
	mysqli_query($con, $q14);
	$q15 = "DELETE from transactions where snuid = '$id'";
	mysqli_query($con, $q15);
}
$q3 = "select balance from students where id='$id'";
    $result = mysqli_query($con, $q3);

	$num = mysqli_num_rows($result);
	if($num == 1){

	while ($row5 = mysqli_fetch_array($result))
	{
		$_SESSION['balance'] = $row5['balance'];
	} 
}
$c = $_SESSION['balance']; 
	
	$q10 = "INSERT into transactions(snuid,balance,transaction_type,amount,order_type) values ('$id','$c','foodorder','$b','$option')";
	 mysqli_query($con, $q10);

	 $q11 = "UPDATE transactions SET newbalance = balance-amount";
	 mysqli_query($con, $q11);
	 

	header('location:studenthome.php');

}




?>
