<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Credordevedor;
use app\models\Banco;
use app\models\Tipodocumento;
use app\models\Formapagamento;
use app\models\Tipoconta;
use app\models\Planoconta;
use app\models\Cliente;
/* @var $this yii\web\View */
/* @var $model app\models\Lancamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lancamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipo')->textInput() ?>

    <?= $form->field($model, 'idCredorDevedor')->dropDownList(
                      ArrayHelper::map(Credordevedor::find()->all(),'id','nome'),
                      ['prompt'=>'Selecione um Credor-Devedor']
                  )
                ?>

    <?= $form->field($model, 'numDocumento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dtVencimento')->textInput() ?>

    <?= $form->field($model, 'dtEmissao')->textInput() ?>

    <?= $form->field($model, 'dtRealizacao')->textInput() ?>

    <?= $form->field($model, 'valorPrevisto')->textInput() ?>

    <?= $form->field($model, 'valorRealizado')->textInput() ?>

    <?= $form->field($model, 'idBanco')->dropDownList(
                      ArrayHelper::map(Banco::find()->all(),'id','nome'),
                      ['prompt'=>'Selecione um Banco']
                  )
                ?>

    <?= $form->field($model, 'idTipoDocumento')->dropDownList(
                      ArrayHelper::map(Tipodocumento::find()->all(),'id','nome'),
                      ['prompt'=>'Selecione um tipo de documento']
                  )
                ?>

    <?= $form->field($model, 'idFormaPagamento')->dropDownList(
                      ArrayHelper::map(Formapagamento::find()->all(),'id','nome'),
                      ['prompt'=>'Selecione uma forma de pagamento']
                  )
                ?>

    <?= $form->field($model, 'idTipoConta')->dropDownList(
                      ArrayHelper::map(Tipoconta::find()->all(),'id','nome'),
                      ['prompt'=>'Selecione um tipo de conta']
                  )
                ?>

    <?= $form->field($model, 'idPlanoConta')->dropDownList(
                      ArrayHelper::map(Planoconta::find()->all(),'id','nome'),
                      ['prompt'=>'Selecione um plano']
                  )
                ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idCliente')->dropDownList(
                      ArrayHelper::map(Cliente::find()->all(),'id','nome'),
                      ['prompt'=>'Selecione um Cliente']
                  )
                ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
