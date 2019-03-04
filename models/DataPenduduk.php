<?php

namespace app\models;

use Yii;
use yii\helpers\StringHelper;

/**
 * This is the model class for table "data_penduduk".
 *
 * @property int $id
 * @property int $nik
 * @property string $nama
 * @property string $umur
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $agama
 * @property string $jk
 * @property string $gol_darah
 * @property string $kewarganegaraan
 * @property string $alamat
 * @property string $pekerjaan
 */
class DataPenduduk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function getList()
    {
        return \yii\helpers\ArrayHelper::map(self::find()->all(), 'id', 'nik');
    }
    public static function tableName()
    {
        return 'data_penduduk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nik', 'nama', 'umur', 'tempat_lahir', 'tgl_lahir', 'id_agama', 'id_jk', 'id_gol_darah',  'alamat', 'pekerjaan', 'nama_kpl', 'id_statuswrg'], 'required'],
            [['nik'], 'integer'],
            [['tgl_lahir'], 'safe'],
            [['nama', 'tempat_lahir', 'kewarganegaraan', 'alamat', 'pekerjaan', 'nama_kpl'], 'string', 'max' => 255],
            [['umur', 'id_agama', 'id_jk'], 'string', 'max' => 100],
            [['id_gol_darah'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nik' => 'NIK',
            'nama' => 'Nama',
            'umur' => 'Umur',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tanggal Lahir',
            'id_agama' => 'Agama',
            'id_jk' => 'Jenis Kelamin',
            'id_gol_darah' => 'Golongan Darah',
            'kewarganegaraan' => 'Kewarganegaraan',
            'alamat' => 'Alamat',
            'pekerjaan' => 'Pekerjaan',
            'nama_kpl'  => 'Nama Kepala Keluarga',
            'id_statuswrg' => 'Kewarganegaraan'

        ];
    }
    public function getAgama()
    {
        return $this->hasOne(Agama::className(), ['id' => 'id_agama']);
    }
    public function getJk()
    {
        return $this->hasOne(Jk::className(), ['id' => 'id_jk']);
    }
     public function getStatuswrg()
    {
        return $this->hasOne(Statuswrg::className(), ['id' => 'id_statuswrg']);
    }
    public static function getCount()
    {
        return static::find()->count();
    }
     public static function getGrafikList()
    {
        $data = [];
        foreach (static::find()->all() as $agama) {
            $data[] = [$agama->nama, (int) $agama->getManyAgama()->count()];
        }
        return $data;
    }
    public function getManyAgama()
    {
        return $this->hasMany(Agama::class, ['id_agama' => 'id']);
    }

}
