<?php

namespace Localize\Controller\Login;

use Localize\Controller\Controller;
use Localize\Controller\InterfaceController;

class ForgotPassword extends Controller implements InterfaceController
{

    public function request(): void
    {
        echo $this->render('forgot_password.php', [
            'title' => 'Forgot my Password - Localize', 
        ]);
       
    }
}