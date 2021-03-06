<!DOCTYPE html>
<html lang="en">
<head>
	<title>DulApp Codrin Popa, Lupu Teodor</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/form-effect.js"></script>
</head>
<body>
	
	<header>
		<div class="logo"><a href="index.php"><img src="images/logo.png" alt="Logo"></a></div>
	</header>

	<main>
        <div class="form">
            <form class="register-form" method="post" action="register.php">
              <input type="text" name="register-user" placeholder="username" required/>
              <input type="text" name="firstname" placeholder="first name" required/>
              <input type="text" name="lastname" placeholder="last name" required/>
              <input type="email" name="email" placeholder="email address" required/>
              <input type="password" name="password" placeholder="password" required/>
              <button type="submit" name="register-bt">register</button>
              <p class="message">Already registered? <a href="#">Sign In</a></p>
            </form>

            <form action="check-login.php" class="login-form" method="post">
              <input type="text" name="login-user" placeholder="username" required />
              <input type="password" name="login-pass" placeholder="password" required />
              <button type="submit" name="login-bt">login</button>
              <p class="message">Not registered? <a href="#">Create an account</a></p>
              <?php
                if (isset($_GET["msg"]) && $_GET["msg"] == 'success') {
                echo '<p class="message success">Account created!</p>';
                }

                if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
                echo '<p class="message wrong">Wrong username or password! <a href="index.php">Try again!</a></p>';
                }

                if (isset($_GET["msg"]) && $_GET["msg"] == 'failed-username') {
                echo '<p class="message wrong">Username already exists!';
                }

                if (isset($_GET["msg"]) && $_GET["msg"] == 'failed-email') {
                echo '<p class="message wrong">Email already exists!';
                }
              ?>
            </form>
        </div>
	</main>

	<?php require_once('footer.php'); ?>