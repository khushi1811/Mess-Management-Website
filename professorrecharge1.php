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
			$q13 = "select * from professortransactions where snuid='$id'";
    		$result13 = mysqli_query($con, $q13);

			$num13 = mysqli_num_rows($result13);
			if($num13 == 1){
			$q14 = "UPDATE professors SET professors.balance = (SELECT professortransactions.newbalance from professortransactions where professors.id = professortransactions.snuid)";	
			mysqli_query($con, $q14);
			$q15 = "DELETE from professortransactions where snuid = '$id'";
			mysqli_query($con, $q15);
			}


    		$q3 = "select balance from professors where id='$id'";
   			$result = mysqli_query($con, $q3);

			$num = mysqli_num_rows($result);
			if($num == 1){

			while ($row5 = mysqli_fetch_array($result))
			{
				$_SESSION['balance'] = $row5['balance'];
			} 
			}
			$c = $_SESSION['balance'];


	
		$q10 = "INSERT into professortransactions(snuid,balance,transaction_type,amount) values ('$id','$c','recharge','$amount')";
	 	mysqli_query($con, $q10);
	 	$q11 = "UPDATE professortransactions SET newbalance = balance+amount";
	 	mysqli_query($con, $q11);
	 	$q14 = "UPDATE professors SET professors.balance = (SELECT professortransactions.newbalance from professortransactions where professors.id = professortransactions.snuid)";	
			mysqli_query($con, $q14);

			header('location:professorhome.php ');

?>
