<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property string $idFirebase
 * @property string $authKey
 * @property string $passwordHash
 * @property string $passwordResetToken
 * @property int $createdAt
 * @property int $updatedAt
 * @property int $status
 * @property int $idCliente
 * @property string $username
 * @property string $imagem
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'email', 'authKey', 'passwordHash', 'passwordResetToken', 'createdAt', 'updatedAt', 'username'], 'required'],
            [['createdAt', 'updatedAt', 'status', 'idCliente'], 'integer'],
            [['nome', 'email', 'imagem'], 'string', 'max' => 120],
            [['idFirebase', 'passwordHash', 'passwordResetToken'], 'string', 'max' => 255],
            [['authKey'], 'string', 'max' => 32],
            [['username'], 'string', 'max' => 60],
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
            'email' => 'Email',
            //'idFirebase' => 'Firebase',
            'authKey' => 'Auth Key',
            'passwordHash' => 'Senha',
            'passwordResetToken' => 'Password Reset Token',
            'createdAt' => 'Criado em',
            'updatedAt' => 'Editado em',
            'status' => 'Status',
            'idCliente' => 'Cliente',
            'username' => 'Username',
            'imagem' => 'Imagem',
        ];
    }
}
