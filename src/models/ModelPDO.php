<?php
namespace src\models;
use PDO;
use PDOException;

class ModelPDO extends PDO {
    public static function banco() {
        try {
            $pdo = new PDO("mysql:dbname=u893640490_straaf;host=localhost", "u893640490_straaf", "Meliodas17");
            return $pdo;
        } catch (PDOException $e) {
            echo "Falhou: ".$e->getMessage();
        }
    }
}