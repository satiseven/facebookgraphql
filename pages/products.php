<html>

<head>
    <title>Ürünler listesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <?php
    require_once '../vendor/autoload.php';
    require_once '../config/database.php';
    $sql = "SELECT * FROM products";
    $stmt = $conn->executeQuery($sql);
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" ></script>
</head>

<body>
    <div class="container">
        <?php require_once 'header.php';?>
        <div class="row">
            <h1>Ürün Giriş Formu</h1>
            <div class="mb-3">
                <form action="save.php" method="post">
                    <input type="hidden" value="pro" name="table" />
                    <label for="exampleFormControlTextarea1" class="form-label">Ürün Linki Giriniz</label>
                    <input type="text" name="slug" class="form-control" id="exampleFormControlTextarea1"  />

                    <button type="submit" class="btn btn-success">Gönder</button>
                </form>

            </div>
            <table class="table table-striped" id="myTable">
                <thead>
                    <th>slug</th>
                    <th>durum</th>
                    <th>islem</th>
                </thead>
                <tbody>
                    <?php

            while (($row = $stmt->fetchAssociative()) !== false) {
            ?> <tr>
                        <td><?php
                    echo $row['slug'];?></td>
                        <td><?php echo $row['active']?'Aktif':'kullanilmis'; ?></td>
                        <td><a href="/pages/delete.php?table=products&id=<?php echo $row['id']; ?>"
                                class="btn btn-danger">Sil</a></td><?php
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
<script>
    $(document).ready( function () {
        $('#myTable').DataTable({lang:'tr'});
    } );
</script>
</html>