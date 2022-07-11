
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title> SIGN IN </title>
	
</head>
<body>
<div class="log">
	<nav>
		<img src="logo.png" class="logo">
	</nav>
</div>

<div class="container">
  <form action="sigin.php" method="POST" class="login-email">
  	<p class="login-text" style="font-size: 2rem; font-weight: 800;">SIGN IN</p>
	
	<div class="input-group">
	<input type="text" placeholder="ENTER USERNAME" name="username" required>
	</div>
	
	<div class="input-group">
	<input type="password" placeholder="PASSWORD" name="password" required>
	</div>
	
	<div class="input-group">
	<button name="SUBMIT" class="btn">SIGN IN</button>
	</div>
	
    <p class="login-register-text">Don't have an account? <a href="register.php">REGISTER HERE</a>.</p>
    </form>
   
  </div>

</body>
</html>