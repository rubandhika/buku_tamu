<?php
    session_start();
    require '../function.php';

    $resepsionis = query("SELECT * FROM resepsionis");

?>

<?php require '../layout/sidebar.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resepsionis</title>
    
    <link rel="stylesheet" href="resepsionis.css">
</head>
<body>
    <div class="main">
        <h1>Data resepsionis</h1>

        <a href="tambah_user.php" class="tambah">Tambah user</a>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th>no</th>
                <th>username</th>
                <th>nama lengkap</th>
                <th>kelas</th>
                <th>roles</th>
                <th>aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach($resepsionis as $data) : ?>
                <tr>
                    <td><?= $i ;?></td>
                    <td><?= $data["username"]; ?></td>
                    <td><?= $data["nama_lengkap"]; ?></td>
                    <td><?= $data["kelas"]; ?></td>
                    <td><?= $data["roles"]; ?></td>
                    <td>
                        <a href="edit_user.php?id=<?= $data["id_resepsionis"]; ?>" class="edit">edit</i></a>
                        <a href="hapus_user.php?id=<?= $data["id_resepsionis"]; ?>" class="hapus" onClick="return confirm('anda yakin ingin menghapus data ini ?')">hapus</a>
                    </td>
                </tr>
            <?php $i++ ; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>