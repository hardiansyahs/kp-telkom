<?php

use yii\helpers\html;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'Buku KP | Registrasi';
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<!-- <div class="site-index"> -->

<body>


    <?php
    $form = ActiveForm::begin([
        'options' => [
            'id' => 'create-product-form',
            'style' => 'font-family: Nunito'
        ]
    ]); ?>
    <fieldset>
        <legend>Registrasi Member KP EPD</legend>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="inputEmail4" placeholder="Nama Lengkap">
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="inputPassword4" placeholder="Panggilan">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" id="inputAddress2" placeholder="Perguruan Tinggi">
            </div>
            <div class="form-group col-md-3">
                <input type="text" class="form-control" id="inputAddress" placeholder="Jurusan">
            </div>
            <div class="form-group col-md-3">
                <input type="text" class="form-control" id="inputAddress2" placeholder="Angkatan">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Divisi">
            </div>
            <div class="form-group col-md-4">
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Tugas">
            </div>
            <div class="form-group col-md-2">
                <input type="text" class="form-control" id="inputZip" placeholder="Socmed">
                
            </div>
        </div>

    </fieldset>


    <?php ActiveForm::end() ?>


</body>