<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Imovels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="imovel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Imovel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'estado',
            'area',
            'n_quartos',
            'n_wc',
            //'preco',
            //'descricao',
            //'garagem',
            //'piso',
            //'morada',
            //'codigo_postal',
            //'cidade',
            //'id_utilizador',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
