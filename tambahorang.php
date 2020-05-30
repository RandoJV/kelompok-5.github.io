<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$Nama = $_POST['Nama'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Level = $_POST['Level'];



  $query = "INSERT INTO user VALUES('".$id."', '".$Nama."', '".$Username."', '".$Password."', '".$Level."')";
  $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: login.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='formtambahbuatan.php'>Kembali Ke Form</a>";
  }

?>
