<?php

use yii\helpers\html;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */

$this->title = 'Buku KP | Feedback User';
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
        <legend style="color:rgb(243, 41, 41); font-size: 24pt;">Feedback User</legend>
        <div class="form-row">
            <div class="form-group col-md-6">
                <?= $form->field($post, 'name')->textInput(['placeholder' => 'Name'])->label('Nama'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <?= $form->field($post, 'email')->textInput(['placeholder' => 'Email'])->label('Email'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <?= $form->field($post, 'feedback')->textarea(['placeholder' => 'Feedback']); ?>
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