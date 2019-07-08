<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Buku KP';
?>

<head>
    <title>Buku KP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<div class="site-index">

    <body>
        <div class="row no-gutters">
            <div class="col-md-6">
                <div class="leftside no-gutters d-flex justify-content-center align-items-center">
                    <img src="img/telkom2.jpg" alt="">
                    <div class="left">
                        <div class="text1">
                            <h4>Lihat Berbagai Pengalaman</h4>
                            <i class="material-icons">face</i>
                        </div>
                        <div class="text2">
                            <h4>Ikuti Sesuai Minat</h4>
                            <i class="material-icons">explore</i>
                        </div>
                        <div class="text3">
                            <h4>Tulis Cerita Pengalamanmu</h4>
                            <i class="material-icons">create</i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div class="container">
                    <!-- <img src="img/logo telkom.png" alt=""> -->
                    <div class="rightside no-gutters d-flex justify-content-center align-items-center">
                        <img src="img/logotelkom.png" alt="">
                        <form id="bukukerja">

                            <legend>Buku Kerja Praktik Telkom Indonesia Graha Merah Putih Bandung</legend><br>
                            <?= Html::a('Gabung Sekarang!', ['site/home'], ['class' => 'btn btn-md btn-danger btn-block', 'id' => 'btnTentang']) ?>
                            <?= Html::a('Tentang Buku', ['site/about'], ['class' => 'btn btn-md btn-outline-danger btn-block', 'id' => 'btnTentang', 'style' => 'font-family: Nunito, sans-serif ;']) ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

</div>