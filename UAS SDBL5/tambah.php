<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Partisipan</title>
</head>
<body>
    <h3>Tambah Data Partisipan</h3>
    <form method="post" action="">
    <table>
        <tr>			
            <td>NIM</td>
            <td><input type="number" name="nim"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Sandi</td>  
            <td><input type="text" name="sandi"></td>
        </tr>
        <tr>
            <td>Role</td>  
            <td><input type="number" name="role" min="0" max="1"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="simpan" value="SIMPAN"></td>
        </tr>		
    </table>
    </form>
    <a href="aslab.php">Kembali</a>
</body>

<?php 
if (isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $sandi = $_POST['sandi'];
    $role = $_POST['role'];

    mysqli_query($koneksi,"insert into user values('$nim','$nama','$sandi','$role')");
    header("Location:aslab.php");
}
?>

</html>