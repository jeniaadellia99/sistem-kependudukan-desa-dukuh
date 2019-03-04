<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "surat_ket_usaha".
 *
 * @property int $id
 * @property string $nama
 * @property string $nik
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property int $id_jk
 * @property int $id_status
 * @property string $alamat
 * @property string $tujuan_usaha
 */
class SuratKetUsaha extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_ket_usaha';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nik', 'tempat_lahir', 'tgl_lahir', 'id_jk', 'id_status', 'alamat', 'tujuan_usaha'], 'required'],
            [['tgl_lahir'], 'safe'],
            [['id_jk', 'id_status'], 'integer'],
            [['nama', 'tempat_lahir', 'alamat', 'tujuan_usaha'], 'string', 'max' => 255],
            [['nik'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Nomor Surat',
            'nama' => 'Nama',
            'nik' => 'NIK',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tanggal Lahir',
            'id_jk' => 'Jenis Kelamin',
            'id_status' => 'Status Perkawinan',
            'alamat' => 'Alamat',
            'tujuan_usaha' => 'Memiliki Usaha',
        ];
    }
    public function getJk()
    {
        return $this->hasOne(Jk::class, ['id' => 'id_jk']);
    }
    public function getStatus()
    {
        return $this->hasOne(Jk::class, ['id' => 'id_status']);
    }
}
