<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;

\app\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header class="header">
    <div class="container">
        <nav class="navbar fixed-top navbar-expand-xl navbar-light navbar-image">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php
            NavBar::begin([
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Головна', 'url' => ['/site/main']],
                    ['label' => ' Реєстрація', 'url' => ['/site/contact'], 'items' => [
                        ['label' => 'Зареєструвати тварину', 'url' => ['/site/registration']],
                        ['label' => 'Зареєструвати клініку', 'url' => ['/site/registration-clinic']],
                        ['label' => 'Увійти для користувача', 'url' => ['/site/entrance-user']],
                        ['label' => 'Увійти для пошуку донора', 'url' => ['/site/entrance']],
                    ]],
                    ['label' => ' Пошук донора', 'url' => ['/site/contact'], 'items' => [
                        ['label' => 'Пошук', 'url' => ['/site/donor-search']],
                    ]],
                    ['label' => 'Трансфузія у тварин', 'url' => ['/site/transfusions']],
                    ['label' => 'Часті запитання', 'url' => ['/site/questions']],
                    ['label' => 'Зв’язатися з нами', 'url' => ['/site/contact-us']],
                    ['label' => 'Підтримати проект', 'url' => ['/site/support-project']],
                    ['label' => 'Книга відгуків', 'url' => ['/site/reviews-book']],

                ],
            ]);
            NavBar::end(); ?>
<!--
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.html">
                            <i class="fa fa-home" aria-hidden="true"></i>Головна</a></li>
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i><img class="dog-img" src="img/dog.svg"> </i> Реєстрація
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="registration.html">Зареєструвати тварину</a>
                            <a class="dropdown-item" href="registration-clinic.html"> Зареєструвати клініку</a>

                            <a class="dropdown-item" href="entrance-user.html">Увійти для користувача</a>
                            <a class="dropdown-item" href="entrance.html">Увійти для пошуку донора</a>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-paw">Пошук донора</i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="donor-search.html">Пошук</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="transfusions.html">Трансфузія у тварин</a></li>
                    <li class="nav-item"><a class="nav-link" href="questions.html">Часті запитання</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact-us.html">Зв’язатися з нами</a></li>
                    <li class="nav-item"><a class="nav-link" href="reviews-book.html">Книга відгуків</a></li>
                </ul>
            </div>
        </nav>
        -->

    </div>
</header>

<div class="parallax-window-registration" data-parallax="scroll" data-image-src="/img/f7.jpg"></div>
<div class="container">
    <?=$content?>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
