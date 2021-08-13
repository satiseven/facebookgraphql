<?php

$connectionParams = array(
    'path' => '/home/riza/Documents/Projects/PHP/facebookgraphql/facebook.sqlite',
    'driver' => 'pdo_sqlite',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);
$queryBuilder = $conn->createQueryBuilder();