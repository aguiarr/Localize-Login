
<?php

use Localize\Controller\InterfaceController;

require __DIR__ . '/../vendor/autoload.php';

$path = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if(!array_key_exists($path, $rotas)){
    http_response_code(404);
    echo "ERROR 404";
    exit();
}
$classControl = $rotas[$path];

session_start();

if((!isset($_SESSION['id']) && !$_SESSION['erro']) && $path !== null){
    header('Location: /');
    // exit;
}
// var_dump($classControl);

/** @var InterfaceController $controller */
$controller =  new $classControl;
$controller->request();