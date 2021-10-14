<?php
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" type="text/css" href="form.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" >
</head>
<body>
	<div class = "dropdown">
		

		<nav>
			<a href="professorhome.php"><img src="new_logo.png" class="logo"></a>
		
		<ul>
			<li ><a href="professorhome.php">Home</a></li>
			<li><a href="#">Order<i class="fas fa-caret-down"></i></a>
				<ul>
					<li><a href="professorquarantinedelivery.php" style="font-size: 14px">Quarantine Delivery</a></li>
					<li><a href="professorpreorder.php" style="font-size: 14px">Pre-Order A-La-Carte</a></li>
					<li><a href="professormenu.php" style="font-size: 14px">View Our Menu</a></li>
					
				</ul>
			</li>
			<li><a href="#">Your Profile<i class="fas fa-caret-down"></i></a>
				<ul>
					
					
				</ul>
		    </li>
		     <!-- <li><a href="#">Contact Us</a></li> -->
		    <li><a href="professorfeedback.php">Feedback</a></li>
		    <li><a href="logout.php">Logout</a></li>
		</ul>

		</nav>
		</div>
	<div class="container">
            <div class="form-container">
                <h1 style="margin-left: 80px">
                    Feedback Form
                </h1>
                <form method="post" id="reused_form" action="form1.php">
                    <label >Your Name:</label>
                    <input id="name" type="text" name="name" required maxlength="50">
                    <label >SNU ID</label>
                    <input id="userId" type="text" name="userId" required maxlength="50">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="10" maxlength="6000" required></textarea>
                    <button class="button-primary" type="submit" >Post</button>
                </form>
                <!--<div id="success_message" style="display:none">
                    <h3>Submitted the form successfully!</h3> 
                    <p> We will get back to you soon. </p>
                </div>
                <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
            </div>-->
        </div>

	
</body>
</html>
