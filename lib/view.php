<?php
    require "dbh.php";
    class Saraksts extends Database {
        public function getList($id){
            $stmt = $this->connectREAD()->query("SELECT * FROM lietas
            WHERE ID =".strval($id));

            $row = $stmt->fetch(PDO::FETCH_OBJ);
            echo "<p class='Lieta'>".htmlspecialchars($row->Name,
            ENT_QUOTES)."</p>";

        }
}
?>