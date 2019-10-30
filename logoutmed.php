<?php
session_start();
session_destroy();
header('Location: logmed.php');
exit;
?>