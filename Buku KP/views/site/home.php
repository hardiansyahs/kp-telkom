<?php

use yii\helpers\Html;
use yii\bootstrap\Button;

/* @var $this yii\web\View */

$this->title = 'Buku KP | Homepage';
?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="site-index">
        <div class="jumbotron" style="background-image: url('img/ditpic.png'); background-size: 100% 100%; background-repeat: no-repeat;">
            <div class="column">
                <div class="row">
                    <div class="col-10">
                        <h1 class="display-5" style="color: #E74040">KP DIT 1 2019</h1>
                    </div>
                    <div class="col-2">
                        <?= Html::a('Member DIT', ['member/cardmemberdit'], ['class' => 'btn btn-md btn-danger float-right']) ?>
                    </div>
                </div>
                <hr class="my-4">
                <p><?= Html::a('Mulai Mendata Tamu', ['member/registrasimemberdit'], ['class' => 'btn btn-lg btn-danger']) ?></p>
            </div>
        </div>
        <div class="jumbotron" style="background-image: url('img/epdpic.png'); background-size: 100% 100%; background-repeat: no-repeat;">
            <div class="row">
                <div class="col-10">
                    <h1 class="display-6" style="color: #E74040">KP EPD 2 2019</h1>
                </div>
                <div class="col-2">
                    <?= Html::a('Member EPD', ['member/registrasimemberepd'], ['class' => 'btn btn-md btn-danger float-right']) ?>
                </div>
            </div>
            <hr class="my-4">
            <p><?= Html::a('Mulai Mendata Tamu', ['member/registrasimemberepd'], ['class' => 'btn btn-lg btn-danger']) ?></p>
        </div>
        <div class="jumbotron" style="background-image: url('img/hcispic.png'); background-size: 100% 100%; background-repeat: no-repeat;">
            <div class="row">
                <div class="col-10">
                    <h1 class="display-6" style="color: #E74040">KP HCIS 3 2019</h1>
                </div>
                <div class="col-2">
                    <?= Html::a('Member HCIS', ['member/cardmemberhcis'], ['class' => 'btn btn-md btn-danger float-right']) ?>
                </div>
            </div>
            <hr class="my-4">
            <p><?= Html::a('Mulai Mendata Tamu', ['member/registrasimemberhcis'], ['class' => 'btn btn-lg btn-danger']) ?></p>
        </div>

    </div>
    <br>
    <div class="body-content">

    </div>
    </div>
</body>