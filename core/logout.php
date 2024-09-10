<?php
require '../config/init.php';
session_start();
session_destroy();
$_SESSION = [];
redirect('../home.php');

?>