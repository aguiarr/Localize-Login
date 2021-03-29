<?php

namespace Localize\Controller\Register;

use Localize\Controller\Controller;
use Localize\Controller\InterfaceController;

class RegisterConfirmation extends Controller implements InterfaceController
{

    public function request(): void
    {
        echo $this->render('registerConfirmation.php', [
            'titulo' => 'Email Confirmation - Localize', 
        ]);
       
    }
}