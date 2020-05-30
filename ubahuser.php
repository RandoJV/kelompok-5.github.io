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

</style>

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
  $id = $_GET['id'];

  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM user WHERE id='".$id."'";
  $sql = mysqli_query($koneksi, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>

        <body>
                <form class = "col s12" method="post" action="prosesubahuser.php?id=<?php echo $id; ?>" enctype="multipart/form-data">

                        <br>
<b style="color: yellow;">NAMA USER</b><br><br>
<input style="height: 1.5rem; width: 19.7rem;background-color: transparent;border:0;border-bottom: 2px solid purple; outline: : 0; color: yellow; padding: 1.5px 6px;" $
                        <b style="color: yellow;">USERNAME</b><br><br>
                        <input style="height: 1.5rem; width: 19.7rem;background-color: transparent;border:0;border-bottom: 2px solid purple; outline: : 0; color: yello$
                        <b style="color: yellow;">LEVEL</b><br><br>
                          <?php
    if($data['Level'] == "pengunjung"){
      echo "<input type='radio' name='Level' value='pengunjung' checked='checked'> pengunjung";
      echo "<input type='radio' name='Level' value='admin'> admin";
    }else{
      echo "<input type='radio' name='Level' value='pengunjung'> pengunjung";
      echo "<input type='radio' name='Level' value='admin' checked='checked'> admin";
    }
    ?><br>
                        <br><br><center><button name="next" type="submit" class="button button5">Tambah</button></center>
                </form>
</div>
</body>

</html>
