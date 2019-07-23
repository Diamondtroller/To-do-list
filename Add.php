<?php
	declare(strict_types = 1);
	require_once "lib/addLieta.php";
	require_once "To_do_list.html";
    //require_once "newEntry";
?>
<form class=Lieta method="POST" action="#">
  <div class="form-group">
    <label for="Virsraksts">Virsraksts</label>
    <input type="text" class="form-control" id="Virsraksts" name="Name" placeholder="Virsraksts">
  </div>
  </div>
  <div class="form-group">
    <label for="Apraksts">Apraksts</label>
    <textarea class="form-control" id="Apraksts" name="Description" rows="6" placeholder="Apraksts"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Pievienot jaunu</button>
</form>