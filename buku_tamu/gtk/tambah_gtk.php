<?php 
session_start();
require '../function.php';


if(isset($_POST["submit"])){
    if(tambahGtk($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data gtk berhasil ditambahkan');
            window.location = 'gtk.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data gtk gagal ditambahkan');
            window.location = 'gtk.php';
        </script>
    ";
    }
    }   
?>

<?php require '../layout/sidebar.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah gtk</title>
</head>
<body>
    <div class="main">
        <div class="box">
            <h3>Tambah Data gtk</h3>
        
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="nama_lengkap">nama lengkap</label> 
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"> <br>
        
                <label for="job">job</label> 
                <input type="text" name="job" id="job" class="form-control"><br>
        
                <label for="roles">Roles</label> 
                <select name="roles" class="form-control">
                    <option value="kepala sekolah">kepala sekolah</option>
                    <option value="wakil kepala sekolah">wakil kepala sekolah</option>
                    <option value="guru">guru</option>
                </select><br>

                <label for="foto">foto</label> 
                <input type="file" name="foto" id="foto" class="form-control">
    
                <button type="submit" name="submit">Tambah</button>
            </form>
        </div>
    </div>
</body>
</html>
