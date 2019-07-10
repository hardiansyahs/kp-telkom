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
        $post = MemberKP::find()->where(['bagian_divisi' => 'Divisi Information Technology'])->all();;
        return $this->render('cardmemberdit', ['post' => $post]);
    }

    public function actionViewdit($id)
    {
        $post = MemberKP::findOne($id);
        return $this->render('detailmemberdit', ['post' => $post]);
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
            return $this->redirect(['cardmemberepd']);
        } else {
            return $this->render('registrasimemberepd', ['post' => $post]);
        }
    }

    public function actionCardmemberepd()
    {
        $post = MemberKP::find()->where(['bagian_divisi' => 'EPD'])->all();
        return $this->render('cardmemberepd', ['post' => $post]);
    }

    public function actionViewepd($id)
    {
        $post = MemberKP::findOne($id);
        return $this->render('detailmemberepd', ['post' => $post]);
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
            return $this->redirect(['cardmemberhcis']);
        } else {
            return $this->render('registrasimemberhcis', ['post' => $post]);
        }
    }

    public function actionCardmemberhcis()
    {
        $post = MemberKP::find()->where(['bagian_divisi' => 'Human Capital Information System'])->all();;
        return $this->render('cardmemberhcis', ['post' => $post]);
    }

    public function actionViewhcis($id)
    {
        $post = MemberKP::findOne($id);
        return $this->render('detailmemberhcis', ['post' => $post]);
    }
}
