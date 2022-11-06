<?php
    session_start();
    require '../function.php';

    $gtk = query("SELECT * FROM gtk");

?>

<?php require '../layout/sidebar.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gtk</title>
    
</head>
<body>
    <div class="main">
        <h1>Data gtk</h1>

        <a href="tambah_gtk.php" class="tambah">tambah gtk</a>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th>no</th>
                <th>nama lengkap</th>
                <th>job</th>
                <th>roles</th>
                <th>foto</th>
                <th>aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach($gtk as $data) : ?>
                <tr>
                    <td><?= $i ;?></td>
                    <td><?= $data["nama_lengkap"]; ?></td>
                    <td><?= $data["job"]; ?></td>
                    <td><?= $data["roles"]; ?></td>
                    <td><img src="../foto/<?= $data["foto"]; ?>" width="80px" alt="foto"></td>
                    <td>
                        <a href="edit_gtk.php?id=<?= $data["id_gtk"]; ?>" class="edit">edit</i></a>
                        <a href="hapus_gtk.php?id=<?= $data["id_gtk"]; ?>" class="hapus" onClick="return confirm('anda yakin ingin menghapus data ini ?')">hapus</a>
                    </td>
                </tr>
            <?php $i++ ; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>