<?php 
//phpinfo();

$user = 'root';
$pass = '1q2w3e';

$conn = new PDO('mysql:host=mariadb;dbname=TheApp', $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$redis = new Redis();
$redis->connect('redis', 6379);
print "<pre>";
print_r($redis->info());
print "</pre>";
 
if ($redis->ping()) {
  echo "PONG\n";
}

