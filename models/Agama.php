<?php

namespace app\models;

use Yii;
use yii\helpers\StringHelper;

/**
 * This is the model class for table "agama".
 *
 * @property int $id
 * @property string $nama
 */
class Agama extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function getList()
    {
        return \yii\helpers\ArrayHelper::map(self::find()->all(), 'id', 'nama');
    }
    public static function tableName()
    {
        return 'agama';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nama'], 'required'],
            [['id'], 'integer'],
            [['nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
        ];
    }
    public function getManyPenduduk()
    {
        return $this->hasMany(DataPenduduk::class, ['id_agama' => 'id']);
    }

    public static function getGrafikList()
    {
        $data = [];
        foreach (static::find()->all() as $datapenduduk) {
            $data[] = [StringHelper::truncate($datapenduduk->nama, 20), (int) $datapenduduk->getManyPenduduk()->count()];
        }
        return $data;
    }
}
