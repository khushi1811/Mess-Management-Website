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
	<center><h1 style="font-family: verdana bold;">Vendor Portal</h1></center>
	

	
		<div class = "container">
		<div class="login-box">
		<div class="row">
			<center><div class="col-md-6 login-left">
				<h2 style="font-family: georgia;">Login Form</h2>
				<form action="vendorvalidation.php" method="post">
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
			</div></center>
		</div>
	</div>
</div>
</body>
</html>