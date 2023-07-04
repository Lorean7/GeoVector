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
        <title>Аренда | Геовектор</title>
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
                    </ul>
                </div>
        <div class="page__section">
            <div class="page__container">
                <!-- begin .section-->
                <div class="section">
                    <div class="section__header section__header_type_inline">
                        <div class="section__title">
                            <!-- begin .title-->
                            <div class="title title_size_h2">Ремонт</div>
                            <!-- end .title-->
                        </div>
                    </div>
                    <!-- begin .rent-list-->
                    <div class="rent-list">
                        <ul class="rent-list__list">
                            <?php 
                                foreach ($sub_category as $cat) { ?>
                                    <li class="rent-list__item">
                                        <!-- begin .rent-item-->
                                        <div class="rent-item">
                                            <div class="rent-item__illustration">
                                                <picture class="rent-item__picture">
                                                    <img
                                                        src="<?= $cat['preview'] ?>"
                                                        width="114"
                                                        height="116"
                                                        alt="image"
                                                        class="rent-item__image lazyload"
                                                        title=""
                                                    />
                                                </picture>
                                            </div>
                                            <div class="rent-item__content">
                                                <span class="rent-item__title">Аренда <?= $cat['name'] ?></span>
                                                <a href="repair-detail?id_category=<?= $cat['id'] ?>" class="rent-item__link">Подробнее</a>
                                            </div>
                                        </div>
                                        <!-- end .rent-item-->
                                    </li>
                                <?php }
                            ?>
                        </ul>
                    </div>
                    <!-- end .rent-list-->
                    <div class="page__section">
                        <div class="page__container">
                            <!-- begin .section-->
                            <div class="section section_spacing_top-close">
                                <div class="section__content">
                                    <div class="section__info-panel">
                                        <!-- begin .info-panel-->
                                        <div class="info-panel info-panel_content_reversed info-panel_style_secondary">
                                            <div class="info-panel__content">
                                                <div class="info-panel__title">
                                                    <!-- begin .title-->
                                                    <div class="title title_size_h2">
                                                        Доставка инструмента в сервисный центр по Москве
                                                    </div>
                                                    <!-- end .title-->
                                                </div>
                                                <div class="info-panel__subtitle">(в пределах МКАД) +10 км</div>
                                                <div class="info-panel__controls">
                                                    <div class="info-panel__control">
                                                        <!-- begin .button-->
                                                        <a
                                                            class="button button_size_l button_type_order -_type -_type_order js-modal"
                                                            href="#modalQuestion"
                                                        >
                                                            <span class="button__holder">Заказать</span>
                                                        </a>
                                                        <!-- end .button-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info-panel__illustration">
                                                <picture class="info-panel__picture">
                                                    <img
                                                        src="assets/blocks/info-panel/images/2.png"
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
                                <!-- begin .map-panel-->
                                <div class="map-panel">
                                    <div class="map-panel__content">
                                        <div class="map-panel__text-content">
                                            <div class="map-panel__row map-panel__row_style_flex">
                                                <h4 class="map-panel__title">Адрес:</h4>
                                                <p class="map-panel__pragraph">ул. Коминтерна, д. 7, к. 2,г. Москва, 129327</p>
                                            </div>
                                            <div class="map-panel__row map-panel__row_style_flex">
                                                <h4 class="map-panel__title">Режим работы:</h4>
                                                <p class="map-panel__pragraph">9:00 - 18:00 (пн-пт)</p>
                                            </div>
                                            <div class="map-panel__row">
                                                <h4 class="map-panel__title">Юр.данные:</h4>
                                                <ul class="map-panel__list">
                                                    <li class="map-panel__list-item">ООО «РУСГЕОКОМ»</li>
                                                    <li class="map-panel__list-item">ИНН 7716540377</li>
                                                    <li class="map-panel__list-item">ОГРН 1057749697444</li>
                                                </ul>
                                            </div>
                                            <div class="map-panel__row">
                                                <h4 class="map-panel__title">Телефоны:</h4>
                                                <ul class="map-panel__list">
                                                    <li class="map-panel__list-item">
                                                        +7 (495) 604-00-00
                                                        <span class="map-panel__label">Многоканальный</span>
                                                    </li>
                                                    <li class="map-panel__list-item">
                                                        8 (800) 505-35-98
                                                        <span class="map-panel__label">Бесплатный</span>
                                                    </li>
                                                    <li class="map-panel__list-item">
                                                        +7 (495) 604-00-00, доб. 3
                                                        <span class="map-panel__label">Сервисный центр</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="map-panel__row map-panel__row_style_flex">
                                                <h4 class="map-panel__title">Почта:</h4>
                                                <p class="map-panel__pragraph">info@rusgeocom.ru</p>
                                            </div>
                                        </div>
                                        <div class="map-panel__map">
                                            <div style="position: relative; overflow: hidden; height: 100%">
                                                <a
                                                    href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps"
                                                    style="color: #eee; font-size: 12px; position: absolute; top: 0px"
                                                >
                                                    Москва
                                                </a>
                                                <a
                                                    href="https://yandex.ru/maps/213/moscow/house/ulitsa_kominterna_7k2/Z04YcABnSUEGQFtvfXR3dX1rZg==/?ll=37.677354%2C55.864105&utm_medium=mapframe&utm_source=maps&z=18.2"
                                                    style="color: #eee; font-size: 12px; position: absolute; top: 14px"
                                                >
                                                    Улица Коминтерна, 7к2 — Яндекс Карты
                                                </a>
                                                <iframe
                                                    src="https://yandex.ru/map-widget/v1/?ll=37.677354%2C55.864105&mode=whatshere&whatshere%5Bpoint%5D=37.676692%2C55.864448&whatshere%5Bzoom%5D=17&z=18.2"
                                                    width="100%"
                                                    height="100%"
                                                    frameborder="1"
                                                    allowfullscreen="true"
                                                    style="position: relative"
                                                ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end .map-panel-->
                            </div>
                            <!-- end .section-->
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
