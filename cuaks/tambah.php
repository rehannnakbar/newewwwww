<?php
session_start();

if(!isset($_SESSION['nik'])){
	header('location:login.php');
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-sm">
    <form action="catatan_perjalanan.php" method="post">
        <div>
            <label for="">tanggal</label>
            <input type="date" name="tanggal"  class="form-control">
        </div>
        <div>
            <label for="">waktu</label>
            <input type="time" name="waktu"  class="form-control">
        </div>
        <div>
            <label for="">lokasi</label>
            <input type="text" name="lokasi" id="" class="form-control">
        </div>
        <div>
            <label for="">suhutubuh</label>
            <input type="text" name="suhutubuh" id="" class="form-control">
        </div>
        
        
        <div class="form-floating" >
        </div>
        <br>
        <button type="submit" class="btn btn-outline-primary">Simpan</button>
    </form>
    </div>
</body>
</html> 