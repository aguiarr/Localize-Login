
<?php

use Localize\Controller\InterfaceController;

require __DIR__ . '/../vendor/autoload.php';

$path = '/' . explode('/', $_SERVER['PATH_INFO'])[1];

$rotas = require __DIR__ . '/../config/routes.php';

if(!array_key_exists($path, $rotas)){
    http_response_code(404);
    echo "ERROR 404";
    exit();
}
$classControl = $rotas[$path];

session_start();

if((!isset($_SESSION['id']) && !$_SESSION['erro']) && $path !== null){
    if(($path != '/confirmed' && $path != '/') && $path != '/confirmation'){
        header('Location: /');
    }
}

/** @var InterfaceController $controller */
$controller =  new $classControl;
$controller->request();