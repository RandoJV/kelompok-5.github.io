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
// Cek apakah user ingin mengubah fotonya atau tidak
  // Proses upload
    $query = "SELECT * FROM wisata_buatan WHERE Id='".$Id."'";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
    // Proses ubah data ke Database
    $query = "UPDATE wisata_buatan SET Nama_tempat='".$Nama_tempat."', Jenis_tempat='".$Jenis_tempat."', Lokasi_tempat='".$Lokasi."', Ringkasan='".$Ringkasan."', Foto=$
    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: lihatkota.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='ubahbuatan.php'>Kembali Ke Form</a>";
    }
 ?>

