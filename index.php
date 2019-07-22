<?php
	declare(strict_types = 1);
	require_once "lib/view.php";
	require_once "lib/controller.php";
	require_once "To_do_list.html";
	$myList = new Saraksts();
	$myList->getList(1);
?>
