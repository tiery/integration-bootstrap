<?php
sleep(1);
header('Content-type: application/json');

/*

{"status": "success"}

{
    "status": "error",
    "datas": {
        "s-email": "Champs invalide",
        "s-password": "Champs obligatoire"
    }
}

*/

$response = '{
    "status": "error",
    "datas": {
        "semail": "Consectetur adipisicing elit",
        "spassword": "Lorem ipsum dolor sit amet, consectetur adipisicing elit"
    }
}';

/*
if ($_POST['semail'] == 'test') {
    $response = '{"status": "success"}';
}
*/

echo $response;

?>