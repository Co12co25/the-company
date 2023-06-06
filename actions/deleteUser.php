<?php

require("../classes/User.php");

$uid = $_POST['user_id'];

$user = new User;
$user ->deleteUser($uid);