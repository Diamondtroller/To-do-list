<?php
require_once "lib/control.php";
$myWrite = new JaunaLieta();
$myWrite->addLieta(1, $_POST['Name'], $_POST['Description']);
die();
?>