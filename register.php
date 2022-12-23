<?php include"conf.php"?>
<?php 
            $name = @$_POST['uname'];
            $email = @$_POST['umail'];
            $phone = @$_POST['uphone'];
            $password = @md5($_POST['upassword']);
            $gender = @$_POST['g1'];
            if (isset($_POST["r1"]))
            {
                //echo $email.",".$password;
                $sql = mysqli_query($con,"SELECT * FROM user WHERE Uname='$name';");
                //echo mysqli_num_rows($sql);
                if( mysqli_num_rows($sql) != 0 )
                { 
                    //echo $email.",".$password;
                    echo "<script>alert('Data already exists')</script>";
                } 
                else 
                {
                    mysqli_query($con,"insert into register set Uname='$name', Email='$email', Phone='$uphone', Password='$upassword', Gender='$g1',")or die("Insert Error".mysqli_error());
                    echo "<script>";
	    			echo 'location.replace("index.php")';
	    			echo "</script>";
                }
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Login Page &mdash; Bootstrap 4 Login Page Snippet</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/logo.jpg" alt="bootstrap 4 login page">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Register</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="name">User Name</label>
									<input id="name" type="text" class="form-control" name="uname" required autofocus>
									<div class="invalid-feedback">
										What's your name?
									</div>
								</div>

								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="uemail" required>
									<div class="invalid-feedback">
										Your email is invalid
									</div>
								</div>

									<div class="form-group">
									<label for="phone">Phone</label>
									<input id="email" type="text" class="form-control" name="uphone" required>
									<div class="invalid-feedback">
										Your email is invalid
									</div>
								</div>


								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="upassword" required data-eye>
									<div class="invalid-feedback">
										Password is required
									</div>
								</div>

								<!--<div class="form-group">
								<label for="gender">Gender</label>	
									<select class="from-control" name="g1" id="g1">
											<option selected>Select</option>
											<option value="1">Male</option>
											<option value="2">Female</option>
											<option value="3">Other</option>
									</select>
								</div>-->

								<label for="password">Gender :</label>
								<div class="form-check">
									<div class="custom-radio custom-control">
										<label for="agree" class="radio-inline"><input type="radio" name="g1" id="agree" class="form-check-input" value="male" required checked>Male</label>
									</div>
								</div>

								<div class="form-check form-check-inline">
									<div class="custom-radio custom-control">
										<label for="agree" class="radio-inline"><input type="radio" name="g1" id="agree" class="form-check-input" required value="female">Female</label>

									</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
										<label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and Conditions</a></label>
										<div class="invalid-feedback">
											You must agree with our Terms and Conditions
										</div>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block" name="r1">
										Register
									</button>
								</div>
								<div class="mt-4 text-center">
									Already have an account? <a href="index.php">Login</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2017 &mdash; Your Company 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>