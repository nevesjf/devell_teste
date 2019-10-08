<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banco".
 *
 * @property int $id
 * @property string $nome
 * @property string $agencia
 * @property string $conta
 * @property int $idCliente
 */
class Banco extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banco';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'idCliente'], 'required'],
            [['idCliente'], 'integer'],
            [['nome'], 'string', 'max' => 50],
            [['agencia', 'conta'], 'string', 'max' => 20],
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
            'agencia' => 'Agência',
            'conta' => 'Conta',
            'idCliente' => 'Cliente',
        ];
    }
}
