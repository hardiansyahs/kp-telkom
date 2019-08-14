<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MemberKP */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-kp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perguruan_tinggi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jurusan_angkatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bagian_divisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tugas_pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'socmed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
