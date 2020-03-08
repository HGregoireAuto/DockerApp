<?php 
require_once(__DIR__ . '/../vendor/autoload.php');

$builder = new DI\ContainerBuilder();
$builder->addDefinitions(__DIR__ . "/../configs/config.php");

$builder->useAutowiring(false);
$builder->useAnnotations(false);

$container = $builder->build();

$pdo = $container->get(PDO::class);


if ($pdo->connect_error) {
    die("Connection failed: " . $pdo->connect_error);
} 

$sth = $pdo->query("SELECT VERSION() ver");
$mariaInfo = $sth->fetch();

$redis = new Redis();
$redis->connect('redis', 6379);

$redisInfo = $redis->info();


echo 'PHP: ', phpversion(), "<br>\n";
echo 'Redis: ', $redisInfo['redis_version'], "<br>\n";
echo 'MariaDB: ', $mariaInfo['ver'], "<br>\n";
