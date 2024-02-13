<?php

abstract class AbstractManager {
    protected PDO $db;

    public function __construct(){
        $this->db = new PDO(
            "mysql:host=db.3wa.io;port=3306;dbname=jonatannsualu_distortion;charset=utf8",
            "jonatannsualu",
            "2cab3819d5c9a03f50f9865b1ef8e0c1"
        );
    }
}

?>

