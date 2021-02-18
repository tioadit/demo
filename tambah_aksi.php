<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];

$sql = INSERT INTO mahasiswa(nama, nim) VALUE($nama, $nim);

$result = pg_query($link, $sql)
if($result){
    echo "data Berhasil ditambahkan";
}

?>