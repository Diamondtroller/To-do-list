<?php
    require_once "dbh.php";
    class JaunaLieta extends Database {
        public function addLieta(int $id, string $Name="Nosaukums",string $Description="") {
            $this->query("INSERT INTO `lietas` (`id`, `Name`, `Description`, `Done`, `Day`)
            VALUES (?, ?, ?, '0', CURRENT_DATE());",
            [$id, $Name,$Description]);
        }
    }