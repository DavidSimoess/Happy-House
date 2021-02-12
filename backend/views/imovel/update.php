<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Imovel */

$this->title = 'Update Imovel: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '/Imovels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => '/'.$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '/Update';
?>
<div class="imovel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formUpdate', [
        'model' => $model,
        'modelImagem' => $modelImagem,
        'imagem' => $imagem,
    ]) ?>

</div>
