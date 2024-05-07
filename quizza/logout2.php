<?php
session_unset();

unset($_SESSION ['email']);
session_destroy();
header("location: commonlogin.php");

?>