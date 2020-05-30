<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$Id = $_GET['Id'];
// Ambil Data yang Dikirim dari Form
$Nama_tempat = $_POST['Nama_tempat'];
$Jenis_tempat = $_POST['Jenis_tempat'];
$Lokasi = $_POST['Lokasi'];
$Ringkasan = $_POST['Ringkasan'];
 $foto = $_POST['Foto'];
// Cek apakah user ingin mengubah fotonya atau tidak
  // P
    $query = "SELECT * FROM tempat_wisata WHERE Id='".$Id."'";
    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query d
    // Proses ubah data ke Database
    $query = "UPDATE tempat_wisata SET Nama_tempat='".$Nama_tempat."', Jenis_tempat='".$Jenis_tempat."', Lokasi='".$Lokasi."', Ringkasan='".$Ringkasan."', Foto='".$fot$
    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: lihatgunung.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='lihatgunung.php'>Kembali Ke Form</a>";
    }
?>
