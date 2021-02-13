<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Aluguer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aluguer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'data_inicio')->textInput(['placeholder' => "Ex: YYYY/MM/DD HH:MM:SS"]) ?>

    <?= $form->field($model, 'data_fim')->textInput(['placeholder' => "Ex: YYYY/MM/DD HH:MM:SS"]) ?>

    <?= $form->field($model, 'preco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_imovel')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
