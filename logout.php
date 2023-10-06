<?php
session_start();
$_SESSION['login'] = False;
session_unset();
session_destroy();
header("location: login.php");
exit(0);
?>