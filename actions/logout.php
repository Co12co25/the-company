<?php

session_start();
session_unset(); //remove all session variables
session_destroy(); //destroys /deletes the session

header("location: ../views"); //go back to login
exit;