
<html>
<head>
    <title>FaceBook OpenGraph</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<?php
require_once 'vendor/autoload.php';
require_once 'config/database.php';
$sql = "SELECT * FROM tokens";
$stmt = $conn->executeQuery($sql);

?>
</head>
<link href="cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet"/>
<script src="cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" ></script>
<body>
<div class="container">
    <?php require_once 'pages/header.php';?>
    <div class="row">
        <h1>Facebook Token Formu</h1>

        <div class="mb-3">
            <form action="pages/save.php" method="post">
                <input type="hidden" value="tok"  name="table" / >
                <label for="exampleFormControlTextarea1" class="form-label">Token Giriniz</label>
                <textarea name="token" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <button type="submit" class="btn btn-success">Gönder</button>
            </form>

        </div>
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
            echo $row['token'];?></td><td><?php echo $row['active']?'Aktif':'kullanilmis'; ?></td><td><a  href="/pages/delete.php?table=tokens&id=<?php echo $row['id']; ?>" class="btn btn-danger">Sil</a></td><?php
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
