<?php 
 
namespace Localize\Model\Infra\Persistence;

use PDO;
define('HOST', '127.0.0.1');
define('DBNAME', 'localize');
define('USER', 'root');
define('PASSWORD', '');


class Connection 
{
     public static function createConnection(): PDO
     {
         $connection = new PDO(
            'mysql:host=' . HOST . ';dbname=' . DBNAME,
            USER,
            PASSWORD
         );

         $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

         return $connection;
    }
}