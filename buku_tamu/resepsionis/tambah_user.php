<?php
    session_start();
    require '../function.php';

    if(isset($_POST["submit"])){
        if(tambahUser($_POST) > 0){
        echo "
            <script type='text/javascript'>
                alert('Data user berhasil ditambahkan');
                window.location = 'resepsionis.php';
            </script>
        ";
        }else{
            echo "
            <script type='text/javascript'>
                alert('Data user gagal ditambahkan');
                window.location = 'resepsionis.php';
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
    <title>tambah user</title>
</head>
<body>
    <div class="main">
        <div class="box">

            <h3>tambah data user</h3>
            <form action="" method="POST">
                <label for="username">username</label>
                <input type="text" name="username" id="username"  class="form-control"><br>
    
                <label for="nama_lengkap">nama lengkap</label>
                <input type="text"  name="nama_lengkap" id="nama_lengkap" class="form-control"><br>
    
                <label for="kelas">kelas</label>
                <input type="text"  name="kelas" id="kelas" class="form-control"><br>
    
                <label for="password">password</label>
                <input type="password" name="password" id="password"  class="form-control"><br>
    
                <label for="roles">roles</label>
                <select name="roles" class="form-control">
                    <option value="Admin">Admin</option>
                    <option value="Resepsionis">Resepsionis</option>
                </select><br>
    
                <button type="submit" name="submit">tambah</button>
            </form> 
        </div>
    </div>
</body>
</html>