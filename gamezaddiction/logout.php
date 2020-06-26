<?php
session_start();

session_destroy();
header('Location:mainpaige.php');
exit();

?>