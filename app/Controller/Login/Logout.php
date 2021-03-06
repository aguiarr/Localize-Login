<?php

namespace Localize\Controller\Login;

use Localize\Controller\Controller;
use Localize\Controller\InterfaceController;
use Localize\Model\Infra\Persistence\Connection;

class Logout extends Controller implements InterfaceController
{

    public function __construct()
    {
        $this->connection = Connection::createConnection();
    }

    public function request(): void
    {

        if($_SESSION['id']){
            unset($_SESSION['id']);
            header('Location: /', true, 302);
            exit;
        }
        
    }
}