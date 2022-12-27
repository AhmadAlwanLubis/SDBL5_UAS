<?php
session_start();
include "koneksi.php";
?>

<!-- Delete -->
<?php 
$nim = $_GET['nim'];
mysqli_query($koneksi,"delete from user where nim='$nim'");
header("location:aslab.php");    
?>