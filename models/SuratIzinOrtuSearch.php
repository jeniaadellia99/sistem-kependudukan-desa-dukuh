<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SuratIzinOrtu;

/**
 * SuratIzinOrtuSearch represents the model behind the search form of `app\models\SuratIzinOrtu`.
 */
class SuratIzinOrtuSearch extends SuratIzinOrtu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_jk', 'id_jk_anak'], 'integer'],
            [['nama', 'tempat_lahir', 'tgl_lahir', 'pekerjaan', 'alamat', 'nama_anak', 'tempat_lahir_anak', 'tgl_lahir_anak', 'bekerja_di', 'sebagai'], 'safe'],
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
    //     $query = SuratIzinOrtuSearch::find();

    //     $this->load($params);

    //     // add conditions that should always apply here

    //     // grid filtering conditions
    //     $query->andFilterWhere([
    //         'id' => $this->id,
    //         'nama' => $this->nama,
    //         'tempat_lahir' => $this->tempat_lahir,
    //         'tgl_lahir' => $this->tgl_lahir,
    //         'id_jk' => $this->id_jk,
    //         'pekerjaan' => $this->pekerjaan,
    //         'alamat' => $this->alamat,
    //         'nama_anak' => $this->nama_anak,
    //         'tempat_lahir_anak' => $this->tempat_lahir_anak,
    //         'tgl_lahir_anak' => $this->tgl_lahir_anak,
    //         'id_jk_anak' => $this->id_jk_anak,
    //         'bekerja_di' => $this->bekerja_di,
    //         'sebagai' => $this->sebagai,
      
    //     ]);

    //     return $query;
    // }
   
    public function search($params)
    {
        $query = SuratIzinOrtu::find();

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
            'tgl_lahir_anak' => $this->tgl_lahir_anak,
            'id_jk_anak' => $this->id_jk_anak,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'nama_anak', $this->nama_anak])
            ->andFilterWhere(['like', 'tempat_lahir_anak', $this->tempat_lahir_anak])
            ->andFilterWhere(['like', 'bekerja_di', $this->bekerja_di])
            ->andFilterWhere(['like', 'sebagai', $this->sebagai]);

        return $dataProvider;
    }
}
