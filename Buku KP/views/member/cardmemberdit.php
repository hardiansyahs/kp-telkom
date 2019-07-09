<?php

use yii\helpers\Html;

?>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/card.css">
    <style>
    </style>
</head>

<body>
    <div class="container">
        <h2 style="text-align:center">User Profile Card</h2>
        <div class="row" id="load_data">

            <?php foreach ($post as $field) { ?>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <img src="<?php echo Yii::getAlias('uploads/') . '/' . $field->foto ?>" alt="Upload plz" width="100%" height="100%">
                        <h1><?php echo $field->nama_lengkap; ?></h1>
                        <p class="title"><?php echo $field->bagian_divisi; ?></p>
                        <p><?php echo $field->perguruan_tinggi; ?></p>
                        <!-- <div style="margin: 24px 0;">
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </div> -->
                        <p><button>Contact</button></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>