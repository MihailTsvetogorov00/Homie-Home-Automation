<?php
session_start();                  // Begins a session
if (!isset($_SESSION)) { //Checks for an existing session
    header("location:index.php");
    exit;
} else {
    header('Content-Type: text/html; charset=utf-8');
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Homie Home Automation</title>
      <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		<h2><strong>HOMIE</strong> Home Automation</h2>
		<h2>control panel</h2>
		<form class="form">
		<br><br><br>
			<button type="submit" formaction="laundry.html" id="linkButton">Laundry</button>
			<br><br>
			<button type="submit" formaction="boiler.html" id="linkButton">Boiler</button>
			<br><br>
			<button type="submit" formaction="airC.html" id="linkButton">Air conditioning</button>
			<br><br>
			<button type="submit" formaction="coupler.html" id="linkButton">Elecrical coupler</button>
			<br><br>
			<button type="submit" formaction="logout.php" id="linkButton">Logout</button>
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
