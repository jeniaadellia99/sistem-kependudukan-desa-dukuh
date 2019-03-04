<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DataPenduduk;

/**
 * DataPedudukSearch represents the model behind the search form of `app\models\DataPenduduk`.
 */
class DataPedudukSearch extends DataPenduduk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nik'], 'integer'],
            [['nama', 'umur', 'tempat_lahir', 'tgl_lahir', 'id_agama', 'id_jk', 'id_gol_darah', 'kewarganegaraan', 'alamat', 'pekerjaan', 'nama_kpl', 'id_statuswrg'], 'safe'],
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
        $query = DataPedudukSearch::find();

        $this->load($params);

        // add conditions that should always apply here

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'nik' => $this->nik,
            'nama' => $this->nama,
            'umur' => $this->umur,
            'tempat_lahir' => $this->tempat_lahir,
            'tgl_lahir' => $this->tgl_lahir,
            'id_agama' => $this->id_agama,
            'id_jk' => $this->id_jk,
            'id_gol_darah' => $this->id_gol_darah,
            'kewarganegaraan' => $this->kewarganegaraan,
            'alamat' => $this->alamat,
            'pekerjaan' => $this->pekerjaan,
            'nama_kpl' => $this->nama_kpl,
            'id_statuswrg' => $this->id_statuswrg,
            
      
        ]);

        return $query;
    }
    public function search($params)
    {
        $query = DataPenduduk::find();

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
            'id_statuswrg' => $this->id_statuswrg,
            'nik' => $this->nik,
            'tgl_lahir' => $this->tgl_lahir,

        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'umur', $this->umur])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'id_agama', $this->id_agama])
            ->andFilterWhere(['like', 'id_jk', $this->id_jk])
            ->andFilterWhere(['like', 'id_gol_darah', $this->id_gol_darah])
            ->andFilterWhere(['like', 'kewarganegaraan', $this->kewarganegaraan])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['like', 'id_statuswrg', $this->id_statuswrg])
            ->andFilterWhere(['like', 'nama_kpl', $this->nama_kpl]);

        return $dataProvider;
    }
}
