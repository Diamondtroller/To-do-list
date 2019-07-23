<?php
	#Ielādē mājaslapu, sakumā parāda sarakstu
	require_once "lib/view.php";
	//require_once "lib/controller.php";
	require_once "To_do_list.html";
	$myList = new Saraksts();
	$myList->getList(1);
?>
<a class="btn btn-secondary" href="Add.php" role="button">Pievienot jaunu</a>