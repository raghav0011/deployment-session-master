<?php

use App\Controllers\Followup;

$router = new \Bramus\Router\Router();


// $router->before('POST', '/.*', function () {
//     if ($_SERVER['CONTENT_TYPE'] != 'application/json')
//         return error(['Invalid Content Type requested'], 409);
//     $_POST = json_decode(file_get_contents('php://input'), true);
// });
// $router->set404(function () {
//     return error(['invalid request'], 404);
// });
$router->get('/', function () {
    return success(['Raghav']);
});
// $router->get('/error', function () {
//     echo error(['something went wrong']);
// });

// $router->mount('/followup', function () use ($router) {
//     $router->post('/store/{[a-z]}', function ($ownership) {
//         return (new Followup($ownership))->store();
//     });
// });

$router->run();
