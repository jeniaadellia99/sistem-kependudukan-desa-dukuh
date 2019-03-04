<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "surat_wali".
 *
 * @property int $id
 * @property string $nama
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $nik
 * @property string $alamat
 * @property string $tujuan
 */
class SuratWali extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_wali';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'tempat_lahir', 'tgl_lahir', 'nik', 'alamat', 'tujuan'], 'required'],
            [['tgl_lahir'], 'safe'],
            [['nama', 'tempat_lahir', 'nik', 'alamat', 'tujuan'], 'string', 'max' => 255],
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
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tanggal Lahir',
            'nik' => 'NIK',
            'alamat' => 'Alamat',
            'tujuan' => 'Tujuan',
        ];
    }
}
