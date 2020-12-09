<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Imovel';

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

    <!--header-->

    <!--/header-->
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
                <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> Imovel</li>
            </ul>
        </div>
    </section>
    <section class="locations-1" id="locations">
        <div class="locations py-5">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="row">
                    <div class="col-lg-4 col-md-6 listing-img">
                        <a href="#url">
                            <div class="box16">
                                <div class="rentext-listing-category"><span>Buy</span><span>Rent</span></div>
                                <img class="img-fluid" src="assets/images/p1.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title">$25,00,000</h3>
                                </div>
                            </div>
                        </a>
                        <div class="listing-details blog-details align-self">
                            <h4 class="user_title agent">
                                <a href="#url">Cottage villa</a>
                            </h4>
                            <p class="user_position">Unnamed Road, Vegas, NV 89103.</p>
                            <ul class="mt-3 estate-info">
                                <li><span class="fa fa-bed"></span> 1 Bed</li>
                                <li><span class="fa fa-shower"></span> 2 Baths</li>
                                <li><span class="fa fa-share-square-o"></span> 1760 Sqft</li>
                            </ul>
                            <div class="author align-items-center mt-4">
                                <a href="#img" class="comment-img">
                                    <img src="assets/images/team1.jpg" alt="" class="img-fluid">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <a href="#url">Laura Antiochus </a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> Selling agent</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 listing-img mt-md-0 mt-5">
                        <a href="#url">
                            <div class="box16">
                                <div class="rentext-listing-category"><span>Buy</span><span>Rent</span></div>
                                <img class="img-fluid" src="assets/images/p2.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title">$32,00,000</h3>

                                </div>
                            </div>
                        </a>
                        <div class="listing-details blog-details align-self">
                            <h4 class="user_title agent">
                                <a href="#url">Sand house</a>
                            </h4>
                            <p class="user_position">Unnamed Road, Vegas, NV 89103.</p>
                            <ul class="mt-3 estate-info">
                                <li><span class="fa fa-bed"></span> 1 Bed</li>
                                <li><span class="fa fa-shower"></span> 2 Baths</li>
                                <li><span class="fa fa-share-square-o"></span> 1760 Sqft</li>
                            </ul>
                            <div class="author align-items-center mt-4">
                                <a href="#img" class="comment-img">
                                    <img src="assets/images/team2.jpg" alt="" class="img-fluid">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <a href="#url">Laura Antiochus </a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> Selling agent</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 listing-img mt-lg-0 pt-lg-0 mt-5 pt-md-2">
                        <a href="#url">
                            <div class="box16">
                                <div class="rentext-listing-category"><span>Buy</span><span>Rent</span></div>
                                <img class="img-fluid" src="assets/images/p3.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title">$47,00,000</h3>

                                </div>
                            </div>
                        </a>
                        <div class="listing-details blog-details align-self">
                            <h4 class="user_title agent">
                                <a href="#url">Extension villa</a>
                            </h4>
                            <p class="user_position">Unnamed Road, Vegas, NV 89103.</p>
                            <ul class="mt-3 estate-info">
                                <li><span class="fa fa-bed"></span> 1 Bed</li>
                                <li><span class="fa fa-shower"></span> 2 Baths</li>
                                <li><span class="fa fa-share-square-o"></span> 1760 Sqft</li>
                            </ul>
                            <div class="author align-items-center mt-4">
                                <a href="#img" class="comment-img">
                                    <img src="assets/images/team3.jpg" alt="" class="img-fluid">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <a href="#url">Laura Antiochus </a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> Selling agent</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 listing-img mt-5 pt-md-2">
                        <a href="#url">
                            <div class="box16">
                                <div class="rentext-listing-category"><span>Buy</span><span>Rent</span></div>
                                <img class="img-fluid" src="assets/images/p4.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title">$19,00,000</h3>

                                </div>
                            </div>
                        </a>
                        <div class="listing-details blog-details align-self">
                            <h4 class="user_title agent">
                                <a href="#url">Corner house</a>
                            </h4>
                            <p class="user_position">Unnamed Road, Vegas, NV 89103.</p>
                            <ul class="mt-3 estate-info">
                                <li><span class="fa fa-bed"></span> 1 Bed</li>
                                <li><span class="fa fa-shower"></span> 2 Baths</li>
                                <li><span class="fa fa-share-square-o"></span> 1760 Sqft</li>
                            </ul>
                            <div class="author align-items-center mt-4">
                                <a href="#img" class="comment-img">
                                    <img src="assets/images/team4.jpg" alt="" class="img-fluid">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <a href="#url">Laura Antiochus </a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> Selling agent</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 listing-img mt-5 pt-md-2">
                        <a href="#url">
                            <div class="box16">
                                <div class="rentext-listing-category"><span>Buy</span><span>Rent</span></div>
                                <img class="img-fluid" src="assets/images/p5.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title">$34,00,000</h3>

                                </div>
                            </div>
                        </a>
                        <div class="listing-details blog-details align-self">
                            <h4 class="user_title agent">
                                <a href="#url">Beach House</a>
                            </h4>
                            <p class="user_position">Unnamed Road, Vegas, NV 89103.</p>
                            <ul class="mt-3 estate-info">
                                <li><span class="fa fa-bed"></span> 1 Bed</li>
                                <li><span class="fa fa-shower"></span> 2 Baths</li>
                                <li><span class="fa fa-share-square-o"></span> 1760 Sqft</li>
                            </ul>
                            <div class="author align-items-center mt-4">
                                <a href="#img" class="comment-img">
                                    <img src="assets/images/team5.jpg" alt="" class="img-fluid">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <a href="#url">Laura Antiochus </a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> Selling agent</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 listing-img mt-5 pt-md-2">
                        <a href="#url">
                            <div class="box16">
                                <div class="rentext-listing-category"><span>Buy</span><span>Rent</span></div>
                                <img class="img-fluid" src="assets/images/p6.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title">$29,00,000</h3>
                                </div>
                            </div>
                        </a>
                        <div class="listing-details blog-details align-self">
                            <h4 class="user_title agent">
                                <a href="#url">Cottage villa</a>
                            </h4>
                            <p class="user_position">Unnamed Road, Vegas, NV 89103.</p>
                            <ul class="mt-3 estate-info">
                                <li><span class="fa fa-bed"></span> 1 Bed</li>
                                <li><span class="fa fa-shower"></span> 2 Baths</li>
                                <li><span class="fa fa-share-square-o"></span> 1760 Sqft</li>
                            </ul>
                            <div class="author align-items-center mt-4">
                                <a href="#img" class="comment-img">
                                    <img src="assets/images/team6.jpg" alt="" class="img-fluid">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <a href="#url">Laura Antiochus </a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> Selling agent</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 listing-img mt-5 pt-md-2">
                        <a href="#url">
                            <div class="box16">
                                <div class="rentext-listing-category"><span>Buy</span><span>Rent</span></div>
                                <img class="img-fluid" src="assets/images/p7.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title">$38,00,000</h3>

                                </div>
                            </div>
                        </a>
                        <div class="listing-details blog-details align-self">
                            <h4 class="user_title agent">
                                <a href="#url">Beach House</a>
                            </h4>
                            <p class="user_position">Unnamed Road, Vegas, NV 89103.</p>
                            <ul class="mt-3 estate-info">
                                <li><span class="fa fa-bed"></span> 1 Bed</li>
                                <li><span class="fa fa-shower"></span> 2 Baths</li>
                                <li><span class="fa fa-share-square-o"></span> 1760 Sqft</li>
                            </ul>
                            <div class="author align-items-center mt-4">
                                <a href="#img" class="comment-img">
                                    <img src="assets/images/team1.jpg" alt="" class="img-fluid">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <a href="#url">Laura Antiochus </a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> Selling agent</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 listing-img mt-5 pt-md-2">
                        <a href="#url">
                            <div class="box16">
                                <div class="rentext-listing-category"><span>Buy</span><span>Rent</span></div>
                                <img class="img-fluid" src="assets/images/p8.jpg" alt="">
                                <div class="box-content">
                                    <h3 class="title">$51,00,000</h3>
                                </div>
                            </div>
                        </a>
                        <div class="listing-details blog-details align-self">
                            <h4 class="user_title agent">
                                <a href="#url">Cottage villa</a>
                            </h4>
                            <p class="user_position">Unnamed Road, Vegas, NV 89103.</p>
                            <ul class="mt-3 estate-info">
                                <li><span class="fa fa-bed"></span> 1 Bed</li>
                                <li><span class="fa fa-shower"></span> 2 Baths</li>
                                <li><span class="fa fa-share-square-o"></span> 1760 Sqft</li>
                            </ul>
                            <div class="author align-items-center mt-4">
                                <a href="#img" class="comment-img">
                                    <img src="assets/images/team2.jpg" alt="" class="img-fluid">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <a href="#url">Laura Antiochus </a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> Selling agent</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- pagination -->
                <div class="pagination-wrapper mt-5 pt-lg-3 text-center">
                    <ul class="page-pagination">
                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="#url">2</a></li>
                        <li><a class="page-numbers" href="#url">3</a></li>
                        <li><a class="page-numbers" href="#url">...</a></li>
                        <li><a class="page-numbers" href="#url">15</a></li>
                        <li><a class="next" href="#url">Next <span class="fa fa-angle-right"></span></a></li>
                    </ul>
                </div>
                <!-- //pagination -->
            </div>
        </div>
    </section>
    <!-- footers 20 -->
    <section class="w3l-footers-20">
        <div class="footers20">
            <div class="container">
                <div class="footers20-content">
                    <div class="d-grid grid-col-4 grids-content">
                        <div class="column">
                            <a href="#url" class="link"><span class="fa fa-comments"></span></a>
                            <a href="#url" class="title-small">Free consultation</a>
                            <h4>Schedule a free consultation with our specialist.</h4>
                            <a href="#buytheme" class="btn btn-style btn-primary"> Schedule now
                                <span class="fa fa-long-arrow-right ml-2"></span> </a>
                        </div>
                        <div class="column">
                            <a href="#url" class="link"><span class="fa fa-phone"></span></a>
                            <a href="#url" class="title-small">help desk</a>
                            <h4>Do you have questions or want more infomation? Call Now</h4>
                            <a href="tel:+1-2345-678-11">
                                <p class="contact-phone mt-2"><span class="lnr lnr-phone-handset"></span> +1-2345-678-11
                                </p>
                            </a>
                        </div>
                        <div class="column mt-lg-0 mt-md-5">
                            <h4 class="mb-1">Signup for newsletter</h4>
                            <p>and get latest news and updates</p>
                            <form action="#" class="subscribe-form mt-4" method="post">
                                <div class="form-group">
                                    <input type="email" name="subscribe" placeholder="Enter your email" required="">
                                    <button class="btn btn-style btn-primary">Subscribe</button>
                                </div>
                            </form>
                            <ul class="footers-17_social">
                                <h4 class="d-inline mr-4">Follow us</h4>
                                <li><a href="#url" class="twitter"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#url" class="facebook"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#url" class="linkedin"><span class="fa fa-linkedin"></span></a></li>
                                <li><a href="#url" class="instagram"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-grid grid-col-3 grids-content1 bottom-border">
                        <div class="columns copyright-grid align-self">
                            <p class="copy-footer-29">© 2020 Estate sale. All rights reserved | Designed by <a
                                        href="https://w3layouts.com">W3layouts</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            &#10548;
        </button>

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

    </body>

    </html>

