<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SuratWali;

/**
 * SuratWaliSearch represents the model behind the search form of `app\models\SuratWali`.
 */
class SuratWaliSearch extends SuratWali
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nama', 'tempat_lahir', 'tgl_lahir', 'nik', 'alamat', 'tujuan'], 'safe'],
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
    //     $query = SuratWaliSearch::find();

    //     $this->load($params);

    //     // add conditions that should always apply here

    //     // grid filtering conditions
    //     $query->andFilterWhere([
    //         'id' => $this->id,
    //         'nama' => $this->nama,
    //         'tempat_lahir' => $this->tempat_lahir,
    //         'tgl_lahir' => $this->tgl_lahir,
    //         'nik' => $this->nik,
    //         'alamat' => $this->alamat,
    //         'tujuan' => $this->tujuan,
      
    //     ]);

    //     return $query;
    // }
    public function search($params)
    {
        $query = SuratWali::find();

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
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'tujuan', $this->tujuan]);

        return $dataProvider;
    }
}
