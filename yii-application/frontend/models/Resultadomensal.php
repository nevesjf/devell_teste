<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "resultadomensal".
 *
 * @property int $id
 * @property int $ano
 * @property int $mes
 * @property double $valor
 * @property int $idCategoriaResultado
 * @property int $idCliente
 */
class Resultadomensal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resultadomensal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ano', 'mes', 'valor', 'idCategoriaResultado', 'idCliente'], 'required'],
            [['ano', 'mes', 'idCategoriaResultado', 'idCliente'], 'integer'],
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
            'mes' => 'Mês',
            'valor' => 'Valor',
            'idCategoriaResultado' => 'Categoria Resultado',
            'idCliente' => 'Cliente',
        ];
    }
}
