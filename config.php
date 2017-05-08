<?php
define("HOST", "192.168.2.6"); // Host database
define("USER", "root"); // Usernama database
define("PASSWORD", ""); // Password database
define("DATABASE", "refill_mlm"); // Nama database

$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);

if($conn->connect_error){
		echo "Koneksi ke database gagal";
}
?>