<?php
session_start();

if(!isset($_SESSION['nik'])){
	header('location:login.php');
}


?>


<?
include "index.php";

?>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">  

<body>
<table border="1" align="center" width="100%" height="0%">
<form action="proses_isidata.php" method="POST">
    <td> 
    <table align="center"> 
    <style>
                    body{
                        background-image: url("sunset.jpg") ;
                        background-size: cover;
                    }
                    table{
                        background-color:grey;
                    }
                    </style>
                    <h1 class ="text-white text-center ">ISI DATA</h1>

                    
                    

    <tr>
        <td> tanggal</td>
        <td><input type="date" name="tanggal" required></td>
    </tr>
    <tr> 
        <td>waktu</td>
        <td><input type="time" name="waktu"required></td>
    </tr>
    <tr>
        <td>lokasi</td>
        <td><input type="text" name="lokasi" required></td>
    </tr>
        <td>suhu</td>
        <td><input type="text" name ="suhu" required></td>

        

    </tr>
    <td align="right"><input type="submit" name = "simpan" values ="simpan"></td>
    <td>

</table>
</body>
</html>