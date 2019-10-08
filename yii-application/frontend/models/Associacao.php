<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "associacao".
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property int $idCidade
 * @property string $endereco
 * @property string $complemento
 * @property string $bairro
 * @property string $telefone
 * @property string $email
 * @property string $cnpj
 */
class Associacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'associacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['descricao'], 'string'],
            [['idCidade'], 'integer'],
            [['nome', 'bairro', 'email'], 'string', 'max' => 120],
            [['endereco'], 'string', 'max' => 255],
            [['complemento'], 'string', 'max' => 30],
            [['telefone'], 'string', 'max' => 20],
            [['cnpj'], 'string', 'max' => 14],
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
            'descricao' => 'Descrição',
            'idCidade' => 'Cidade',
            'endereco' => 'Endereço',
            'complemento' => 'Complemento',
            'bairro' => 'Bairro',
            'telefone' => 'Telefone',
            'email' => 'Email',
            'cnpj' => 'Cnpj',
        ];
    }
}
