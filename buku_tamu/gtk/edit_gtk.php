<?php 
session_start();
require '../function.php';

$id = $_GET["id"];
$gtk = query("SELECT * FROM gtk WHERE id_gtk = '$id'")[0];

if(isset($_POST["kirim"])){
    if(editGtk($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data gtk berhasil diubah');
            window.location = 'gtk.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data gtk gagal diub');
            window.location = 'gtk.php';
        </script>
    ";
    }
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit gtk</title>
</head>
<body>
    <div class="main">
        <div class="box">

            <h3>edit Data gtk</h3>
        
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_gtk" value="<?= $gtk["id_gtk"]; ?>">
        
                <label for="nama_lengkap">Nama Lengkap</label> 
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $gtk["nama_lengkap"]; ?>">
        
                <label for="job">job</label> 
                <input type="text" name="job" id="job" class="form-control" value="<?= $gtk["job"]; ?>">
                
                <label for="roles">Roles</label> 
                <select name="roles" class="form-control" value="<?= $gtk["roles"]; ?>">
                    <option value="kepala sekolah">kepala sekolah</option>
                    <option value="wakil kepala sekolah">wakil kepala sekolah</option>
                    <option value="guru">guru</option>
                </select>
                
                <label for="foto">foto</label> 
                <input type="file" name="foto" id="foto" class="form-control" value="<?= $gtk["foto"]; ?>">
        
                <button type="submit" name="kirim">edit</button>
            </form>
        </div>
    </div>
</body>
</html>
