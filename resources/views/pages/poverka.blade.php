.<!-- begin .page-->
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
        <title>Поверка | Геовектор</title>
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
    <div class="page__content">
        <div class="page__section page__section_style_secondary">
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
                                <a href="#" itemprop="name" class="breadcrumbs__link">Поверка</a>
                                <meta itemprop="position" content="2" />
                            </li>
                        </ul>
                    </div>
                    <!-- end .breadcrumbs-->
                </div>
            </div>
        </div>
        <div class="page__section page__section_style_secondary">
            <div class="page__container">
                <!-- begin .section-->
                <div class="section">
                    <div class="section__header section__header_type_inline">
                        <div class="section__title">
                            <!-- begin .title-->
                            <div class="title title_size_h2">
                                Поверка геодезических и контрольно-измерительных приборов
                            </div>
                            <!-- end .title-->
                        </div>
                    </div>
                    <div class="section__search">
                        <!-- begin .search-form-->
                        <form class="search-form search-form_role_poverka">
                            <div class="search-form__field">
                                <input
                                    type="text"
                                    class="search-form__input js-search-with-results poverka-sort_input"
                                    placeholder="Введите наименование прибора, бренд, модель или номер Госреестра"
                                />
                                <div class="search-form__clear-control">
                                    <button type="button" class="search-form__clear js-search-clear">
                                        Очистить
                                    </button>
                                </div>
                                <div class="search-form__control">
                                    <button type="submit" class="search-form__submit">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="search-form__icon"
                                        >
                                            <path
                                                d="M18.031 16.617L22.314 20.899L20.899 22.314L16.617 18.031C15.0237 19.3082 13.042 20.0029 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20.0029 13.042 19.3082 15.0237 18.031 16.617ZM16.025 15.875C17.2941 14.5699 18.0029 12.8204 18 11C18 7.132 14.867 4 11 4C7.132 4 4 7.132 4 11C4 14.867 7.132 18 11 18C12.8204 18.0029 14.5699 17.2941 15.875 16.025L16.025 15.875Z"
                                            ></path>
                                        </svg>
                                        <span class="search-form__label">Поиск</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- end .search-form-->
                    </div>
                    <!-- begin .poverka-panel-->
                    <div class="poverka-panel">
                        <table class="poverka-panel__table">
                            <thead class="poverka-panel__head">
                                <tr class="poverka-panel__row">
                                    <th class="poverka-panel__title">ID</th>
                                    <th class="poverka-panel__title">Услуга</th>
                                    <th class="poverka-panel__title">Категория</th>
                                    <th class="poverka-panel__title">Бренд</th>
                                    <th class="poverka-panel__title">Модель</th>
                                    <th class="poverka-panel__title">Срок</th>
                                    <th class="poverka-panel__title">Цена РРЦ</th>
                                    <th class="poverka-panel__holder"></th>
                                </tr>
                            </thead>
                            <tbody class="poverka-panel__body">

                            </tbody>
                        </table>
                    </div>
                    <!-- end .poverka-panel-->
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
                            <div class="title title_size_h2">Условия проведения поверки</div>
                            <!-- end .title-->
                        </div>
                    </div>
                    <!-- begin .amenities-->
                    <div class="amenities">
                        <div class="amenities__wrapper">
                            <div class="amenities__items">
                                <div class="amenities__item">
                                    <div class="amenities__illustration">
                                        <picture class="amenities__picture">
                                            <img
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="assets/blocks/amenities/images/1.svg"
                                                alt="image"
                                                class="amenities__image lazyload"
                                                title=""
                                            />
                                        </picture>
                                    </div>
                                    <div class="amenities__text">
                                        <span>Отправить</span>
                                        заявку в формате .xls на e-mail: lab@rusgeocom.ru или позвонить по тел. 8
                                        (495) 604-00-00, указать вашу организацию и реквизиты (для безналичного
                                        расчета), модель и заводской номер прибора.
                                    </div>
                                </div>
                                <div class="amenities__item">
                                    <div class="amenities__illustration">
                                        <picture class="amenities__picture">
                                            <img
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="assets/blocks/amenities/images/1.svg"
                                                alt="image"
                                                class="amenities__image lazyload"
                                                title=""
                                            />
                                        </picture>
                                    </div>
                                    <div class="amenities__text">
                                        <span>Доставка</span>
                                        осуществляется самостоятельно, с помощью нашей курьерской службы (по Москве
                                        и Московской области) или с помощью транспортных компаний, занимающихся
                                        перевозками по России (Деловые линии, СПСР, Major Express и др.).
                                    </div>
                                </div>
                                <div class="amenities__item">
                                    <div class="amenities__illustration">
                                        <picture class="amenities__picture">
                                            <img
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="assets/blocks/amenities/images/1.svg"
                                                alt="image"
                                                class="amenities__image lazyload"
                                                title=""
                                            />
                                        </picture>
                                    </div>
                                    <div class="amenities__text">
                                        <span>Оплата</span>
                                        услуг производится как безналичным так и наличным способом, для вашего
                                        удобства.
                                    </div>
                                </div>
                                <div class="amenities__item">
                                    <div class="amenities__illustration">
                                        <picture class="amenities__picture">
                                            <img
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="assets/blocks/amenities/images/1.svg"
                                                alt="image"
                                                class="amenities__image lazyload"
                                                title=""
                                            />
                                        </picture>
                                    </div>
                                    <div class="amenities__text">
                                        <span>Срок поверки</span>
                                        средств измерений с опубликованием сведений о результатах поверки в
                                        Федеральном информационном фонде по обеспечению единства измерений зависит
                                        от типа прибора и в среднем составляет 5-9 рабочих дней. Более точную
                                        информацию о сроке и условиях поверки вам сообщит менеджер по запросу.
                                    </div>
                                </div>
                            </div>
                            <div class="amenities__controlls"><div class="amenities__controll"></div></div>
                        </div>
                    </div>
                    <!-- end .amenities-->
                    <!-- begin .check-status-->
                    <div class="check-status">
                        <div class="check-status__wrapper">
                            <div class="check-status__content">
                                <span class="check-status__title">Проверить статус по номеру счета</span>
                                <span class="check-status__text">
                                    Введите ваш номер акта поверки, чтобы проверить готовность оборудования
                                </span>
                            </div>
                            <div class="check-status__search-">
                                <!-- begin .search-form-->
                                <form class="search-form search-form_type_poverka">
                                    <div class="search-form__field">
                                        <input
                                            type="text"
                                            class="search-form__input js-search-with-results"
                                            placeholder="123475896600"
                                        />
                                        <div class="search-form__clear-control">
                                            <button type="button" class="search-form__clear js-search-clear">
                                                Очистить
                                            </button>
                                        </div>
                                        <div class="search-form__control">
                                            <button type="submit" class="search-form__submit">
                                                <span class="search-form__label">Поверить</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="search-form__results">
                                        <!-- begin .search-results-->
                                        <div class="search-results">
                                            <div class="search-results__message">Совпадений не найдено</div>
                                            <div class="search-results__matches">
                                                <ul class="search-results__list">
                                                    <li class="search-results__item">
                                                        <a href="#" class="search-results__link">
                                                            <span class="highlight">Прим</span>
                                                            ер
                                                        </a>
                                                    </li>
                                                    <li class="search-results__item">
                                                        <a href="#" class="search-results__link">
                                                            Все о
                                                            <span class="highlight">Еще</span>
                                                            один
                                                        </a>
                                                    </li>
                                                    <li class="search-results__item">
                                                        <a href="#" class="search-results__link">
                                                            Запчасти для
                                                            <span class="highlight">Геодез</span>
                                                            ическое оборудование
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end .search-results-->
                                    </div>
                                </form>
                                <!-- end .search-form-->
                            </div>
                        </div>
                    </div>
                    <!-- end .check-status-->
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
        <script src="assets/scripts/poverka-offers.js"></script>
        
    </body>
</html>
<!-- end .page-->
