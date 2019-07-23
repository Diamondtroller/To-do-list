<?php
    class Database {
        #Definēju savienojuma parmetrus
        private $host;
        private $user;
        private $pass;
        private $name;
        private $charset;

        #Aizsargāta funkcija, kas pievienojas datubāzei un atgriež savienojumu
        protected function connect() {
            $this->host ="127.0.0.1";
            $this->user = "Db_Reader";
            $this->pass = "q?h4*o-gW8c0%aN#Oq";
            $this->name = "daramas_lietas";
            $this->charset = "utf8";
            #Sagatavo data source name 
            $dsn ="mysql:host=".$this->host.";dbname=".$this->name.";charset=".$this->charset;
            #Mēģina savienoties
            try {
                $pdo = new PDO($dsn,$this->user,$this->pass);
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                return $pdo;
            } catch(PDOException $e){
                echo "Error: ".$e->getMessage();
                var_dump($pdo);
                die();
            }
        }
        protected function query(string $query, $args) {
            $stmt = $this->connect()->prepare($query);
            $stmt -> execute($args);
            return $stmt;
        }
    }
?>
