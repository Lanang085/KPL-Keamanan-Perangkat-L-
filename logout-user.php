<?php
date_default_timezone_set("Asia/Jakarta");
session_start();
session_unset();
session_destroy();
header('location: login-user.php');
?>