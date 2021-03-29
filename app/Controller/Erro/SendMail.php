<?php

namespace Localize\Controller\Erro;

use Localize\Controller\Controller;
use Localize\Controller\InterfaceController;

class SendMail extends Controller implements InterfaceController
{

    public function request(): void
    {
        $_SESSION['erro'] = 'Aconteceu um erro ao confirmar o email do usuário. Por favor tente mais tarde.';
        echo $this->render('error.php', [
            'title'       => 'Error', 
            'error'       => 'Something is wrong',
            'description' => "An error occurred while confirming the user's email. Please try later."
        ]);
    }
}