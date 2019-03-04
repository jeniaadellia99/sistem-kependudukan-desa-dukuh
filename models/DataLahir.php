<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_lahir".
 *
 * @property int $id
 * @property string $nama
 * @property string $tempat
 * @property string $tgl_lahir
 * @property string $nama_ayah
 * @property string $nama_ibu
 * @property string $jk
 * @property string $alamat
 */
class DataLahir extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_lahir';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'tempat', 'tgl_lahir', 'nama_ayah', 'nama_ibu', 'id_jk', 'alamat', 'nik', 'nik_ayah', 'nik_ibu'], 'required'],
            [['tgl_lahir'], 'safe'],
            [['nama', 'tempat', 'nama_ayah', 'nama_ibu', 'alamat'], 'string', 'max' => 255],
            [['id_jk'], 'string', 'max' => 11],
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
            'tempat' => 'Tempat Lahir',
            'tgl_lahir' => 'Tanggal Lahir',
            'nama_ayah' => 'Nama Ayah',
            'nama_ibu' => 'Nama Ibu',
            'id_jk' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'nik' => 'NIK',
            'nik_ayah' => 'NIK Ayah',
            'nik_ibu' => 'NIK Ibu',
            'id_agama' => 'Agama',
        ];
    }
    public function getJk()
    {
        return $this->hasOne(Jk::className(), ['id' => 'id_jk']);
    }
    public function getAgama()
    {
        return $this->hasOne(Agama::className(), ['id' => 'id_agama']);
    }
    public function getPenduduk()
    {
        return $this->hasOne(DataPenduduk::className(), ['nik' => 'nik_ayah']);
    }
    public function getPendudukDua()
    {
        return $this->hasOne(Penduduk::className(), ['id' => 'nik_ibu']);
    }
    public static function getCount()
    {
        return static::find()->count();
    }

}
