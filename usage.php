<?php
require 'FacebookDebugger.php';
require_once 'vendor/autoload.php';
require_once 'config/database.php';
$sql = "SELECT * FROM products";
$stmt =  $conn->executeQuery($sql);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$x       = 0;
$counter = 0;
$fb      = new FacebookDebugger();

$error       = 0;
$success     = 0;
$hatalilar   = [];
$errorLinks  = [];
$mainCounter = 0;
 $queryBuilder->select('*')->from('tokens')->where('active',1)->orderBy('id','ASC')
    ->setMaxResults(1);
$sql =$queryBuilder->getSQL();
$main=$conn->executeQuery($sql);
$access =  $main->fetchAssociative();
while (($product = $stmt->fetchAssociative()) !== false) {
    if ($counter == 30) {
        $conn->update('tokens', array('active' =>  0), array("id"=>$access['id']));
        $main=$conn->executeQuery($sql);
        $access =  $main->fetchAssociative();
        $counter = 0;
        $x++;
    }

    $counter++;
    $mainCounter++;
    echo "COUNTER [" . $mainCounter . "] \n";
    $result = json_decode($fb->reload('https://www.gokcekmarket.com/urun/' . $product['slug'], $access['token']));
    if (isset($result->description)) {
        $success++;
        echo '[Güncellenen Ürün - SET : ' . $result->description . '] - [ URL : ' . $result->url . "]\n";
    } else {
        $error++;
        array_push($errorLinks, 'https://www.gokcekmarket.com/urun/' . $product);
        echo "Token zaman aşamasına uğramış veya kotası dolmuştur \n";
    }
}
echo "**************___[Güncellenen Toplam Ürün Sayısı :" . $success . "___**************]\n\n";
echo "**************[ Hatalı Toplam İşlemler :" . $error . "**************]\n";