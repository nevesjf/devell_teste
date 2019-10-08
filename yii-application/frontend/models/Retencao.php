<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "retencao".
 *
 * @property int $id
 * @property int $ano
 * @property int $mes
 * @property double $valor
 * @property int $idCliente
 */
class Retencao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'retencao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ano', 'mes', 'valor', 'idCliente'], 'required'],
            [['ano', 'mes', 'idCliente'], 'integer'],
            [['valor'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ano' => 'Ano',
            'mes' => 'Mes',
            'valor' => 'Valor',
            'idCliente' => 'Id Cliente',
        ];
    }
}
