<?php

namespace Localize\Controller\Register;

use Localize\Controller\Controller;
use Localize\Controller\InterfaceController;
use Localize\Model\Infra\Persistence\Connection;
use Localize\Model\Infra\Repository\RepoUsers;

class EmailConfirmation extends Controller implements InterfaceController
{
    private \PDO $connection;

    public function __construct()
    {
        $this->connection = Connection::createConnection();
        $this->user = new RepoUsers($this->connection);
    }

    public function request(): void
    {
        $token = filter_input(
            INPUT_GET,
            'id',
            FILTER_SANITIZE_STRING
        );
        if(is_null($token) || $token === false){
            header('Location: /', true, 302);
            var_dump($token);
        }

        $userRepository = new RepoUsers($this->connection);

        $confirmed = $userRepository->confirmToken($token);
        $user = $userRepository->findByToken($token);

        if($confirmed){
            $_SESSION['id'] = $user['id'];

            echo $this->render('home.php', [
                'titulo' => 'Home', 
                'user' => $user
            ]);
        }else{
            $_SESSION['erro'] = 'Aconteceu um erro ao confirmar o email do usuário. Por favor tente mais tarde.';
            echo $this->render('error.php', [
                'title' => 'Error Page', 
                'erro' => 'Aconteceu um erro ao confirmar o email do usuário. Por favor tente mais tarde.'
            ]);
        }

    }
}