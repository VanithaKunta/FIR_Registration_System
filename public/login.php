<?php require_once("../includes/session.php"); ?>

<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/layouts/header.php"); ?>

<?php
	if(isset($_POST["register-submit"])) {
		$username = mysql_prep($_POST["username"]);
		$email = $_POST["email"];
		$address = $_POST["address"];
		$dob = $_POST["dob"];
		$phone_number = $_POST["phone_number"];
		$password = $_POST["password"];
		$confirm_password = $_POST["confirm-password"];

		$query = "INSERT INTO users (";
		$query .= "name, dob, phone_number, address, password, email ";
		$query .= ") VALUES (";
		$query .= " '{$username}', '{$dob}', {$phone_number}, '{$address}', '{$password}', '{$email}'";
		$query .= ")";

		echo $query;
		
		$result = mysqli_query($connection, $query);
		
		// Test for a query error
		if($result) {
			// Success
			$_SESSION["message"] = "Your account has been created. Please login.";
			redirect_to("login.php");
		} else {
		// Failure
			$_SESSION["message"] = "Account creation failed";
		}
	}
?>

<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="https://phpoll.com/login/process" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="login.php" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Full Name" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="2" class="form-control" placeholder="Email" value="">
									</div>
									<div class="form-group">
										<input type="text" name="address" id="address" tabindex="3" class="form-control" placeholder="Address" value="">
									</div>
									<div class="form-group">
										Date of Birth<input type="date" name="dob" id="dob" tabindex="4" class="form-control" placeholder="DOB" value="">
									</div>
									<div class="form-group">
										<input type="number" name="phone_number" id="phone_number" tabindex="7" class="form-control" placeholder="Phone Number" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="8" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="9" class="form-control" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="10" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>