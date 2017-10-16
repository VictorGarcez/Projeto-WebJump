<?php 
$loader = require __DIR__ . '/vendor/autoload.php';

use projeto\entities\names;
use projeto\controller\namesController;

$app = new \Slim\Slim();

$namesCtrl = new namesController();


$app->get ( '/' , function() use ($namesCtrl){
    echo json_encode($namesCtrl->getALL()); 
});

$app->post('/', function() use ($namesCtrl){
    $app = \Slim\Slim::getInstance();
    $json = json_decode($app->request()->getBody());
    echo json_encode($usuarioCtrl->insert($json));
});

$app->post('/', function() use ($namesCtrl){
    echo "post";
});
$app->run();
?>

