<?php

$niklama = $_GET["nik"];
$nik = $_POST['nik'];
$namalengkap = $_POST['namalengkap'];


$db = new PDO("mysql:host=localhost;dbname=webb", 'root', '');
$query = $db->query("UPDATE `tbregister` SET nik='$nik',namalengkap='$namalengkap' WHERE nik='$niklama'");

if($query){
    header("location:edit.php");
}