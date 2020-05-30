<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];
// Ambil Data yang Dikirim dari Form
$Nama = $_POST['Nama'];
$Username = $_POST['Username'];
$Level = $_POST['Level'];
// Cek apakah user ingin mengubah fotonya atau tidak

  // Proses upload


    // Proses ubah data ke Database
    $query = "UPDATE user SET Nama='".$Nama."', Username='".$Username."', Level='".$Level."' WHERE id='".$id."'";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: halaman_admin.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
    }

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: halaman_admin.php"); // Redirect ke halaman index.php
  }else{
    !$sql;
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='ubahuser.php'>Kembali Ke Form</a>";
  }

?>

