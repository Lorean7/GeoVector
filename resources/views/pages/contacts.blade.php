
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
        <title>Контакты| Геовектор</title>
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
                            <a href="/" itemprop="name" class="breadcrumbs__link">Главная</a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li
                            itemprop="itemListElement"
                            itemscope="itemscope"
                            itemtype="https://schema.org/ListItem"
                            class="breadcrumbs__item"
                        >
                            <a href="/contacts" itemprop="name" class="breadcrumbs__link">Контакты</a>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ul>
                </div>
                <!-- end .breadcrumbs-->
            </div>
        </div>
        <div class="page__section">
            <div class="page__container">
                <!-- begin .section-->
                <div class="section">
                    <!-- begin .contact-panel-->
                    <div class="contact-panel contact-panel_role_contacts">
                        <div class="contact-panel__content">
                            <div class="contact-panel__text-content">
                                <div class="contact-panel__columns">
                                    <div class="contact-panel__column">
                                        <div class="contact-panel__row contact-panel__row_style_flex">
                                            <h4 class="contact-panel__title">Адрес:</h4>
                                            <p class="contact-panel__pragraph">
                                                г. Севастополь, ул. Проспект Нахимова, 5а
                                            </p>
                                        </div>
                                        <div class="contact-panel__row contact-panel__row_style_flex">
                                            <h4 class="contact-panel__title">Режим работы:</h4>
                                            <p class="contact-panel__pragraph">9:00 - 18:00 (пн-пт)</p>
                                        </div>
                                    </div>
                                    <div class="contact-panel__column">
                                        <div class="contact-panel__row">
                                            <h4 class="contact-panel__title">Телефоны:</h4>
                                            <ul class="contact-panel__list">
                                                <li class="contact-panel__list-item">+7 978 555-15-16</li>
                                                <li class="contact-panel__list-item">
                                                    +7 908 918-47-84
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="18"
                                                        height="18"
                                                        viewBox="0 0 18 18"
                                                        fill="none"
                                                    >
                                                        <g clip-path="url(#clip0_207_203)">
                                                            <path
                                                                d="M0.392173 8.89198C0.391754 10.4043 0.786917 11.881 1.53831 13.1826L0.320312 17.6297L4.87138 16.4364C6.13015 17.1217 7.5405 17.4807 8.97371 17.4808H8.97748C13.7088 17.4808 17.5601 13.6309 17.5622 8.89874C17.5631 6.6057 16.6709 4.44947 15.0499 2.82723C13.4292 1.20514 11.2737 0.311349 8.97713 0.310303C4.24529 0.310303 0.394196 4.16007 0.392243 8.89198"
                                                                fill="url(#paint0_linear_207_203)"
                                                            />
                                                            <path
                                                                d="M0.0746512 8.88949C0.0741628 10.4563 0.483488 11.9858 1.26167 13.334L0 17.9405L4.71426 16.7044C6.01319 17.4126 7.47565 17.786 8.96379 17.7866H8.96763C13.8687 17.7866 17.8584 13.7981 17.8605 8.8966C17.8613 6.52116 16.937 4.28742 15.2581 2.60707C13.579 0.92693 11.3465 0.000976744 8.96763 0C4.06577 0 0.0766047 3.98791 0.0746512 8.88949ZM2.88209 13.1018L2.70607 12.8223C1.96612 11.6458 1.57556 10.2862 1.57612 8.89005C1.57772 4.81598 4.89335 1.5014 8.97042 1.5014C10.9448 1.50223 12.8004 2.27191 14.196 3.66837C15.5916 5.06498 16.3595 6.92149 16.359 8.89605C16.3572 12.9701 13.0415 16.2851 8.96763 16.2851H8.9647C7.63821 16.2844 6.33726 15.9282 5.2027 15.255L4.9327 15.0949L2.13516 15.8283L2.88209 13.1017V13.1018Z"
                                                                fill="url(#paint1_linear_207_203)"
                                                            />
                                                            <path
                                                                d="M6.74136 5.17304C6.57489 4.80306 6.39971 4.79559 6.24141 4.78911C6.11178 4.78352 5.96359 4.78394 5.81554 4.78394C5.66736 4.78394 5.42659 4.83969 5.22308 5.0619C5.01936 5.28431 4.44531 5.8218 4.44531 6.91499C4.44531 8.00824 5.24157 9.06473 5.35257 9.21313C5.46371 9.36125 6.88975 11.6764 9.14827 12.5671C11.0253 13.3072 11.4073 13.16 11.8146 13.1229C12.2221 13.0859 13.1293 12.5855 13.3144 12.0667C13.4997 11.5479 13.4997 11.1032 13.4441 11.0103C13.3886 10.9177 13.2404 10.8621 13.0182 10.751C12.7959 10.6399 11.7035 10.1023 11.4998 10.0282C11.2961 9.95406 11.148 9.91708 10.9998 10.1396C10.8516 10.3617 10.4261 10.8621 10.2964 11.0103C10.1669 11.1588 10.0372 11.1773 9.81503 11.0662C9.59268 10.9547 8.87708 10.7203 8.02808 9.96341C7.36752 9.37443 6.92157 8.64711 6.79194 8.42462C6.66231 8.20248 6.77806 8.08206 6.88948 7.97134C6.98931 7.87178 7.11175 7.71187 7.22296 7.58218C7.33375 7.45241 7.37073 7.35983 7.44482 7.21164C7.51899 7.06331 7.48187 6.93355 7.42641 6.82241C7.37073 6.71127 6.93894 5.61236 6.74136 5.17304Z"
                                                                fill="white"
                                                            />
                                                        </g>
                                                        <defs>
                                                            <linearGradient
                                                                id="paint0_linear_207_203"
                                                                x1="862.412"
                                                                y1="1732.25"
                                                                x2="862.412"
                                                                y2="0.310303"
                                                                gradientUnits="userSpaceOnUse"
                                                            >
                                                                <stop stop-color="#1FAF38" />
                                                                <stop offset="1" stop-color="#60D669" />
                                                            </linearGradient>
                                                            <linearGradient
                                                                id="paint1_linear_207_203"
                                                                x1="893.023"
                                                                y1="1794.05"
                                                                x2="893.023"
                                                                y2="0"
                                                                gradientUnits="userSpaceOnUse"
                                                            >
                                                                <stop stop-color="#F9F9F9" />
                                                                <stop offset="1" stop-color="white" />
                                                            </linearGradient>
                                                            <clipPath id="clip0_207_203">
                                                                <rect width="17.8605" height="18" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="contact-panel__row contact-panel__row_style_flex">
                                            <h4 class="contact-panel__title">E-mail:</h4>
                                            <p class="contact-panel__pragraph">geo-vectorru@yandex.ru</p>
                                            <p class="contact-panel__pragraph">v9089184784@yandex.ru</p>
                                        </div>
                                    </div>
                                    <div class="contact-panel__column">
                                        <div class="contact-panel__row">
                                            <h4 class="contact-panel__title">Реквизиты ИП Журов В.А.</h4>
                                            <ul class="contact-panel__list">
                                                <li class="contact-panel__list-item">ОГРНИП 317665800058838</li>
                                                <li class="contact-panel__list-item">ИНН 665813780505</li>
                                                <li class="contact-panel__list-item">р/с № 40802810411430006359</li>
                                                <li class="contact-panel__list-item">
                                                    ЗАПАДНО-СИБИРСКИЙ ПАО БАНКА «ФК ОТКРЫТИЕ»
                                                </li>
                                                <li class="contact-panel__list-item">к/с 30101810465777100812</li>
                                                <li class="contact-panel__list-item">БИК 047162812</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-panel__map">
                                <div style="position: relative; overflow: hidden">
                                    <a
                                        href="https://yandex.ru/maps/959/sevastopol/?utm_medium=mapframe&utm_source=maps"
                                        style="color: #eee; font-size: 12px; position: absolute; top: 0px"
                                    >
                                        Севастополь
                                    </a>
                                    <a
                                        href="https://yandex.ru/maps/959/sevastopol/house/prospekt_nakhimova_5a/Z0oYcwVjT0cBQFpufXpwdX9qYg==/?ll=33.523626%2C44.614397&utm_medium=mapframe&utm_source=maps&z=17.2"
                                        style="color: #eee; font-size: 12px; position: absolute; top: 14px"
                                    >
                                        Проспект Нахимова, 5А — Яндекс Карты
                                    </a>
                                    <iframe
                                        src="https://yandex.ru/map-widget/v1/?ll=33.523626%2C44.614397&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgoxNDQ5NDE3Mzc4EkzQoNC-0YHRgdC40Y8sINCh0LXQstCw0YHRgtC-0L_QvtC70YwsINC_0YDQvtGB0L_QtdC60YIg0J3QsNGF0LjQvNC-0LLQsCwgNdCQIgoNMhgGQhUkdTJC&z=17.2"
                                        width="100%"
                                        height="430"
                                        frameborder="0"
                                        allowfullscreen="true"
                                        style="position: relative"
                                    ></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end .contact-panel-->
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
                            <div class="title title_size_h2">Фото магазина</div>
                            <!-- end .title-->
                        </div>
                    </div>
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
