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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<!-- <div class="site-index"> -->

<h2 style="color:white">Detail Member</h2>

<body style="background-color:darkslategrey">
    <div class="body-content">
        <div class="form-group">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $post->nama_lengkap; ?>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $post->nim; ?>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $post->perguruan_tinggi; ?>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $post->jurusan_angkatan; ?>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $post->bagian_divisi; ?>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $post->tugas_pekerjaan; ?>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $post->socmed; ?>
                </li>
            </ul>
        </div>
        <div class="form-group">
            <?= Html::a('Go Back', ['/member/cardmemberdit'], ['class' => "btn btn-md btn-danger"]) ?>
        </div>
    </div>