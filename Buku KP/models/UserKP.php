<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property int $firsname
 * @property int $lastname
 * @property int $username
 * @property int $password
 */
class UserKP extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'username', 'password', 'authKey', 'accessToken'], 'required'],
            [['username'], 'string', 'max' => 50],
            [['firstname', 'lastname'], 'string', 'max' => 25],
            [['password', 'authKey', 'accessToken'], 'string', 'max' => 100],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Nama Depan',
            'lastname' => 'Nama Belakang',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }
}
