<?php

namespace Localize\Controller\Users;

use Localize\Controller\Controller;
use Localize\Controller\InterfaceController;
use Localize\Model\Infra\Persistence\Connection;
use Localize\Model\Infra\Repository\RepoUsers;

class Show extends Controller implements InterfaceController
{
    private \PDO $connection;

    public function __construct()
    {
        $this->connection = Connection::createConnection();
        $this->user = new RepoUsers($this->connection);
    }

    public function request(): void
    {
            $id = intval($_SESSION['id']);
            $userRepository = new RepoUsers($this->connection);
            $user = $userRepository->find($id);

            echo $this->render('home.php', [
                'titulo' => 'Home', 
                'user' => $user
            ]);
       
    }
}