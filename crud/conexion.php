<?php

class Database {
    private $hostname = "localhost";
    private $database = "flowermoon";
    private $username = "root";
    private $password = "flowermoon123";
    private $charset = "utf8";

    function conectar()
    {
        try {
           
            $dsn = "mysql:host=localhost/127.0.0.1" . $this->hostname . ";dbname=" . $this->database . ";charset=" . $this->charset;
            
          
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

           
            $pdo = new PDO($dsn, $this->username, $this->password, $options);
            return $pdo;

        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
            exit;
        }
    }
}

?>
