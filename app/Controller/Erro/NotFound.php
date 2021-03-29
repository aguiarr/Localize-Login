<?php

namespace Localize\Controller\Erro;

use Localize\Controller\Controller;
use Localize\Controller\InterfaceController;

class NotFound extends Controller implements InterfaceController
{

    public function request(): void
    {
        $_SESSION['erro'] = '404 - Not Found';
        echo $this->render('error.php', [
            'title'       => '404', 
            'error'       => '404',
            'description' => 'The page you are looking for does not exist or is no longer available.'
        ]);
    }
}