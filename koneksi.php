<?php
$databaseHost = 'akhirdb-instance.ckjynyhvftut.us-east-1.rds.amazonaws.com';
$databaseName = 'pita';
$databaseUsername = 'partydancing';
$databasePassword = 'menangis';

$koneksi = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName)or die(mysqli_error()) ;

?>


