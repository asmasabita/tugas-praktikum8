<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<body>
    <div class="col-md-12">
    <h3> Dosen</h3>
    <table border="1" class="table"> 
        <thead>
            <tr>
                <th>No</th>
                <th>id</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>NIDN</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $nomor = 1;
            foreach ($dosen as $dsn) {
            }
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $dsn ->id ?></td>
                <td><?php echo $dsn ->nama ?></td>
                <td><?php echo $dsn ->gender ?></td>
                <td><?php echo $dsn ->nidn ?></td>
                <td>
                    <a href="<?php echo "detail/$dsn->id"?>">Detail</a>
                </td>
            </tr>
            <?php 
            $nomor++;
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>