<?php
$conn = mysqli_connect("localhost", "root", "", "customer2");
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data)
{
    global $conn;
    $Username = $data["Username"];
    $no_hp = $data["no_hp"];
    $tanggal = $data["tanggal"];

    $query = "INSERT INTO data_customer
                VALUES
             ('','$Username','$no_hp','$tanggal')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
