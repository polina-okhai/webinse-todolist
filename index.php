<?php
ini_set('display_errors', 1);

include 'router.php';
include 'models/user.php';
include 'controllers/users_controller.php';

session_start();

(new Router)->call();
 ?>
