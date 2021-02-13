<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Aluguer */

$this->title = 'Create Aluguer';
$this->params['breadcrumbs'][] = ['label' => '/Aluguers', 'url' => ['index']];
$this->params['breadcrumbs'][] = '/'.$this->title;
?>
<div class="aluguer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
