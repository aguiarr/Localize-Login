<?php

namespace Localize\Model\Infra\Repository;


use Localize\Model\Entity\Users;
use Localize\Model\Repository\RepositoryUsers;

class RepoUsers implements RepositoryUsers
{
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function checkout(string $email, string $password): array
    {
        $sqlQuery = "SELECT id  FROM users WHERE email = ? AND password = md5(?);";
        $stmt = $this->connection->prepare($sqlQuery);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $password);

        $stmt->execute();
        $dataList = $stmt->fetchAll();
        if($dataList[0] == null){
            return [];
        }
        return $dataList[0];
    }

    public function find(int $id): array
    {
        $sqlQuery = 'SELECT id, name, email, phone FROM users WHERE id = ?;';
        $stmt = $this->connection->prepare($sqlQuery);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        $dataList = $stmt->fetchAll();
        return $dataList[0];
    }
    public function findAll(): array
    {
        $sqlQuery = 'SELECT * FROM users;';
        $stmt = $this->connection->prepare($sqlQuery);
        $stmt->execute();

        return $this->hydratedList($stmt);
    }

    public function hydratedList(\PDOStatement $stmt): array
    {
        $dataList = $stmt->fetchAll();
        $list = [];
        foreach ($dataList as $data){
	 
            $list[] = new Users(
              $data['email'],
              $data['password'],
              $data['name'],
              $data['phone'],
              $data['id'],
            );
        }
        return $list;
    }

    public function save(Users $users): bool
    {
        
        return $this->insert($users);
    }

    public function insert(Users $users): bool
    {
        $sqlQuery = 'INSERT INTO users (name, email, phone, password) VALUES (:name, :email, :phone, md5(:password));';
        $stmt = $this->connection->prepare($sqlQuery);

        $success = $stmt->execute([
            ':name' => $users->getName(),
            ':email' => $users->getEmail(),
            ':phone' => $users->getPhone(),
            ':password' => $users->getPassword()
        ]);
        return $success;
    }

    public function update():bool
    {
        return true;
    }
}