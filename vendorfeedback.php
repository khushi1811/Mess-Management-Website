<?php
		
		session_start();
		$con = mysqli_connect('localhost', 'root');
		if($con){
			//echo "connection successful";
		}else{
			echo "no connection";
		}

		mysqli_select_db($con, 'messmanagement');

		


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
		<a href="vendorhome.php"><img src="new_logo.png" class="logo"></a>
		<ul>
			<li ><a href="vendorhome.php">Home</a></li>
			<li><a href="vendorusers.php">View Users</i></a>
			</li>
			<li><a href="#">View Orders<i class="fas fa-caret-down"></i></a>
				<ul>
					<li><a href="vendorquarantinedelivery.php" style="font-size: 14px">Quarantine Delivery</a></li>
					<li><a href="vendorpreorder.php" style="font-size: 14px">Transactions </a></li>
					
				</ul>
		    </li>
		    <li><a href="vendorfeedback.php">View Feedback</i></a>
			</li>
		    <li><a href="logout.php">Logout</a></li>
		</ul>

		</nav>


	
<center><h style="margin-top: 10px">Student Feedback Details </h>
	<p id = "newtab" name = "newtab" style="margin-top: 10px">
		<table>
		<tr>
		<th >ID</th>
		<th>First Name</th>
		<th>Message</th>
		</tr>
		<?php 
		$q13 = "select * from feedback";
    	$result13 = mysqli_query($con, $q13);

		$num13 = mysqli_num_rows($result13);
		if($num13 != 0){
		while ($row = mysqli_fetch_array($result13))
		{

		echo "<table>";
		echo "<tr>";
		echo "<th>" .$row['id']. "</th>";
		echo "<th>".$row['name']. "</th>";
		echo "<th>".$row['message']. "</th>";
		echo "</tr>";
		echo "</table>";
		}
		}?>
		
		</table></p>


<h style="margin-top: 10px">Professor Feedback Details </h>
		<p id = "newtab1" name = "newtab" style="margin-top: 10px">
			<table>
		<tr>
		<th >ID</th>
		<th>Name</th>
		<th>Feedback</th>
		</tr>
		<?php 
		$q13 = "select * from professorfeedback";
    	$result13 = mysqli_query($con, $q13);

		$num13 = mysqli_num_rows($result13);
		if($num13 != 0){
		while ($row = mysqli_fetch_array($result13))
		{

		echo "<table>";
		echo "<tr>";
		echo "<th>" .$row['id']. "</th>";
		echo "<th>".$row['name']. "</th>";
		echo "<th>".$row['message']. "</th>";
		echo "</tr>";
		echo "</table>";
		}
		}?>
		
		</table>
		
		</p></center>

		

</body>
</html>