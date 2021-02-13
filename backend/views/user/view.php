<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $modelImagem common\models\Imagens */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => '/Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = '/'.$this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'telemovel',
            'nif',
            'favoritos',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'email:email',
            'status',
            'role',
            'created_at',
            'updated_at',
            'verification_token',
        ],
    ]) ?>

    <?php echo DetailView::widget([
        'model' => $model,
        'attributes' => [

            [
                'attribute' => 'imagem',
                'format' => 'raw',
                'value' => function($model){
                    $img = '';

                    $img = $img.Html::img('imagens/'.$model->imagem,['alt' => 'image','width'=>'100','height'=>'100']);


                    return $img;
                },
            ],
        ],
    ])
    ?>
</div>
