<?php
session_start();
define(DOC_ROOT,dirname(__FILE__)); // Config path
$username = $_POST['username']; //Username
$password = $_POST['password']; //Password
$msg ='';
if(isset($username, $password)) {
    ob_start();
    include(DOC_ROOT.'D:/wamp64/www/config.php'); //Creates a link with the DB
    $myusername = stripslashes($username);
    $mypassword = stripslashes($password);
    $myusername = mysqli_real_escape_string($dbC, $myusername);
    $mypassword = mysqli_real_escape_string($dbC, $mypassword);
    $sql="SELECT * FROM users WHERE username='$myusername' and password='$mypassword'";
    $result=mysqli_query($dbC, $sql);
    $count=mysqli_num_rows($result);
    // If the info is correct - there should be one entry
    if($count==1){
        // Input of username and password => admin.php
		$_SESSION['name'] = $myusername;
		$_SESSION['password'] = $mypassword;
        header("location:main.php");
    }
    else {
        $msg = "Sorry, wrong name or password";
        header("location:index.php?msg=$msg");
    }
    ob_end_flush();
}
else {
    header("location:index.php?msg=Input name or password");
}
?>