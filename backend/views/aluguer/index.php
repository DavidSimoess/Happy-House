<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aluguers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aluguer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Aluguer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'data_inicio',
            'data_fim',
            'preco',
            'id_imovel',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
