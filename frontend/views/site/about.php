<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';

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
            <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> Sobre</li>
        </ul>
    </div>
</section>
<section class="w3l-index3" id="about">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                <div class="col-lg-5 pr-lg-0">
                    <div class="w3l-left-img2">
                    </div>
                </div>
                <div class="col-lg-7 pl-lg-0">
                    <div class="w3l-right-info">
                        <h6 class="title-small">Sobre nós</h6>
                        <h3 class="title-big">A nossa experiência</h3>
                        <h5 class="mt-4">Nós temos mais de 15 anos de experiencia, mais de 20,000 pessoas a trabalhar conosco em mais de 70 paises
                            e queremos continuar a expandir o nosso negócio para continuar a adquirir mais colaboradores e acima de tudo
                            oferecer aos nossos compradores os melhores negocios imobilíarios
                        </h5>
                        <a href="#small-dialog1" class="popup-with-zoom-anim play-view d-block mt-md-5 mt-4">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                            Veja a nossa história
                        </a>
                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                        <div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
                            <iframe src="https://www.youtube.com/embed/jqP3m3ElcxA" frameborder="0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div><div class="grids-area-hny main-cont-wthree-fea row mt-5 pt-lg-5 pt-5">
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box">
                        <span class="fa fa-home"></span>
                        <h4><a href="#feature" class="title-head">Orientação que precisa</a></h4>
                        <p>Aqui na Happy-House todos os nossos agentes imobiliarios se encontram disponiveis para poder ajudar os nossos clientes no que for necessário.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                    <div class="area-box">
                        <span class="fa fa-search-plus"></span>
                        <h4><a href="#feature" class="title-head">Ambiente familiar </a></h4>
                        <p>Procura o imobiliario que mais se enquadra no seu seio familiar para poder ter um futuro melhor </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                    <div class="area-box">
                        <span class="fa fa-dollar"></span>
                        <h4><a href="#feature" class="title-head">Valores Acessiveis</a></h4>
                        <p>Aqui na Happy-House temos dos valores mais baixos que existem no mercado em relação a preço qualidade</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="w3l-aboutblock2" id="why">
        <div class="midd-w3 py-5">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="row">
                    <div class="col-lg-6 left-wthree-img">
                        <img src="assets/images/casa_da_pag_about" alt="" class="img-fluid radius-image" />
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-5 align-self">
                        <h6 class="title-small">Poru</h6>
                        <h3 class="title-big">Para ajudar os membros a terem mais sucesso</h3>
                        <p class="mt-4">Somos uma empresa nova que conta com membros com grande ambição e empenho para conseguir corresponder as expectativas dos clientes.</p>
                        <ul class="w3l-right-book mt-lg-5 mt-4">
                            <li><span class="fa fa-check" aria-hidden="true"></span>Ajuda os vendedores a obterem o maximo de lucro</li>
                            <li><span class="fa fa-check" aria-hidden="true"></span>Ajuda os vendedores a obterem o preço mais apropriado ao seu imovel</li>
                            <li><span class="fa fa-check" aria-hidden="true"></span>Ajuda os compradores a encontrar o imovel que lhes encaxa</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="w3l-agentsblock py-5" id="team">
        <div class="container py-lg-5 py-md-4 py-2">
            <h6 class="title-small text-center">Nossa Equipa</h6>
            <h3 class="title-big text-center mb-lg-5 mb-4">Conheça os nossos agentes</h3>
            <!-- block -->
            <div class="row ">
                <div class="col-lg-3 col-sm-6 column-item mt-sm-0 mt-5 mx-auto">
                    <div class="users_box">
                        <div class="user-avatar">
                            <a href="#agent-single" class="avatar">
                                <img src="assets/images/team2.jpg" alt="" class="img-fluid w-100 radius-image">
                            </a>
                        </div>
                        <div class="users_box_info">
                            <p class="user_position">Agente Imobiliario</p>
                            <h4 class="user_title agent">
                                <a href="user.php">Hugo Eusébio</a>
                            </h4>
                            <div class="user_meta user_phone">
                                <span class="phone-detail"> <a href="tel:+1-2345-678-11">915851389</a></span>
                            </div>

                            <a href="#agent-single" class="btn btn-outline-primary btn-style mt-4">
                                Ver perfil </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 column-item mt-lg-0 mt-5 mx-auto">
                    <div class="users_box">
                        <div class="user-avatar">
                            <a href="#agent-single" class="avatar">
                                <img src="assets/images/david.jpg" alt="" class="img-fluid w-100 radius-image">
                            </a>
                        </div>
                        <div class="users_box_info">
                            <p class="user_position">Agente Imobiliario</p>
                            <h4 class="user_title agent">
                                <a href="#agent-single">David Simões</a>
                            </h4>
                            <div class="user_meta user_phone">
                                <span class="phone-detail"> <a href="tel:+1-2345-678-11">938733247</a></span>
                            </div>
                            <a href="#agent-single" class="btn btn-outline-primary btn-style mt-4">
                               Ver Perfil </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 column-item mt-lg-0 mt-5 mx-auto">
                    <div class="users_box">
                        <div class="user-avatar">
                            <a href="#agent-single" class="avatar">
                                <img src="assets/images/team6.jpg" alt="" class="img-fluid w-100 radius-image">
                            </a>
                        </div>
                        <div class="users_box_info">
                            <p class="user_position">Agente Imobiliario</p>
                            <h4 class="user_title agent">
                                <a href="#agent-single">André Nunes</a>
                            </h4>
                            <div class="user_meta user_phone">
                                <span class="phone-detail"> <a href="tel:+1-2345-678-11">913434257</a></span>
                            </div>

                            <a href="#agent-single" class="btn btn-outline-primary btn-style mt-4">
                               Ver perfil </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- stats -->
    <section class="w3l-stats py-5" id="stats">
        <div class="gallery-inner container py-lg-5 py-md-4 py-2">
            <div class="row stats-con">
                <div class="col-md-3 col-6 stats_info counter_grid">
                    <p class="counter">3447</p>
                    <span class="plus">+</span><br>
                    <h3>Casas para venda</h3>
                </div>
                <div class="col-md-3 col-6 stats_info counter_grid1">
                    <p class="counter">455</p>
                    <span class="plus">+</span><br>
                    <h3>Casas para arrender</h3>
                </div>wwww
                    <p class="counter">1300</p>
                    <span class="plus">+</span><br>
                    <h3>Vendidas recentemente</h3>
                </div>
                <div class="col-md-3 col-6 stats_info counter_grid2 mt-md-0 mt-4">
                    <p class="counter">96 </p>
                    <span class="plus">k</span><br>
                    <h3>Clientes satisfeitos </h3>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->
    <!-- footers 20 -->
    <section class="w3l-footers-20">
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
                            <a href="contact.php" class="title-small">Contactos</a>
                            <h4>Tem alguma questão ou procura saber mais ? Contactenos</h4>
                            <a href="tel:+1-2345-678-11">
                                <p class="contact-phone mt-2"><span class="lnr lnr-phone-handset"></span> 913 231 687
                                </p>
                            </a>
                        </div>
                        <div class="column mt-lg-0 mt-md-5">
                            <h4 class="mb-1">Junte-se a nós</h4>
                            <p>e tem acesso a ultimas novidades</p>
                            <form action="#" class="subscribe-form mt-4" method="post">
                                <div class="form-group">
                                    <button class="btn btn-style btn-primary mx-auto">Registe-se</button>
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
    </section>

    <!-- jQuery and Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

    <!-- stats number counter-->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>