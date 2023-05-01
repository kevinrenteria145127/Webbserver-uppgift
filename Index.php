<!DOCTYPE html>
<html>
<head>
	<title>LOGGA IN</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
     <form action="Login.php" method="post">
     	<h2>LOGGA IN</h2>
         <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Användarnamn</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Lösenord</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Logga in</button>
		<a href="signup.php" class="ca">Skapa ett konto</a>

	</form>
</body>
</html>    