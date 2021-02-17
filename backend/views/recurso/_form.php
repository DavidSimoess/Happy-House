<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Recurso */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="recurso-form">

        <?php $form = ActiveForm::begin(['id' => 'recurso-form']); ?>

        <?= $form->field($model, 'categoria')->dropDownList(['Reclmação' => 'Reclmação', 'elogio' => 'elogio', 'outro' => 'outro']) ?>

        <?= $form->field($model, 'email') ?>

        <?= $form->field($model, 'mensagem')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
