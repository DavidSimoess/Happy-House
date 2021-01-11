<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';

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
            <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> Contactos</li>
        </ul>
    </div>
</section>
<!-- contacts -->
<section class="w3l-contact-7 pt-5" id="contact">
    <div class="contacts-9 pt-lg-5 pt-md-4">
        <div class="container">
            <div class="top-map">
                <div class="row map-content-9">
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <h5 class="mb-2">Entra em contacto conosco!</h5>
                            <p class="mb-4">O seu email nao irá ser publicado.Preencha os campos marcados com *</p>
                            <form action="" method="post" class="">
                                <div class="form-grid">
                                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                                    <?= $form->field($model, 'nome')->textInput(['autofocus' => true]) ?>

                                    <?= $form->field($model, 'email') ?>

                                    <?= $form->field($model, 'assunto') ?>

                                    <?= $form->field($model, 'mensagem')->textarea(['rows' => 6]) ?>

                                    <div class="form-group ">
                                        <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                    </div>


                                    <?php ActiveForm::end(); ?>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="map mt-5">
           
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3068.230873112291!2d-8.823233485261397!3d39.73446450477427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd22735a4e067afb%3A0xcfaf619f4450fa76!2sPolit%C3%A9cnico%20de%20Leiria%20%7C%20ESTG%20-%20Escola%20Superior%20de%20Tecnologia%20e%20Gest%C3%A3o_Edif%C3%ADcio%20D!5e0!3m2!1sen!2sin!4v1607097602420!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        </div>
    </div>
</section>
