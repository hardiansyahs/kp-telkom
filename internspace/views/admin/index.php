<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MemberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Home | Admin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-kp-index">

    <h3>Daftar User InternSpace</h3>

    <!-- <p>
        <?= Html::a('Create Member Kp', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama_lengkap',
            'nim',
            'perguruan_tinggi',
            'jurusan_angkatan',
            //'bagian_divisi',
            //'tugas_pekerjaan',
            //'socmed',
            //'foto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
