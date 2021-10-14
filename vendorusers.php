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

	
	
	<center><h style="margin-top: 10px">Student Account Details </h>
	<p id = "newtab" name = "newtab" >
		<table>
		<tr>
		<th >ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Hostel</th>
		<th>Room No.</th>
		<th>Age</th>
		<th>Gender</th>
		<th>Mobile No</th>
		<th>SNU Email</th>
		<th>Graduation Year</th>
		<th>Date Of Birth</th>
		</tr>
		<?php 
		$q13 = "select * from students";
    	$result13 = mysqli_query($con, $q13);

		$num13 = mysqli_num_rows($result13);
		if($num13 != 0){
		while ($row = mysqli_fetch_array($result13))
		{

		echo "<table>";
		echo "<tr>";
		echo "<th>" .$row['id']. "</th>";
		echo "<th>".$row['first_name']. "</th>";
		echo "<th>".$row['last_name']. "</th>";
		echo "<th>".$row['hostel']. "</th>";
		echo "<th>".$row['room_no']. "</th>";
		echo "<th>".$row['age']. "</th>";
		echo "<th>".$row['gender']. "</th>";
		echo "<th>".$row['mobile_no']. "</th>";
		echo "<th>".$row['snu_email']. "</th>";
		echo "<th>".$row['grad_year']. "</th>";
		echo "<th>".$row['dob_ddmmyyyy']. "</th>";
		echo "</tr>";
		echo "</table>";
		}
		}?>
		
		</table></p>


		<h>Professor Account Details </h>
		<p id = "newtab1" name = "newtab" style="margin-top: 10px">
			<table>
		<tr>
		<th >ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Hostel</th>
		<th>Room No.</th>
		<th>Age</th>
		<th>Gender</th>
		<th>Mobile No</th>
		<th>SNU Email</th>
		<th>Date Of Birth</th>
		</tr>
		<?php 
		$q13 = "select * from professors";
    	$result13 = mysqli_query($con, $q13);

		$num13 = mysqli_num_rows($result13);
		if($num13 != 0){
		while ($row = mysqli_fetch_array($result13))
		{

		echo "<table>";
		echo "<tr>";
		echo "<th>" .$row['id']. "</th>";
		echo "<th>".$row['first_name']. "</th>";
		echo "<th>".$row['last_name']. "</th>";
		echo "<th>".$row['hostel']. "</th>";
		echo "<th>".$row['room_no']. "</th>";
		echo "<th>".$row['age']. "</th>";
		echo "<th>".$row['gender']. "</th>";
		echo "<th>".$row['mobile_no']. "</th>";
		echo "<th>".$row['snu_email']. "</th>";
		echo "<th>".$row['dob_ddmmyyyy']. "</th>";
		echo "</tr>";
		echo "</table>";
		}
		}?>
		
		</table>
		
		</p>
</center>
		

</body>
</html>