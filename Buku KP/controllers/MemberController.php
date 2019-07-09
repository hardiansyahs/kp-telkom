<?php

namespace app\controllers;

use Yii;
use app\models\MemberKP;
use yii\web\Controller;
use yii\web\UploadedFile;

class MemberController extends Controller
{

    //Halaman Registrasi Member DIT
    public function actionRegistrasimemberdit()
    {
        $post = new MemberKP();

        if ($post->load(Yii::$app->request->post())) {

            $foto = UploadedFile::getInstance($post, 'foto');

            if ($post->validate()) {
                $post->save();
                if (!empty($post)) {
                    $foto->saveAs(Yii::getAlias('uploads/') . $post->nama_lengkap . '.' . $foto->extension);
                    $post->foto = 'foto.' . $foto->extension;
                    $post->save(FALSE);
                }
            }

            $post->foto = $post->nama_lengkap . '.' . $foto->extension;
            $post->save();
            return $this->redirect(['cardmemberdit']);
        } else {
            return $this->render('registrasimemberdit', ['post' => $post]);
        }
    }

    public function actionCardmemberdit()
    {
        $post = MemberKP::find()->all();
        return $this->render('cardmemberdit',['post' => $post]);
    }

    //Halaman Registrasi Member EPD
    public function actionRegistrasimemberepd()
    {
        $post = new MemberKP();

        if ($post->load(Yii::$app->request->post())) {

            $foto = UploadedFile::getInstance($post, 'foto');

            if ($post->validate()) {
                $post->save();
                if (!empty($post)) {
                    $foto->saveAs(Yii::getAlias('uploads/') . $post->nama_lengkap . '.' . $foto->extension);
                    $post->foto = 'foto.' . $foto->extension;
                    $post->save(FALSE);
                }
            }

            $post->foto = $post->nama_lengkap . '.' . $foto->extension;
            $post->save();
            return $this->redirect(['cardmemberdit']);
        } else {
            return $this->render('registrasimemberepd', ['post' => $post]);
        }
    }

    //Halaman Registrasi Member HCIS
    public function actionRegistrasimemberhcis()
    {
        $post = new MemberKP();

        if ($post->load(Yii::$app->request->post())) {

            $foto = UploadedFile::getInstance($post, 'foto');

            if ($post->validate()) {
                $post->save();
                if (!empty($post)) {
                    $foto->saveAs(Yii::getAlias('uploads/') . $post->nama_lengkap . '.' . $foto->extension);
                    $post->foto = 'foto.' . $foto->extension;
                    $post->save(FALSE);
                }
            }

            $post->foto = $post->nama_lengkap . '.' . $foto->extension;
            $post->save();
            return $this->redirect(['cardmemberepd']);
        } else {
            return $this->render('registrasimemberhcis', ['post' => $post]);
        }
    }
}
