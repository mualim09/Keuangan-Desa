<?php

session_start();
$_SESSION = [];
session_unset();
session_destroy();


echo "<script>alert('Anda Telah LogOut');window.location='index.php';</script>";

exit;
?>

