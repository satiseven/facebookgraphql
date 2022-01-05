<?php
require 'FacebookDebugger.php';
$products = [
  
'boswellia-seti-o',
'cay-agaci-yagi-seti-g',
'coban-cantasi-seti','coban-cantasi-seti-c','coban-cantasi-seti-d','coban-cantasi-seti-dt','coban-cantasi-seti-g','cuce-palmiye-seti-s','ekinezya-seti-dt','ginkgo-seti-d','ginseng-seti-c','gurmar-seti-g','gurmar-seti-p','gurmar-seti-ls','gurmar-seti-mini','gurmar-seti-o','kekik-seti','kordisep-seti-ls','kordisep-seti-mini','kordisep-seti-o','kordisep-seti-orta','kordisep-seti-p','tonik-seti','tonik-seti-c','tonik-seti-o','melisa-seti-d','sogut-seti-ls','sogut-seti-mini','sogut-seti-o','sogut-seti-orta','sogut-seti-p','spirulina-seti','spirulina-seti-dt','spirulina-seti-mini','yaban-mersini-seti-dt','yaban-mersini-seti-g','yaban-mersini-seti-glt','yaban-mersini-seti-o','ginkgo-seti-s','ormus-gold-seti-m','ormus-gold-seti-mt','ozon-yagi-seti-s','ozon-yagi-seti-mt','sahtere-seti-s','probiyotik-dt-seti','minoxidil-kadin-o-seti','minoxidil-kadin-orta-seti','minoxidil-kadin-t-seti','kordisep-seti-v','adacayi-seti-s','afrika-sardunya-seti-s','aloe-vera-seti-s','black-cohosh-seti-s','hamamelis-s-seti','harpago-s-seti','hayit-s-seti','hus-s-seti','ingiliz-tuzu-s-seti','kekik-s-seti','kordisep-s-seti','lahana-mix-s-seti','lavanta-s-seti','geven-plus-z-seti','hamamelis-seti-z','harpago-seti-z','kirkkilit-z-seti','minoxidil-z-seti','zencefil-may-z-seti','zence-may-z-seti','gurmar-seti-gt','japon-poligonumu-a-seti','isirgan-cak-g-seti','boswellia-seti-e','enzim-plus-e-seti','cuce-palmiye-seti-e','cacay-agaci-yagi-seti-e','cemen-e-seti','harpago-seti-e','hus-seti-e','sogut-seti-f','sinameki-seti-f','spirulina-seti-f','yaban-mersini-seti-f','devedikeni-seti-b','ekinezya-seti-b','zerdecal-seti-b','enginar-seti-b','epimedium-seti-b','sinameki-seti-bt','spirulina-seti-bt','iq-plus-seti-bt','yaban-mersini-seti-bt','tentur-seti-bt','iksir-seti-bt','kordisep-seti-b','guava-seti-ox','isirgan-cak-bx-seti','biberiye-i-seti','enginar-i-seti','forskolin-i-seti','ginkgo-i-seti','gurmar-i-seti','guve-otu-i-seti','ginseng-i-seti','geven-i-seti','uzerlik-i-seti','yaban-mersini-i-seti','zerdecal-i-seti','zencefil-may-i-seti','zence-may-i-seti','aslan-yelesi-i-seti','probiyotik-bt-seti','probiyotik-e-seti','cats-claw-z-seti','spirulina-seti-v','adacayi-seti-l','afrika-sardunya-seti-l','aloevera-seti-l','alic-seti-l','aslan-yelesi-seti-l','atkuyrugu-seti-l','atkestanesi-seti-l','ayi-uzumu-seti-l','isirgan-cak-l-seti','ginkgo-seti-l','guava-seti-l','gurmar-seti-l','geven-plus-l-seti','hamamelis-seti-l','harpago-seti-l','hayit-seti-l','magnezyum-malat-seti-z','magnezyum-malat-seti-mini','magnezyum-malat-seti-b','glutatyon-seti-bt','glutatyon-seti-c','glutatyon-seti-d','glutatyon-seti-dt','glutatyon-seti-f','glutatyon-seti-g','lit-seng-seti-h','magnezyum-malat-seti-d','magnezyum-malat-seti-dt','magnezyum-malat-seti-f','magnezyum-malat-seti-g','magnezyum-malat-seti-gt','magnezyum-malat-seti-i','magnezyum-malat-seti-ls','magnezyum-malat-seti-mt','sahtere-seti-l','sari-kantaron-seti-l','sogut-seti-l','sinameki-seti-l','spirulina-seti-l','uzerlik-seti-l','yaban-mersini-seti-l','zencefil-may-l-seti','zerdecal-seti-l','passiflora-seti-e','ekinezya-mix-seti','moringa-seti-a','moringa-seti-z','moringa-seti-l','moringa-seti-m','moringa-seti-e','moringa-seti-o','moringa-seti-gt','ormus-gms-mx-seti','uzerlik-mx-seti','yaban-mersini-mix-seti','zerdecal-mx-seti','lavanta-mx-seti','sari-kantaron-mx-seti','aloevera-seti-Fx','centiyan-seti-mx','damla-sakizi-macun-seti-mx','alfa-lipoik-asit-seti-i','alfa-lipoik-asit-seti-ls','alfa-lipoik-asit-seti-mt','alfa-lipoik-asit-seti-orta','alfa-lipoik-asit-seti-s','kara-murver-seti-a','beta-glukan-s-seti','beta-glukan-seti-e','beta-glukan-seti-o','beta-glukan-seti-mini','beta-glukan-seti-b','beta-glukan-seti-bt','beta-glukan-seti-c','beta-glukan-seti-d','beta-glukan-seti-dt','beta-glukan-seti-mt','afrika-sardunya-seti-bx','aloevera-seti-ox','aloevera-seti-bx','aslan-yelesi-seti-ox','aslan-yelesi-seti-minix','aslan-yelesi-seti-bx','at-kestanesi-seti-ox','at-kestanesi-seti-bx','chlorella-plus-seti-minix','damla-sakizi-macun-seti-bx','damla-sakizi-macun-seti-ox','damla-sakizi-macun-seti-minix','devedikeni-seti-bx','devedikeni-seti-ox','kordisep-seti-bx','kordisep-seti-ox','kordisep-seti-minix','kirkkilit-seti-bx','kirkkilit-seti-ox','kirkkilit-seti-minix','lahana-mix-seti-bx','lahana-mix-seti-ox','ormus-gms-seti-minix','sahtere-seti-bx','sahtere-seti-ox','sahtere-seti-mx','sari-kantaron-seti-bx','sari-kantaron-seti-ox','sari-kantaron-seti-minix','sogut-seti-bx','sogut-seti-ox','sogut-seti-mx','ekinezya-seti-ox','forskolin-seti-bx','forskolin-seti-fx','forskolin-seti-mx','forskolin-seti-ox','gurmar-seti-bx','gurmar-seti-fx','gurmar-mx-seti','annua-pycnogenol-seti-a','annua-pycnogenol-seti-z','annua-pycnogenol-seti-l','annua-pycnogenol-s-seti','annua-pycnogenol-seti-e','annua-pycnogenol-seti-o','annua-pycnogenol-seti-mini','annua-pycnogenol-seti-b','annua-pycnogenol-seti-bt','makador-seti-m','makador-seti-c','makador-seti-d','makador-seti-f','makador-seti-g','makador-seti-gt','makador-seti-i','makador-seti-ls','makador-seti-mt','makador-seti-orta','makador-seti-s','annua-pycnogenol-seti-p','alfa-lipoik-asit-seti-p','beta-glukan-seti-p','cats-claw-p-seti','glutatyon-seti-p','japon-poligonumu-p-seti','kara-murver-seti-p','afrika-sardunya-seti-n','atkuyrugu-seti-n','chlorella-n-seti','enzim-plus-n-seti','cuce-palmiye-seti-n','cay-agaci-yagi-seti-n','cemen-n-seti','centiyan-seti-n','coban-cantasi-seti-n','coban-cokerten-seti-n','kekik-seti-n','kirkkilit-n-seti','kordisep-seti-n','lavanta-seti-n','lahana-mix-seti-n','lit-seng-seti-n','magnezyum-malat-seti-n','makador-seti-n','mastic-gum-n-seti','ormus-gold-seti-n','alic-seti-ci','aslan-yelesi-seti-ci','aloevera-seti-ci','atkuyrugu-seti-ci','atkestanesi-seti-ci','avokado-seti-ci','ayi-uzumu-seti-ci','biberiye-seti-ci','ginkgo-seti-ci','gurmar-seti-ci','glutatyon-seti-ci','hamamelis-seti-ci','harpago-seti-ci','hayit-seti-ci','lit-seng-seti-ci','guve-otu-seti-ci','spirulina-seti-ci','ormus-gld-seti-ci','sinameki-seti-ci', 
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
     
   "EAAD7F9j5tpUBAJSZBMm0xtZChpCZCivKqPOlXTEZA5TlqOmeHSzdha1QJc1blYwcoKPRbNqTrGl8dktBjO4l6zZCbRVfUXht2KawmZBQugo9Bpl8Uq3uyeh2kPBRl7jSFZBI1jMGJzwLKJwSCmm6qURZAyUfkVa9WM0xZBrIxQdxozZCgClygcI4ZCHaW99Pdofryy7cDeRDlZAB7QZDZD",
   "EAAEMiWb7h0cBAEKYsxMPbNLyhJMWyfuyw91IE6ZAZBckxURi0NDZBFTyte8FfYydzvvHdaFioweFbgK7vfif8CXUbT56zlWKZANigq8dsfPqyzqHDSeyAQ4O2S6MQ92rmUzlSoXPZCmqQapk0m8aoZAxV7xBJzboa7oUi6idBZArTBatZBZBN8L1JQR7CSaZCrqJrd8VPIuqCZAsgZDZD",
   "EAAFkPuQflq4BAG6ajUfZB0fU2PfZCKhl1x1PaSminkUENzNjz6Xle0sAwg8oWx9TyoJXkZAdjZA70EWoYekTRkXRdkLAY452BvfF2iRwhQRtich7vo2KCjvS2tQl6ZAV8VDPd00NIImrGy1DMD9fiuw66HSkL97LiecnqdSBZC7Sq2iV13CZCzElrvtF63DPNFoNrKcYdZA03AZDZD" 
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