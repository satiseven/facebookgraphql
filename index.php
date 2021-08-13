
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<?php
require_once 'vendor/autoload.php';
$connectionParams = array(
    'path' => 'facebook.sqlite',
    'driver' => 'pdo_sqlite',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);
$sql = "SELECT * FROM tokens";
$stmt = $conn->executeQuery($sql);

?>
</head>
<body>
<div class="container">
    <div class="row">
    <table class="table table-striped">
        <thead>
        <th>Token</th>
        <th>Durum</th>
        <th>islem</th>
        </thead>
        <tbody>
        <?php

        while (($row = $stmt->fetchAssociative()) !== false) {
            ?> <tr><td><?php
            echo $row['token'];?></td><td><?php echo $row['active']?'Aktif':'kullanilmis'; ?></td><td><a  href="/pages/delete/<?php echo $row['id']; ?>" class="btn btn-danger">Sil</a></td><?php
        }
        ?>

        </tr>
        <?php
        ?>
        </tbody>
    </table>
</div>
</div>
</body>
</html>
