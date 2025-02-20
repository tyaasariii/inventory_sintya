<?php

$id_jenis = $_POST['id_jenis'];
$nama_jenis = $_POST['nama_jenis'];

include '../../config/koneksi.php';

$query = mysqli_query(mysql: $conn, query: "INSERT INTO barang VALUES('$id_jenis','$nama_jenis')");

if ($query){
    echo "<script>alter('tambah berhasil')</script>";
    echo "<script>window.location.href='index.php'</script>";
}
else{
    echo "<script>alter('tambah gagal')</script>";
    echo "<script>window.location.href='tambah.php'</script>";
}