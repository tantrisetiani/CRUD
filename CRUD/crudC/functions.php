<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_kampus');

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
    $nim = $data["nim"];
    $nama = $data["nama"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];

    $query = "INSERT INTO tb_mahasiswa VALUES
                ('','$nim', '$nama', '$email', '$jurusan')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);


}
