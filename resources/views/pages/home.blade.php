<!-- begin .page-->
<!DOCTYPE html>
<html class="page" lang="ru">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="imagetoolbar" content="no" />
        <meta name="msthemecompatible" content="no" />
        <meta name="cleartype" content="on" />
        <meta name="HandheldFriendly" content="True" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="format-detection" content="address=no" />
        <meta name="google" value="notranslate" />
        <meta name="theme-color" content="#ffffff" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <link sizes="57x57" href="apple-touch-icon-57x57.png" rel="apple-touch-icon" />
        <link sizes="114x114" href="apple-touch-icon-114x114.png" rel="apple-touch-icon" />
        <link sizes="72x72" href="apple-touch-icon-72x72.png" rel="apple-touch-icon" />
        <link sizes="144x144" href="apple-touch-icon-144x144.png" rel="apple-touch-icon" />
        <link sizes="60x60" href="apple-touch-icon-60x60.png" rel="apple-touch-icon" />
        <link sizes="120x120" href="apple-touch-icon-120x120.png" rel="apple-touch-icon" />
        <link sizes="76x76" href="apple-touch-icon-76x76.png" rel="apple-touch-icon" />
        <link sizes="152x152" href="apple-touch-icon-152x152.png" rel="apple-touch-icon" />
        <link sizes="180x180" href="apple-touch-icon-180x180.png" rel="apple-touch-icon" />
        <link sizes="192x192" href="favicon-192x192.png" rel="icon" type="image/png" />
        <link sizes="160x160" href="favicon-160x160.png" rel="icon" type="image/png" />
        <link sizes="96x96" href="favicon-96x96.png" rel="icon" type="image/png" />
        <link sizes="16x16" href="favicon-16x16.png" rel="icon" type="image/png" />
        <link sizes="32x32" href="favicon-32x32.png" rel="icon" type="image/png" />
        <link rel="manifest" href="manifest.json" />
        <meta name="application-name" content="" />
        <meta name="msapplication-tooltip" content="" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="msapplication-TileImage" content="mstile-large.png" />
        <meta name="msapplication-tap-highlight" content="no" />
        <meta name="msapplication-square70x70logo" content="mstile-small.png" />
        <meta name="msapplication-square150x150logo" content="mstile-medium.png" />
        <meta name="msapplication-wide310x150logo" content="mstile-wide.png" />
        <meta name="msapplication-square310x310logo" content="mstile-large.png" />
        <title>Главная | Геовектор</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="assets/components/swiper-7.2.0/css/swiper-bundle.min.css"
            media="none"
            onload="if(media!='all')media='all'"
        />
        <link
            rel="stylesheet"
            href="assets/components/noUiSlider-master/nouislider.min.css"
            media="none"
            onload="if(media!='all')media='all'"
        />
        <link
            rel="stylesheet"
            href="assets/components/fancybox-4.0.7/fancybox.css"
            media="none"
            onload="if(media!='all')media='all'"
        />
        <noscript>
            <link rel="stylesheet" href="assets/components/swiper-7.2.0/css/swiper-bundle.min.css" />
            <link rel="stylesheet" href="assets/components/noUiSlider-master/nouislider.min.css" />
            <link rel="stylesheet" href="assets/components/fancybox-4.0.7/fancybox.css" />
        </noscript>
        <link href="assets/styles/app.css" rel="stylesheet" />
        <link href="assets/styles/custom.css" rel="stylesheet" />
    </head>
    <body class="page__body">
            <!-- Включение содержимого файла app.blade.php (header) -->
    @include('layouts.app')
        <div class="page__content page__content_offset-top_none">
            <div class="page__intro">
                <div class="page__container">
                    <!-- begin .banner-carousel-->
                    <!-- If there is only a single slide, then navigation will be hidden and  slider will not be initialized, acting as a standalone banner-->
                    <div class="banner-carousel">
                        <div class="banner-carousel__container swiper js-banner-carousel">
                            <div class="banner-carousel__wrapper swiper-wrapper">
                                <div class="banner-carousel__slide swiper-slide">
                                    <!-- begin .banner-->
                                    <div class="banner banner-carousel__slide-wrapper">
                                        <div class="banner__container">
                                            <div class="banner__illustration">
                                                <picture class="banner__picture">
                                                    <img
                                                        src="assets/blocks/banner/images/1.png"
                                                        alt="геодезическое оборудование"
                                                        class="banner__image"
                                                        title=""
                                                    />
                                                </picture>
                                            </div>
                                            <div class="banner__content">
                                                <div class="banner__main">
                                                    <div class="banner__heading">
                                                        <h2 class="banner__title">геодезическое оборудование</h2>
                                                    </div>
                                                    <div class="banner__functions">
                                                        <!-- begin .functions-->
                                                        <div class="functions functions_banner">
                                                            <ul class="functions__list">
                                                                <li class="functions__item">
                                                                    <!-- begin .function-->
                                                                    <div class="function functions__snippet">
                                                                        <div class="function__illustration">
                                                                            <picture class="function__picture">
                                                                                <img
                                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                    data-src="assets/blocks/function/images/1.svg"
                                                                                    width="60"
                                                                                    height="60"
                                                                                    alt="image"
                                                                                    class="function__image lazyload"
                                                                                    title=""
                                                                                />
                                                                            </picture>
                                                                        </div>
                                                                        <div class="function__content">
                                                                            <a href="#" class="function__title">
                                                                                Аренда оборудования
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end .function-->
                                                                </li>
                                                                <li class="functions__item">
                                                                    <!-- begin .function-->
                                                                    <div class="function functions__snippet">
                                                                        <div class="function__illustration">
                                                                            <picture class="function__picture">
                                                                                <img
                                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                    data-src="assets/blocks/function/images/2.svg"
                                                                                    width="60"
                                                                                    height="60"
                                                                                    alt="image"
                                                                                    class="function__image lazyload"
                                                                                    title=""
                                                                                />
                                                                            </picture>
                                                                        </div>
                                                                        <div class="function__content">
                                                                            <a href="#" class="function__title">
                                                                                Тестдрайв
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end .function-->
                                                                </li>
                                                                <li class="functions__item">
                                                                    <!-- begin .function-->
                                                                    <div class="function functions__snippet">
                                                                        <div class="function__illustration">
                                                                            <picture class="function__picture">
                                                                                <img
                                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                    data-src="assets/blocks/function/images/3.svg"
                                                                                    width="60"
                                                                                    height="60"
                                                                                    alt="image"
                                                                                    class="function__image lazyload"
                                                                                    title=""
                                                                                />
                                                                            </picture>
                                                                        </div>
                                                                        <div class="function__content">
                                                                            <a href="#" class="function__title">
                                                                                Демопоказ
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end .function-->
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- end .functions-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end .banner-->
                                </div>
                                <div class="banner-carousel__slide swiper-slide">
                                    <!-- begin .banner-->
                                    <div class="banner banner-carousel__slide-wrapper">
                                        <div class="banner__container">
                                            <div class="banner__illustration">
                                                <picture class="banner__picture">
                                                    <img
                                                        src="assets/blocks/banner/images/1.png"
                                                        alt="геодезическое оборудование"
                                                        class="banner__image"
                                                        title=""
                                                    />
                                                </picture>
                                            </div>
                                            <div class="banner__content">
                                                <div class="banner__main">
                                                    <div class="banner__heading">
                                                        <h2 class="banner__title">геодезическое оборудование</h2>
                                                    </div>
                                                    <div class="banner__functions">
                                                        <!-- begin .functions-->
                                                        <div class="functions functions_banner">
                                                            <ul class="functions__list">
                                                                <li class="functions__item">
                                                                    <!-- begin .function-->
                                                                    <div class="function functions__snippet">
                                                                        <div class="function__illustration">
                                                                            <picture class="function__picture">
                                                                                <img
                                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                    data-src="assets/blocks/function/images/1.svg"
                                                                                    width="60"
                                                                                    height="60"
                                                                                    alt="image"
                                                                                    class="function__image lazyload"
                                                                                    title=""
                                                                                />
                                                                            </picture>
                                                                        </div>
                                                                        <div class="function__content">
                                                                            <a href="/rent" class="function__title">
                                                                                Аренда оборудования
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end .function-->
                                                                </li>
                                                                <li class="functions__item">
                                                                    <!-- begin .function-->
                                                                    <div class="function functions__snippet">
                                                                        <div class="function__illustration">
                                                                            <picture class="function__picture">
                                                                                <img
                                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                    data-src="assets/blocks/function/images/2.svg"
                                                                                    width="60"
                                                                                    height="60"
                                                                                    alt="image"
                                                                                    class="function__image lazyload"
                                                                                    title=""
                                                                                />
                                                                            </picture>
                                                                        </div>
                                                                        <div class="function__content">
                                                                            <a href="#" class="function__title">
                                                                                Тестдрайв
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end .function-->
                                                                </li>
                                                                <li class="functions__item">
                                                                    <!-- begin .function-->
                                                                    <div class="function functions__snippet">
                                                                        <div class="function__illustration">
                                                                            <picture class="function__picture">
                                                                                <img
                                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                    data-src="assets/blocks/function/images/3.svg"
                                                                                    width="60"
                                                                                    height="60"
                                                                                    alt="image"
                                                                                    class="function__image lazyload"
                                                                                    title=""
                                                                                />
                                                                            </picture>
                                                                        </div>
                                                                        <div class="function__content">
                                                                            <a href="#" class="function__title">
                                                                                Демопоказ
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end .function-->
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- end .functions-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end .banner-->
                                </div>
                                <div class="banner-carousel__slide swiper-slide">
                                    <!-- begin .banner-->
                                    <div class="banner banner-carousel__slide-wrapper">
                                        <div class="banner__container">
                                            <div class="banner__illustration">
                                                <picture class="banner__picture">
                                                    <img
                                                        src="assets/blocks/banner/images/1.png"
                                                        alt="геодезическое оборудование"
                                                        class="banner__image"
                                                        title=""
                                                    />
                                                </picture>
                                            </div>
                                            <div class="banner__content">
                                                <div class="banner__main">
                                                    <div class="banner__heading">
                                                        <h2 class="banner__title">геодезическое оборудование</h2>
                                                    </div>
                                                    <div class="banner__functions">
                                                        <!-- begin .functions-->
                                                        <div class="functions functions_banner">
                                                            <ul class="functions__list">
                                                                <li class="functions__item">
                                                                    <!-- begin .function-->
                                                                    <div class="function functions__snippet">
                                                                        <div class="function__illustration">
                                                                            <picture class="function__picture">
                                                                                <img
                                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                    data-src="assets/blocks/function/images/1.svg"
                                                                                    width="60"
                                                                                    height="60"
                                                                                    alt="image"
                                                                                    class="function__image lazyload"
                                                                                    title=""
                                                                                />
                                                                            </picture>
                                                                        </div>
                                                                        <div class="function__content">
                                                                            <a href="/rent" class="function__title">
                                                                                Аренда оборудования
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end .function-->
                                                                </li>
                                                                <li class="functions__item">
                                                                    <!-- begin .function-->
                                                                    <div class="function functions__snippet">
                                                                        <div class="function__illustration">
                                                                            <picture class="function__picture">
                                                                                <img
                                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                    data-src="assets/blocks/function/images/2.svg"
                                                                                    width="60"
                                                                                    height="60"
                                                                                    alt="image"
                                                                                    class="function__image lazyload"
                                                                                    title=""
                                                                                />
                                                                            </picture>
                                                                        </div>
                                                                        <div class="function__content">
                                                                            <a href="#" class="function__title">
                                                                                Тестдрайв
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end .function-->
                                                                </li>
                                                                <li class="functions__item">
                                                                    <!-- begin .function-->
                                                                    <div class="function functions__snippet">
                                                                        <div class="function__illustration">
                                                                            <picture class="function__picture">
                                                                                <img
                                                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                                    data-src="assets/blocks/function/images/3.svg"
                                                                                    width="60"
                                                                                    height="60"
                                                                                    alt="image"
                                                                                    class="function__image lazyload"
                                                                                    title=""
                                                                                />
                                                                            </picture>
                                                                        </div>
                                                                        <div class="function__content">
                                                                            <a href="#" class="function__title">
                                                                                Демопоказ
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end .function-->
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- end .functions-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end .banner-->
                                </div>
                            </div>
                        </div>
                        <div class="banner-carousel__navigation page__container">
                            <div class="banner-carousel__pagination">
                                <!-- begin .bullet-pagination-->
                                <div class="bullet-pagination"></div>
                                <!-- end .bullet-pagination-->
                            </div>
                            <div class="banner-carousel__arrows">
                                <!-- begin .carousel-nav-->
                                <div
                                    class="carousel-nav carousel-nav_position_sides js-carousel-nav"
                                    data-nav-scope=".banner-carousel"
                                    data-nav-target=".swiper"
                                >
                                    <div class="carousel-nav__control">
                                        <button
                                            type="button"
                                            class="carousel-nav__arrow carousel-nav__arrow_type_prev js-carousel-nav-prev"
                                        >
                                            Предыдущий слайд
                                        </button>
                                    </div>
                                    <div class="carousel-nav__control">
                                        <button
                                            type="button"
                                            class="carousel-nav__arrow carousel-nav__arrow_type_next js-carousel-nav-next"
                                        >
                                            Следующий слайд
                                        </button>
                                    </div>
                                </div>
                                <!-- end .carousel-nav-->
                            </div>
                        </div>
                    </div>
                    <!-- end .banner-carousel-->
                    <div class="page__functions">
                        <!-- begin .functions-->
                        <div class="functions functions_special">
                            <ul class="functions__list">
                                <li class="functions__item">
                                    <!-- begin .function-->
                                    <div class="function functions__block">
                                        <div class="function__illustration">
                                            <picture class="function__picture">
                                                <img
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                    data-src="assets/blocks/function/images/4.svg"
                                                    width="60"
                                                    height="60"
                                                    alt="image"
                                                    class="function__image lazyload"
                                                    title=""
                                                />
                                            </picture>
                                        </div>
                                        <div class="function__content">
                                            <a href="/repair" class="function__title">Ремонт</a>
                                        </div>
                                    </div>
                                    <!-- end .function-->
                                </li>
                                <li class="functions__item">
                                    <!-- begin .function-->
                                    <div class="function functions__block">
                                        <div class="function__illustration">
                                            <picture class="function__picture">
                                                <img
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                    data-src="assets/blocks/function/images/5.svg"
                                                    width="60"
                                                    height="60"
                                                    alt="image"
                                                    class="function__image lazyload"
                                                    title=""
                                                />
                                            </picture>
                                        </div>
                                        <div class="function__content">
                                            <a href="/rent" class="function__title">Аренда</a>
                                        </div>
                                    </div>
                                    <!-- end .function-->
                                </li>
                                <li class="functions__item">
                                    <!-- begin .function-->
                                    <div class="function functions__block">
                                        <div class="function__illustration">
                                            <picture class="function__picture">
                                                <img
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                    data-src="assets/blocks/function/images/6.svg"
                                                    width="60"
                                                    height="60"
                                                    alt="image"
                                                    class="function__image lazyload"
                                                    title=""
                                                />
                                            </picture>
                                        </div>
                                        <div class="function__content">
                                            <a href="/poverka" class="function__title">Поверка</a>
                                        </div>
                                    </div>
                                    <!-- end .function-->
                                </li>
                                <li class="functions__item">
                                    <!-- begin .function-->
                                    <div class="function functions__block">
                                        <div class="function__illustration">
                                            <picture class="function__picture">
                                                <img
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                    data-src="assets/blocks/function/images/7.svg"
                                                    width="60"
                                                    height="60"
                                                    alt="image"
                                                    class="function__image lazyload"
                                                    title=""
                                                />
                                            </picture>
                                        </div>
                                        <div class="function__content">
                                            <a href="#" class="function__title">Спецработы</a>
                                        </div>
                                    </div>
                                    <!-- end .function-->
                                </li>
                                <li class="functions__item">
                                    <!-- begin .function-->
                                    <div class="function functions__block">
                                        <div class="function__illustration">
                                            <picture class="function__picture">
                                                <img
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                    data-src="assets/blocks/function/images/8.svg"
                                                    width="60"
                                                    height="60"
                                                    alt="image"
                                                    class="function__image lazyload"
                                                    title=""
                                                />
                                            </picture>
                                        </div>
                                        <div class="function__content">
                                            <a href="#" class="function__title">Диллерам</a>
                                        </div>
                                    </div>
                                    <!-- end .function-->
                                </li>
                            </ul>
                        </div>
                        <!-- end .functions-->
                    </div>
                </div>
            </div>
            <div class="page__section">
                <div class="page__container">
                    <!-- begin .section-->
                    <div class="section">
                        <div class="section__header section__header_type_inline">
                            <div class="section__title">
                                <!-- begin .title-->
                                <div class="title title_size_h1">Популярные товары</div>
                                <!-- end .title-->
                            </div>
                        </div>
                        <div class="section__content">
                            <div class="section__product-carousel">
                                <div class="section__content">
                                    <div class="section__panel">
                                        <!-- begin .product-carousel-->
                                        <div class="product-carousel">
                                            <div class="product-carousel__container swiper js-product-carousel">
                                                <div class="product-carousel__wrapper swiper-wrapper">
                                                    <?php foreach ($hits as $hit) {
                                                        
                                                        $json_picture = $hit['pictures'];
                                                        $urls = json_decode($json_picture);

                                                        $json_props = $hit['offer_props'];
                                                        $props = json_decode($json_props);
                                                       
                                                        
                                                         ?>
                                                    <div class="product-carousel__slide swiper-slide">
                                                        <!-- begin .product-snippet-->
                                                        <div class="product-snippet product-carousel__snippet">
                                                            <a href="/product-card?id=<?= $hit['id']?>" class="product-snippet__illustration">
                                                                <picture class="product-snippet__picture">
                                                                    <img
                                                                        src="<?= $urls[0]?>"
                                                                        data-src="<?= $urls[0]?>"
                                                                        alt="image"
                                                                        class="product-snippet__image swiper-lazy"
                                                                        title=""
                                                                    />
                                                                </picture>
                                                            </a>
                                                            <div class="product-snippet__main">
                                                                <div class="product-snippet__info">
                                                                    <div class="product-snippet__labels">
                                                                        <!-- begin .label-->
                                                                        <div class="label">
                                                                            <div class="label__labels">
                                                                                <div
                                                                                    class="label__label label__label_style_popular"
                                                                                >
                                                                                    Хит продаж!
                                                                                </div>
                                                                                <?php if (1 ==($hit['verification']) ){ ?>
                                                                                <div
                                                                                    class="label__label label__label_style_check"
                                                                                >
                                                                                    Поверка в комплекте
                                                                                </div>
                                                                                <?php } ?>
                                                                                <?php if (null !=($hit['stateregister']) ){ ?>
                                                                                <div
                                                                                    class="label__label label__label_style_gos"
                                                                                >
                                                                                    Госреестр
                                                                                </div>
                                                                                <?php } ?>
                                                                                <?php if ($hit['discount'] != null && $hit['discount'] > 0 && $hit['discount'] <= 100 ){ ?>
                                                                                    <div
                                                                                    class="label__label label__label_style_discount">
                                                                                    Скидка
                                                                                    </div>
                                                                                <?php }?>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end .label-->
                                                                    </div>
                                                                    <div class="product-snippet__title">
                                                                        <a href="/product-card?id=<?= $hit['id']?>" class="product-snippet__link">
                                                                            <?= $hit['name'] ?>
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-snippet__props">
                                                                        <!-- begin .props-->
                                                                        <div class="props">
                                                                            
                                                                                <?php if($props == null){ ?>
                                                                                    <div class="props__prop">
                                                                                        <div class="props__label">
                                                                                            Основные характеристики:
                                                                                        </div>
                                                                                        <div class="props__value">
                                                                                            Отсутствуют
                                                                                        </div>
                                                                                    </div>
                                                                                <?php }else{   ?>
                                                                                    <?php foreach ($props as $prop) { ?> 
                                                                                        <div class="props__prop">                                                                                       
                                                                                            <div class="props__label">
                                                                                                <?= $prop->label ?>
                                                                                            </div>
                                                                                            <div class="props__value">
                                                                                                <?= $prop->value ?>
                                                                                            </div> 
                                                                                        </div>

                                                                                    <?php }}?>
                                                                        </div>
                                                                        <!-- end .props-->
                                                                    </div>
                                                                </div>
                                                                <div class="product-snippet__price-group">
                                                                    <!-- begin .price-group-->
                                                                    <div class="price-group">
                                                                        <?php if ($hit['discount'] != null && $hit['discount'] > 0 && $hit['discount'] <= 100 ){
                                                                            $newPrice = $hit['price'] * (1 - ($hit['discount'] / 100))
                                                                            ?>
                                                                        <div class="price-group__extra">
                                                                            <div
                                                                                class="price-group__price price-group__price_type_old"
                                                                            >
                                                                                <span class="price-group__value">
                                                                                    <?= $hit['price'] ?>
                                                                                </span>
                                                                                <span class="price-group__unit">₽</span>
                                                                            </div>
                                                                        </div>
                                                                        <?php } ?>
                                                                        <div class="price-group__main">
                                                                            <div class="price-group__price">
                                                                                <span class="price-group__value">
                                                                                    <?= ($hit['discount'] != null)? $newPrice: $hit['price']?>
                                                                                </span>
                                                                                <span class="price-group__unit">₽</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end .price-group-->
                                                                    <!-- start .count-group-->
                                                                    <?php if($hit['quantity'] > 0){ ?>
                                                                        <div class="product-snippet__availability product-snippet__availability product-snippet__availability_green"> 
                                                                            <?=  'В наличии '.$hit['quantity'].' шт.' ?>
                                                                        </div>
                                                                   <?php }else{ ?>
                                                                    <div class="product-snippet__availability product-snippet__availability product-snippet__availability_red"> 
                                                                        <?=  'Нет в наличии' ?>
                                                                    </div>
                                                                    <?php } ?>
                                                                    <!-- end .count-group-->
                                                                </div>
                                                                <div class="product-snippet__button">
                                                                    <!-- begin .button-->
                                                                    <a
                                                                    class="order_btn button button_width_full button_text-size_l button_type_order js-modal"
                                                                    href="#modalOrder"
                                                                    data-order="<?=$hit['id']?>"
                                                                >
                                                                    <span
                                                                        class="button__wrapper button__wrapper_type_initial"
                                                                    >
                                                                        <span class="button__holder">
                                                                            <span class="button__text">Заказать</span>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                                    <!-- end .button-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end .product-snippet-->
                                                    </div>

                                                    <?php } ?>

                                                    
                                                
                                                </div>
                                            </div>
                                            <div class="product-carousel__navigation">
                                                <div class="product-carousel__arrows">
                                                    <!-- begin .carousel-nav-->
                                                    <div
                                                        class="carousel-nav carousel-nav_position_sides js-carousel-nav"
                                                        data-nav-scope=".product-carousel"
                                                        data-nav-target=".swiper"
                                                    >
                                                        <div class="carousel-nav__control">
                                                            <button
                                                                type="button"
                                                                class="carousel-nav__arrow carousel-nav__arrow_type_prev js-carousel-nav-prev"
                                                            >
                                                                Предыдущий слайд
                                                            </button>
                                                        </div>
                                                        <div class="carousel-nav__control">
                                                            <button
                                                                type="button"
                                                                class="carousel-nav__arrow carousel-nav__arrow_type_next js-carousel-nav-next"
                                                            >
                                                                Следующий слайд
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!-- end .carousel-nav-->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end .product-carousel-->
                                        <!-- begin .mobile-products-->
                                        <div class="mobile-products">
                                            <div class="mobile-products__container">
                                                <div class="mobile-products__wrapper">
                                                    <?php foreach ($hits as $hit) {
                                                        $json_picture = $hit['pictures'];
                                                        $urls = json_decode($json_picture);

                                                        $json_props = $hit['offer_props'];
                                                        $props = json_decode($json_props);
                                                         ?>
                                                    <div class="mobile-products__item">
                                                        <!-- begin .product-snippet-->
                                                        <div class="product-snippet mobile-products__snippet">
                                                            <a href="/product-card?id=<?= $hit['id']?>" class="product-snippet__illustration">
                                                                <picture class="product-snippet__picture">
                                                                    <img
                                                                        src="<?= $urls[0]?>"
                                                                        data-src="<?= $urls[0]?>"
                                                                        alt="image"
                                                                        class="product-snippet__image swiper-lazy"
                                                                        title=""
                                                                    />
                                                                </picture>
                                                            </a>
                                                            <div class="product-snippet__main">
                                                                <div class="product-snippet__info">
                                                                    <div class="product-snippet__labels">
                                                                        <!-- begin .label-->
                                                                        <div class="label">
                                                                            <div class="label__labels">
                                                                                <div
                                                                                    class="label__label label__label_style_popular"
                                                                                >
                                                                                    Хит продаж!
                                                                                </div>
                                                                                <?php if (1 ==($hit['verification']) ){ ?>
                                                                                <div
                                                                                    class="label__label label__label_style_check"
                                                                                >
                                                                                    Поверка в комплекте
                                                                                </div>
                                                                                <?php } ?>
                                                                                <?php if (null !=($hit['stateregister']) ){ ?>
                                                                                <div
                                                                                    class="label__label label__label_style_gos"
                                                                                >
                                                                                    Госреестр
                                                                                </div>
                                                                                <?php } ?>
                                                                                <?php if ($hit['discount'] != null && $hit['discount'] > 0 && $hit['discount'] <= 100 ){ ?>
                                                                                <div
                                                                                class="label__label label__label_style_discount">
                                                                                Скидка
                                                                                </div>
                                                                                <?php }?>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end .label-->
                                                                    </div>
                                                                    <div class="product-snippet__title">
                                                                        <a href="/product-card?id=<?= $hit['id']?>" class="product-snippet__link">
                                                                            <?= $hit['name'] ?>
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-snippet__props">
                                                                        <!-- begin .props-->
                                                                        <div class="props">
                                                                            
                                                                            <?php if($props == null){ ?>
                                                                                <div class="props__prop">
                                                                                    <div class="props__label">
                                                                                        Основные характеристики:
                                                                                    </div>
                                                                                    <div class="props__value">
                                                                                        Отсутствуют
                                                                                    </div>
                                                                                </div>
                                                                            <?php }else{   ?>
                                                                                <?php foreach ($props as $prop) { ?> 
                                                                                    <div class="props__prop">                                                                                       
                                                                                        <div class="props__label">
                                                                                            <?= $prop->label ?>
                                                                                        </div>
                                                                                        <div class="props__value">
                                                                                            <?= $prop->value ?>
                                                                                        </div> 
                                                                                    </div>

                                                                                <?php }}?>
                                                                        </div>
                                                                        <!-- end .props-->
                                                                    </div>
                                                                </div>
                                                                <div class="product-snippet__price-group">
                                                                    <!-- begin .price-group-->
                                                                    <div class="price-group">
                                                                        <?php if ($hit['discount'] != null && $hit['discount'] > 0 && $hit['discount'] <= 100 ){
                                                                            $newPrice = $hit['price'] * (1 - ($hit['discount'] / 100))
                                                                            ?>
                                                                        <div class="price-group__extra">
                                                                            <div
                                                                                class="price-group__price price-group__price_type_old"
                                                                            >
                                                                                <span class="price-group__value">
                                                                                    <?= $hit['price'] ?>
                                                                                </span>
                                                                                <span class="price-group__unit">₽</span>
                                                                            </div>
                                                                        </div>
                                                                        <?php } ?>
                                                                        <div class="price-group__main">
                                                                            <div class="price-group__price">
                                                                                <span class="price-group__value">
                                                                                    <?= ($hit['discount'] != null)? $newPrice: $hit['price']?>
                                                                                </span>
                                                                                <span class="price-group__unit">₽</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end .price-group-->
                                                                    <!-- start .count-group-->
                                                                    <?php if($hit['quantity'] > 0){ ?>
                                                                        <div class="product-snippet__availability product-snippet__availability product-snippet__availability_green"> 
                                                                            <?=  'В наличии '.$hit['quantity'].' шт.' ?>
                                                                        </div>
                                                                   <?php }else{ ?>
                                                                    <div class="product-snippet__availability product-snippet__availability product-snippet__availability_red"> 
                                                                        <?=  'Нет в наличии' ?>
                                                                    </div>
                                                                    <?php } ?>
                                                                    <!-- end .count-group-->
                                                                </div>
                                                                <div class="product-snippet__button">
                                                                    <!-- begin .button-->
                                                                    <a
                                                                    class="order_btn button button_width_full button_text-size_l button_type_order js-modal"
                                                                    href="#modalOrder"
                                                                    data-order="<?=$hit['id']?>"
                                                                >
                                                                    <span
                                                                        class="button__wrapper button__wrapper_type_initial"
                                                                    >
                                                                        <span class="button__holder">
                                                                            <span class="button__text ">Заказать</span>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                                    <!-- end .button-->
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!-- end .product-snippet-->
                                                    </div>
                                                    <?php }?>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end .mobile-products-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end .section-->
                </div>
            </div>
            <div class="page__section">
                <div class="page__container">
                    <!-- begin .section-->
                    <div class="section">
                        <div class="section__header section__header_type_inline">
                            <div class="section__title">
                                <!-- begin .title-->
                                <div class="title title_size_h1">Новинки</div>
                                <!-- end .title-->
                            </div>                            
                        </div>
                        <div class="section__content">
                            <div class="section__product-carousel">
                                <div class="section__content">
                                    <div class="section__panel">
                                        <!-- begin .product-carousel-->
                                        <div class="product-carousel">
                                            <div class="product-carousel__container swiper js-product-carousel">
                                                <div class="product-carousel__wrapper swiper-wrapper">
                                                    <?php foreach ($newOffers as $new) { 
                                                        $json_picture = $new['pictures'];
                                                        $urls = json_decode($json_picture);

                                                        $json_props = $new['offer_props'];
                                                        $props = json_decode($json_props);
                                                        
                                                         ?>
                                                   
                                                    <div class="product-carousel__slide swiper-slide">
                                                        <!-- begin .product-snippet-->
                                                        <div class="product-snippet product-carousel__snippet">
                                                            <a href="/product-card?id=<?= $new['id']?>" class="product-snippet__illustration">
                                                                <picture class="product-snippet__picture">
                                                                    <img
                                                                        src="<?= $urls[0]?>"
                                                                        data-src="<?= $urls[0]?>"
                                                                        alt="image"
                                                                        class="product-snippet__image swiper-lazy"
                                                                        title=""
                                                                    />
                                                                </picture>
                                                            </a>
                                                            <div class="product-snippet__main">
                                                                <div class="product-snippet__info">
                                                                    <div class="product-snippet__labels">
                                                                        <!-- begin .label-->
                                                                        <div class="label">
                                                                            <div class="label__labels">
                                                                                <?php if ($new['hit'] == 1){ ?>
                                                                                <div
                                                                                    class="label__label label__label_style_popular"
                                                                                >
                                                                                    Хит продаж!
                                                                                </div>
                                                                                <?php } ?>
                                                                                <?php if (1 ==($new['verification']) ){ ?>
                                                                                <div
                                                                                    class="label__label label__label_style_check"
                                                                                >
                                                                                    Поверка в комплекте
                                                                                </div>
                                                                                <?php } ?>
                                                                                <?php if (null !=($new['stateregister']) ){ ?>
                                                                                <div
                                                                                    class="label__label label__label_style_gos"
                                                                                >
                                                                                    Госреестр
                                                                                </div>
                                                                                <?php } ?>
                                                                                <?php if ($new['discount'] != null && $new['discount'] > 0 && $new['discount'] <= 100 ){ ?>
                                                                                <div
                                                                                class="label__label label__label_style_discount">
                                                                                Скидка
                                                                                </div>
                                                                                <?php }?>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end .label-->
                                                                    </div>
                                                                    <div class="product-snippet__title">
                                                                        <a href="/product-card?id=<?= $new['id']?>" class="product-snippet__link">
                                                                            <?= $new['name'] ?>
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-snippet__props">
                                                                        <!-- begin .props-->
                                                                        <div class="props">
                                                                            
                                                                            <?php if($props == null){ ?>
                                                                                <div class="props__prop">
                                                                                    <div class="props__label">
                                                                                        Основные характеристики:
                                                                                    </div>
                                                                                    <div class="props__value">
                                                                                        Отсутствуют
                                                                                    </div>
                                                                                </div>
                                                                            <?php }else{   ?>
                                                                                <?php foreach ($props as $prop) { ?> 
                                                                                    <div class="props__prop">                                                                                       
                                                                                        <div class="props__label">
                                                                                            <?= $prop->label ?>
                                                                                        </div>
                                                                                        <div class="props__value">
                                                                                            <?= $prop->value ?>
                                                                                        </div> 
                                                                                    </div>

                                                                                <?php }}?>
                                                                        </div>
                                                                        <!-- end .props-->
                                                                    </div>
                                                                </div>
                                                                <div class="product-snippet__price-group">
                                                                    <!-- begin .price-group-->
                                                                    <div class="price-group">
                                                                        <?php if ($new['discount'] != null && $new['discount'] > 0 && $new['discount'] <= 100 ){
                                                                            $newPrice = $new['price'] * (1 - ($new['discount'] / 100))
                                                                            ?>
                                                                        <div class="price-group__extra">
                                                                            <div
                                                                                class="price-group__price price-group__price_type_old"
                                                                            >
                                                                                <span class="price-group__value">
                                                                                    <?= $new['price'] ?>
                                                                                </span>
                                                                                <span class="price-group__unit">₽</span>
                                                                            </div>
                                                                        </div>
                                                                        <?php } ?>
                                                                        <div class="price-group__main">
                                                                            <div class="price-group__price">
                                                                                <span class="price-group__value">
                                                                                    <?= ($new['discount'] != null)? $newPrice: $new['price']?>
                                                                                </span>
                                                                                <span class="price-group__unit">₽</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end .price-group-->
                                                                    <!-- start .count-group-->
                                                                    <?php if($new['quantity'] > 0){ ?>
                                                                        <div class="product-snippet__availability product-snippet__availability product-snippet__availability_green"> 
                                                                            <?=  'В наличии '.$new['quantity'].' шт.' ?>
                                                                        </div>
                                                                   <?php }else{ ?>
                                                                    <div class="product-snippet__availability product-snippet__availability product-snippet__availability_red"> 
                                                                        <?=  'Нет в наличии' ?>
                                                                    </div>
                                                                    <?php } ?>
                                                                    <!-- end .count-group-->
                                                                </div>
                                                                <div class="product-snippet__button">
                                                                    <!-- begin .button-->
                                                                    <a
                                                                    class="order_btn button button_width_full button_text-size_l button_type_order js-modal"
                                                                    href="#modalOrder"
                                                                    data-order="<?=$new['id']?>"
                                                                >
                                                                    <span
                                                                        class="button__wrapper button__wrapper_type_initial"
                                                                    >
                                                                        <span class="button__holder">
                                                                            <span class="button__text " >Заказать</span>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                                    <!-- end .button-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end .product-snippet-->
                                                    </div>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                            <div class="product-carousel__navigation">
                                                <div class="product-carousel__arrows">
                                                    <!-- begin .carousel-nav-->
                                                    <div
                                                        class="carousel-nav carousel-nav_position_sides js-carousel-nav"
                                                        data-nav-scope=".product-carousel"
                                                        data-nav-target=".swiper"
                                                    >
                                                        <div class="carousel-nav__control">
                                                            <button
                                                                type="button"
                                                                class="carousel-nav__arrow carousel-nav__arrow_type_prev js-carousel-nav-prev"
                                                            >
                                                                Предыдущий слайд
                                                            </button>
                                                        </div>
                                                        <div class="carousel-nav__control">
                                                            <button
                                                                type="button"
                                                                class="carousel-nav__arrow carousel-nav__arrow_type_next js-carousel-nav-next"
                                                            >
                                                                Следующий слайд
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!-- end .carousel-nav-->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end .product-carousel-->
                                        <!-- begin .mobile-products-->
                                        <div class="mobile-products">
                                            <div class="mobile-products__container">
                                                <div class="mobile-products__wrapper">
                                                    <?php foreach ($newOffers as $new) {
                                                        $json_picture = $new['pictures'];
                                                        $urls = json_decode($json_picture);

                                                        $json_props = $new['offer_props'];
                                                        $props = json_decode($json_props);
                                                         ?>
                                                    <div class="mobile-products__item">
                                                        <!-- begin .product-snippet-->
                                                        <div class="product-snippet mobile-products__snippet">
                                                            <a href="/product-card?id=<?= $new['id']?>" class="product-snippet__illustration">
                                                                <picture class="product-snippet__picture">
                                                                    <img
                                                                        src="<?= $urls[0]?>"
                                                                        data-src="<?= $urls[0]?>"
                                                                        alt="image"
                                                                        class="product-snippet__image swiper-lazy"
                                                                        title=""
                                                                    />
                                                                </picture>
                                                            </a>
                                                            <div class="product-snippet__main">
                                                                <div class="product-snippet__info">
                                                                    <div class="product-snippet__labels">
                                                                        <!-- begin .label-->
                                                                        <div class="label">
                                                                            <div class="label__labels">
                                                                                <?php if ($new['hit'] == 1){ ?>
                                                                                <div
                                                                                    class="label__label label__label_style_popular"
                                                                                >
                                                                                    Хит продаж!
                                                                                </div>
                                                                                <?php } ?>
                                                                                <?php if (1 ==($new['verification']) ){ ?>
                                                                                <div
                                                                                    class="label__label label__label_style_check"
                                                                                >
                                                                                    Поверка в комплекте
                                                                                </div>
                                                                                <?php } ?>
                                                                                <?php if (null !=($new['stateregister']) ){ ?>
                                                                                <div
                                                                                    class="label__label label__label_style_gos"
                                                                                >
                                                                                    Госреестр
                                                                                </div>
                                                                                <?php } ?>
                                                                                <?php if ($new['discount'] != null && $new['discount'] > 0 && $new['discount'] <= 100 ){ ?>
                                                                                <div
                                                                                class="label__label label__label_style_discount">
                                                                                    Скидка
                                                                                </div>
                                                                                <?php }?>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end .label-->
                                                                    </div>
                                                                    <div class="product-snippet__title">
                                                                        <a href="/product-card?id=<?= $new['id']?>" class="product-snippet__link">
                                                                            <?= $new['name'] ?>
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-snippet__props">
                                                                        <!-- begin .props-->
                                                                        <div class="props">
                                                                            <?php if($props == null){ ?>
                                                                                <div class="props__prop">
                                                                                    <div class="props__label">
                                                                                        Основные характеристики:
                                                                                    </div>
                                                                                    <div class="props__value">
                                                                                        Отсутствуют
                                                                                    </div>
                                                                                </div>
                                                                            <?php }else{   ?>
                                                                                <?php foreach ($props as $prop) { ?> 
                                                                                    <div class="props__prop">                                                                                       
                                                                                        <div class="props__label">
                                                                                            <?= $prop->label ?>
                                                                                        </div>
                                                                                        <div class="props__value">
                                                                                            <?= $prop->value ?>
                                                                                        </div> 
                                                                                    </div>

                                                                                <?php }}?>
                                                                        </div>
                                                                        <!-- end .props-->
                                                                    </div>
                                                                </div>
                                                                <div class="product-snippet__price-group">
                                                                    <!-- begin .price-group-->
                                                                    <div class="price-group">
                                                                        <?php if ($new['discount'] != null && $new['discount'] > 0 && $new['discount'] <= 100 ){
                                                                            $newPrice = $new['price'] * (1 - ($new['discount'] / 100))
                                                                            ?>
                                                                        <div class="price-group__extra">
                                                                            <div
                                                                                class="price-group__price price-group__price_type_old"
                                                                            >
                                                                                <span class="price-group__value">
                                                                                    <?= $new['price'] ?>
                                                                                </span>
                                                                                <span class="price-group__unit">₽</span>
                                                                            </div>
                                                                        </div>
                                                                        <?php } ?>
                                                                        <div class="price-group__main">
                                                                            <div class="price-group__price">
                                                                                <span class="price-group__value">
                                                                                    <?= ($new['discount'] != null)? $newPrice: $new['price']?>
                                                                                </span>
                                                                                <span class="price-group__unit">₽</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end .price-group-->
                                                                    <!-- start .count-group-->
                                                                    <?php if($new['quantity'] > 0){ ?>
                                                                        <div class="product-snippet__availability product-snippet__availability product-snippet__availability_green"> 
                                                                            <?=  'В наличии '.$new['quantity'].' шт.' ?>
                                                                        </div>
                                                                   <?php }else{ ?>
                                                                    <div class="product-snippet__availability product-snippet__availability product-snippet__availability_red"> 
                                                                        <?=  'Нет в наличии' ?>
                                                                    </div>
                                                                    <?php } ?>
                                                                    <!-- end .count-group-->
                                                                </div>
                                                                <div class="product-snippet__button">
                                                                    <!-- begin .button-->
                                                                    <a
                                                                    class="order_btn button button_width_full button_text-size_l button_type_order js-modal"
                                                                    href="#modalOrder"
                                                                    data-order="<?=$new['id']?>"
                                                                >
                                                                    <span
                                                                        class="button__wrapper button__wrapper_type_initial"
                                                                    >
                                                                        <span class="button__holder">
                                                                            <span class="button__text ">Заказать</span>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                                    <!-- end .button-->
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <!-- end .product-snippet-->
                                                    </div>
                                                    <?php } ?>                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end .mobile-products-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end .section-->
                </div>
            </div>
            <div class="page__section">
                <div class="page__container page__container__desktop">
                    <!-- begin .section-->
                    <div class="section">
                        <div class="section__content">
                            <div class="section__info-panel">
                                <!-- begin .info-panel-->
                                <div class="info-panel">
                                    <div class="info-panel__content">
                                        <div class="info-panel__illustration-background">
                                            <picture class="info-panel__picture">
                                                <img
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                    data-src="assets/blocks/info-panel/images/1.png"
                                                    height="100%"
                                                    alt="image"
                                                    class="info-panel__image lazyload"
                                                    title=""
                                                />
                                            </picture>
                                        </div>
                                        <div class="info-panel__title">
                                            <!-- begin .title-->
                                            <div class="title title_size_h1">Аренда оборудования</div>
                                            <!-- end .title-->
                                        </div>
                                    </div>
                                    <div class="info-panel__illustration">
                                        <picture class="info-panel__picture">
                                            <source
                                                srcset="assets/blocks/info-panel/images/5-m.png"
                                                type="image/png"
                                                media="(max-width: 768px)"
                                                class="info-panel__source"
                                            />
                                            <img
                                                src="assets/blocks/info-panel/images/5.png"
                                                alt="Аренда оборудования"
                                                class="info-panel__image"
                                                title=""
                                            />
                                        </picture>
                                    </div>
                                </div>
                                <!-- end .info-panel-->
                            </div>
                        </div>
                    </div>
                    <!-- end .section-->
                </div>
            </div>
            <div class="page__section">
                <div class="page__container">
                    <!-- begin .section-->
                    <div class="section">
                        <div class="section__header section__header_type_inline">
                            <div class="section__title">
                                <!-- begin .title-->
                                <div class="title title_size_h1">Партнеры</div>
                                <!-- end .title-->
                            </div>
                        </div>
                        <div class="section__content">
                            <div class="section__logo-carousel">
                                <!-- begin .logo-carousel-->
                                <div class="logo-carousel">
                                    <div class="logo-carousel__container swiper js-logo-carousel">
                                        <div class="logo-carousel__wrapper swiper-wrapper">
                                            <div class="logo-carousel__slide swiper-slide">
                                                <div class="logo-carousel__images">
                                                    <div class="logo-carousel__illustration">
                                                        <picture class="logo-carousel__picture">
                                                            <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="assets/blocks/logo-carousel/images/1.png"
                                                                width="300"
                                                                height="200"
                                                                alt="image"
                                                                class="logo-carousel__image swiper-lazy"
                                                                title=""
                                                            />
                                                        </picture>
                                                    </div>
                                                    <div class="logo-carousel__illustration">
                                                        <picture class="logo-carousel__picture">
                                                            <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="assets/blocks/logo-carousel/images/2.png"
                                                                width="300"
                                                                height="200"
                                                                alt="image"
                                                                class="logo-carousel__image swiper-lazy"
                                                                title=""
                                                            />
                                                        </picture>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="logo-carousel__slide swiper-slide">
                                                <div class="logo-carousel__images">
                                                    <div class="logo-carousel__illustration">
                                                        <picture class="logo-carousel__picture">
                                                            <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="assets/blocks/logo-carousel/images/3.png"
                                                                width="300"
                                                                height="200"
                                                                alt="image"
                                                                class="logo-carousel__image swiper-lazy"
                                                                title=""
                                                            />
                                                        </picture>
                                                    </div>
                                                    <div class="logo-carousel__illustration">
                                                        <picture class="logo-carousel__picture">
                                                            <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="assets/blocks/logo-carousel/images/4.png"
                                                                width="300"
                                                                height="200"
                                                                alt="image"
                                                                class="logo-carousel__image swiper-lazy"
                                                                title=""
                                                            />
                                                        </picture>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="logo-carousel__slide swiper-slide">
                                                <div class="logo-carousel__images">
                                                    <div class="logo-carousel__illustration">
                                                        <picture class="logo-carousel__picture">
                                                            <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="assets/blocks/logo-carousel/images/1.png"
                                                                width="300"
                                                                height="200"
                                                                alt="image"
                                                                class="logo-carousel__image swiper-lazy"
                                                                title=""
                                                            />
                                                        </picture>
                                                    </div>
                                                    <div class="logo-carousel__illustration">
                                                        <picture class="logo-carousel__picture">
                                                            <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="assets/blocks/logo-carousel/images/2.png"
                                                                width="300"
                                                                height="200"
                                                                alt="image"
                                                                class="logo-carousel__image swiper-lazy"
                                                                title=""
                                                            />
                                                        </picture>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="logo-carousel__slide swiper-slide">
                                                <div class="logo-carousel__images">
                                                    <div class="logo-carousel__illustration">
                                                        <picture class="logo-carousel__picture">
                                                            <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="assets/blocks/logo-carousel/images/3.png"
                                                                width="300"
                                                                height="200"
                                                                alt="image"
                                                                class="logo-carousel__image swiper-lazy"
                                                                title=""
                                                            />
                                                        </picture>
                                                    </div>
                                                    <div class="logo-carousel__illustration">
                                                        <picture class="logo-carousel__picture">
                                                            <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="assets/blocks/logo-carousel/images/4.png"
                                                                width="300"
                                                                height="200"
                                                                alt="image"
                                                                class="logo-carousel__image swiper-lazy"
                                                                title=""
                                                            />
                                                        </picture>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="logo-carousel__slide swiper-slide">
                                                <div class="logo-carousel__images">
                                                    <div class="logo-carousel__illustration">
                                                        <picture class="logo-carousel__picture">
                                                            <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="assets/blocks/logo-carousel/images/1.png"
                                                                width="300"
                                                                height="200"
                                                                alt="image"
                                                                class="logo-carousel__image swiper-lazy"
                                                                title=""
                                                            />
                                                        </picture>
                                                    </div>
                                                    <div class="logo-carousel__illustration">
                                                        <picture class="logo-carousel__picture">
                                                            <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="assets/blocks/logo-carousel/images/2.png"
                                                                width="300"
                                                                height="200"
                                                                alt="image"
                                                                class="logo-carousel__image swiper-lazy"
                                                                title=""
                                                            />
                                                        </picture>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="logo-carousel__slide swiper-slide">
                                                <div class="logo-carousel__images">
                                                    <div class="logo-carousel__illustration">
                                                        <picture class="logo-carousel__picture">
                                                            <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="assets/blocks/logo-carousel/images/3.png"
                                                                width="300"
                                                                height="200"
                                                                alt="image"
                                                                class="logo-carousel__image swiper-lazy"
                                                                title=""
                                                            />
                                                        </picture>
                                                    </div>
                                                    <div class="logo-carousel__illustration">
                                                        <picture class="logo-carousel__picture">
                                                            <img
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="assets/blocks/logo-carousel/images/4.png"
                                                                width="300"
                                                                height="200"
                                                                alt="image"
                                                                class="logo-carousel__image swiper-lazy"
                                                                title=""
                                                            />
                                                        </picture>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="logo-carousel__navigation">
                                        <div class="logo-carousel__arrows">
                                            <!-- begin .carousel-nav-->
                                            <div
                                                class="carousel-nav carousel-nav_position_sides js-carousel-nav"
                                                data-nav-scope=".logo-carousel"
                                                data-nav-target=".swiper"
                                            >
                                                <div class="carousel-nav__control">
                                                    <button
                                                        type="button"
                                                        class="carousel-nav__arrow carousel-nav__arrow_type_prev js-carousel-nav-prev"
                                                    >
                                                        Предыдущий слайд
                                                    </button>
                                                </div>
                                                <div class="carousel-nav__control">
                                                    <button
                                                        type="button"
                                                        class="carousel-nav__arrow carousel-nav__arrow_type_next js-carousel-nav-next"
                                                    >
                                                        Следующий слайд
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- end .carousel-nav-->
                                        </div>
                                    </div>
                                </div>
                                <!-- end .logo-carousel-->
                            </div>
                        </div>
                    </div>
                    <!-- end .section-->
                </div>
            </div>
        </div>
        @include('layouts.footer')
        <div class="page__modals">
            @include('layouts.modalQuestion')
            @include('layouts.modalOrder')
            @include('layouts.modalGeoPromt')
            @include('layouts.modalGeoSelect')
        </div>
        <script src="assets/components/jquery-3.4.1/jquery.min.js"></script>
        <script src="assets/components/vanilla-lazyload-17.5.0/lazyload.min.js"></script>
        <script src="assets/components/swiper-7.2.0/js/swiper-bundle.min.js"></script>
        <script src="assets/components/wnumb-1.1.0/wNumb.js"></script>
        <script src="assets/components/noUiSlider-master/nouislider.min.js"></script>
        <script src="assets/components/just-validate-3.10.0/just-validate.production.min.js"></script>
        <script src="assets/components/Inputmask/inputmask.min.js"></script>
        <script src="assets/components/fancybox-4.0.7/fancybox.umd.js"></script>
        <script src="assets/scripts/svg4everybody.js"></script>
        <script src="assets/scripts/helpers.js"></script>
        <script src="assets/scripts/common.js"></script>
        <script src="assets/scripts/validate.js"></script>
        <script src="assets/scripts/search-form.js"></script>
        <script src="assets/scripts/custom.js"></script>
        <script src="assets/scripts/create-content-modal-order.js"></script>
        



    </body>
</html>
<!-- end .page-->
