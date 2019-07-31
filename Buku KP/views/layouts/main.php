<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;

$this->params['breadcrumbs'][] = $this->title;
AppAsset::register($this);
?>
<?php
yii\bootstrap\Modal::begin([
    'headerOptions' => ['id' => 'modalHeader'],
    'id' => 'modal',
    'size' => 'modal-lg',
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => true]
]);
echo "<div id='modalContent'></div>";
yii\bootstrap\Modal::end();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <div id="navbar">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light shadow-sm p-3 mb-5 bg-white rounded" style='background-color:whitesmoke'>
                <a class="navbar-brand" href="<?= Url::to('index.php') ?>" style="font-size:18pt;">Buku KP</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <?= Html::a('Home', ['site/home'], ['class' => 'nav-link', 'style' => 'color:rgb(248, 58, 58)']) ?>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:rgb(248, 58, 58)">
                                Registrasi
                            </a>
                            <div class="dropdown-menu">
                                <?= Html::a('DIT', ['member/registrasimemberdit'], ['class' => 'dropdown-item']) ?>
                                <?= Html::a('EPD', ['member/registrasimemberepd'], ['class' => 'dropdown-item']) ?>
                                <?= Html::a('HCIS', ['member/registrasimemberhcis'], ['class' => 'dropdown-item']) ?>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:rgb(248, 58, 58)">
                                Member
                            </a>
                            <div class="dropdown-menu">
                                <?= Html::a('DIT', ['member/cardmemberdit'], ['class' => 'dropdown-item']) ?>
                                <?= Html::a('EPD', ['member/cardmemberepd'], ['class' => 'dropdown-item']) ?>
                                <?= Html::a('HCIS', ['member/cardmemberhcis'], ['class' => 'dropdown-item']) ?>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:rgb(248, 58, 58)">
                                Account
                            </a>
                            <div class="dropdown-menu">
                                <?= Html::a('Login', ['site/login'], ['class' => 'dropdown-item']) ?>
                                <?= Html::a('Signup', ['site/signup'], ['class' => 'dropdown-item'], ['data' => ['method' => 'post']]) ?>
                                <?= Html::a('Logout', ['site/logout'], ['class' => 'dropdown-item']) ?>
                            </div>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('About', ['site/about'], ['class' => 'nav-link', 'style' => 'color:rgb(248, 58, 58)']) ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('Feedback', ['site/feedback'], ['class' => 'nav-link', 'style' => 'color:rgb(248, 58, 58)']) ?>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="container">


            <?= $content ?>
        </div>
    </div>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>