<?php

namespace app\models;

use app\models\UserKP;


class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public $id;
    public $firstname;
    public $lastname;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        $TableUserKP = UserKP::find()->where(["id" => $id])->one();

            if($TableUserKP == NULL) {

                return null;
            }

            return new static($TableUserKP);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        $TableUserKP = UserKP::find()->where(["accessToken" => $accessToken])->one();

            if($TableUserKP == NULL) {

                return null;
            }

            return new static($TableUserKP);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        $TableUserKP = UserKP::find()->where(["username" => $username])->one();

            if($TableUserKP == NULL) {

                return null;
            }

            return new static($TableUserKP);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
