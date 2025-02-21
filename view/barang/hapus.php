<?php

$id_barang=$_GET['id_barang'];

include '../../config/koneksi.php';

$query=mysqli_query($conn, "DELETE FROM barang WHERE id_barang='$id_barang'");

if ($query){
    echo "<script>alter('hapus barang berhasil !!')</script>";
    echo "<script>window.location.href='index.php'</script>";
}
else{
    echo "<script>alter('edit jenis gagal !!')</script>";
    echo "<script>window.location.href='tambah.php'</script>";
}
?>