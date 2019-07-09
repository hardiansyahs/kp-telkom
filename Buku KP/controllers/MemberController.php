<?php

namespace app\controllers;

use Yii;
use app\models\MemberKP;
use yii\web\Controller;
use yii\web\UploadedFile;

class MemberController extends Controller
{

    public function actionRegistrasimemberdit()
    {
        $post = new MemberKP();

        if ($post->load(Yii::$app->request->post())) {

            $foto = UploadedFile::getInstance($post, 'foto');

            if ($post->validate()) {
                $post->save();
                if (!empty($post)) {
                    $foto->saveAs(Yii::getAlias('uploads/') . 'foto.' . $foto->extension);
                    $post->foto = 'foto.' . $foto->extension;
                    $post->save(FALSE);
                }
            }

            $post->save();
            return $this->redirect(['registrasimemberepd']);
        } else {
            return $this->render('registrasimemberdit', ['post' => $post]);
        }
    }

    public function actionCardmemberdit()
    {   
        $posts = MemberKP::find()->all();
        return $this->render('cardmemberdit',['posts' => $posts]);
    }

    public function actionRegistrasimemberepd()
    {
        return $this->render('registrasimemberepd');
    }


}
