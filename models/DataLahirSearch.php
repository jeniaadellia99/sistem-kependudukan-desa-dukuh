<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DataLahir;

/**
 * DataLahirSearch represents the model behind the search form of `app\models\DataLahir`.
 */
class DataLahirSearch extends DataLahir
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nama', 'tempat', 'tgl_lahir', 'nama_ayah', 'nama_ibu', 'id_jk', 'alamat', 'nik', 'nik_ayah', 'nik_ibu', 'id_agama'], 'safe'],
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
    public function getQuerySearch($params)
    {
        $query = DataLahirSearch::find();

        $this->load($params);

        // add conditions that should always apply here

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'nik' => $this->nik,
            'nama' => $this->nama,
            'tempat' => $this->tempat,
            'tgl_lahir' => $this->tgl_lahir,
            'id_agama' => $this->id_agama,
            'id_jk' => $this->id_jk,
            'nik_ayah' => $this->nik_ayah,
            'nik_ibu' => $this->nik_ibu,
            'nama_ibu' => $this->nama_ibu,
            'nama_ayah' => $this->nama_ayah,
            'alamat' => $this->alamat,
            
      
        ]);

        return $query;
    }
    public function search($params)
    {
        $query = DataLahir::find();

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
        ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'tempat', $this->tempat])
            ->andFilterWhere(['like', 'id_jk', $this->id_jk])
             ->andFilterWhere(['like', 'id_agama', $this->id_agama])
            ->andFilterWhere(['like', 'nama_ayah', $this->nama_ayah])
            ->andFilterWhere(['like', 'nama_ibu', $this->nama_ibu])
            ->andFilterWhere(['like', 'id_jk', $this->id_jk])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'nik_ayah', $this->nik_ayah])
            ->andFilterWhere(['like', 'nik_ibu', $this->nik_ibu]);

        return $dataProvider;
    }
}
