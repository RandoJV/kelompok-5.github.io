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
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://akhir.s3.amazonaws.com/test1.css">
    <script type="text/javascript" src="https://akhir.s3.amazonaws.com/test1.js"></script>
    <title></title>
</head>
<body>

<video width="100%" autoplay muted loop id="myVideo">
                <source src="https://akhir.s3.amazonaws.com/%5BWorship+Loops%5D+Sunset+waves+-+Light+-+Wather+-+Free+Background+-+IgniteMotion.com.mp4" type="video/mp4$
                </video>

    <h1><p>TOUCHE ME!<br></h1>
<div class="toggle" id="toggle" onclick="menu-expand()">
<i class="fa fa-plus" id="plus"></i>
  </div>
<div class="menu" id="menu">
  <a href="buatan.php">
    <i class="fa "><img src="https://akhir.s3.amazonaws.com/assets/kota.png" width="25"></i>
  </a>
   <a href="bahari.php">
    <i class="fa "><img src="https://akhir.s3.amazonaws.com/assets/bahari.png" width="20"></i>
  </a>
  <a href="alam.php">
    <i class="fa "><img src="https://akhir.s3.amazonaws.com/assets/alam.png" width="30"></i>
  </a>
</div>

</body>
</html>

