<?php

return [
  PDO::class => DI\create()
    ->constructor('mysql:host=mariadb;dbname=TheApp', 'root', '1q2w3e', array())
];
