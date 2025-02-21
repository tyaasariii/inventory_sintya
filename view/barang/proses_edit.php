<?php

$id_barang=$_GET['id_barang'];
$nama_barang=$_POST['nama_barang'];
$idjenis=$_POST['id_jenis'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];

include '../../config/koneksi.php';

$query=mysqli_query($conn, "UPDATE barang SET nama_barang='$nama_barang' WHERE id_barang='$id_barang'");

if ($query){
    echo "<script>alter('edit berhasil')</script>";
    echo "<script>window.location.href='index.php'</script>";
}
else{
    echo "<script>alter('edit gagal')</script>";
    echo "<script>window.location.href='tambah.php'</script>";
}