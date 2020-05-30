<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$Id = $_GET['Id'];
// Ambil Data yang Dikirim dari Form
$Nama_tempat = $_POST['Nama_tempat'];
$Jenis_tempat = $_POST['Jenis_tempat'];
$Lokasi = $_POST['Lokasi_tempat'];
$Ringkasan = $_POST['Ringkasan'];
$foto = $_POST['Foto'];

  $query = "SELECT * FROM wisata_bahari WHERE Id='".$Id."'";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
    $query = "UPDATE wisata_bahari SET Nama_tempat='".$Nama_tempat."', Jenis_tempat='".$Jenis_tempat."', Lokasi_tempat='".$Lokasi."', Ringkasan='".$Ringkasan."', Foto=$
    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: lihatbahari.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='ubahbahari.php'>Kembali Ke Form</a>";
    }

?>

