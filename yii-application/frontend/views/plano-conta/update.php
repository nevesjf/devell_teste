<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PlanoConta */

$this->title = 'Editar Plano de Conta: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Plano de Contas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="plano-conta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
