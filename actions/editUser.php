<?php

require("../classes/User.php");

$uid = $_POST['user_id'];
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$uname = $_POST['username'];

$user = new User;
$user ->editUser($uid, $fname, $lname, $uname);