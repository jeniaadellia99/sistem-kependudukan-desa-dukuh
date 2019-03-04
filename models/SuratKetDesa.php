<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "surat_ket_desa".
 *
 * @property int $id
 * @property string $nama
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $nik
 * @property string $pekerjaan
 * @property string $alamat
 */
class SuratKetDesa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_ket_desa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'tempat_lahir', 'tgl_lahir', 'nik', 'pekerjaan', 'alamat', 'tujuan'], 'required'],
            [['tgl_lahir'], 'safe'],
            [['nama', 'tempat_lahir', 'pekerjaan', 'alamat', 'tujuan'], 'string', 'max' => 255],
            [['nik'], 'string', 'max' => 100],
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
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tanggal Lahir',
            'nik' => 'NIK',
            'pekerjaan' => 'Pekerjaan',
            'alamat' => 'Alamat',
            'tujuan' => 'Dibuat Untuk',
        ];
    }
}
