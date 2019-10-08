<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lancamento".
 *
 * @property int $id
 * @property int $tipo
 * @property int $idCredorDevedor
 * @property string $numDocumento
 * @property string $dtVencimento
 * @property string $dtEmissao
 * @property string $dtRealizacao
 * @property double $valorPrevisto
 * @property double $valorRealizado
 * @property int $idBanco
 * @property int $idTipoDocumento
 * @property int $idFormaPagamento
 * @property int $idTipoConta
 * @property int $idPlanoConta
 * @property string $descricao
 * @property int $idCliente
 */
class Lancamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lancamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo', 'idCredorDevedor', 'idBanco', 'idTipoDocumento', 'idFormaPagamento', 'idTipoConta', 'idPlanoConta', 'idCliente'], 'required'],
            [['tipo', 'idCredorDevedor', 'idBanco', 'idTipoDocumento', 'idFormaPagamento', 'idTipoConta', 'idPlanoConta', 'idCliente'], 'integer'],
            [['dtVencimento', 'dtEmissao', 'dtRealizacao'], 'safe'],
            [['valorPrevisto', 'valorRealizado'], 'number'],
            [['numDocumento'], 'string', 'max' => 40],
            [['descricao'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo' => 'Tipo',
            'idCredorDevedor' => 'Credor Devedor',
            'numDocumento' => 'Num Documento',
            'dtVencimento' => 'Data Vencimento',
            'dtEmissao' => 'Data Emissão',
            'dtRealizacao' => 'Data Realização',
            'valorPrevisto' => 'Valor Previsto',
            'valorRealizado' => 'Valor Realizado',
            'idBanco' => 'Banco',
            'idTipoDocumento' => 'Tipo Documento',
            'idFormaPagamento' => 'Forma Pagamento',
            'idTipoConta' => 'Tipo Conta',
            'idPlanoConta' => 'Plano Conta',
            'descricao' => 'Descrição',
            'idCliente' => 'Cliente',
        ];
    }
}
