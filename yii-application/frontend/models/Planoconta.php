<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "planoconta".
 *
 * @property int $id
 * @property string $nome
 * @property int $idPai
 * @property int $idCliente
 */
class Planoconta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'planoconta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'idPai', 'idCliente'], 'required'],
            [['idPai', 'idCliente'], 'integer'],
            [['nome'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'idPai' => 'Id Pai',
            'idCliente' => 'Cliente',
        ];
    }
}
