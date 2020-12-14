<?php

use yii\helpers\Html;
use yii\grid\GridView;
rmrevin\yii\fontawesome\NpmFreeAssetBundle::register($this);

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
            //'latitude',
            //'longitude',
            //'imagem',
            //'id_user',

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
                        return Html::a('', $url, ['class' => 'fa fa-fw fa-trash']);
                    },
                ],
            ],
        ],
    ]); ?>


</div>
