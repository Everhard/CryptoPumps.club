<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
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

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48835328 = new Ya.Metrika({
                    id:48835328,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48835328" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<?php $this->beginBody() ?>

<div id="page-wrapper">
    <div id="header-wrapper" class="wrapper">
        <div id="header">
            <div id="logo">
                <h1><a href="/">CryptoPumps.club</a></h1>
                <p>Сообщество умных людей, зарабатывающих на пампах криптовалют</p>
            </div>
            <nav id="nav">
                <ul>
                    <li class="current"><a href="/">Что такое памп криптовалют?</a></li>
                    <li><a href="<?= Url::to(['site/pump-groups']); ?>">Памп-группы</a></li>
                    <li><a href="<?= Url::to(['site/pumps-schedule']); ?>">Расписание ближайших пампов</a></li>
                    <li><a href="#">Статьи</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <?= $content ?>

    <div id="footer-wrapper" class="wrapper">
        <div class="title">Контакты</div>
        <div id="footer" class="container">
            <header class="style1">
                <h2>Интересуетесь заработком на пампах?</h2>
                <p>
                    Присоединяйтесь к нашему сообществу!<br />
                    Вступайте в нашу группу на Facebook и к нашему чату в Telegram!
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
                                    <h3 class="icon fa-comment">Social</h3>
                                    <p>
                                        <a href="https://www.facebook.com/cryptopumps.club/">facebook.com/cryptopumps.club</a>
                                    </p>
                                </section>
                            </div>
                            <div class="6u 12u(mobile)">
                                <section>
                                    <h3 class="icon fa-envelope">Email</h3>
                                    <p>
                                        <a href="#">contact@cryptopumps.club</a>
                                    </p>
                                </section>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
            <hr />
        </div>
    </div>

</div>

<!--[if lte IE 8]><script src="/js/ie/respond.min.js"></script><![endif]-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
