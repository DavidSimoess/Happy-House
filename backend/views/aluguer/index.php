<?php

use yii\helpers\Html;
use yii\grid\GridView;
rmrevin\yii\fontawesome\NpmFreeAssetBundle::register($this);

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aluguers';
$this->params['breadcrumbs'][] = '/'.$this->title;
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

            //['class' => 'yii\grid\ActionColumn'],

            ['class' => 'yii\grid\ActionColumn',
                'contentOptions' => ['style' => 'width: 7%'],
                'visible'=> Yii::$app->user->isGuest ? false : true,
                'buttons'=>[
                    'view'=>function ($url) {
                        return Html::a('', $url, ['class' => 'fa fa-fw fa-eye']);
                    },
                    'update'=>function ($url) {
                        return Html::a('', $url, ['class' => 'fa fa-fw fa-edit']);
                    },
                    'delete'=>function ($url) {
                        return Html::a('', $url, ['class' => 'fa fa-fw fa-trash',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>


</div>
