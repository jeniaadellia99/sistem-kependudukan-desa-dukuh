<?php

namespace app\models;

use Yii;
use yii\helpers\StringHelper;

/**
 * This is the model class for table "jk".
 *
 * @property int $id
 * @property string $nama
 */
class Jk extends \yii\db\ActiveRecord
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
        return 'jk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
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
        return $this->hasMany(DataPenduduk::class, ['id_jk' => 'id']);
    }

    public static function getGrafikList()
    {
        $data = [];
        foreach (static::find()->all() as $datapenduduk) {
            $data[] = [StringHelper::truncate($datapenduduk->nama, 20), (int) $datapenduduk->getManyPenduduk()->count()];
        }
        return $data;
    }

     public function getManyLahir()
    {
        return $this->hasMany(DataLahir::class, ['id_jk' => 'id']);
    }

    public static function getGrafikListDua()
    {
        $data = [];
        foreach (static::find()->all() as $datalahir) {
            $data[] = [StringHelper::truncate($datalahir->nama, 20), (int) $datalahir->getManyLahir()->count()];
        }
        return $data;
    }

    public function getManyMati()
    {
        return $this->hasMany(DataKematian::class, ['id_jk' => 'id']);
    }

    public static function getGrafikListTiga()
    {
        $data = [];
        foreach (static::find()->all() as $datamati) {
            $data[] = [StringHelper::truncate($datamati->nama, 20), (int) $datamati->getManyMati()->count()];
        }
        return $data;
    }
     
}
