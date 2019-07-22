<?php
    class Database {
        private $host;
        private $user;
        private $pass;
        private $name;
        private $charset;
        
        protected function connectREAD() {
            //private $con = mysqli_connect($this->host,$this->user,$this->pass,$this->name);
            $this->host ="127.0.0.1";
            $this->user = "List_reader";
            $this->pass = "q?h4*o-gW8c0%aN#Oq";
            $this->name = "daramas_lietas";
            $this->charset = "utf8";
            $dsn ="mysql:host=".$this->host.";dbname=".$this->name.";charset=".$this->charset;
            try {
                $pdo = new PDO($dsn,$this->user,$this->pass);
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                return $pdo;
            } catch(PDOException $e){
                echo "Error: ".$e->getMessage();
                var_dump($pdo);
            }
        }
    }
?>
