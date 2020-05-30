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
<?php
        if(isset($_POST["hapus_data"])){
                $id_hapus_data = $_POST['id_hapus_data'];
                $sql_delete = "DELETE FROM `data_beasiswa` WHERE `id_siswa` = :id_hapus_data";
                $stmt_delete = $db->prepare($sql_delete);
                $stmt_delete->bindValue(':id_hapus_data', $id_hapus_data);
                $stmt_delete->execute();
                $query_reorder_id=mysqli_query($selectdb,"ALTER TABLE data_beasiswa AUTO_INCREMENT = 1");
        }
?>
<!DOCTYPE HTML>
<html>
        <link rel="stylesheet" href="https://akhir.s3.amazonaws.com/tgs.css" type="text/css">
        <link rel="stylesheet" href="https://akhir.s3.amazonaws.com/tabel.css" type="text/css">
<head>
        <title>Hello Hai</title>

</head>
<br>
<br>
        <body>
        <div class="area"></div><nav class="main-menu">
            <ul>
                <li class="has-subnav">
                    <a href="http://ec2-3-235-95-160.compute-1.amazonaws.com/halaman_admin.php">
                        <i class="fa fa-home fa-2x"><img src="https://akhir.s3.amazonaws.com/assets/user.png" width="25"></i>
                        <span class="nav-text">
                            Atur User
 </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="lihatgunung.php">
                        <i class="fa fa-home fa-2x"><img src="https://akhir.s3.amazonaws.com/alam.png" width="25"></i>
                        <span class="nav-text">
                            Wisata Alam
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="lihatkota.php">
                        <i class="fa fa-home fa-2x"><img src="https://akhir.s3.amazonaws.com/kota.png" width="25"></i>
                        <span class="nav-text">
                            Wisata Buatan
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="http://ec2-3-235-95-160.compute-1.amazonaws.com/lihatbahari.php">
                        <i class="fa fa-home fa-2x"><img src="https://akhir.s3.amazonaws.com/bahari.png" width="25"></i>
                        <span class="nav-text">
                            Wisata Bahari
                        </span>
                    </a>
                </li>
            </ul>
            <ul class="logout">
                <li>
                   <a href="http://ec2-3-235-95-160.compute-1.amazonaws.com/login.php">
                         <i class="fa fa-power-off fa-2x"><img src="https://akhir.s3.amazonaws.com/assets/logout.png" width="25"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
<h1><center><span class="purple">DAFTAR</span> <span class="yellow">USER</span></h1>
        <br>
<table class="container hover" id="table_id">
        <thead>
                <tr>
                        <th><center>ID </center></th>
                        <th><center>Nama</center></th>
                        <th><center>Username</center></th>
                        <th><center>Level</center></th>
                        <th colspan="2"><center>Aksi</center></th>
                </tr>
                <?php
  // Load file koneksi.php
  include "koneksi.php";

  $query = "SELECT*FROM user"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>"."<center>".$data['id']."</td>";
    echo "<td>"."<center>".$data['Nama']."</td>";
    echo "<td>"."<center>".$data['Username']."</td>";
    echo "<td>"."<center>".$data['Level']."</td>";
  echo "<td><a  href='ubahuser.php?id=".$data['id']."'><center>Edit</td>";
    echo "<td><a href='hapususer.php?id=".$data['id']."'><center>Delete</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
        </thead>

</body>

</html>
