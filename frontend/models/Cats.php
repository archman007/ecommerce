<?php

namespace app\models;
namespace frontend\controllers;

use Yii;

/**
 * This is the model class for table "lk1".
 *
 * @property int $idlk1
 * @property string $cat
 * @property string $ddes
 */
class Cats extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lk1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat', 'ddes'], 'required'],
            [['ddes'], 'string'],
            [['cat'], 'string', 'max' => 75],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idlk1' => 'Idlk1',
            'cat' => 'Cat',
            'ddes' => 'Ddes',
        ];
    }
}
