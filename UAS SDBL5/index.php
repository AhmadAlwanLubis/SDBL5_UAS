<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html> 
<html> 
    <head> 
        <title>UAS SDBL5</title> 

        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="CSS/css+.css" rel="stylesheet" type="text/css">
    </head> 
    <body class="masuk">  
        <form method="post"> 
            <table> 
                <div class="main">
                    <p class="sign">Masuk</p>
                    <form action="" method="post">
                    <input class="kotak" name="nim" type="text" placeholder="NIM">
                    <input class="kotak" name="sandi" type="password" placeholder="Password">
                    <button type="submit" class="submit" name="submit">Masuk</button>
                </div>
            </table>
        </form>
    
        <?php
    if (isset($_POST['submit'])) {
        $nim = $_POST['nim'];
        $sandi = $_POST['sandi'];
        // $role = $_POST['role'];

        $qry = mysqli_query($koneksi, "SELECT * FROM user WHERE nim='$nim' AND sandi='$sandi'");

        $cek = mysqli_num_rows($qry);
        // $role = 1;
        
        if ($cek == 1) {
            $row = mysqli_fetch_assoc($qry);
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['role'] = $row['role'];
            if ($row['role'] == 1){
            header("Location:aslab.php");
            }
            else if ($row['role'] == 0){
                header("Location:dashboard.php");
                }
        } else {
            echo "<script>alert('NIM atau Sandi Salah !');</script>"; 
        }
    }
?>
    </body>
</html>