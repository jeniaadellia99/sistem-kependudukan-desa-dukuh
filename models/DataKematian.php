<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_kematian".
 *
 * @property int $id
 * @property string $nama
 * @property string $umur
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $tgl_meninggal
 * @property string $alamat
 */
class DataKematian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_kematian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'umur', 'tempat_lahir', 'tgl_lahir', 'tgl_meninggal', 'alamat', 'id_jk','nik'], 'required'],
            [['tgl_lahir', 'tgl_meninggal'], 'safe'],
            [['nama', 'umur', 'tempat_lahir', 'alamat'], 'string', 'max' => 255],
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
            'umur' => 'Umur',
            'nik' => 'NIK',
            'id_jk' => 'Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tanggal Lahir',
            'tgl_meninggal' => 'Tanggal Meninggal',
            'alamat' => 'Alamat',
        ];
    }
    public static function getCount()
    {
        return static::find()->count();
    }
      public function getJk()
    {
        return $this->hasOne(Jk::className(), ['id' => 'id_jk']);
    }
}
