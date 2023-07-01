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
        <div class="page__section">
            <div class="page__container">
                <!-- begin .section-->
                <div class="section">
                    <div class="section__header section__header_type_inline">
                        <div class="section__title">
                            <!-- begin .title-->
                            <div class="title title_size_h2">Аренда <?= $currentCategory[0]['name'] ?></div>
                            <!-- end .title-->
                        </div>
                    </div>
                    <!-- begin .card-list-->
                    <div class="card-list">
                        <ul class="card-list__list rent_data">
{{-- Подставка элементов --}}
                        </ul>
                    </div>
                    <!-- end .card-list-->
                    <div id="pagination"></div>
                </div>
                <!-- end .section-->
                <!-- begin .rent-detail-text-->
                <div class="rent-detail-text">
                    <div class="rent-detail-text__row">
                        <h4 class="rent-detail-text__title">
                            Мы предлагает в аренду профессиональное оборудование швейцарского качества фирмы Leica.
                        </h4>
                    </div>
                    <div class="rent-detail-text__row">
                        <p class="rent-detail-text__pragraph">
                            Аренда наземного лазерного сканера имеет ряд преимуществ:
                        </p>
                    </div>
                    <div class="rent-detail-text__row">
                        <ol class="rent-detail-text__list">
                            <li class="rent-detail-text__list-item">Высокая скорость выполнения работ</li>
                            <li class="rent-detail-text__list-item">Точность до 1 мм</li>
                            <li class="rent-detail-text__list-item">
                                Нет необходимости покупать дорогостоящее оборудование
                            </li>
                        </ol>
                    </div>
                    <div class="rent-detail-text__row">
                        <p class="rent-detail-text__pragraph">
                            <span class="rent-detail-text__title">Вы получаете</span>
                            облака точек для быстрого решения своих задач в системах автоматизированного
                            проектирования (САПР).
                        </p>
                    </div>
                    <div class="rent-detail-text__row">
                        <h4 class="rent-detail-text__title">
                            Условия аренды геодезических лазерных сканеров для юридических лиц
                        </h4>
                    </div>
                    <div class="rent-detail-text__row">
                        <ol class="rent-detail-text__list">
                            <li class="rent-detail-text__list-item">Заключение договора аренды.*</li>
                            <li class="rent-detail-text__list-item">
                                Внесение гарантийного взноса за лазерный сканер
                            </li>
                        </ol>
                    </div>
                    <div class="rent-detail-text__row">
                        <p class="rent-detail-text__pragraph">
                            *Для заключения договора аренды обязательно наличие:
                        </p>
                    </div>
                    <div class="rent-detail-text__row">
                        <ul class="rent-detail-text__list">
                            <li class="rent-detail-text__list-item">Паспорта;</li>
                            <li class="rent-detail-text__list-item">
                                Печати или доверенности с печатью организации.
                            </li>
                        </ul>
                    </div>
                    <div class="rent-detail-text__row">
                        <h4 class="rent-detail-text__title">Условия аренды лазерного сканера для физических лиц</h4>
                    </div>
                    <div class="rent-detail-text__row">
                        <ol class="rent-detail-text__list">
                            <li class="rent-detail-text__list-item">Заключение договора аренды.*</li>
                            <li class="rent-detail-text__list-item">
                                Внесение гарантийного взноса за лазерный сканер
                            </li>
                        </ol>
                    </div>
                    <div class="rent-detail-text__row">
                        <p class="rent-detail-text__pragraph">
                            *Для заключения договора аренды наличие паспорта обязательно.
                        </p>
                    </div>
                </div>
                <!-- end .rent-detail-text-->
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

        <script src="assets/scripts/paginate-rent-offers.js" data-id-category="<?= $currentCategory[0]['id'] ?>"></script>
    </body>
</html>
<!-- end .page-->
