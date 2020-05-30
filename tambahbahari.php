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
$query = "INSERT INTO wisata_bahari VALUES('".$Id."', '".$Nama_tempat."', '".$Jenis_tempat."', '".$Lokasi."', '".$Ringkasan."', '".$Foto."')";
$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: lihatbahari.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='lihatbahari.php#popup1'>Kembali Ke Form</a>";
  }

?>


