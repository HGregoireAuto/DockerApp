<?php 
//phpinfo();

$user = 'root';
$pass = '1q2w3e';

$conn = new PDO('mysql:host=mariadb;dbname=TheApp', $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sth = $conn->query("SELECT VERSION() ver");
$mariaInfo = $sth->fetch();



$redis = new Redis();
$redis->connect('redis', 6379);

$redisInfo = $redis->info();


echo 'PHP: ', phpversion(), "<br>\n";
echo 'Redis: ', $redisInfo['redis_version'], "<br>\n";
echo 'MariaDB: ', $mariaInfo['ver'], "<br>\n";
 