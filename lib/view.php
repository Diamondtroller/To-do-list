<?php
    require "dbh.php";
    class Saraksts extends Database {
        public function getList($id){
            $stmt = $this->connectREAD()->query("SELECT * FROM lietas");
            $row = $stmt->fetch();
            /*
            $st = $pdo->execute(array(":id"=>$id));
            echo "<p class=\'Lieta\'>".$st."</p>";
            */
            echo $row;
        }
}
?>