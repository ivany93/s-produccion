<?php

/* @var $this yii\web\View */

$this->registerMetaTag([
    'name' => 'title',
    'content' => $site_config['seo_title']
]);
$this->registerMetaTag([
    'name' => 'description',
    'content' => $site_config['seo_description']
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $site_config['seo_keywords']
]);

$this->title = $site_config['seo_title'];
?>
<header class="section intro">
    <div class="intro__scroll-bounce js-scroll-bounce">
        <img src="<?= 'frontend/web/upload/section1/' . $section1['arrow_down'] ?>" alt="arrow">
    </div>
    <div class="intro__bg">
        <ul class="intro__bg-slider-list js-intro-slider">
            <li class="intro__bg-slider-item">
                <img src="img/intro-bg.jpg" class="js-intro-bg" alt="photo">
            </li>
            <li class="intro__bg-slider-item">
                <img src="img/intro-bg.png" class="js-intro-bg" alt="photo">
            </li>
        </ul>
    </div>
    <div class="intro__bg">
        <ul class="intro__bg-slider-list js-intro-slider">
            <li class="intro__bg-slider-item">
                <img src="img/intro-bg.jpg" class="js-intro-bg" alt="photo">
            </li>
            <li class="intro__bg-slider-item">
                <img src="img/intro-bg.png" class="js-intro-bg" alt="photo">
            </li>
        </ul>
    </div>
    <div class="wrapper">
        <a href="#" class="intro__logo js-intro-logo">

            <h1><?= $section1['h1'] ?></h1>
        </a>
        <a href="<?= $site_config['file'] ?>" class="intro__action js-intro-action btn"><?= $section1['title_presentation'] ?></a>
    </div>
    <div class="intro__shadow js-shadow"></div>
</header>
<section class="section description">
    <div class="wrapper">
        <div class="description__info">
            <div class="description__text-outer js-scroll-text">
                <p class="js-animate-text">
                   <?= $section2['text'] ?>
                </p>

            </div>

            <div class="description__person">
                <div class="description__person-backside js-person-backside"></div>
                <div class="description__person-picture js-person-picture">
                    <img src="<?= 'frontend/web/upload/section2/' . $section2['photo'] ?>" alt="photo">

                </div>
                <div class="description__person-caption js-person-caption">
                    <div class="name"><?= $section2['name'] ?></div>
                    <div class="position"><?= $section2['position'] ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="description__shadow js-shadow">
        <img src="<?= 'frontend/web/upload/section2/' . $section2['shadow'] ?>" alt="pic">
    </div>
</section>
<section class="section gallery">
    <div class="gallery__shadow js-gallery-shadow"></div>
    <div class="wrapper">
        <ul class="gallery__nav">
            <li class="gallery__nav-item js-nav-item">
                <a href="#item-1" class="gallery__nav-link js-nav-link">альбомы</a>
            </li>
            <li class="gallery__nav-item js-nav-item">
                <a href="#item-2" class="gallery__nav-link gallery__nav-link--active js-nav-link">все фото</a>
            </li>
        </ul>
        <div class="gallery__items-container">
            <div id="item-1" class="gallery__item js-gallery-item">
                <ul class="gallery__albums-list">
                    <?php foreach ($gallerys as $gallery) { ?>
                        <li class="gallery__albums-item js-album-item">
                            <div class="gallery__albums-item-info">
                                <h2><?= $gallery['description'] ?></h2>

                                <div class="day"><?= $gallery['date'] ?></div>
                            </div>
                            <div class="gallery__list js-single-gallery">
                                <?php foreach ($all_image_gallery as $image) { ?>
                                    <?php if ($image['id_gallery'] == $gallery['id']) { ?>
                                        <a href="<?= 'frontend/web/upload/gallerys/gallery_' . $gallery['id'] . '/' . $image['name_img'] ?>">
                                            <img
                                                src="<?= 'frontend/web/upload/gallerys/gallery_' . $gallery['id'] . '/' . $image['name_img'] ?>">
                                        </a>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div id="item-2" class="gallery__item js-gallery-item">
                <div class="gallery__custom-controls">
                    <div class="prev js-all-gallery-prev"></div>
                    <div class="next js-all-gallery-next"></div>
                </div>
                <ul id="imageGallery" class="gallery__all-albums-list">
                    <?php foreach ($all_image_gallery as $image) { ?>
                        <li class="gallery__all-albums-item"
                            data-thumb="<?= 'frontend/web/upload/gallerys/gallery_' . $gallery['id'] . '/' . $image['name_img'] ?>"
                            data-src="<?= 'frontend/web/upload/gallerys/gallery_' . $gallery['id'] . '/' . $image['name_img'] ?>">
                            <img
                                src="<?= 'frontend/web/upload/gallerys/gallery_' . $gallery['id'] . '/' . $image['name_img'] ?>">
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section sticky-shadow tagline">
    <div class="wrapper">
        <h3 class="title"><?= $section3['title1'] ?></h3>
    </div>
</section>
<section class="section sticky-shadow tagline">
    <div class="wrapper">
        <h3 class="title"><?= $section3['title2'] ?></h3>
    </div>
</section>
<section class="section sticky-shadow tagline">
    <div class="wrapper">
        <h3 class="title"><?= $section3['title3'] ?></h3>
    </div>
</section>
