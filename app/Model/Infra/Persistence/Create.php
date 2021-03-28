<?php

namespace Localize\Model\Infra\Persistence;


class Create
{
    private \PDO $connection;

    public function __construct()
    {
        $this->connection = Connection::createConnection();
    }

    public function verificaDB(){
        $sqlQuery = "SHOW TABLES LIKE 'users';";
        $stmt = $this->connection->query($sqlQuery);
        if($stmt->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function crateTables()
    {
        $sqlQuery = "CREATE TABLE IF NOT EXISTS users(
            id        INT PRIMARY KEY AUTO_INCREMENT,
            name      VARCHAR(100),
            email     VARCHAR(200) NOT NULL,
            phone     VARCHAR(20),
            confirmad INT DEFAULT 0,
            token     VARCHAR(20),
            password  TEXT NOT NULL
        );
        ";
        $stmt = $this->connection->prepare($sqlQuery);
        $stmt->execute();
    }

}