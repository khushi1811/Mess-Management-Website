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


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<style >
		table, th, td {
                 border: 1px solid black;
                 border-collapse: collapse;
                      }
                      th, td {
                      padding: 8px;
                   text-align: left;
                      }

                      td {
                   padding:0 15px; 
                   background-color: #2c3e50;
                   color: white;
                       }

	</style>
</head>
<body>
<nav>

		<a href="studenthome.php"><img src="new_logo.png" class="logo"></a>
		<ul>
			<li ><a href="studenthome.php">Home</a></li>
			<li><a href="#">Order<i class="fas fa-caret-down"></i></a>
				<ul>
					<li><a href="quarantinedelivery.php" style="font-size: 14px">Quarantine Delivery</a></li>
					<li><a href="preorder.php" style="font-size: 14px">Pre-Order A-La-Carte</a></li>
					<li><a href="menu.php" style="font-size: 14px">View Our Menu</a></li>
					
				</ul>
			</li>
			<li><a href="#">Your Profile<i class="fas fa-caret-down"></i></a>
				<ul>
					<li><a href="viewstudentprofile.php" style="font-size: 14px">E-Mess Card</a></li>
					
				</ul>
		    </li>
		     <!-- <li><a href="#">Contact Us</a></li> -->
		    <li><a href="studentfeedback.php">Feedback</a></li>
		    <li><a href="logout.php">Logout</a></li>
		</ul>

		</nav>
	

	<p id = "newtab" name = "newtab" style="margin-top: 100px">
		<center><table>
		<tr>
		<th >Serial No</th>
		<th>Original Balance</th>
		<th>New Balance</th>
		<th>Transaction Type</th>
		<th>Amount</th>
		<th>Order Type</th>
		</tr>
		<?php 
		$q13 = "select * from transactions where snuid='$id'";
    	$result13 = mysqli_query($con, $q13);

		$num13 = mysqli_num_rows($result13);
		if($num13 == 1){
		while ($row = mysqli_fetch_array($result13))
		{

		echo "<table>";
		echo "<tr>";
		echo "<th>" .$row['serialno']. "</th>";
		echo "<th>".$row['balance']. "</th>";
		echo "<th>".$row['newbalance']. "</th>";
		echo "<th>".$row['transaction_type']. "</th>";
		echo "<th>".$row['amount']. "</th>";
		echo "<th>".$row['order_type']. "</th>";
		echo "</tr>";
		echo "</table>";
		}
		}?>
		
		</table></center></p>

		

</body>
</html>