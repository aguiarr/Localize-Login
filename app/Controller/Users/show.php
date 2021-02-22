<?php

namespace Localize\Controller\Users;

use Localize\Controller\Controller;
use Localize\Controller\InterfaceController;
use Localize\Model\Infra\Persistence\Connection;
use Localize\Model\Infra\Repository\RepoUsers;

class Show extends Controller implements InterfaceController
{
    private \PDO $connection;
    private RepoUsers $user;

    public function __construct()
    {
        $this->connection = Connection::createConnection();
        $this->user = new RepoUsers($this->connection);
    }

    public function request(): void
    {

        $email = filter_input(
            INPUT_GET,
            'email',
            FILTER_VALIDATE_INT
        );
        
        echo $this->render('home.php', [
            'titulo' => 'Home', 
            'user' => $this->user->find($email)
        ]);
    }
}