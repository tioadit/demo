<?php 

	$host = "192.168.106.150";
    $port = "5432";
    $dbname = "skripsi";
    $user = "skripsi";
    $password = "skripsi"; 
    $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
    $dbconn = pg_connect($connection_string);     
    if ($dbconn) {
    	 echo "Koneksi Berhasil";
    }else{
    	echo "Koneksi Gagal";
    }

 ?>