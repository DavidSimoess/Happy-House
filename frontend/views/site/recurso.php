<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $modelRecurso \frontend\models\RecursoForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Recurso';

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
            <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> Recurso</li>
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
                                    <?php $form = ActiveForm::begin(['id' => 'recurso-form']); ?>

                                    <?= $form->field($modelRecurso, 'categoria')->dropDownList(['Reclmação' => 'Reclmação', 'elogio' => 'elogio', 'outro' => 'outro']) ?>

                                    <?= $form->field($modelRecurso, 'email') ?>

                                    <?= $form->field($modelRecurso, 'mensagem')->textarea(['rows' => 6]) ?>

                                    <div class="form-group ">
                                        <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'recurso-button']) ?>
                                    </div>


                                    <?php ActiveForm::end(); ?>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
