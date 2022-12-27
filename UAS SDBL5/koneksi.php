<?php

//database 
$koneksi = mysqli_connect("localhost", "root", "", "sdbl5");

//test
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}