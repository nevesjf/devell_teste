<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $id
 * @property string $nome
 * @property string $cnpj
 * @property int $idCidade
 * @property string $endereco
 * @property string $complemento
 * @property string $bairro
 * @property string $telefone
 * @property string $email
 * @property int $idAssociacao
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['idCidade', 'idAssociacao'], 'integer'],
            [['nome', 'bairro', 'email'], 'string', 'max' => 120],
            [['cnpj'], 'string', 'max' => 14],
            [['endereco'], 'string', 'max' => 255],
            [['complemento'], 'string', 'max' => 30],
            [['telefone'], 'string', 'max' => 20],
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
            'cnpj' => 'CNPJ',
            'idCidade' => 'Cidade',
            'endereco' => 'Endereço',
            'complemento' => 'Complemento',
            'bairro' => 'Bairro',
            'telefone' => 'Telefone',
            'email' => 'Email',
            'idAssociacao' => 'Associação',
        ];
    }
}
