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
        <title>Аренда <?= $currentCategory[0]['name'] ?> | Мир Вендинга</title>
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
        <link href="assets/styles/app.css?1686691536368" rel="stylesheet" />
        <link href="assets/styles/custom.css?1686691536368" rel="stylesheet" />
    </head>
    <body class="page__body">
    @include('layouts.app')
    <div class="page__content">
        <div class="page__breadcrumbs">
            <div class="page__container">
                <!-- begin .breadcrumbs-->
                <div class="breadcrumbs">
                    <ul
                        itemscope="itemscope"
                        itemtype="https://schema.org/BreadcrumbList"
                        class="breadcrumbs__list"
                    >
                        <li
                            itemprop="itemListElement"
                            itemscope="itemscope"
                            itemtype="https://schema.org/ListItem"
                            class="breadcrumbs__item"
                        >
                            <a href="/uslugi" itemprop="name" class="breadcrumbs__link">Услуги</a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li
                            itemprop="itemListElement"
                            itemscope="itemscope"
                            itemtype="https://schema.org/ListItem"
                            class="breadcrumbs__item"
                        >
                            <a href="/repair" itemprop="name" class="breadcrumbs__link">Ремонт</a>
                            <meta itemprop="position" content="2" />
                        </li>
                        <li
                            itemprop="itemListElement"
                            itemscope="itemscope"
                            itemtype="https://schema.org/ListItem"
                            class="breadcrumbs__item"
                        >
                            <a href="#" itemprop="name" class="breadcrumbs__link"><?= $currentCategory[0]['name'] ?></a>
                            <meta itemprop="position" content="3" />
                        </li>
                    </ul>
                </div>
                <div class="page__section">
                    <div class="page__container">
                        <!-- begin .section-->
                        <div class="section">
                            <div class="section__header section__header_type_inline">
                                <div class="section__title">
                                    <!-- begin .title-->
                                    <div class="title title_size_h2">Ремонт <?= $currentCategory[0]['name'] ?></div>
                                    <!-- end .title-->
                                </div>
                            </div>
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
                        <!-- end .section-->
                    </div>
                </div>
                <div class="page__section">
                    <div class="page__container">
                        <!-- begin .section-->
                        <div class="section section_spacing_close">
                            <div class="section__text-content">
                                <div class="section__row">
                                    <h4 class="section__title">Порядок сдачи нивелира в ремонт</h4>
                                </div>
                                <div class="section__row">
                                    <h4 class="section__title">1. Передача прибора и оформление документов</h4>
                                    <p class="section__pragraph">
                                        Передайте нам подлежащий ремонту нивелир удобным вам способом.По факту приёма будет
                                        составлен акт приёмки-передачи.Для ремонта по гарантии также нужен гарантийный
                                        талон.
                                    </p>
                                </div>
                                <div class="section__row">
                                    <h4 class="section__title">2. Согласование сроков и стоимости</h4>
                                    <p class="section__pragraph">
                                        Наши специалисты проведут диагностику и сообщат вам сроки выполнения ремонта и его
                                        полную стоимость.
                                    </p>
                                </div>
                                <div class="section__row">
                                    <h4 class="section__title">3. Оплата</h4>
                                    <p class="section__pragraph">Вы можете оплатить ремонт двумя способами:</p>
                                    <ul class="section__list">
                                        <li class="section__list-item">Наличными в нашем офисе.</li>
                                        <li class="section__list-item">Безналичным расчётом.</li>
                                    </ul>
                                </div>
                                <div class="section__row">
                                    <h4 class="section__title">4. Получение прибора после ремонта</h4>
                                    <p class="section__pragraph">
                                        Для получения нивелира после ремонта вам потребуется составленный акт
                                        приёмки-передачи.Юридическим лицам, оплатившим по безналичному расчёту, потребуется
                                        также печать или доверенность организации.
                                    </p>
                                </div>
                                <div class="section__row">
                                    <h4 class="section__title">Приём и доставка</h4>
                                    <p class="section__pragraph">
                                        Принести прибор в наш сервисный центр и забрать его по готовности самостоятельно.
                                    </p>
                                    <p class="section__pragraph">
                                        Вызвать курьера, который заберёт прибор по указанному адресу и доставит по
                                        завершении ремонта.
                                    </p>
                                    <ul class="section__list">
                                        <li class="section__list-item">Стоимость в пределах города — 500.-*</li>
                                        <li class="section__list-item">Стоимость за пределами города — от 500.-*</li>
                                    </ul>
                                    <p class="section__pragraph">
                                        *Приём товара курьером и доставка оплачиваются по отдельности.
                                    </p>
                                </div>
                                <div class="section__row">
                                    <h4 class="section__title">По регионам:</h4>
                                    <p class="section__pragraph">
                                        Отправить прибор любой транспортной компанией на юридический адрес нашего сервисного
                                        центра.
                                    </p>
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
                            <div class="section__photo-carousel">
                                <!-- begin .photo-carousel-->
                                <div class="photo-carousel">
                                    <div class="photo-carousel__container swiper js-photo-carousel">
                                        <div class="photo-carousel__wrapper swiper-wrapper">
                                            <div class="photo-carousel__slide swiper-slide">
                                                <div class="photo-carousel__illustration">
                                                    <picture class="photo-carousel__picture">
                                                        <img
                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                            data-src="assets/blocks/photo-carousel/images/1.png"
                                                            alt="image"
                                                            class="photo-carousel__image lazyload"
                                                            title=""
                                                        />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="photo-carousel__slide swiper-slide">
                                                <div class="photo-carousel__illustration">
                                                    <picture class="photo-carousel__picture">
                                                        <img
                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                            data-src="assets/blocks/photo-carousel/images/2.png"
                                                            alt="image"
                                                            class="photo-carousel__image lazyload"
                                                            title=""
                                                        />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="photo-carousel__slide swiper-slide">
                                                <div class="photo-carousel__illustration">
                                                    <picture class="photo-carousel__picture">
                                                        <img
                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                            data-src="assets/blocks/photo-carousel/images/3.png"
                                                            alt="image"
                                                            class="photo-carousel__image lazyload"
                                                            title=""
                                                        />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="photo-carousel__slide swiper-slide">
                                                <div class="photo-carousel__illustration">
                                                    <picture class="photo-carousel__picture">
                                                        <img
                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                            data-src="assets/blocks/photo-carousel/images/4.png"
                                                            alt="image"
                                                            class="photo-carousel__image lazyload"
                                                            title=""
                                                        />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="photo-carousel__slide swiper-slide">
                                                <div class="photo-carousel__illustration">
                                                    <picture class="photo-carousel__picture">
                                                        <img
                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                            data-src="assets/blocks/photo-carousel/images/1.png"
                                                            alt="image"
                                                            class="photo-carousel__image lazyload"
                                                            title=""
                                                        />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="photo-carousel__slide swiper-slide">
                                                <div class="photo-carousel__illustration">
                                                    <picture class="photo-carousel__picture">
                                                        <img
                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                            data-src="assets/blocks/photo-carousel/images/1.png"
                                                            alt="image"
                                                            class="photo-carousel__image lazyload"
                                                            title=""
                                                        />
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="photo-carousel__slide swiper-slide">
                                                <div class="photo-carousel__illustration">
                                                    <picture class="photo-carousel__picture">
                                                        <img
                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                            data-src="assets/blocks/photo-carousel/images/1.png"
                                                            alt="image"
                                                            class="photo-carousel__image lazyload"
                                                            title=""
                                                        />
                                                    </picture>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="photo-carousel__arrows">
                                            <!-- begin .carousel-nav-->
                                            <div
                                                class="carousel-nav carousel-nav_position_sides js-carousel-nav"
                                                data-nav-scope=".product-carousel"
                                                data-nav-target=".js-photo-carousel"
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
                                <!-- end .photo-carousel-->
                            </div>
                        </div>
                        <!-- end .section-->
                    </div>
                </div>
                <div class="page__section">
                    <div class="page__container">
                        <!-- begin .section-->
                        <div class="section section_spacing_top-close">
                            <!-- begin .repair-list-->
                            <div class="repair-list">
                                <ul class="repair-list__list">
                                    <li class="repair-list__item">
                                        <span class="repair-list__title">Юстировкаот</span>
                                        <span class="repair-list__value">от 1500 ₽</span>
                                    </li>
                                    <li class="repair-list__item">
                                        <span class="repair-list__title">
                                            Замена зеркала пузырькового уровня (с учетом детали)
                                        </span>
                                        <span class="repair-list__value">от 500 ₽</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- end .repair-list-->
                        </div>
                        <!-- end .section-->
                    </div>
                </div>
                <div class="page__section">
                    <div class="page__container">
                        <!-- begin .section-->
                        <div class="section section_spacing_close">
                            <div class="section__text-content">
                                <div class="section__row"><h4 class="section__title">Гарантия на ремонт</h4></div>
                                <div class="section__row">
                                    <ul class="section__list">
                                        <li class="section__list-item">На работу мастера – 2 недели.</li>
                                        <li class="section__list-item">На замененные запчасти – 3 месяца.</li>
                                    </ul>
                                </div>
                                <div class="section__row">
                                    <p class="section__pragraph">
                                        Обязательным условием гарантии является соблюдение заказчиком всех условий и
                                        требований по эксплуатации бывшего в ремонте прибора. Несоблюдение этих требований
                                        может послужить причиной отказа в гарантии на ремонт геодезических приборов.
                                    </p>
                                </div>
                                <div class="section__row">
                                    <h4 class="section__title">Свяжитесь с нами</h4>
                                    <p class="section__pragraph">
                                        По всем возникшим вопросам обращайтесь по телефону, электронной почте или
                                        непосредственно в наш сервисный центр.
                                    </p>
                                    <p class="section__pragraph">Время работы — ПН-ПТ с 9:00 до 18:00.</p>
                                    <a href="tel:84956040000" class="section__pragraph">Телефон: 8 (495) 604-00-00</a>
                                </div>
                                <div class="section__row">
                                    <h4 class="section__title">По регионам:</h4>
                                    <p class="section__pragraph">
                                        Отправить прибор любой транспортной компанией на юридический адрес нашего сервисного
                                        центра.
                                    </p>
                                </div>
                            </div>
                            <!-- begin .button-->
                            <a class="button button_size_l button_type_order js-modal" href="#modalQuestion">
                                <span class="button__wrapper button__wrapper_type_initial">
                                    <span class="button__holder"><span class="button__text">Обратный звонок</span></span>
                                </span>
                            </a>
                            <!-- end .button-->
                            <div class="section__text-content">
                                <div class="section__row section__row_style_flex">
                                    <h4 class="section__title">E-mail:</h4>
                                    <a href="mailto:info@rusgeocom.ru" class="section__pragraph">info@rusgeocom.ru</a>
                                </div>
                            </div>
                            <!-- begin .button-->
                            <a class="button button_size_l button_type_order js-modal" href="#modalQuestion">
                                <span class="button__wrapper button__wrapper_type_initial">
                                    <span class="button__holder"><span class="button__text">Написать нам</span></span>
                                </span>
                            </a>
                            <!-- end .button-->
                        </div>
                        <!-- end .section-->
                    </div>
                </div>
                <div class="page__section">
                    <div class="page__container">
                        <!-- begin .section-->
                        <div class="section">
                            <div class="section__text-content">
                                <div class="section__row">
                                    <h4 class="section__pragraph">
                                        Ремонт нивелира любой сложности производится в сервисном центре компании
                                        "РУСГЕОКОМ". Оптический нивелир – один из основных приборов, используемых в
                                        геодезии. Работа в поле и на строительной площадке сопряжена со многими трудностями,
                                        такими как вибрации, удары, падения, неблагоприятные погодные условия, перепады
                                        температур, проникновение пыли и влаги. Однако, поломка нивелира – это далеко не
                                        всегда повод для списания инструмента. Квалифицированный ремонт позволит продлить
                                        службу инструмента на долгие годы. Компания "РУСГЕОКОМ" предлагает ремонт оптических
                                        нивелиров любой сложности независимо от состояния прибора, к работе принимаются
                                        приборы любой марки, мы работаем с RGK, Topcon, Sokkia, Leica, Bosch, Berger, Setl,
                                        ADA, Vega и другими брендами. Будучи точным оптическим прибором, оптический нивелир
                                        требует профессионального подхода к диагностике и проведению ремонтных работ.
                                        Попытка самостоятельной разборки прибора и неквалифицированный ремонт нивелира могут
                                        привести к порче механизма и полному выходу инструмента из строя. Качественная
                                        работа не только требует участия опытного специалиста, но ещё и оригинальные
                                        комплектующие, а также специальный точный инструментарий. Всем этим оснащён
                                        сервисный центр "РУСГЕОКОМ". Помимо ремонта оптических нивелиров, наш сервисный
                                        центр предлагает услуги по профилактике, настройке и диагностике оптических
                                        нивелиров, независимо от того, был ли он приобретён в нашем магазине, или вы купили
                                        его в другом месте. Наши специалисты ответят на все ваши вопросы, проведут
                                        диагностику, точно определят причину выхода прибора из строя и осуществят ремонт
                                        нивелира. Сервисный центр компании "РУСГЕОКОМ" оснащён самым современным
                                        сертифицированным оборудованием, а опыт и профессионализм наших специалистов
                                        гарантируют максимально качественный и быстрый ремонт оптического нивелира. Также в
                                        нашем центре производится поверка оптического нивелира
                                    </h4>
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
        <script src="assets/components/jquery-3.4.1/jquery.min.js?1686691536368"></script>
        <script src="assets/components/vanilla-lazyload-17.5.0/lazyload.min.js?1686691536368"></script>
        <script src="assets/components/swiper-7.2.0/js/swiper-bundle.min.js?1686691536368"></script>
        <script src="assets/components/wnumb-1.1.0/wNumb.js?1686691536368"></script>
        <script src="assets/components/noUiSlider-master/nouislider.min.js?1686691536368"></script>
        <script src="assets/components/just-validate-3.10.0/just-validate.production.min.js?1686691536368"></script>
        <script src="assets/components/Inputmask/inputmask.min.js?1686691536368"></script>
        <script src="assets/components/fancybox-4.0.7/fancybox.umd.js?1686691536368"></script>
        <script src="assets/scripts/svg4everybody.js?1686691536368"></script>
        <script src="assets/scripts/helpers.js?1686691536368"></script>
        <script src="assets/scripts/common.js?1686691536368"></script>
        {{-- <script src="assets/scripts/ymap.js?1686691536368"></script> --}}
        <script src="assets/scripts/validate.js?1686691536368"></script>
        <script src="assets/scripts/search-form.js?1686691536368"></script>
        {{-- <script src="assets/scripts/profile-forms.js?1686691536368"></script> --}}
        <script src="assets/scripts/custom.js?1686691536368"></script>

    </body>
</html>
<!-- end .page-->
