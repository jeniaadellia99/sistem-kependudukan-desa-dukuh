<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "surat_tanah".
 *
 * @property int $id
 * @property string $no_persil
 * @property string $nama
 * @property string $letak_tanah
 * @property string $luas_tanah
 * @property string $min_harga_tanah
 * @property string $max_harga_tanah
 * @property string $luas_bangunan
 * @property string $harga_bangunan
 * @property string $tanah
 * @property string $bangunan
 */
class SuratTanah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_tanah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_persil', 'nama', 'letak_tanah', 'luas_tanah', 'min_harga_tanah', 'max_harga_tanah', 'luas_bangunan', 'harga_bangunan', 'tanah', 'bangunan'], 'required'],
            [['no_persil'], 'string', 'max' => 22],
            [['nama', 'luas_tanah', 'min_harga_tanah', 'luas_bangunan'], 'string', 'max' => 100],
            [['letak_tanah', 'max_harga_tanah', 'harga_bangunan', 'tanah', 'bangunan', 'bts_sebelah_selatan','bts_sebelah_utara', 'bts_sebelah_timur', 'bts_sebelah_barat'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'no_persil' => 'Nomor Persil',
            'nama' => 'Atas Nama',
            'letak_tanah' => 'Tanah Terletak',
            'luas_tanah' => 'Luas Tanah',
            'min_harga_tanah' => 'Minimal Harga Tanah',
            'max_harga_tanah' => 'Maksimal Harga Tanah',
            'luas_bangunan' => 'Luas Bangunan',
            'harga_bangunan' => 'Harga Bangunan',
            'tanah' => 'Harga Meter/Tanah',
            'bangunan' => 'Harga Meter/Bangunan',
            'bts_sebelah_selatan' => 'Batas Sebelah Selatan',
            'bts_sebelah_utara' => 'Batas Sebelah Utara',
            'bts_sebelah_timur' => 'Batas Sebelah Timur',
            'bts_sebelah_barat' => 'Batas Sebelah Barat',
            'no_surat' => 'Nomor Surat',
        ];
    }
}
