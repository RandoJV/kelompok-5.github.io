<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$Id = $_POST['Id'];
$Nama_tempat = $_POST['Nama_tempat'];
$Jenis_tempat = $_POST['Jenis_tempat'];
$Lokasi = $_POST['Lokasi'];
$Ringkasan = $_POST['Ringkasan'];
$Foto = $_POST['Foto'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
// Set path folder tempat menyimpan fotonya
// Proses upload
  // Proses simpan ke Database
  $query = "INSERT INTO tempat_wisata VALUES('".$Id."', '".$Nama_tempat."', '".$Jenis_tempat."', '".$Lokasi."', '".$Ringkasan."', '".$Foto."')";
  $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
 if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: lihatgunung.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='formtambahbuatan.php'>Kembali Ke Form</a>";
  }

?>
