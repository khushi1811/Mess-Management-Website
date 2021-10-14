

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
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
	<p id = "newtab1" name = "newtab1">
			<form method="post" action="studentrecharge1.php">
			<label style="margin-left: 100px; font-size: 25px"> Enter your Amount to Recharge </label>
			<input type="text" name="amount" class="form control" style="margin-left: 100px; font-size: 25px">
			<button type ="submit" class="btn btn-primary" name = "proceed"style="margin-left: 100px; font-size: 25px; background-color: white"> Proceed to checkout 
				
					
				</button></form><br><br><br>


				




			

		</p>

</body>
</html>