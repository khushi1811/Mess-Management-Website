<?php
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/qrcode.js"></script>
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
                   background-color: #2c3e50;
                   color: white;
                       }

                       .details {
  float: left;
  font-size:22px;

  padding-left: 100px;
  opacity: .7;
  filter: blur(.1px);
  font-family: sans-serif;
}


	</style>
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	
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
					<li><a href="viewprofessorprofile.php" style="font-size: 14px">E-Mess Card</a></li>
					
				</ul>
		    </li>
		     <!-- <li><a href="#">Contact Us</a></li> -->
		    <li><a href="professorfeedback.php">Feedback</a></li>
		    <li><a href="logout.php">Logout</a></li>
		</ul>

		</nav>


		</div>
	<center><h1 style="padding-top: 50px">YOUR PROFILE </h1></center>
				<!--<form action="viewstudentprofile.php" method="post">
				<div class="form-group" style="padding-top: 50px">
					<label> SNU ID </label>
					<input type="text" name="userId" class="form control">
					<button type ="submit" class="btn btn-primary"> Submit </button>
				</div>
				</form>-->

				
				
				
				<div class="details" style="float: left; margin-left:200px;">
					<table>
						<tr>
							<td style="text-align: left;">
								<span style='font-weight: bold'>
								SNU ID</span> </td>
							<td>	 <?php echo $_SESSION['id']; ?> </td>	
						</tr>
						<tr>
							<td style="text-align: left;">
								<span style='font-weight: bold'>
								FIRST NAME</span> </td>
							<td>	 <?php echo $_SESSION['first_name']; ?> </td>	
						</tr>
						<tr>
							<td style="text-align: left;">
								<span style='font-weight: bold'>
								LAST NAME</span> </td>
							<td> <?php echo $_SESSION['last_name']; ?>
						</td>
						</tr>

						<tr>
							<td style="text-align: left;">
								<span style='font-weight: bold'>
								HOSTEL</span> </td>
								<td> <?php echo $_SESSION['hostel']; ?>
							</td>
						</tr>

                        <tr>
                        	<td style="text-align: left;">
								<span style='font-weight: bold'>
								ROOM NUMBER</span> </td>
                        	<td>
                        		<?php echo $_SESSION['room_no']; ?>
                        	</td>
                        </tr>
				<tr>
					<td style="text-align: left;">
								<span style='font-weight: bold'>
								AGE</span> </td>
					<td>
						<?php echo $_SESSION['age']; ?>
					</td>
				</tr>
				<tr>
					<td style="text-align: left;">
								<span style='font-weight: bold'>
								GENDER</span> </td>
					<td>
					 <?php echo $_SESSION['gender']; ?>
					</td>
				</tr>
				<tr>
					<td style="text-align: left;">
								<span style='font-weight: bold'>
								MOBILE NUMBER</span> </td>
					<td>
						<?php echo $_SESSION['mobile_no']; ?>
					</td>
				</tr>
				<tr>
					<td style="text-align: left;">
								<span style='font-weight: bold'>
								EMAIL ID</span> </td>
					<td>
						<?php echo $_SESSION['snu_email']; ?>
					</td>
				</tr>
				<tr>
					<td style="text-align: left;">
								<span style='font-weight: bold'>
								DATE OF BIRTH</span> </td>
					<td>
						<?php echo $_SESSION['dob_ddmmyyyy']; ?>
					</td>
				</tr>
					</table>
			</div>
			
						<form style="padding-left: 200px; padding-top: 100px" onsubmit="generate();return false;">
	<input type="text" id="qr" name="">
</form>

<div id="qrResult" style="padding-left: 200px; padding-top: 100px float:right;">
	<script type="text/javascript" >
	var qrcode=new QRCode(document.getElementById('qrResult'),{
		width:200,
		height:200

	});

function generate(){
	var message=document.getElementById('qr');
	if(!message.value){
		alert("Input a text");
		message.focus();
		return;
	}

	qrcode.makeCode(message.value);
}

</script>
</div>



<br>
<br>
<br>
<br>






	
</body>
</html>

