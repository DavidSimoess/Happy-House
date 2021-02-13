<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Imovel */
/* @var $modelImagem common\models\Imagens */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => '/Imovels', 'url' => ['index']];
$this->params['breadcrumbs'][] = '/'.$this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="imovel-view">

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
            'estado',
            'area',
            'n_quartos',
            'n_wc',
            'preco',
            'descricao',
            'garagem',
            'piso',
            'morada',
            'codigo_postal',
            'cidade',
            'latitude',
            'longitude',
            //'imagem',
            'id_user',

        ],
    ])
    ?>
    <?php echo DetailView::widget([
        'model' => $modelImagem,
        'attributes' => [

            [
                    'attribute' => 'imagem',
                    'format' => 'raw',
                    'value' => function($modelImagem){
                                $img = '';
                                foreach ($modelImagem as $imagem){

                                    $img = $img.Html::img('imagens/'.$imagem->imagem,['alt' => 'image','width'=>'100','height'=>'100']);
                                }
                                return $img;
                    },
            ],
        ],
    ])
?>


</div>
