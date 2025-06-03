<?php
class Database{
    private static ?Database $instance = null;
    private PDO $connection;


    private function __construct(){
        $this->connection = new PDO(DSN, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => true
        ]);
    }

    public static function getInstance():Database{
        if(self::$instance === null){
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function getConnection():PDO{
        return $this->connection;
    }
}
?>