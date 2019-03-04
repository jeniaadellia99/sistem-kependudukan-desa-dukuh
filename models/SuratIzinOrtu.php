<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "surat_izin_ortu".
 *
 * @property int $id
 * @property string $nama
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property int $id_jk
 * @property string $pekerjaan
 * @property string $alamat
 * @property string $nama_anak
 * @property string $tempat_lahir_anak
 * @property string $tgl_lahir_anak
 * @property int $id_jk_anak
 * @property string $bekerja_di
 * @property string $sebagai
 */
class SuratIzinOrtu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_izin_ortu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'tempat_lahir', 'tgl_lahir', 'id_jk', 'pekerjaan', 'alamat', 'nama_anak', 'tempat_lahir_anak', 'tgl_lahir_anak', 'id_jk_anak', 'bekerja_di', 'sebagai'], 'required'],
            [['tgl_lahir', 'tgl_lahir_anak'], 'safe'],
            [['id_jk', 'id_jk_anak'], 'integer'],
            [['nama', 'tempat_lahir', 'pekerjaan', 'alamat', 'nama_anak', 'tempat_lahir_anak', 'bekerja_di', 'sebagai'], 'string', 'max' => 255],
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
            'id_jk' => 'Jenis Kelamin',
            'pekerjaan' => 'Pekerjaan',
            'alamat' => 'Alamat',
            'nama_anak' => 'Nama Anak',
            'tempat_lahir_anak' => 'Tempat Lahir Anak',
            'tgl_lahir_anak' => 'Tanggal Lahir Anak',
            'id_jk_anak' => 'Jenis Kelamin Anak',
            'bekerja_di' => 'Tempat Bekerja',
            'sebagai' => 'Bagian',
        ];
    }
    public function getJk()
    {
        return $this->hasOne(Jk::class, ['id' => 'id_jk']);
    }
      public function getJkAnak()
    {
        return $this->hasOne(Jk::class, ['id' => 'id_jk_anak']);
    }
}
