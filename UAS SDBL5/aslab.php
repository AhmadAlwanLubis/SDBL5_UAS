<?php 
session_start();
if(!isset($_SESSION['nama'])){}
?>

<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <title>Dashboard</title> 

        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link href="CSS/css+.css" rel="stylesheet" type="text/css">
    </head>

    <body> 
        <h4>Selamat Datang, <?php echo $_SESSION['nama'] ; ?></h4>
        <div class="main1">
        <table>
            <h3>Daftar Partisipan Sistem Database Lanjutan Lab 5</h3>
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Opsi</th>
            </tr>

            <?php 
            include 'koneksi.php';
            $no = 1;
            $qry = mysqli_query($koneksi,"select * from user");
            while($pr = mysqli_fetch_array($qry)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $pr['nim']; ?></td>
                    <td><?php echo $pr['nama']; ?></td>
                    <td>
                    <button class="hapus" onclick="document.location='crud.php?nim=<?php echo $pr['nim']; ?>'">Hapus</button>
                    </td>
                </tr>
                <?php 
            }
            ?>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                <button class="tambah" onclick="document.location='tambah.php'">Tambah</button>
                </td>
            </tr>
        </table>
        <button class="keluar" onclick="document.location='index.php'">Keluar</button>
        </div>
    </body>
</html>