<?php 

namespace Localize\Controller\Register;

use Localize\Model\Infra\Persistence\Connection;
use Localize\Model\Infra\Repository\RepoUsers;
$con = mysqli_connect('127.0.0.1','root','','localize');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
$email = filter_input(
    INPUT_GET,
    'email',
    FILTER_SANITIZE_STRING
);

function validateEmail($email, $con){

    mysqli_select_db($con,"localize");
    $sql="SELECT id FROM users WHERE email=" . "'" .$email ."'". ";";
    $result = mysqli_query($con,$sql);

    $data = mysqli_fetch_all($result);
    return $data[0][0];
}

$response = validateEmail($email, $con);

echo json_encode($response);
    
