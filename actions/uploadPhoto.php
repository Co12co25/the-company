<?php

require("../classes/User.php");

session_start();

$uid = $_SESSION['user_id'];
$file_name = $_FILES['photo']['name']; //real file name
$tmp_name = $_FILES['photo']['tmp_name']; //address of uploaded file (in temporary folder, with temp name)
// C:/xamp/htdocs/files/68790.jpg

$user = new User;
$user->updatePhoto($uid, $file_name, $tmp_name);

