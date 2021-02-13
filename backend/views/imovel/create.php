<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Imovel */

$this->title = 'Create Imovel';
$this->params['breadcrumbs'][] = ['label' => '/Imovels', 'url' => ['index']];
$this->params['breadcrumbs'][] = '/'.$this->title;
?>
<div class="imovel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelImagem' => $modelImagem,
    ]) ?>

</div>
