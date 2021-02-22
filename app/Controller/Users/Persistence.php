<?php 

namespace Localize\Controller\Users;

use Localize\Controller\InterfaceController;
use Localize\Model\Entity\Users;
use Localize\Model\Infra\Persistence\Connection;
use Localize\Model\Infra\Repository\RepoUsers;

class Persistence implements InterfaceController
{
    private \PDO $connection;

    public function __construct()
    {
        $this->connection = Connection::createConnection();
    }

    public function request(): void
    {
        $ready = false;

        $name = filter_input(
            INPUT_POST,
            'name',
            FILTER_SANITIZE_STRING
        );
        if(is_null($name) || $name === false){
            echo $name;
            exit;
        }else{
           $ready  = true;
        }

        $email = filter_input(
            INPUT_POST,
            'email',
            FILTER_SANITIZE_STRING
        );
        if(is_null($email) || $email === false){
            echo $email;
            exit;
        }else{
           $ready = true;
        }

        $phone = filter_input(
            INPUT_POST,
            'phone',
            FILTER_SANITIZE_STRING
        );
        if(is_null($phone) || $phone === false){
            echo $phone;
        }else{
           $ready  = true;
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
            $user = new Users($email, $password, $name, $phone, null );
        }

        // var_dump($user);
        $repoUser = new RepoUsers($this->connection);
        if($repoUser->save($user)){
            header('Location: /', true, 302);
        }else{
            header(404);
        }

    }
}