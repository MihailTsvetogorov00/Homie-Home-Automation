<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Login</title>
</head>
<body>
<?php
session_start();
    $login_form = <<<EOD
<form class="form" name="login" id="login" method="POST" action="check_login.php">
<p><label for="username">Име: </label><input type="text" size="100" name="username" id="username" placeholder="Enter Username here" /></p>
<p><label for="password">Парола: </label><input type="password" size="40" name="password" id="password" placeholder="abracadabra" /></p>
<p><input type="submit" name="submit" id="submit" value="Submit"/> <input type="reset" name="reset" id="reset" value="reset"/></p>
</form>
EOD;
$msg = $_GET['msg'];  //Takes the message
if($msg!='') echo '<p>'.$msg.'</p>'; //If the message is there - it prints
echo "<h1>Enter login info</h1>";
echo $login_form;
?>
</body>
</html>