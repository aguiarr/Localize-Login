<?php 

namespace Localize\Controller\Users;

use Localize\Controller\Controller;
use Localize\Controller\InterfaceController;
use Localize\Model\Entity\Users;
use Localize\Model\Infra\Persistence\Connection;
use Localize\Services\PHPMailer\SendMail;
use Localize\Helpers\MailConstruct;
use Localize\Helpers\Util;
use Localize\Model\Infra\Repository\RepoUsers;

class Persistence extends Controller implements InterfaceController
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
            $token = Util::generateToken();
            $user  = new Users($email, $password, $token, $name, $phone,  null );
        }

        

        $repoUser = new RepoUsers($this->connection);
        if($repoUser->save($user)){
            $subject   = 'Localize - Confirmação de Login';
            
            $body      = MailConstruct::emailConfirmation($subject, $token);
            $sendEmail = new SendMail($email,$name,$subject,$body);
            $sendEmail->sendMail();

            echo $this->render('emailConfirmation.php', [
                'titulo' => 'Home', 
                'email'  => $email,
                'name'   => $name
            ]);
            
        }else{
            header(404);
        }

    }
}