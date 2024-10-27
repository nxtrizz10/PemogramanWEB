<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "db_kontak";
$port = 3306;
$conn = "";

try {
    $conn = mysqli_connect($host, $username, $password, $db_name, $port);
} catch(mysqli_sql_exception) {
    echo "Koneksi gagal";
}

?>