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
        <link rel="stylesheet" href="https://akhir.s3.amazonaws.com/navuser.css">
<head>
        <title>Hello Hai</title>
  <div class="wrap">
  <header>
        <div class="logo">
          <a href="#">
            <img src="https://akhir.s3.amazonaws.com/assets/g5-logo.png"  height="auto">
          </a>
        </div>
        <div class="nav">
            <ol>
                <li><a href="halaman_pengunjung.php">HOME</a></li>
                <li><a href="alam.php">ALAM</a></li>
                <li><a href="buatan.php">BUATAN</a></li>
                <li><a href="bahari.php">BAHARI</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
            </ol>
        </div>
    </header>
    </div>
</head>
<br>
<br>
        <body>
      <video autoplay muted loop id="myVideo">
                <source src="https://akhir.s3.amazonaws.com/assets/user_wall.mp4">
                </video>
        <div class="sosmed">
                <ul>
                  <li><a href="" class="facebook"><img src="https://akhir.s3.amazonaws.com/facebook.png" width="50"></a></li>
                  <li><a href="" class="twitter"><img src="https://akhir.s3.amazonaws.com/twitter.png" width="50" ></a></li>
                  <li><a href="" class="instagram"><img src="https://akhir.s3.amazonaws.com/instagram.png" width="50"></a></li>
                  <li><a href="" class="google"><img src="https://akhir.s3.amazonaws.com/google.png" width="50"></a></li>
                  <li><a href="" class="youtube"><img src="https://akhir.s3.amazonaws.com/youtube.png" width="50" ></a></li>
                </ul>
        </div>
        <div class="content">
        <article>
<h1>Daftar Wisata Alam</h1><br>
  <table border="0">
  <tr>
        <br>


  <?php
 <?php
  // Load file koneksi.php
  include "koneksi.php";

  $query = "SELECT * FROM tempat_wisata"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><b>".$data['Nama_tempat']."</b></td>";
     echo "<tr><td>&nbsp</td></tr>";
    echo "<td><img src='".$data['Foto']."' width='300' height='200'></td>";
     echo "<tr><td>&nbsp</td></tr>";
    echo "<tr><td><p>Jenis tempat &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp".$data['Jenis_tempat']."</p></td></tr>"; echo "<tr><td>&nbsp</td></tr>";
    echo "<tr><td><p>Lokasi tempat&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp".$data['Lokasi']."</p></td></tr>";
     echo "<tr><td>&nbsp</td></tr>";
    echo "<tr><td><p text-align: justify>Penjelasan singkat:</td></tr><tr><td>&nbsp</td></tr><tr><td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$data['Ringkasan']."</p></td$
    echo "<tr><td>&nbsp</td></tr>";
    echo "<tr><td>&nbsp</td></tr>";
    echo "<tr><td>&nbsp</td></tr>";
     echo "<tr><td>&nbsp</td></tr>";
    echo "</tr>";

  }
  ?>
  </table>
        </article>
        <article>

        </article>
</div>
<footer><pre>Komputasi Awan © 2020
Group 5

Juan V. M. S Medellu            Julius F. Saraun                Rando J. Lolong         Reevert W. Warouw  Sebastian S. B. Sondakh</pre>
</footer>
</body>

</html>
