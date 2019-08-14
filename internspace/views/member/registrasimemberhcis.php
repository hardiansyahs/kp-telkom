<?php

use yii\helpers\html;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'Buku KP | Registrasi HCIS';
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:600&display=swap" rel="stylesheet">

</head>
<!-- <div class="site-index"> -->

<body>

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'class' => 'form-horizontal',
    'style' => 'font-family: Nunito Sans']]); ?>
    <fieldset>
        <legend style="color:rgb(243, 41, 41); font-size: 24pt;">Registrasi Member KP HCIS</legend>
        <div class="form-row">
            <div class="form-group col-md-6">
                <?= $form->field($post, 'nama_lengkap')->textInput(['placeholder' => 'Masukkan nama lengkap anda'])->label('Nama Lengkap'); ?>
            </div>
            <div class="form-group col-md-6">
                <?= $form->field($post, 'nim')->textInput(['placeholder' => 'Masukkan NIM anda'])->label('NIM'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <?= $form->field($post, 'perguruan_tinggi')->textInput(['placeholder' => 'Masukkan nama perguruan tinggi'])->label('Perguruan Tinggi'); ?>
            </div>
            <div class="form-group col-md-6">
                <?= $form->field($post, 'jurusan_angkatan')->textInput(['placeholder' => 'Mis. S1 Informatika / 2016'])->label('Jurusan & Angkatan'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <?= $form->field($post, 'bagian_divisi')->textInput(['readonly' => true, 'value' => 'Human Capital Information System'])->label('Divisi/Bagian'); ?>
            </div>
            <div class="form-group col-md-6">
                <?= $form->field($post, 'tugas_pekerjaan')->textInput(['placeholder' => 'Tugas selama KP'])->label('Tugas Kerja Praktik'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <?= $form->field($post, 'socmed')->textInput(['placeholder' => 'Line, Instagram, Facebook, dll'])->label('Social Media'); ?>
            </div>
            <div class="form-group col-md-2">
                <?= $form->field($post, 'foto')->fileInput(); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>

    </fieldset>


    <?php ActiveForm::end() ?>


</body>