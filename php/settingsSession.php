<?php
//A session is a way to store information(in varible) to be used across multiple pages.
//information is not stored on the users computer

//start the session
session_start();
//set session variable
$_SESSION["username"] = "john";
$_SESSION["email"] = "ducky@gmail.com";

echo ("Session variable is set.");
