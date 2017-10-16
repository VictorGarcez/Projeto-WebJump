<?php
//bootstrap.php_ini_loaded_file
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

//Doctrine Orm Config

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/projeto/Entities"), $isDevMode);

//db connection config
$conn = array(
'dbname' => 'webjumpdb',
'user' => 'root',
'password' => '',
'host' => 'localhost',
'driver' => 'pdo_mysql'
);

//entity manager
$entityManager = EntityManager::create($conn, $config);
?>
