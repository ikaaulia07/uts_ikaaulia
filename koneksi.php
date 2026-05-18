<?php

$conn = mysqli_connect(
"localhost",
"root",
"",
"db_beauty"
);

if(!$conn){
    die("Koneksi gagal");
}

session_start();

?>