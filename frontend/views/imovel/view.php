<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Imovel */
/* @var $dataProvider yii\data\ActiveDataProvider */


//$this->title = $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Imovels', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">

</head>
<div class="imovel-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <!--/*   <?/*= DetailView::widget([

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
            'id_utilizador',
        ],
    ]) */?>*/-->

</div>
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about pt-5">
        <div class="container pt-lg-5 py-3">
        </div>
    </div>
</section>
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>
            <li><span class="fa fa-angle-right mx-2" aria-hidden="true"></span><a href="http://localhost/Happy-House/frontend/web/index.php?r=imovel%2Findex2">Comprar</a></li>
            <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span>Detalhes</li>
        </ul>
    </div>
</section>

<body>

<header class="listing-header">
    <div class="listing-header-info">
        <h2 class="listing-title-h2">Casa - Lisboa</h2>
        <?php if(!Yii::$app->user->isGuest){ ?>
        <div class="action-buttons-agente">
            <button class="contact-agent-btn-agente">Contactar agente </button>
        </div>
        <?php }?>
    </div>

</header>
<div class="row listing-details-container">
    <div class="col-md-6 no-padding">
        <div class="flex-item">
            <figure class="listing-picture">
                <picture>
                    <!--<table>
                        <tr>

                            <?php /*foreach($modelImagem as $imagem){ var_dump($imagem);*/?>
                                <td><?/*= Html::img('backend/web/imagens/'.$imagem->imagem);*/?></td>
                            <?php /*}*/?>
                        </tr>
                    </table>-->
                </picture>
            </figure>
        </div>
    </div>
    <div class="col-md-6 listing-info">
        <?php /*foreach ($dataProvider->models as $model) { */?>
        <div class="row">
            <div class="col-md-12">
                <div class="listing-top-info">

                    <h2 class="listing-preco"> <?= $model->preco ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"></div>
            <div id="tabs-navigation" class="scrollabe-details">
                <div id="descricao" class="listing-descricao nav-section">
                    <p> <?= $model->descricao?></p>
                </div>
                <div id="detalhes" class="nav-section">
                    <table>
                        <tbody>
                        <tr>
                            <td class="first-column">
                                <span class="fa fa-home">area do imovel</span>
                            </td>
                            <td> <?= $model->area ?></td>
                            <td class="first-column">
                                <span class="fa fa-bed">Nº de quartos</span>
                            </td>
                            <td> <?= $model->n_quartos ?></td>
                        </tr>
                        <tr>
                            <td class="first-column">
                                <span class="fa fa-bath">Nº de casa de banho</span>
                            </td>
                            <td> <?= $model->n_wc ?></td>
                            <td class="first-column">
                                <span class="fa fa-car">Garagem</span>
                            </td>
                            <td> <?= $model->garagem ?></td>
                        </tr>
                        <tr>
                            <td class="first-column">
                                <span class="fa fa-info">Estado</span>
                            </td>
                            <td> <?= $model->estado ?></td>
                            <td class="first-column">
                                <span class="fa fa-road">Morada</span>
                            </td>
                            <td> <?= $model->morada ?></td>
                        </tr><tr>
                            <td class="first-column">
                                <span class="fa fa-building">Cidade</span>
                            </td>
                            <td> <?= $model->cidade ?></td>
                            <td class="first-column">
                                <span class="fa fa-book">Codigo-postal</span>
                            </td>
                            <td> <?= $model->codigo_postal ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php /*} */?>
    </div>
</div>
<br><br><br><br><br>
</body>
</a>
</html>
