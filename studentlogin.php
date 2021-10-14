<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
	<link rel="stylesheet" type="text/css" href="style_login.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
	<center><img src="new_logo.png" height="100"/></center>
	<center><h1 style="font-family: verdana bold;">Student Portal</h1></center>

	<div class = "container">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h2 style="font-family: georgia;">Login Form</h2>
				<form action="studentvalidation.php" method="post">
				<div class="form-group">
					<label> SNU ID </label>
					<input type="text" name="user" class="form control" required>
				</div>

				<div class="form-group">
					<label> Password </label>
					<input type="password" name="password" class="form control" required>
				</div>
				<button type ="submit" class="btn btn-primary"> Login </button>
				</form>
			</div>

			<div class="col-md-6 login-right">
				<h2 style="font-family: georgia;">Registration Form</h2>
				<form action="studentregistration.php" method="post">
				<div class="form-group">
					<label> SNU ID </label>
					<input type="text" name="userId" class="form control">
				</div>
				<div class="form-group">
					<label> First Name </label>
					<input type="text" name="username" class="form control">
				</div>
				<div class="form-group">
					<label> Last Name </label>
					<input type="text" name="userlastname" class="form control">
				</div>
				<div class="form-group">
					<label> Hostel </label>
					<input type="text" name="userhostel" class="form control">
				</div>
				<div class="form-group">
					<label> Room No. </label>
					<input type="text" name="userroom" class="form control">
				</div>
				<div class="form-group">
					<label> Age </label>
					<input type="text" name="userage" class="form control">
				</div>
				<div class="form-group">
					<label> Gender </label> 
					<input type="text" name="gender" class="form control"> 
				</div>
				<div class="form-group">
					<label> Mobile No. </label>
					<input type="tel" name="userphone" class="form control">
				</div>
				<div class="form-group">
					<label> SNU Email-ID</label>
					<input type="Email-ID" name="useremail" class="form control">
				</div>
				<div class="form-group">
					<label> Graduation Year </label>
					<input type="text" name="usergradyear" class="form control">
				</div>
				<div class="form-group">
					<label> D.O.B </label>
					<input type="text" name="userdob" class="form control">
				</div>

				<div class="form-group">
					<label> Password </label>
					<input type="password" name="password" class="form control">
				</div>
				<button type ="submit" class="btn btn-primary"> Signin </button>
				</form>
			</div>
			
		</div>
	</div>

</body>
</html>