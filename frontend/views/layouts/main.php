<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="">
    <meta name="author" content="">
    <meta name="copyright" content="">
    <meta name="googlebot" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>

<section class="parallax">
           <?= $content ?>

    <footer class="section sticky-shadow footer">
        <div class="wrapper">
            <a href="<?= $this->params['file']; ?>" class="footer__action js-intro-action-footer btn"><?= $this->params['title_presentation']; ?></a>
            <ul class="footer__socials-list">
                <li class="footer__socials-item">
                    <a href="<?= $this->params['l_link']; ?>" class="footer__socials-link js-letter-animate" data-in-effect="bounceIn"><?= $this->params['l_name']; ?></a>
                </li>
                <li class="footer__socials-item">
                    <a href="<?= $this->params['f_link']; ?>" class="footer__socials-link js-letter-animate" data-in-effect="bounceIn"><?= $this->params['f_name']; ?></a>
                </li>
            </ul>
        </div>
    </footer>
</section>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
