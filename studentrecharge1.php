<?php
		
		session_start();
		$con = mysqli_connect('localhost', 'root');
		if($con){
			//echo "connection successful";
		}else{
			echo "no connection";
		}

		mysqli_select_db($con, 'messmanagement');

		$id = $_SESSION['id'];
		$amount  =  $_POST['amount'];
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


	
		$q10 = "INSERT into transactions(snuid,balance,transaction_type,amount) values ('$id','$c','recharge','$amount')";
	 	mysqli_query($con, $q10);
	 	$q11 = "UPDATE transactions SET newbalance = balance+amount";
	 	mysqli_query($con, $q11);
	 	$q14 = "UPDATE students SET students.balance = (SELECT transactions.newbalance from transactions where students.id = transactions.snuid)";	
			mysqli_query($con, $q14);

			header('location:studenthome.php ');

?>
