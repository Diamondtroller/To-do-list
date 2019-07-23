<?php
	require_once "lib/view.php";
	$mode = 's';
	require "To_do_list.html";
	#Ielādē mājaslapu, sakumā parāda sarakstu
	switch ($mode) {
		case 's': # (s)araksta skats
			$myList = new Saraksts();
			$myList->getList(1);
			echo '<a class="btn btn-secondary" href="Add.php" role="button">Pievienot jaunu</a></body></html>';
			break;
		case 'l':# (l)abošanas skats
			echo '</body></html>';
			break;
		case 'p':# (p)ievienošanas skats
			require "Add.php";
			echo 'Test</body></html>';
			break;
		default:
			die("Error: ".$e);
			break;
	}
	//require_once "lib/controller.php";
	

?>
