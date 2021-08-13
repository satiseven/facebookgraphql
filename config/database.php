<?php
require_once 'vendor/autoload.php';
$connectionParams = array(
    'dbname' => 'facebook.sqlite',
    'path' => 'facebook.sqlite',

    'driver' => 'pdo_sqlite',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);