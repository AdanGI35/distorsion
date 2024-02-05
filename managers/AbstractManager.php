<?php
    class AbstractManager
    {
        protected PDO $db;
        
        public function __construct() {
            $host = "db.3wa.io";
            $port = "3306";
            $dbname = "eddyfrair_grp_distorsion";
            $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
            
            $user = "eddyfrair";
            $password = "be1462e6ceeb160384371a8dad76c812";
            $this->db = new PDO($connexionString, $user, $password);
        }
    }