<?php

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

use common\models\Imagens;
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Estate sale - Real Estate Category Bootstrap Responsive Website Template - Home : W3layouts</title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<body>

<!--header-->

<section class="w3l-cover-3">
    <div class="cover top-bottom">
        <div class="container">
            <div class="middle-section text-center">
                <div class="section-width">
                    <p>É bom estar em casa</p>
                    <h2>Encontre uma casa hoje!</h2>

                </div>
                <section id="bottom" class="demo">
                    <a href="#bottom"><span></span>Scroll</a>
                </section>
            </div>
        </div>
    </div>
</section>
<section class="locations-1" id="locations">
    <div class="locations py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="heading text-center mx-auto">
                <h3 class="title-big">Destaques</h3>
            </div>
            <div class="row pt-md-5 pt-4">
                <?php foreach ($dataProvider->models as $model) { ?>
                <div class="col-lg-4 col-md-6">
                    <a href="<?=Url::to(['imovel/view', 'id'=>$model->id])?>">
                        <div class="box16">
                            <?php $imagem = Imagens::findOne(['id_Imovel' => $model->id]); ?>
                            <div class="rentext-listing-category"><span>Comprar</span><span>Arrendar</span></div>
                            <img class="img-fluid" src="<?php echo Yii::getAlias('@imageurl/'.$imagem->imagem); ?>" alt="">
                            <div class="box-content">
                                <h3 class="title"><?= $model->preco ?></h3>
                                <span class="post"><?= $model->cidade?> </span>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<section class="w3l-index3" id="about">
    <!-- /bottom-grids-->
    <section class="w3l-bottom-grids py-5" id="steps">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="grids-area-hny main-cont-wthree-fea row">
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box no-box-shadow">
                        <span class="fa fa-home"></span>
                        <h4><a href="about.php" class="title-head">Garantia Happy House</a></h4>
                        <p>Uma garantia oferecida pela Happy House que garante ao comprador reparações no imóvel em caso de necessidade.</p>
                        <a href="http://localhost/happyhouse/frontend/web/index.php?r=site%2Fabout" class="more">Saiba mais  <span class="fa fa-long-arrow-right"></span> </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                    <div class="area-box no-box-shadow">
                        <span class="fa fa-home"></span>
                        <h4><a href="#feature" class="title-head">Certificado Energetico </a></h4>
                        <p>Garantia Happu House agora com +1 vantagem: uma parceria Happy House  | EDP que garante o certificado energético, obrigatório para anunciar a casa, e pagá-lo depois na sua</p>
                        <a href="http://localhost/happyhouse/frontend/web/index.php?r=site%2Fabout" class="more">Saiba mais <span class="fa fa-long-arrow-right"></span> </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                    <div class="area-box no-box-shadow">
                        <span class="fa fa-building-o"></span>
                        <h4><a href="#feature" class="title-head">Casa a Estrear</a></h4>
                        <p>Uma seleção Happy House de Casas Novas, para quem prefere viver todas as vantagens de uma casa a estrear.</p>
                        <a href="http://localhost/happyhouse/frontend/web/index.php?r=site%2Fabout" class="more">Saiba mais  <span class="fa fa-long-arrow-right"></span> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
    <script>
        $(document).ready(function () {
            $('.owl-blog').owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                responsiveClass: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    480: {
                        items: 1,
                        nav: true
                    },
                    700: {
                        items: 1,
                        nav: true
                    },
                    1090: {
                        items: 1,
                        nav: true
                    }
                }
            })
        })
    </script>
    <!-- //script for blog post slider -->

    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function () {
            $("#owl-demo1").owlCarousel({
                loop: true,
                nav: false,
                margin: 50,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    736: {
                        items: 1,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->

    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>

