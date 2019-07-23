<?php
    require_once "dbh.php";
    class JaunaLieta extends Database {
        public function addLieta($uid, string $Name="Nosaukums",string $Description="") {
            $this->query("INSERT INTO `lietas` (`uid`, `Name`, `Description`, `Done`, `Day`)
            VALUES (?, ?, ?, '0', CURRENT_DATE())",
            [$uid, $Name,$Description]);
        }
    }