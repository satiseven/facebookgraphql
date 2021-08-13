<?php
require_once '../vendor/autoload.php';
require_once '../config/database.php';
$table=$_POST["table"];
switch ($table) {
    case 'pro':
        $conn->insert('products', array('slug' => $_POST['slug']));
        $link="products.php";
        break;
    case 'tok':
        $conn->insert('tokens', array('token' => $_POST['token']));
        $link="../index.php";
        break;
    default:
        $link="../index.php";
}


?>

<script>
    window.location.replace("<?php echo $link;?>");
</script>