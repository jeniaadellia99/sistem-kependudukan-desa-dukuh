<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SuratTanah;

/**
 * SuratTanahSearch represents the model behind the search form of `app\models\SuratTanah`.
 */
class SuratTanahSearch extends SuratTanah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['no_persil', 'nama', 'letak_tanah', 'luas_tanah', 'min_harga_tanah', 'max_harga_tanah', 'luas_bangunan', 'harga_bangunan', 'tanah', 'bangunan', 'bts_sebelah_selatan', 'bts_sebelah_utara', 'bts_sebelah_barat', 'bts_sebelah_timur'], 'safe'],
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
    //   public function getQuerySearch($params)
    // {
         
    //     $query = SuratTanahSearch::find();

    //     $this->load($params);
      

    //     // add conditions that should always apply here

    //     // grid filtering conditions
    //     $query->andFilterWhere([
    //         'id' => $this->id,
    //         'no_persil' => $this->no_persil,
    //         'nama' => $this->nama,
    //         'letak_tanah' => $this->letak_tanah,
    //         'luas_tanah' => $this->luas_tanah,
    //         'min_harga_tanah' => $this->min_harga_tanah,
    //         'max_harga_tanah' => $this->max_harga_tanah,
    //         'luas_bangunan' => $this->luas_bangunan,
    //         'harga_bangunan' => $this->harga_bangunan,
    //         'tanah' => $this->tanah,
    //         'bangunan' => $this->bangunan,
    //         'bts_sebelah_selatan' => $this->bts_sebelah_selatan,
    //         'bts_sebelah_utara' => $this->bts_sebelah_utara,
    //         'bts_sebelah_timur' => $this->bts_sebelah_timur,
    //         'bts_sebelah_barat' => $this->bts_sebelah_barat,
      
    //     ]);

    //     return $query;
    // }
    public function search($params)
    {
        $query = SuratTanah::find();

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

        $query->andFilterWhere(['like', 'no_persil', $this->no_persil])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'letak_tanah', $this->letak_tanah])
            ->andFilterWhere(['like', 'luas_tanah', $this->luas_tanah])
            ->andFilterWhere(['like', 'min_harga_tanah', $this->min_harga_tanah])
            ->andFilterWhere(['like', 'max_harga_tanah', $this->max_harga_tanah])
            ->andFilterWhere(['like', 'luas_bangunan', $this->luas_bangunan])
            ->andFilterWhere(['like', 'harga_bangunan', $this->harga_bangunan])
            ->andFilterWhere(['like', 'tanah', $this->tanah])
            ->andFilterWhere(['like', 'bangunan', $this->bangunan])
            ->andFilterWhere(['like', 'bts_sebelah_selatan', $this->bts_sebelah_selatan])
            ->andFilterWhere(['like', 'bts_sebelah_timur', $this->bts_sebelah_timur])
            ->andFilterWhere(['like', 'bts_sebelah_barat', $this->bts_sebelah_barat])
            ->andFilterWhere(['like', 'bts_sebelah_utara', $this->bts_sebelah_utara]);

        return $dataProvider;
    }
}
