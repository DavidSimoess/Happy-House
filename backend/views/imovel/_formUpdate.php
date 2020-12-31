<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Imovel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="imovel-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'estado')->dropDownList(['Novo', 'Usado', 'Renovado']) ?>

    <?= $form->field($model, 'area')->textInput() ?>

    <?= $form->field($model, 'n_quartos')->textInput() ?>

    <?= $form->field($model, 'n_wc')->textInput() ?>

    <?= $form->field($model, 'preco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'garagem')->textInput() ?>

    <?= $form->field($model, 'piso')->textInput() ?>

    <?= $form->field($model, 'morada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codigo_postal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($imagem, 'imagem[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
    <table>
    <?php
        foreach($modelImagem as $imagem){
            //echo $imagem->imagem;?>
           <tr>
                <td><?= Html::img('imagens/'.$imagem->imagem);?></td>
                <td><?= Html::a('Delete', ['imovel/imagem', 'idImovel'=>$model->id, 'idImagem'=>$imagem->id]) ?></td>
           </tr>
        <?php }
    ?>
    </table>
    <?= $form->field($model, 'id_user')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
