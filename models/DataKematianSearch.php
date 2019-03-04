<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DataKematian;

/**
 * DataKematianSearch represents the model behind the search form of `app\models\DataKematian`.
 */
class DataKematianSearch extends DataKematian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id','id_jk'], 'integer'],
            [['nama', 'umur', 'tempat_lahir', 'tgl_lahir', 'tgl_meninggal', 'alamat', 'nik'], 'safe'],
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
        $query = DataKematian::find();

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
            'tgl_lahir' => $this->tgl_lahir,
            'tgl_meninggal' => $this->tgl_meninggal,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'umur', $this->umur])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'alamat', $this->alamat]);

        return $dataProvider;
    }
}
