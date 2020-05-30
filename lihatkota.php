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
        <link rel="stylesheet" href="https://akhir.s3.amazonaws.com/tgs.css">
        <link rel="stylesheet" href="https://akhir.s3.amazonaws.com/tabel.css">
        <link rel="stylesheet" href="https://akhir.s3.amazonaws.com/modall.css">
<head>
        <title>Hello Hai</title>
</head>
<br>
<br>
        <body>
        <div class="area"></div><nav class="main-menu">
            <ul>
                <li class="has-subnav">
                    <a href="halaman_admin.php">
                        <i class="fa fa-home fa-2x"><img src="https://akhir.s3.amazonaws.com/assets/user.png" width="25"></i>
                        <span class="nav-text">
                            Atur User
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="lihatgunung.php">
                        <i class="fa fa-home fa-2x"><img src="https://akhir.s3.amazonaws.com/assets/alam.png" width="25"></i>
                        <span class="nav-text">
                            Wisata Alam
                        </span>
          </a>
                </li>
                <li class="has-subnav">
                    <a href="lihatkota.php">
                        <i class="fa fa-home fa-2x"><img src="https://akhir.s3.amazonaws.com/assets/kota.png" width="25"></i>
                        <span class="nav-text">
                            Wisata Buatan
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="lihatbahari.php">
                        <i class="fa fa-home fa-2x"><img src="https://akhir.s3.amazonaws.com/assets/bahari.png" width="25"></i>
                        <span class="nav-text">
                            Wisata Bahari
                        </span>
                    </a>
                </li>
            </ul>
            <ul class="logout">
                <li>
       <a href="login.php">
                         <i class="fa fa-power-off fa-2x"><img src="https://akhir.s3.amazonaws.com/assets/logout.png" width="25"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
        <h1><center><span class="purple">WISATA</span> <span class="yellow">BUATAN</span></h1>
        <br>
<table class="container hover" id="table_id">
        <thead>
                <tr>
                        <th><center>Foto </center></th>
                        <th><center>Id</center></th>
                        <th><center>Nama Tempat</center></th>
                        <th><center>Kategori</center></th>
                        <th><center>Lokasi</center></th>
                        <th><center>Ringkasan</center></th>
                        <th colspan="2"><center>Aksi</center></th>
           </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";

  $query = "SELECT * FROM wisata_buatan"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><center><img src='".$data['Foto']."' width='100' height='100'></td>";
    echo "<td><center>".$data['Id']."</td>";
    echo "<td><center>".$data['Nama_tempat']."</td>";
    echo "<td><center>".$data['Jenis_tempat']."</td>";
    echo "<td><center>".$data['Lokasi_tempat']."</td>";
    echo "<td><center>".$data['Ringkasan']."</td>";
    echo "<td><center><a href='ubahbuatan.php?Id=".$data['Id']."'>Ubah</a></td>";
    echo "<td><center><a href='hapusbuatan.php?Id=".$data['Id']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
    <center><a class="button button5" href="#popup1">Add New Data</a></center>
  <div id="popup1" class="overlay">
        <div class="popup">
                <h3><span style="color: purple">TAMBAH</span> <span style="color: yellow">WISATA</span></h3>
                <a class="close" href="#">&times;</a>
                <form method="post" action="tambahbuatan.php" enctype="multipart/form-data">
                        <b style="color: yellow;">ID</b><br><br>
        <input style="height: 1.5rem; width: 19.7rem;background-color: transparent;border:0;border-bottom: 2px solid purple; outline: : 0; color: yellow; padding: 1.5p$
                        <b style="color: yellow;">Nama Tempat</b><br><br>
        <input style="height: 1.5rem; width: 19.7rem;background-color: transparent;border:0;border-bottom: 2px solid purple; outline: : 0; color: yellow; padding: 1.5p$
                        <b style="color: yellow;">Kategori</b><br><br>
        <input style="height: 1.5rem; width: 19.7rem;background-color: transparent;border:0;border-bottom: 2px solid purple; outline: : 0; color: yellow; padding: 1.5p$
                        <b style="color: yellow;">Lokasi</b><br><br>
        <input style="height: 1.5rem; width: 19.7rem;background-color: transparent;border:0;border-bottom: 2px solid purple; outline: : 0; color: yellow; padding: 1.5p$
                        <b style="color: yellow;">Ringkasan</b><br><br>
        <input style="height: 1.5rem; width: 19.7rem;background-color: transparent;border:0;border-bottom: 2px solid purple; outline: : 0; color: yellow; padding: 1.5p$
        <b style="color: yellow;">Link Foto</b><br><br>
        <input style="height: 1.5rem; width: 19.7rem;background-color: transparent;border:0;border-bottom: 2px solid purple; outline: : 0; color: yellow; padding: 1.5p$
                        <input class="button button5" type="submit" value="Simpan">
                </form><br>
</div>

</body>

</html>

