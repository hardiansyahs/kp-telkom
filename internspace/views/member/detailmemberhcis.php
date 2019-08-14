<?php

use yii\helpers\html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'Daftar Tamu';
?>
<html lang="en">

<head>
    <title>Student List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:600&display=swap" rel="stylesheet">
</head>
<!-- <div class="site-index"> -->

<h2 style="color:white">Detail Member</h2>

<body>
    <section>
        <div class="container py-3">
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo Yii::getAlias('uploads/') . $post->foto ?>" alt="Upload plz" class="w-100">
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="card-block px-3">
                            <h4 class="card-title"><?php echo $post->nama_lengkap; ?></h4>
                            <p class="card-text">NIM : <?php echo $post->nim; ?></p>
                            <p class="card-text">Peguruan Tinggi : <?php echo $post->perguruan_tinggi; ?></p>
                            <p class="card-text">Jurusan / Angkatan     : <?php echo $post->jurusan_angkatan; ?></p>
                            <p class="card-text">Bagian / Divisi        : <?php echo $post->bagian_divisi; ?></p>
                            <p class="card-text">Tugas Kerja Praktik    : <?php echo $post->tugas_pekerjaan; ?></p>
                            <p class="card-text">Social Media           : <?php echo $post->socmed; ?></p>
                        </div>
                    </div>

                </div>
            </div><br>
            <?= Html::a('Go Back', ['/member/cardmemberhcis'], ['class' => "btn btn-md btn-danger"]) ?>
        </div>
        </div>
    </section>