<?php

require 'functions.php';
$customer = query("SELECT * FROM data_customer")

?>


<!DOCTYPE html>
<html>

<head>

</head>
<body>
    <h1>Data customer</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>NO HP</th>
            <th>Tangggal</th>
            <th>Action</th>
        </tr>
        <?php foreach ($customer as $row): ?>
           
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
    <?php endforeach; ?>


    </table>

</body>

</html>