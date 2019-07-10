<?php
use yii\helpers\Html;

$this->title = 'Buku KP | Member DIT';
?>
<html>

<head>
    <link rel="stylesheet" href="css/card.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:600&display=swap" rel="stylesheet">
    <style>
    </style>
</head>

<body>
    <h2 style="text-align:center;">Member DIT</h2><br>
    <div class="container">
        <div class="row" id="load_data"><br>

            <?php foreach ($post as $field) { ?>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <img src="<?php echo Yii::getAlias('uploads/') . $field->foto ?>" alt="Upload plz" class="img-fluid img-thumbnail">
                        <h4><?php echo $field->nama_lengkap; ?></h4>
                        <p class="title"><?php echo $field->bagian_divisi; ?></p>
                        <p><?php echo $field->perguruan_tinggi; ?></p>
                        <p><?= Html::a('Lihat Profil', ['viewdit', 'id' => $field->id], ['class' => 'badge badge-primary', 'id' => 'button']) ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>