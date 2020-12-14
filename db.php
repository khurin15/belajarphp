<?php



$servername = "localhost"; //host,ip dll
$username = "root"; //username databasenya
$password = "";
$nama_database = 'belajar_php'; //harus disamakan dengan yang di myadminnya

//create connection
$conn = new mysqli($servername, $username, $password, $nama_database);

//check connection
if ($conn->connect_error) { //kalo ini salah dia akan mengembalikan yang dibawah ini
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO mahasiswa VALUES ('123','Khurin','Papua') ";
if($conn->query($sql)){
    echo "data sudah berhasil ditambahkan";
}
else
{
    die("Error: " . $conn->error);
}

?>