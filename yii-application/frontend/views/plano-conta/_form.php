<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Cliente;
/* @var $this yii\web\View */
/* @var $model app\models\PlanoConta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plano-conta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idPai')->textInput() ?>

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
