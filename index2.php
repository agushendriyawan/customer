<?php

$coon = mysqli_connect("localhost", "root", "", "customer2");

//ambil data dari database
$result = mysqli_query($coon, "SELECT* FROM data_customer");
//ambil data dari obj result



?>


<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <h1>Data Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>NO HP</th>
            <th>Tangggal</th>
            <th>Action</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $row["id"]; ?></td>
                <td><?= $row["Username"]; ?></td>
                <td><?= $row["no_hp"]; ?></td>
                <td><?= $row["tanggal"]; ?></td>
                <td>
                    <a href="">edit</a>
                    <a href="">delate</a>
                </td>
            </tr>
        <?php endwhile; ?>


    </table>

</body>

</html>