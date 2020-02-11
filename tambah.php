<?php
require 'functions.php';
//cek tombol submit
if (isset($_POST["submit"])) {



    //cek apakah data berhasil di tambah kan atau tidak
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil di tambahkan')
            document.location.href = 'index.php';
        </script>
    ";
    } else {
        echo "
        <script>
           alert('data berhasil di tambahkan')
           document.location.href = 'index.php';
        </script>";
    }
}



?>



<!DOCTYPE html>
<html>

<head>

    <title>Tambah Data customer</title>

</head>

<body>
    <h1>Tambah Data Customer</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="Username">Username</label>
                <input type="text" name="Username">
            </li>
            <li>
                <label for="no_hpp">No Hp</label>
                <input type="text" name="no_hp">
            </li>
            <li>
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>




    </form>

</body>

</html>