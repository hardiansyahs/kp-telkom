<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MemberKP;

/**
 * MemberSearch represents the model behind the search form of `app\models\MemberKP`.
 */
class MemberSearch extends MemberKP
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nama_lengkap', 'nim', 'perguruan_tinggi', 'jurusan_angkatan', 'bagian_divisi', 'tugas_pekerjaan', 'socmed', 'foto'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = MemberKP::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'perguruan_tinggi', $this->perguruan_tinggi])
            ->andFilterWhere(['like', 'jurusan_angkatan', $this->jurusan_angkatan])
            ->andFilterWhere(['like', 'bagian_divisi', $this->bagian_divisi])
            ->andFilterWhere(['like', 'tugas_pekerjaan', $this->tugas_pekerjaan])
            ->andFilterWhere(['like', 'socmed', $this->socmed])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
