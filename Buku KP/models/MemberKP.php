<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "member".
 *
 * @property int $id
 * @property string $nama_lengkap
 * @property string $nim
 * @property string $perguruan_tinggi
 * @property string $jurusan_angkatan
 * @property string $bagian_divisi
 * @property string $tugas_pekerjaan
 * @property string $socmed
 * @property string $foto
 */
class MemberKP extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'member';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_lengkap', 'nim', 'perguruan_tinggi', 'jurusan_angkatan', 'bagian_divisi', 'tugas_pekerjaan', 'socmed'], 'required'],
            [['nama_lengkap', 'nim', 'perguruan_tinggi', 'jurusan_angkatan', 'bagian_divisi', 'tugas_pekerjaan', 'socmed', 'foto'], 'string', 'max' => 255],
            [['foto'],'file','skipOnEmpty'=>TRUE,'extensions'=>'jpg, png']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_lengkap' => 'Nama Lengkap',
            'nim' => 'Nim',
            'perguruan_tinggi' => 'Perguruan Tinggi',
            'jurusan_angkatan' => 'Jurusan Angkatan',
            'bagian_divisi' => 'Bagian Divisi',
            'tugas_pekerjaan' => 'Tugas Pekerjaan',
            'socmed' => 'Socmed',
            'foto' => 'Foto',
        ];
    }
}
