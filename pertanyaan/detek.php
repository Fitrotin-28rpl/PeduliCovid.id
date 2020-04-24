<?php 
include 'koneksii.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PeduliCovid|Hasil</title>
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <style>
        .kesimpulan{
            margin-top:200px;
            margin-left:250px;
        }
        body{
            background-color:#c0392b;
        }
    </style>
</head>

<body>
    <div class="kesimpulan">
        <div class="col-md-15">
            <div class="card" style="width: 1000px;">
                <div class="card-body">
                    <img src="hasil.svg" alt="" width="100px" style="margin-left:430px">
                    <h3 style="margin-top=100px;" align="center"><br> Kesimpulan
                    </h3>
                    <br>
                    <p align="center" class="fs-16">Gejala-gejala ini membutuhkan perhatian segera. Anda harus segera menelepon Rumah Sakit Terdekat, atau langsung pergi ke instalasi gawat darurat terdekat.</p>
                    <br>
                    <button style="margin-left:410px" class="btn btn-dark" onclick="location.href='1.php';">Check Up lagi</button>
                    <button style="margin-left:410px" class="float-right" onclick="location.href='http://localhost/tugasakhir/index.php';">Beranda >></button>
                    <br>
                </div>
            </div>
        </div>
    </div>
</body>

</html>