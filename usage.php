<?php
require 'FacebookDebugger.php';
$products = [
];
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$x       = 0;
$counter = 0;
$fb      = new FacebookDebugger();
// $fb->reload('https://www.gokcekmarket.com/urun/zerdecal-set-d');
// $fb->reload('https://www.gokcekmarket.com/urun/zerdecal-set-d');
$access = [
 ];
 
$error       = 0;
$success     = 0;
$hatalilar   = [];
$errorLinks  = [];
$stringError='';
$mainCounter = 0;
foreach ($products as $product) {
    if ($counter == 30) {
        $counter = 0;
        $x++;
    }
    if($x==count($access)){
        echo "\n length of access key is not enough for finish this action the last proccesed product is : ".$product."\n ";
        break;
    }
    $counter++;
    $mainCounter++;
    echo "COUNTER [" . $mainCounter . "] \n";
    $result = json_decode($fb->reload('https://www.gokcekmarket.com/urun/' . $product, $access[$x]));
    if (isset($result->description)) {
        $success++;
        echo '[Güncellenen Ürün - SET : ' . $result->description . '] - [ URL : ' . $result->url . "]\n";
    } else {
        $error++;
        array_push($errorLinks, $product);
        $stringError.="'".$product."',";
        echo "Token zaman aşamasına uğramış veya kotası dolmuştur \n";
    }
}
$myfile = fopen("errorLinks.txt", "w") or die("Unable to open file!");
fwrite($myfile,$stringError);
fclose($myfile);
echo "**************___[Güncellenen Toplam Ürün Sayısı :" . $success . "___**************]\n\n";
echo "**************[ Hatalı Toplam İşlemler :" . $error . "**************]\n";