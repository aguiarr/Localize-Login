<?php

namespace Localize\Controller\Login;

use Localize\Controller\Controller;
use Localize\Controller\InterfaceController;
use Localize\Model\Infra\Persistence\Connection;
use Localize\Model\Infra\Repository\RepoUsers;

class Checkout extends Controller implements InterfaceController
{
    private \PDO $connection;

    public function __construct()
    {
        $this->connection = Connection::createConnection();
    }

    public function request(): void
    {
        $ready = false;

        $email = filter_input(
            INPUT_POST,
            'email',
            FILTER_SANITIZE_STRING
        );
        if(is_null($email) || $email === false){
            var_dump($email);
            echo $email;
            exit;
        }else{
           $ready = true;
        }

        $password = filter_input(
            INPUT_POST,
            'password',
            FILTER_SANITIZE_STRING
        );
        if(is_null($password) || $password === false){
            exit;
        }else{
           $ready  = true;
        }

        if($ready){
            $repoUser = new RepoUsers($this->connection);
            $user_id = $repoUser->checkout($email, $password);
            if(count($user_id) == 1){
                $user = $repoUser->find(intval($user_id));
                echo $this->render('home.php',[
                    'title' => 'Localize - Home',
                    'user'  => $user
                ]);
            }else{
                echo $this->render('login.php',[
                    'title' => 'Localize - Login',
                    'erro'  => 'Email ou Senha incorretos!'
                ]);
            }
        }
    }
}