<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SuratKetUsaha;

/**
 * SuratKetUsahaSearch represents the model behind the search form of `app\models\SuratKetUsaha`.
 */
class SuratKetUsahaSearch extends SuratKetUsaha
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_jk', 'id_status'], 'integer'],
            [['nama', 'nik', 'tempat_lahir', 'tgl_lahir', 'alamat', 'tujuan_usaha'], 'safe'],
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
    //  public function getQuerySearch($params)
    // {
    //     $query = SuratKetUsahaSearch::find();

    //     $this->load($params);

    //     // add conditions that should always apply here

    //     // grid filtering conditions
    //      $query->andFilterWhere([
    //         'id' => $this->id,
    //         'nama' => $this->nama,
    //         'tempat_lahir' => $this->tempat_lahir,
    //         'tgl_lahir' => $this->tgl_lahir,
    //         'nik' => $this->nik,
    //         'id_jk' => $this->id_jk,
    //         'id_status' => $this->id_status,
    //         'alamat' => $this->alamat,
    //         'tujuan_usaha' => $this->tujuan_usaha,
      
    //     ]);

    //     return $query;
    // }
    public function search($params)
    {
        $query = SuratKetUsaha::find();

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
            'tgl_lahir' => $this->tgl_lahir,
            'id_jk' => $this->id_jk,
            'id_status' => $this->id_status,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'tujuan_usaha', $this->tujuan_usaha]);

        return $dataProvider;
    }
}
