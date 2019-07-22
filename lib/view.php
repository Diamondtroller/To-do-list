<?php
    require "dbh.php";
    class Saraksts extends Database {
        public function getList($id){
            $stmt = $this->connectREAD()->prepare(
                "SELECT * FROM lietas
                WHERE ID = ?");
            $stmt->execute([$id]);
            $lietas = $stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($lietas as $lieta) {
                $check = '';
                if ($lieta->Done) {
                    $check =$check."checked";
                }
                echo 
                    "<div class='Lieta'>
                        <input type='checkbox' name="
                        .htmlspecialchars($lieta->Name, ENT_QUOTES).
                        " value = 1 ".$check.">".
                    "</div>";
            }
        }
}
?>
