<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gol_darah".
 *
 * @property int $id
 * @property string $nama
 */
class GolDarah extends \yii\db\ActiveRecord
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
        return 'gol_darah';
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
            'nama' => 'Nama Golongan Darah',
        ];
    }
}
