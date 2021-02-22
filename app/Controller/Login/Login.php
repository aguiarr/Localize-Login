<?php


namespace Localize\Controller\Login;


use Localize\Controller\Controller;
use Localize\Controller\InterfaceController;

class Login extends Controller implements InterfaceController
{
    public function __construct()
    {
        
    }

    public function request(): void
    {
        echo $this->render('login.php',[
            'title'=> 'Localize - Login'
       ]);
    }
}