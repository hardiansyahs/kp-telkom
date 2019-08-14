<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MemberKP */

$this->title = 'Update Member Kp: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Member Kps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="member-kp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
