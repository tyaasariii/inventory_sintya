<?php

$conn = mysqli_connect('localhost', 'root', '' ,'db_inventory_sintya_xi4');

if(!$conn){
    die('koneksi gagal !' . mysqli_connect_error());
}