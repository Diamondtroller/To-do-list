<?php
    require "dbh.php";
    class Saraksts extends Database {
        public function getList($id){
            $lietas = $this->query("SELECT * FROM lietas WHERE ID = ?",
            [$id])->fetchAll(PDO::FETCH_OBJ);
            foreach ($lietas as $lieta) {
                $check = '';
                if ($lieta->Done) {
                    $check =$check."checked";
                }
                echo 
                    "<div class='Lieta'>
                        <input type='checkbox' name="
                        .htmlspecialchars($lieta->Name, ENT_QUOTES).
                        " value = 1 ".$check.">",'
                        <button type="button" class="btn btn-secondary">Labot</button>'.
                    "</div>";
            }
        }
}
?>
