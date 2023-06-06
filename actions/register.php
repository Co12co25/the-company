<?php

require("../classes/User.php");

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$uname = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$user = new User;
$user->addUser($fname, $lname, $uname, $password);
