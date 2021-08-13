<?php
require_once '../vendor/autoload.php';
require_once '../config/database.php';
$table=$_GET["table"];
switch ($table) {
    case 'products':
        $link="products.php";
        break;
    case 'tokens':
         $link="../index.php";
        break;
    default:
        $link="../index.php";
}
$conn->delete($_GET['table'], array('id' => $_GET['id']));


?>

<script>
    window.location.replace("<?php echo $link;?>");
</script>