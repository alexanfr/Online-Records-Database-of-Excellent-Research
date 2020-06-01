<?php
session_start();
$_SESSION['logged_in'] = null;
$_SESSION['lastname'] = null;
$_SESSION['firstname'] = null;
unset($_SESSION['logged_in']);
unset($_SESSION['lastname']);
unset($_SESSION['firstname']);
session_destroy();
header('Location: /index.php');
?>
