<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

rmrevin\yii\fontawesome\NpmFreeAssetBundle::register($this);
/* @var $modelUser common\models\User */
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model common\models\Imovel */
/* @var $modelPedido common\models\Pedido */


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>


<div class="imovel-index">

    <!--/<h1><?/*= Html::encode($this->title) */?></h1>-->


 <!--<?/*= GridView::widget([
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
                'visible' => Yii::$app->user->isGuest ? false : true,
                'buttons' => [
                    'view' => function ($url) {

                        return Html::a('', $url, ['class' => 'fa fa-fw fa-eye']);
                    },

                ],
            ],
        ],
    ]); */?>-->


</div>
<body>

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
            <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span>Comprar</li>
        </ul>
    </div>
</section>
<section class="locations-1" id="locations">
    <div class="locations py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                <?php foreach ($dataProvider->models as $model) { ?>
                    <div class="col-lg-4 col-md-6 listing-img">
                        <a href="<?=Url::to(['view', 'id'=>$model->id])?>">
                            <div class="box16">
                                <div class="rentext-listing-category"><span>Comprar</span><span>Arrendar</span></div>
                                <img class="img-fluid" src="assets/images/p1.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title">
                                        <?= $model->preco,'€' ?>
                                </div>
                            </div>
                        </a>
                        <div class="listing-details blog-details align-self">
                            <h4 class="user_title agent">
                                <a href="#url"><?= $model->morada ?></a>
                            </h4>
                            <p class="user_position"><?= $model->cidade ?></p>
                            <ul class="mt-3 estate-info">
                                <li><span class="fa fa-bed"></span> <?= $model->estado ?></li>
                                <li><span class="fa fa-shower"></span><?= $model->n_wc ?> </li>
                                <li><span class="fa fa-share-square-o"></span><?= $model->area ,'m2'?></li>
                            </ul>
                            <div class="author align-items-center mt-4">
                                <a href="#img" class="comment-img">
                                    <img src="assets/images/team1.jpg" alt="" class="img-fluid">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <span>
                                        </span>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value">Agente Vendedor</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php } ?>


            </div>
        </div>
</section>
<!-- footers 20 -->
<!--<section class="w3l-footers-20">
    <div class="footers20">
        <div class="container">
            <div class="footers20-content">
                <div class="d-grid grid-col-4 grids-content">
                    <div class="column">
                        <a href="#url" class="link"><span class="fa fa-comments"></span></a>
                        <a href="#url" class="title-small">Agende um encontro</a>
                        <h4>Agende uma reunião com um dos nossos agentes.</h4>
                        <a href="#buytheme" class="btn btn-style btn-primary"> Marque agora
                            <span class="fa fa-long-arrow-right ml-2"></span> </a>
                    </div>
                    <div class="column">
                        <a href="#url" class="link"><span class="fa fa-phone"></span></a>
                        <a href="../site/about.php" class="title-small">Contactos</a>
                        <h4>Tem alguma questão ou procura saber mais ? Contactenos</h4>
                        <a href="tel:+1-2345-678-11">
                            <p class="contact-phone mt-2"><span class="lnr lnr-phone-handset"></span> 913 231 687
                            </p>
                        </a>
                    </div>
                    <div class="column mt-lg-0 mt-md-5">
                        <h4 class="mb-1">Junte-se a nós</h4>
                        <p>e tem acesso a ultimas novidades</p>
                        <form action="../web/index.php?r=site%2Fsignup" class="subscribe-form mt-4" method="post">
                            <div class="form-group">
                                <button class="btn-about btn-style btn-primary mx-auto">Registe-se</button>
                            </div>
                        </form>
                        <ul class="footers-17_social">
                            <h4 class="d-inline mr-4">Siga-nos</h4>
                            <li><a href="#url" class="twitter"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#url" class="facebook"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#url" class="instagram"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        &#10548;
    </button>

    <!-- /move top -->
</section>-->

<!-- jQuery and Bootstrap JS -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

<!-- stats number counter-->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats number counter -->

<!-- owlcarousel -->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for blog post slider -->

</body>

</html>

