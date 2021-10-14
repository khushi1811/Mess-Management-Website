

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	
</head>
<body>
	<div class = "dropdown">
		

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
		</div>
		<div>
			
			<form method="post" action="quarantinedelivery1.php">
			
			<div class="form-group" style="padding-top: 200px">
				<label style="margin-left: 100px; font-size: 25px">FILL IN THE FORM FOR QUARANTINE DELIVERY:</label><br>
					<label style="margin-left: 100px; font-size: 25px"> Enter your SNU ID </label>
					<input type="text" name="id" class="form control" style="margin-left: 100px; font-size: 25px">
				</div>
				<div class="form-group">
					<label style="margin-left: 100px; font-size: 25px"> Breakfast Timing (in format yyyymmddhhmmss)</label>
					<input type="datetime" name="breakfasttime" class="form control" style="margin-left: 100px; font-size: 25px">
				</div>
				<div class="form-group">
					<label style="margin-left: 100px; font-size: 25px"> Lunch Timing (in format yyyymmddhhmmss) </label>
					<input type="text" name="lunchtime" class="form control" style="margin-left: 100px; font-size: 25px">
				</div>
				<div class="form-group" style=" font-size: 25px">
					<label style="margin-left: 100px; font-size: 25px"> Dinner Timing (in format yyyymmddhhmmss)</label>
					<input type="text" name="dinnertime" class="form control" style="margin-left: 100px; font-size: 25px">
				</div>
				<button type ="submit" class="btn btn-primary" name = "proceed"style="margin-left: 100px; font-size: 25px; background-color: white"> Proceed to checkout 
				
					
				</button>
		</form>
				
			
		</div>	

	
</body>
</html>