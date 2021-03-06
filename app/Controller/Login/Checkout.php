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

        if($_SESSION['id']){
            header('Location: /home', true, 302);
            exit;
        }
        $email = filter_input(
            INPUT_POST,
            'email',
            FILTER_SANITIZE_STRING
        );
        if(is_null($email) || $email === false){
            echo $this->render('login.php',[
                'title' => 'Localize - Login',
                'erro'  => 'O campo "Email" deve ser preenchido'
            ]);
        }

        $password = filter_input(
            INPUT_POST,
            'password',
            FILTER_SANITIZE_STRING
        );
        if(is_null($password) || $password === false){           
            echo $this->render('login.php',[
                'title' => 'Localize - Login',
                'erro'  => 'O campo "Senha" deve ser preenchido'
            ]);
        } 



        $repoUser = new RepoUsers($this->connection);
        $user = $repoUser->checkout($email, $password);
        
        
        if( !count($user['id']) == 1 ){

            session_start();
            $_SESSION['erro'] = true;
            echo $this->render('login.php',[
                'title' => 'Localize - Login',
                'erro'  => 'Email ou Senha incorretos!'
            ]);

        }else if( $user['confirmed'] == 0){
            header('Location: /confirmation', true, 302);

        }else{
            session_start();
            $_SESSION['id'] = $user['id'];
            header('Location: /home', true, 302);
        }
        
    }
}