<?php

use yii\helpers\Html;
use yii\grid\GridView;
rmrevin\yii\fontawesome\NpmFreeAssetBundle::register($this);

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = '/'.$this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'telemovel',
            'nif',
            //'favoritos',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            //'email:email',
            //'status',
            //'role',
            //'created_at',
            //'updated_at',
            //'verification_token',

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
