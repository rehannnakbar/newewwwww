<?php
session_start();

if(!isset($_SESSION['nik'])){
	header('location:login.php');
}


?>



<?php
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi'];
$suhutubuh = $_POST['suhutubuh'];
$id = $_POST['id'];

$koneksi = new PDO('mysql:host=localhost;dbname=webb','root','');
$query = $koneksi->query("INSERT INTO  `tbperjalanan` VALUE('$tanggal','$waktu','$lokasi','$suhutubuh','id')");

if($query){
    header("location:tambah.php");
}