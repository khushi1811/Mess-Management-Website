<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="welcome.css">
	<style >
		.slide-container{
  width: 1260px;
  height: 575px; 
  margin-left:auto;
  margin-right:auto; 
  overflow: hidden;
  text-align: center;
  box-shadow: 1px 2px 10px 5px black;
  animation: slider 10s infinite linear; 
  z-index: -1;
  
}

@keyframes slider{
  0%{background-image: url('shiv1.jpg');}
  25%{background-image: url('shiv2.jpg');}
  50%{background-image: url('shiv3.jpg');}
  75%{background-image: url('shiv4.jpg');}
  100%{background-image: url('shiv5.jpg');}

}

.container{
	padding: 100px;
	margin-top: -50px;
}

.img{
	margin-left: -80px;
	width: 250px;
	height: 100px;
	padding: 0px 0px 0px 100px ;
}

.wrapper{
	margin-left: 600px;
	margin-top: -130px;
}


.btn1
{
	width: 200px;
	height: 50px;
	border-radius: 30px;
	background-color: white;
	border:2px solid #A2D9CE;
	transition: background-color 2s;
	text-decoration-color: white;
	margin-right: 10px;
	margin-left: 30px;

}

.btn1:hover
{
	background-color: #A2D9CE;
}

.btn2
{
	width: 200px;
	height: 50px;
	border-radius: 30px;
	background-color: white;
	border:2px solid #A2D9CE;
	transition: background-color 2s;
	margin-right: 16px;

}

.btn2:hover
{
	background-color: #A2D9CE;
}

.btn3
{
	width: 200px;
	height: 50px;
	border-radius: 30px;
	background-color: white;
	border:2px solid #A2D9CE;
	transition: background-color 2s;

}

.btn3:hover
{
	background-color: #A2D9CE;
}


	</style>
</head>
<body>

	
		<div class="slide-container">
			<center><h1 style="font-family: Lucida Handwriting, cursive; margin-top: 20px">Mess Management System</h1></center>
		<h3 style="color: white"> Welcome, Kindly select the appropriate option:</h3>
	<div class = "container">
	
	<a href="studentlogin.php">
		<button class="btn1">Student</button>
	</a>
	<a href="professorlogin.php">
		<button class = "btn2">Professor</button>
	</a>
	<a href="vendorlogin.php">
		<button class="btn3">Vendor</button>
	</a></div><div class="logo">
<center><img src="new_logo.png" class="img"></center>
</div>
	</div>
		
	
	

</body>
</html>