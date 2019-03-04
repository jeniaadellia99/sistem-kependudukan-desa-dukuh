<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SuratKetPaspor;

/**
 * SuratKetPasporSearch represents the model behind the search form of `app\models\SuratKetPaspor`.
 */
class SuratKetPasporSearch extends SuratKetPaspor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_jk', 'id_agama', 'pekerjaan', 'alamat'], 'integer'],
            [['nama', 'tempat_lahir', 'tgl_lahir', 'nama_ortu', 'nama_kakek'], 'safe'],
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
    // public function getQuerySearch($params)
    // {
    //     $query = SuratKetPasporSearch::find();

    //     $this->load($params);

    //      $query->andFilterWhere([
    //         'id' => $this->id,
    //         'nama' => $this->nama,
    //         'tempat_lahir' => $this->tempat_lahir,
    //         'tgl_lahir' => $this->tgl_lahir,
    //         'id_jk' => $this->id_jk,
    //         'id_agama' => $this->id_agama,
    //         'pekerjaan' => $this->pekerjaan,
    //         'alamat' => $this->alamat,
    //         'nama_ortu' => $this->nama_ortu,
    //         'nama_kakek' => $this->nama_kakek,      
    //     ]);

    //     return $query;

    // }
    public function search($params)
    {
        $query = SuratKetPaspor::find();

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
            'id_jk' => $this->id_jk,
            'id_agama' => $this->id_agama,
            'tgl_lahir' => $this->tgl_lahir,
            'pekerjaan' => $this->pekerjaan,
            'alamat' => $this->alamat,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'nama_ortu', $this->nama_ortu])
            ->andFilterWhere(['like', 'nama_kakek', $this->nama_kakek]);

        return $dataProvider;
    }
}
