<?php
// Create database connection using config file
include_once("koneksi.php");
?>
<?php
        session_start();

        // cek apakah yang mengakses halaman ini sudah login
        if($_SESSION['Level']==""){
                header("location:login.php?pesan=gagal");
        }

        ?>

<!DOCTYPE HTML>
<html>
        <link rel="stylesheet" href="https://akhir.s3.amazonaws.com/EDITUSER.css">
    <link rel="stylesheet" href="https://akhir.s3.amazonaws.com/navtop.css">
<head>
        <title>Hello Hai</title>
</head>
<br>
<br>
<?php
  // Load file koneksi.php
  include "koneksi.php";

  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $Id = $_GET['Id'];

  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM wisata_buatan WHERE Id='".$Id."'";
  $sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>

        <body>

                <form method="post" action="prosesubahbuatan.php?Id=<?php echo $Id; ?>" enctype="multipart/form-data">

             <b style="color: yellow;">Nama Tempat</b><br><br>
        <input style="height: 1.5rem; width: 19.7rem;background-color: transparent;border:0;border-bottom: 2px solid purple; outline: : 0; color: yellow; padding: 1.5p$
            <b style="color: yellow;">Jenis Tempat</b><br><br>
        <input style="height: 1.5rem; width: 19.7rem;background-color: transparent;border:0;border-bottom: 2px solid purple; outline: : 0; color: yellow; padding: 1.5p$
                        <b style="color: yellow;">Lokasi</b><br><br>
        <input style="height: 1.5rem; width: 19.7rem;background-color: transparent;border:0;border-bottom: 2px solid purple; outline: : 0; color: yellow; padding: 1.5p$
                        <b style="color: yellow;">Ringkasan</b><br><br>
        <input style="height: 3.5rem; width: 19.7rem;background-color: transparent;border:0;border-bottom: 2px solid purple; outline: : 0; color: yellow; padding: 1.5p$
        <b style="color: yellow;">Ubah link gambar</b><br><br>
        <input style="height: 1.5rem; width: 19.7rem;background-color: transparent;border:0;border-bottom: 2px solid purple; outline: : 0; color: yellow; padding: 1.5p$
                        <br><br><br><center><button name="next" type="submit" class="button button5">Execute</button></center>
                </form>
                </form>
</body>

</html>
