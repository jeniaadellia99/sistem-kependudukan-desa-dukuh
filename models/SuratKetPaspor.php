<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "surat_ket_paspor".
 *
 * @property int $id
 * @property string $nama
 * @property int $id_jk
 * @property int $id_agama
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property int $pekerjaan
 * @property int $alamat
 * @property string $nama_ortu
 * @property string $nama_kakek
 */
class SuratKetPaspor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_ket_paspor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'id_jk', 'id_agama', 'tempat_lahir', 'tgl_lahir', 'pekerjaan', 'alamat', 'nama_ortu', 'nama_kakek'], 'required'],
            [['id_jk', 'id_agama'], 'integer'],
            [['tgl_lahir'], 'safe'],
            [['nama', 'tempat_lahir', 'nama_ortu', 'nama_kakek'], 'string', 'max' => 255],
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
            'id_jk' => 'Jenis Kelamin',
            'id_agama' => 'Agama',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tanggal Lahir',
            'pekerjaan' => 'Pekerjaan',
            'alamat' => 'Alamat',
            'nama_ortu' => 'Nama Ortu',
            'nama_kakek' => 'Nama Kakek',
        ];
    }
    public function getJk()
    {
        return $this->hasOne(Jk::class, ['id' => 'id_jk']);
    }
    public function getAgama()
    {
        return $this->hasOne(Agama::className(), ['id' => 'id_agama']);
    }
}
