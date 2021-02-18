<?php

// konfigurasi koneksi
$host       =  "localhost";
$dbuser     =  "skripsi";
$dbpass     =  "skripsi";
$port       =  "5432";
 $dbname    =  "skripsi";

// script koneksi php postgree
$link = new PDO("pgsql:dbname=$dbname;host=$host", $dbuser, $dbpass); 
 
if($link)
{
    echo "Koneksi Berhasil";
}else
{
    echo "Gagal melakukan Koneksi";
}
?>
