<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Recurso */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="recurso-form">

        <?php $form = ActiveForm::begin(['id' => 'recurso-form']); ?>

        <?= $form->field($model, 'categoria')->dropDownList(['Reclamação' => 'Reclamação', 'Elogio' => 'Elogio', 'Outro' => 'Outro']) ?>

        <?= $form->field($model, 'email') ?>

        <?= $form->field($model, 'mensagem')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'visto')->checkbox() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
