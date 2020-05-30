<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$Username = $_POST['Username'];
$Password = $_POST['Password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where Username='$Username' and Password='$Password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

        $data = mysqli_fetch_assoc($login);

        // cek jika user login sebagai admin
        if($data['Level']=="admin"){

                // buat session login dan username
                $_SESSION['Username'] = $Username;
                $_SESSION['Level'] = "admin";

                // alihkan ke halaman dashboard admin
                header("location:halaman_admin.php");

        // cek jika user login sebagai pegawai
        }else if($data['Level']!=="admin"){
                // buat session login dan username
                $_SESSION['Username'] = $Username;
                $_SESSION['Level'] = "pengunjung";
                // alihkan ke halaman dashboard pegawai
                header("location:halaman_pengunjung.php");

        }else{

                // alihkan ke halaman login kembali
                header("location:login.php?pesan=gagal");
        }
}
else{
        header(mysqli_error($koneksi));
        header("location:login.php?pesan=gagal");
}
?>
