<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
<div class="log">
	<nav>
		<img src="logo.png" class="logo">
	</nav>
</div>

<title>SignUp Form</title>

 <div class="container">
	<form action="regs.php" method="post"  class="login-email">
	<p class="login-text" style="font-size: 2rem; font-weight: 800;">REGISTER</p>
	
	<div class="input-group">
		<input type="email" placeholder="EMAIL" name="email"  required>
	</div>
	
	
	<div class="input-group">
		<input type="text" placeholder="USERNAME" name="username"  required>
	</div>
	
	
	<div class="input-group">
		<input type="password" placeholder="PASSWORD" name="password" required>
    </div>
    <div class="input-group">
		<input type="password" placeholder="CONFIRM PASSWORD" name="cpassword"  required>
	</div>
	
	
	<div class="input-group">
		<button name="submit" class="btn">REGISTER</button>
	</div>
	
	<p class="login-register-text">Already have an account? <a href="login.php">SIGN IN</a>.</p>
	</form>
</div>	

</body>
</html>

