<?php

$conn = mysqli_connect('localhost', 'root', '' ,'db_inventor_sintya_xi4');

if(!$conn){
    die('koneksi gagal !' . mysqli_connect_error());
}