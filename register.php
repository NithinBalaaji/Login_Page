<?php include('server.php');?>

 <!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" action="register.php">

		<?php include('errors.php') ?>

		<div class="input-group">
			<label>Username</label>
            <label>
                <input type="text" name="username" value="<?php echo $username; ?>" required>
            </label>
        </div>


		<div class="input-group">
			<label>Email</label>
            <label>
                <input type="email" name="email" value="<?php echo $email; ?> " required>
            </label>
        </div>

		<div class="input-group">
			<label>Password</label>
            <label>
                <input type="password" name="password_1" required>
            </label>
        </div>


		<div class="input-group">
			<label>Confirm Password</label>
            <label>
                <input type="password" name="password_2" required>
            </label>
        </div>

		<div class="input-group">
			<button type="Submit" name="register" class="btn">Register</button>
		</div>


		<p>
			Already a member? <a href="login.php">Sign In</a>
		</p>

	</form>

</body>
</html>