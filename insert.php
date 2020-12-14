<?php
require_once "db.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$sql = "INSERT INTO mahasiswa (nim, nama, alamat) VALUES ('".$nim."','".$nama."','".$alamat."') ";
if($conn->query($sql)){
    echo "data sudah berhasil ditambahkan";
}
else
{
    die("Error: " . $conn->error);
}



die;