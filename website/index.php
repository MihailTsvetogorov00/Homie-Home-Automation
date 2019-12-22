<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Homie Home Automation</title>
      <link rel="stylesheet" href="css/style.css">
	  <style>
form input {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: 0;
  border: 1px solid rgba(255, 255, 255, 0.4);
  background-color: rgba(255, 255, 255, 0.2);
  width: 250px;
  border-radius: 3px;
  padding: 10px 15px;
  margin: 0 auto 5px auto;
  display: block;
  text-align: center;
  font-size: 18px;
  -webkit-transition-duration: 0.25s;
          transition-duration: 0.25s;
  font-weight: 300;
}
	  </style>
</head>

<body>

  <div class="wrapper">
	<div class="container">
<?php
session_start();
?>
<h1>Welcome</h1>
<h2>to <strong>HOMIE</strong> control panel</h2>
<h2>Please authorise yourself:</h2>
<br><br><br><br><br><br><br><br><br>
<form name="login" class="form" id="login" method="POST" action="check_login.php">
<input type="text" size="100" name="username" id="username" placeholder="Username" /></p>
<input type="password" size="40" name="password" id="password" placeholder="Password" /></p>
<br><button type="submit" value="Submit" class="loginBut" id="submit">Home</button>
</form>
	
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
</body>
</html>
