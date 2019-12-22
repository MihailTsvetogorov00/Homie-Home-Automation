<?php
session_start(); //Session begin
session_destroy(); //Clear the session, so as not to be logged in
header("location:index.php?msg=Successful exit"); // Reference to login.php
?>