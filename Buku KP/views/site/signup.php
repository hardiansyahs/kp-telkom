<?php

use yii\helpers\html;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */

$this->title = 'Buku KP | Registrasi User';
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

    <?php $form = ActiveForm::begin(['options' => [
        'enctype' => 'multipart/form-data', 'class' => 'form-horizontal',
        'style' => 'font-family: Nunito Sans'
    ]]); ?>
    <fieldset>
        <legend style="color:rgb(243, 41, 41); font-size: 24pt;">Registrasi User</legend>
        <div class="form-row">
            <div class="form-group col-md-6">
                <?= $form->field($post, 'firstname')->textInput(['placeholder' => 'Masukkan Nama Depan'])->label('Nama Depan'); ?>
            </div>
            <div class="form-group col-md-6">
                <?= $form->field($post, 'lastname')->textInput(['placeholder' => 'Masukkan Nama Belakang'])->label('Nama Belakang'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <?= $form->field($post, 'username')->textInput(['placeholder' => 'Masukkan Username'])->label('Username'); ?>
            </div>
            <div class="form-group col-md-6">
                <?= $form->field($post, 'password')->textInput(['placeholder' => 'Password'])->label('Password'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <?= $form->field($post, 'authKey')->textInput(['placeholder' => 'AuthKey']); ?>
            </div>
            <div class="form-group col-md-6">
                <?= $form->field($post, 'accessToken')->textInput(['placeholder' => 'AccessToken']); ?>
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