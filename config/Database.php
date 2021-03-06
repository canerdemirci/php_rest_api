<?php

class Database {
    //DB Params
    private $host = 'localhost';
    private $dbname = 'myblog';
    private $username = 'ingmysql';
    private $password = 'Caci21289';
    private $conn;

    //DB connect
    public function connect() {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=utf8',
                $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }

        return $this->conn;
    }
}

?>