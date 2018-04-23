<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!--[if lte IE 8]><script src="/js/ie/html5shiv.js"></script><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="/css/ie8.css" /><![endif]-->
    <?php $this->head() ?>
</head>
<body class="homepage">
<?php $this->beginBody() ?>

<div id="page-wrapper">
    <div id="header-wrapper" class="wrapper">
        <div id="header">
            <div id="logo">
                <h1><a href="index.html">CryptoPumps.club</a></h1>
                <p>Сообщество умных людей, зарабатывающих на пампах</p>
            </div>
            <nav id="nav">
                <ul>
                    <li class="current"><a href="index.html">Главная</a></li>
                    <li><a href="#">Telegram-каналы</a></li>
                    <li><a href="#">Расписание ближайших пампов</a></li>
                    <li><a href="#">Статьи</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <?= $content ?>

    <div id="footer-wrapper" class="wrapper">
        <div class="title">The Rest Of It</div>
        <div id="footer" class="container">
            <header class="style1">
                <h2>Ipsum sapien elementum portitor?</h2>
                <p>
                    Sed turpis tortor, tincidunt sed ornare in metus porttitor mollis nunc in aliquet.<br />
                    Nam pharetra laoreet imperdiet volutpat etiam consequat feugiat.
                </p>
            </header>
            <hr />
            <div class="row 150%">
                <div class="6u 12u(mobile)">

                    <!-- Contact Form -->
                    <section>
                        <form method="post" action="#">
                            <div class="row 50%">
                                <div class="6u 12u(mobile)">
                                    <input type="text" name="name" id="contact-name" placeholder="Name" />
                                </div>
                                <div class="6u 12u(mobile)">
                                    <input type="text" name="email" id="contact-email" placeholder="Email" />
                                </div>
                            </div>
                            <div class="row 50%">
                                <div class="12u">
                                    <textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="12u">
                                    <ul class="actions">
                                        <li><input type="submit" class="style1" value="Send" /></li>
                                        <li><input type="reset" class="style2" value="Reset" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </section>

                </div>
                <div class="6u 12u(mobile)">

                    <!-- Contact -->
                    <section class="feature-list small">
                        <div class="row">
                            <div class="6u 12u(mobile)">
                                <section>
                                    <h3 class="icon fa-home">Mailing Address</h3>
                                    <p>
                                        Untitled Corporation<br />
                                        1234 Somewhere Rd #987<br />
                                        Nashville, TN 00000-0000
                                    </p>
                                </section>
                            </div>
                            <div class="6u 12u(mobile)">
                                <section>
                                    <h3 class="icon fa-comment">Social</h3>
                                    <p>
                                        <a href="#">@untitled-corp</a><br />
                                        <a href="#">linkedin.com/untitled</a><br />
                                        <a href="#">facebook.com/untitled</a>
                                    </p>
                                </section>
                            </div>
                        </div>
                        <div class="row">
                            <div class="6u 12u(mobile)">
                                <section>
                                    <h3 class="icon fa-envelope">Email</h3>
                                    <p>
                                        <a href="#">info@untitled.tld</a>
                                    </p>
                                </section>
                            </div>
                            <div class="6u 12u(mobile)">
                                <section>
                                    <h3 class="icon fa-phone">Phone</h3>
                                    <p>
                                        (000) 555-0000
                                    </p>
                                </section>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
            <hr />
        </div>
        <div id="copyright">
            <ul>
                <li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>
    </div>

</div>

<!--[if lte IE 8]><script src="/js/ie/respond.min.js"></script><![endif]-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
