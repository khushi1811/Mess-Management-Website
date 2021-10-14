<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
	<div class = "container">
		<div class="row">
			<div class="col-lg-6">
				<h2>Login Form</h2>
				<form action="validation.php" method="post">
				<div class="form-group">
					<label> username </label>
					<input type="text" name="user" class="form control">
				</div>

				<div class="form-group">
					<label> password </label>
					<input type="password" name="password" class="form control">
				</div>
				<button type ="submit" class="btn btn-primary"> Login </button>
				</form>
			</div>

			<div class="col-lg-6">
				<h2>Registration Form</h2>
				<form action="registration.php" method="post">
				<div class="form-group">
					<label> username </label>
					<input type="text" name="user" class="form control">
				</div>

				<div class="form-group">
					<label> password </label>
					<input type="password" name="password" class="form control">
				</div>
				<button type ="submit" class="btn btn-primary"> Signin </button>
				</form>
			
		</div>
	</div>

</body>
</html>