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
        <title>Карточка товара</title>
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
        <link href="assets/styles/app.css?1686691538586" rel="stylesheet" />
        <link href="assets/styles/custom.css?1686691538586" rel="stylesheet" />
    </head>
    <body class="page__body">
        <!-- Включение содержимого файла app.blade.php (header) -->
        @include('layouts.app')
        <div class="page__content">
            <div class="page__breadcrumbs"><div class="page__container"></div></div>
            <div class="page__wrapper-product page__container">
                <div class="page__aside-product-cart">
                    <!-- begin .catalog-filters-->
                <div class="catalog-filters page__filters">
                    <div class="catalog-filters__wrapper">
                        <!-- begin .catalog-filter-->
                        <div class="catalog-filter catalog-filter_state_open">
                            <div class="catalog-filter__header">
                                <button
                                    type="button"
                                    data-toggle-scope=".catalog-filter"
                                    data-toggle-class="catalog-filter_state_open"
                                    class="catalog-filter__trigger js-toggle"
                                >
                                    <?= $list_category[1]['name']; ?>
                                </button>
                            </div>
                            <div class="catalog-filter__body">
                                <ul>
                                    <?php 
                                    foreach ($categoriesData as $category) { 
                                        if ($category['parent_id'] == $list_category[1]['id']){ ?>
                                            <li class="catalog-filter__filter-item">
                                                <a href="/catalog" class="catalog-filter__filter-link"><?= $category['name']; ?></a>
                                            </li>
                                        <?php } ?>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <!-- end .catalog-filter-->
                        <div class="catalog-filter catalog-filter_state_open catalog-filter_style_bold">
                            <div class="catalog-filter__body">
                                <ul>
                                    <?php foreach ($categoriesData as $category) { 
                                            if ($category['parent_id'] == $list_category[0]['id'] && $category['id'] != $list_category[1]['id']){ ?>

                                            <li class="catalog-filter__filter-item">
                                                <a href="/catalog" class="catalog-filter__filter-link"><?= $category['name']; ?></a>
                                            </li>
                                        <?php } ?>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end .catalog-filters-->
                </div>
                <div class="page__main-product-card">
                    <div class="page__section">
                        <!-- begin .section-->
                        <div class="section">
                            <div class="section__content">
                                <div class="section__product-card">
                                    <!-- begin .breadcrumbs-->
                                    <div class="breadcrumbs">
                                        <ul
                                            itemscope="itemscope"
                                            itemtype="https://schema.org/BreadcrumbList"
                                            class="breadcrumbs__list"
                                        >
                                        <?php 
                                            foreach($list_category as $index => $category){ ?>
                                                <li
                                                    itemprop="itemListElement"
                                                    itemscope="itemscope"
                                                    itemtype="https://schema.org/ListItem"
                                                    class="breadcrumbs__item"
                                                >
                                                    <a href="/catalog?category_id=<?= $category['id'] ?>" itemprop="name" class="breadcrumbs__link"><?= $category['name'] ?></a>
                                                    <meta itemprop="position" content="<?= $index+1?>" />
                                                </li>
                                        <?php } ?>
                                        </ul>
                                    </div>
                                    <!-- end .breadcrumbs-->
                                    <!-- begin .product-card-->
                                    <div class="product-card">
                                        <div class="product-card__top">
                                            <div class="product-card__title">
                                                <!-- begin .title-->
                                                <h1 class="title title_size_h2"><?= $offer['name'] ?></h1>
                                                <!-- end .title-->
                                            </div>
                                        </div>
                                        <div class="product-card__sub-line">
                                            <div class="product-card__labels">
                                                <!-- begin .label-->
                                                <div class="label">
                                                    <div class="label__labels">
                                                        <div class="label__label label__label_style_popular">
                                                            Хит продаж!
                                                        </div>
                                                        <div class="label__label label__label_style_check">
                                                            Поверка в комплекте
                                                        </div>
                                                        <div class="label__label label__label_style_gos">Госреестр</div>
                                                    </div>
                                                </div>
                                                <!-- end .label-->
                                            </div>
                                            <div class="product-card__code">Код товара: <?= $offer['vendorCode'] ?></div>
                                            <div class="product-card__garanty">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="16"
                                                    height="16"
                                                    viewBox="0 0 16 16"
                                                    fill="none"
                                                    class="product-card__icon"
                                                >
                                                    <path
                                                        d="M8.0013 1.33325L2.66797 3.33325V7.39325C2.66797 10.7599 4.9413 13.8999 8.0013 14.6666C11.0613 13.8999 13.3346 10.7599 13.3346 7.39325V3.33325L8.0013 1.33325Z"
                                                        fill="#A0A0A0"
                                                    ></path>
                                                </svg>
                                                <span>Гарантия 1 год</span>
                                            </div>
                                            <div class="product-card__gosreestr">Госреестр №86495-22</div>
                                            <div class="product-card__articul">
                                                <!-- begin .props-->
                                                <div class="props">
                                                    <div class="props__prop">
                                                        <div class="props__label">Арт.:</div>
                                                        <div class="props__value"><?= $offer['id'] ?></div>
                                                    </div>
                                                </div>
                                                <!-- end .props-->
                                            </div>
                                        </div>
                                        <div class="product-card__wrapper">
                                            <div class="product-card__showcase">
                                                <div class="product-card__photo-carousel-group">
                                                    <!-- begin .photo-carousel-group-->
                                                    <div class="photo-carousel-group">
                                                        <div class="photo-carousel-group__main">
                                                            <div
                                                                class="photo-carousel-group__container swiper js-photo-carousel-main"
                                                            >
                                                                <div
                                                                    class="photo-carousel-group__wrapper swiper-wrapper"
                                                                >
                                                                
                                                                <?php $json_picture = $offer['pictures'];
                                                                    $urls = json_decode($json_picture);
                                                                    foreach ($urls as $url) { ?>
                                                                        <div
                                                                            class="photo-carousel-group__slide swiper-slide"
                                                                        >
                                                                            <div class="photo-carousel-group__illustration">
                                                                                <picture
                                                                                    class="photo-carousel-group__picture"
                                                                                >
                                                                                    <img
                                                                                        src="<?= $url ?>"
                                                                                        alt="image"
                                                                                        class="photo-carousel-group__image lazyload"
                                                                                        title=""
                                                                                    />
                                                                                </picture>
                                                                            </div>
                                                                        </div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="photo-carousel-group__navigation page__container">
                                                            <div class="photo-carousel-group__pagination">
                                                                <!-- begin .bullet-pagination-->
                                                                <div class="bullet-pagination"></div>
                                                                <!-- end .bullet-pagination-->
                                                            </div>
                                                        </div>
                                                        <div class="photo-carousel-group__nav">
                                                            <div
                                                                class="photo-carousel-group__nav-container swiper js-photo-carousel-nav"
                                                            >
                                                                <div
                                                                    class="photo-carousel-group__nav-wrapper swiper-wrapper"
                                                                >
                                                                <?php $json_picture = $offer['pictures'];
                                                                    $urls = json_decode($json_picture);
                                                                    foreach ($urls as $url) { ?>
                                                                        <div
                                                                            class="photo-carousel-group__nav-slide swiper-slide"
                                                                        >
                                                                            <div
                                                                                class="photo-carousel-group__nav-illustration"
                                                                            >
                                                                                <picture
                                                                                    class="photo-carousel-group__picture"
                                                                                >
                                                                                    <img
                                                                                        src="<?= $url ?>"
                                                                                        alt="image"
                                                                                        class="photo-carousel-group__image lazyload"
                                                                                        title=""
                                                                                    />
                                                                                </picture>
                                                                            </div>
                                                                        </div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                            <div class="photo-carousel-group__navigation">
                                                                <div class="photo-carousel-group__arrows">
                                                                    <!-- begin .carousel-nav-->
                                                                    <div
                                                                        class="carousel-nav carousel-nav_position_sides carousel-nav_type_outline js-carousel-nav"
                                                                        data-nav-scope=".photo-carousel-group"
                                                                        data-nav-target=".js-photo-carousel-main"
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
                                                    </div>
                                                    <!-- end .photo-carousel-group-->
                                                </div>
                                            </div>
                                            <div class="product-card__main">
                                                <div class="product-card__main-wrapper">
                                                    <div class="product-card__header">
                                                        <div class="product-card__price-group">
                                                            <!-- begin .price-group-->
                                                            <div class="price-group">
                                                                <div class="price-group__extra">
                                                                    <div
                                                                        class="price-group__price price-group__price_type_old"
                                                                    >
                                                                        <span class="price-group__value">
                                                                            <?= $offer['price'] ?>
                                                                        </span>
                                                                        <span class="price-group__unit">₽</span>
                                                                    </div>
                                                                </div>
                                                                <div class="price-group__main">
                                                                    <div class="price-group__price">
                                                                        <span class="price-group__value"><?= $offer['price'] ?></span>
                                                                        <span class="price-group__unit">₽</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end .price-group-->
                                                            Цена с НДС
                                                        </div>
                                                        <form class="product-card__final">
                                                            <div class="product-card__button">
                                                                <!-- begin .button-->
                                                                <a
                                                                    class="button button_width_full button_text-size_l button_size_l button_type_order js-modal"
                                                                    href="#modalOrder"
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
                                                                <!-- begin .button-->
                                                                <a
                                                                    class="button button_width_full button_text-size_l button_size_l button_style_outline button_type_order js-modal"
                                                                    href="#modalOrder"
                                                                >
                                                                    <span
                                                                        class="button__wrapper button__wrapper_type_initial"
                                                                    >
                                                                        <span class="button__holder">
                                                                            <span class="button__text">
                                                                                Заказать оптом
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                                <!-- end .button-->
                                                            </div>
                                                        </form>
                                                        <div class="product-card__info">
                                                            <!-- Modifiers-->
                                                            <!-- product-card__availability_status_available - green-->
                                                            <!-- product-card__availability_status_unavailable - red-->
                                                            <div class="product-card__available">
                                                                <span
                                                                    class="product-card__availability product-card__availability_status_available"
                                                                >
                                                                    в наличии
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-card__bottom">
                                                        <div class="product-card__additional">
                                                            <div class="product-card__confirmation-check">
                                                                <!-- begin .check-elem-->
                                                                <label class="check-elem check-elem_text-size_l">
                                                                    <input
                                                                        class="check-elem__input"
                                                                        type="checkbox"
                                                                        name="agreement"
                                                                        required="required"
                                                                    />
                                                                    <span class="check-elem__label">
                                                                        Поверка - 9 000 ₽
                                                                    </span>
                                                                </label>
                                                                <!-- end .check-elem-->
                                                            </div>
                                                            <div class="product-card__options">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="22"
                                                                    height="22"
                                                                    viewBox="0 0 22 22"
                                                                    fill="none"
                                                                    class="product-card__icon"
                                                                >
                                                                    <path
                                                                        d="M16.3818 4.8124C16.2396 4.41042 15.9762 4.06242 15.628 3.81628C15.2798 3.57015 14.8639 3.43799 14.4375 3.43799C14.0111 3.43799 13.5952 3.57015 13.247 3.81628C12.8988 4.06242 12.6354 4.41042 12.4932 4.8124H2.0625V6.1874H12.4932C12.6354 6.58938 12.8988 6.93738 13.247 7.18352C13.5952 7.42965 14.0111 7.56181 14.4375 7.56181C14.8639 7.56181 15.2798 7.42965 15.628 7.18352C15.9762 6.93738 16.2396 6.58938 16.3818 6.1874H19.9375V4.8124H16.3818ZM7.5625 8.9374C7.13616 8.93801 6.72044 9.07048 6.37234 9.31665C6.02424 9.56281 5.76081 9.91063 5.61816 10.3124H2.0625V11.6874H5.61816C5.76042 12.0894 6.02377 12.4374 6.37197 12.6835C6.72017 12.9297 7.13609 13.0618 7.5625 13.0618C7.98891 13.0618 8.40483 12.9297 8.75303 12.6835C9.10123 12.4374 9.36458 12.0894 9.50684 11.6874H19.9375V10.3124H9.50684C9.36419 9.91063 9.10076 9.56281 8.75266 9.31665C8.40456 9.07048 7.98884 8.93801 7.5625 8.9374ZM14.4375 14.4374C14.0112 14.438 13.5954 14.5705 13.2473 14.8166C12.8992 15.0628 12.6358 15.4106 12.4932 15.8124H2.0625V17.1874H12.4932C12.6354 17.5894 12.8988 17.9374 13.247 18.1835C13.5952 18.4297 14.0111 18.5618 14.4375 18.5618C14.8639 18.5618 15.2798 18.4297 15.628 18.1835C15.9762 17.9374 16.2396 17.5894 16.3818 17.1874H19.9375V15.8124H16.3818C16.2392 15.4106 15.9758 15.0628 15.6277 14.8166C15.2796 14.5705 14.8638 14.438 14.4375 14.4374Z"
                                                                        fill="#1D1C1C"
                                                                    ></path>
                                                                </svg>
                                                                <span>Выбрать опции</span>
                                                            </div>
                                                        </div>
                                                        <span class="product-card__product-order-title">
                                                            Способы получения заказа:
                                                        </span>
                                                        <ul class="product-card__product-order-list">
                                                            <li class="product-card__product-info-order">
                                                                <div class="product-card__line-wrapper">
                                                                    Ваш город
                                                                    <!-- begin .geo-selector-->
                                                                    <div class="geo-selector geo-selector_product">
                                                                        <a
                                                                            href="#modalGeoSelect"
                                                                            class="geo-selector__trigger js-modal"
                                                                        >
                                                                            <svg
                                                                                width="28"
                                                                                height="28"
                                                                                viewBox="0 0 28 28"
                                                                                fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="geo-selector__icon"
                                                                            >
                                                                                <circle
                                                                                    cx="14"
                                                                                    cy="14"
                                                                                    r="13.6585"
                                                                                    stroke="#4F4F4F"
                                                                                    stroke-width="0.682927"
                                                                                ></circle>
                                                                                <path
                                                                                    d="M14.9331 20.0165C16.2104 18.4711 19.1235 14.7256 19.1235 12.6217C19.1235 10.0701 16.9822 8 14.343 8C11.7038 8 9.5625 10.0701 9.5625 12.6217C9.5625 14.7256 12.4756 18.4711 13.7529 20.0165C14.0591 20.3848 14.6268 20.3848 14.9331 20.0165ZM14.343 11.0811C14.7656 11.0811 15.1709 11.2435 15.4698 11.5324C15.7686 11.8213 15.9365 12.2131 15.9365 12.6217C15.9365 13.0303 15.7686 13.4222 15.4698 13.7111C15.1709 14 14.7656 14.1623 14.343 14.1623C13.9204 14.1623 13.5151 14 13.2162 13.7111C12.9174 13.4222 12.7495 13.0303 12.7495 12.6217C12.7495 12.2131 12.9174 11.8213 13.2162 11.5324C13.5151 11.2435 13.9204 11.0811 14.343 11.0811Z"
                                                                                    fill="#4F4F4F"
                                                                                ></path>
                                                                            </svg>
                                                                            <span class="geo-selector__label">
                                                                                Москва
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <!-- end .geo-selector-->
                                                                </div>
                                                            </li>
                                                            <li class="product-card__product-info-order">
                                                                Самовывоз, сегодня,
                                                                <span class="highlight-weight">бесплатно</span>
                                                            </li>
                                                            <li class="product-card__product-info-order">
                                                                Доставка, завтра,
                                                                <span class="highlight-weight">бесплатно</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end .product-card-->
                                </div>
                            </div>
                        </div>
                        <!-- end .section-->
                    </div>
                    <div class="page__section">
                        <div class="page__info-tabs">
                            <!-- begin .tabs-->
                            <!-- containers without js-tabs class will be ignored by script completely-->
                            <!-- triggers without js-tabs-trigger will be ignored by script-->
                            <!-- panels without js-tabs-panel will be ignored by script-->
                            <!-- if links and panels need to be in separate containers, apply data-tabs-set="some-selector" on js-tabs element-->
                            <!-- that selector should match a single element, containing .js-tabs-panel elements inside it-->
                            <div class="tabs tabs_type_tiles js-tabs">
                                <ul class="tabs__nav">
                                    <li class="tabs__item">
                                        <button class="tabs__label js-tabs-trigger" type="button">Описание</button>
                                    </li>
                                    <li class="tabs__item">
                                        <button class="tabs__label js-tabs-trigger" type="button">
                                            Характеристики
                                        </button>
                                    </li>
                                    <li class="tabs__item">
                                        <button class="tabs__label js-tabs-trigger" type="button">Конфигуратор</button>
                                    </li>
                                    <li class="tabs__item">
                                        <button class="tabs__label js-tabs-trigger" type="button">Комплектация</button>
                                    </li>
                                    <li class="tabs__item">
                                        <button class="tabs__label js-tabs-trigger" type="button">Скачать</button>
                                    </li>
                                </ul>
                                <div class="tabs__content">
                                    <div class="tabs__panel js-tabs-panel">
                                        <div class="tabs__text">
                                            <?= $offer['description'] ?>
                                        </div>
                                    </div>
                                    <div class="tabs__panel js-tabs-panel">
                                        <?= $offer['specifications'] ?>
                                    </div>
                                    <div class="tabs__panel js-tabs-panel">
                                        <div class="tabs__text"><p>Тут конфигуратор</p></div>
                                    </div>
                                    <div class="tabs__panel js-tabs-panel">
                                        <div class="tabs__text"><p>Тут комплектация</p></div>
                                    </div>
                                    <div class="tabs__panel js-tabs-panel">
                                        <div class="tabs__docs">
                                            <!-- begin .doc-list-->
                                            <div class="doc-list">
                                                <ul class="doc-list__list">
                                                    <li class="doc-list__item">
                                                        <div class="doc-list__document">
                                                            <div class="doc-list__main">
                                                                <!-- begin .link-item-->
                                                                <div
                                                                    class="link-item link-item_text-size_l link-item_icon-size_m link-item_effects_static"
                                                                >
                                                                    <div class="link-item__icon-wrapper">
                                                                        <svg
                                                                            class="link-item__icon"
                                                                            width="20"
                                                                            height="20"
                                                                            viewBox="0 0 20 20"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                        >
                                                                            <path
                                                                                d="M6.8891 12.2333C6.73577 12.2333 6.63243 12.2483 6.5791 12.2633V13.245C6.64243 13.26 6.7216 13.2642 6.83077 13.2642C7.22993 13.2642 7.47577 13.0625 7.47577 12.7217C7.47577 12.4167 7.2641 12.2333 6.8891 12.2333ZM9.79493 12.2433C9.62827 12.2433 9.51993 12.2583 9.45577 12.2733V14.4483C9.51993 14.4633 9.62327 14.4633 9.7166 14.4633C10.3974 14.4683 10.8408 14.0933 10.8408 13.3C10.8458 12.6083 10.4416 12.2433 9.79493 12.2433Z"
                                                                                fill="#939393"
                                                                            />
                                                                            <path
                                                                                d="M11.6663 1.66666H4.99967C4.55765 1.66666 4.13372 1.84225 3.82116 2.15481C3.5086 2.46737 3.33301 2.8913 3.33301 3.33332V16.6667C3.33301 17.1087 3.5086 17.5326 3.82116 17.8452C4.13372 18.1577 4.55765 18.3333 4.99967 18.3333H14.9997C15.4417 18.3333 15.8656 18.1577 16.1782 17.8452C16.4907 17.5326 16.6663 17.1087 16.6663 16.6667V6.66666L11.6663 1.66666ZM7.91467 13.4917C7.65717 13.7333 7.27717 13.8417 6.83467 13.8417C6.74887 13.8426 6.66311 13.8376 6.57801 13.8267V15.015H5.83301V11.735C6.16922 11.6848 6.50894 11.662 6.84884 11.6667C7.31301 11.6667 7.64301 11.755 7.86551 11.9325C8.07717 12.1008 8.22051 12.3767 8.22051 12.7017C8.21967 13.0283 8.11134 13.3042 7.91467 13.4917ZM11.0872 14.6208C10.7372 14.9117 10.2047 15.05 9.55384 15.05C9.16384 15.05 8.88801 15.025 8.70051 15V11.7358C9.03684 11.6867 9.37646 11.6636 9.71634 11.6667C10.3472 11.6667 10.7572 11.78 11.0772 12.0217C11.423 12.2783 11.6397 12.6875 11.6397 13.275C11.6397 13.9108 11.4072 14.35 11.0872 14.6208ZM14.1663 12.3083H12.8897V13.0675H14.083V13.6792H12.8897V15.0158H12.1347V11.6917H14.1663V12.3083ZM11.6663 7.49999H10.833V3.33332L14.9997 7.49999H11.6663Z"
                                                                                fill="#939393"
                                                                            />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="link-item__label">
                                                                        Технические условия
                                                                    </div>
                                                                </div>
                                                                <!-- end .link-item-->
                                                            </div>
                                                            <div class="doc-list__link">
                                                                <!-- begin .link-item-->
                                                                <a
                                                                    class="link-item link-item_text-size_l link-item_icon-size_m link-item_style_primary"
                                                                    href="#"
                                                                >
                                                                    <span class="link-item__icon-wrapper">
                                                                        <svg
                                                                            class="link-item__icon"
                                                                            width="20"
                                                                            height="20"
                                                                            viewBox="0 0 20 20"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                        >
                                                                            <path
                                                                                d="M9.99967 13.3333L5.83301 9.16668L6.99967 7.95834L9.16634 10.125V3.33334H10.833V10.125L12.9997 7.95834L14.1663 9.16668L9.99967 13.3333ZM3.33301 16.6667V12.5H4.99967V15H14.9997V12.5H16.6663V16.6667H3.33301Z"
                                                                            />
                                                                        </svg>
                                                                    </span>
                                                                    <span class="link-item__label">Скачать</span>
                                                                </a>
                                                                <!-- end .link-item-->
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="doc-list__item">
                                                        <div class="doc-list__document">
                                                            <div class="doc-list__main">
                                                                <!-- begin .link-item-->
                                                                <div
                                                                    class="link-item link-item_text-size_l link-item_icon-size_m link-item_effects_static"
                                                                >
                                                                    <div class="link-item__icon-wrapper">
                                                                        <svg
                                                                            class="link-item__icon"
                                                                            width="20"
                                                                            height="20"
                                                                            viewBox="0 0 20 20"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                        >
                                                                            <path
                                                                                d="M6.8891 12.2333C6.73577 12.2333 6.63243 12.2483 6.5791 12.2633V13.245C6.64243 13.26 6.7216 13.2642 6.83077 13.2642C7.22993 13.2642 7.47577 13.0625 7.47577 12.7217C7.47577 12.4167 7.2641 12.2333 6.8891 12.2333ZM9.79493 12.2433C9.62827 12.2433 9.51993 12.2583 9.45577 12.2733V14.4483C9.51993 14.4633 9.62327 14.4633 9.7166 14.4633C10.3974 14.4683 10.8408 14.0933 10.8408 13.3C10.8458 12.6083 10.4416 12.2433 9.79493 12.2433Z"
                                                                                fill="#939393"
                                                                            />
                                                                            <path
                                                                                d="M11.6663 1.66666H4.99967C4.55765 1.66666 4.13372 1.84225 3.82116 2.15481C3.5086 2.46737 3.33301 2.8913 3.33301 3.33332V16.6667C3.33301 17.1087 3.5086 17.5326 3.82116 17.8452C4.13372 18.1577 4.55765 18.3333 4.99967 18.3333H14.9997C15.4417 18.3333 15.8656 18.1577 16.1782 17.8452C16.4907 17.5326 16.6663 17.1087 16.6663 16.6667V6.66666L11.6663 1.66666ZM7.91467 13.4917C7.65717 13.7333 7.27717 13.8417 6.83467 13.8417C6.74887 13.8426 6.66311 13.8376 6.57801 13.8267V15.015H5.83301V11.735C6.16922 11.6848 6.50894 11.662 6.84884 11.6667C7.31301 11.6667 7.64301 11.755 7.86551 11.9325C8.07717 12.1008 8.22051 12.3767 8.22051 12.7017C8.21967 13.0283 8.11134 13.3042 7.91467 13.4917ZM11.0872 14.6208C10.7372 14.9117 10.2047 15.05 9.55384 15.05C9.16384 15.05 8.88801 15.025 8.70051 15V11.7358C9.03684 11.6867 9.37646 11.6636 9.71634 11.6667C10.3472 11.6667 10.7572 11.78 11.0772 12.0217C11.423 12.2783 11.6397 12.6875 11.6397 13.275C11.6397 13.9108 11.4072 14.35 11.0872 14.6208ZM14.1663 12.3083H12.8897V13.0675H14.083V13.6792H12.8897V15.0158H12.1347V11.6917H14.1663V12.3083ZM11.6663 7.49999H10.833V3.33332L14.9997 7.49999H11.6663Z"
                                                                                fill="#939393"
                                                                            />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="link-item__label">
                                                                        Сертификат качества
                                                                    </div>
                                                                </div>
                                                                <!-- end .link-item-->
                                                            </div>
                                                            <div class="doc-list__link">
                                                                <!-- begin .link-item-->
                                                                <a
                                                                    class="link-item link-item_text-size_l link-item_icon-size_m link-item_style_primary"
                                                                    href="#"
                                                                >
                                                                    <span class="link-item__icon-wrapper">
                                                                        <svg
                                                                            class="link-item__icon"
                                                                            width="20"
                                                                            height="20"
                                                                            viewBox="0 0 20 20"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                        >
                                                                            <path
                                                                                d="M9.99967 13.3333L5.83301 9.16668L6.99967 7.95834L9.16634 10.125V3.33334H10.833V10.125L12.9997 7.95834L14.1663 9.16668L9.99967 13.3333ZM3.33301 16.6667V12.5H4.99967V15H14.9997V12.5H16.6663V16.6667H3.33301Z"
                                                                            />
                                                                        </svg>
                                                                    </span>
                                                                    <span class="link-item__label">Скачать</span>
                                                                </a>
                                                                <!-- end .link-item-->
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="doc-list__item">
                                                        <div class="doc-list__document">
                                                            <div class="doc-list__main">
                                                                <!-- begin .link-item-->
                                                                <div
                                                                    class="link-item link-item_text-size_l link-item_icon-size_m link-item_effects_static"
                                                                >
                                                                    <div class="link-item__icon-wrapper">
                                                                        <svg
                                                                            class="link-item__icon"
                                                                            width="20"
                                                                            height="20"
                                                                            viewBox="0 0 20 20"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                        >
                                                                            <path
                                                                                d="M6.8891 12.2333C6.73577 12.2333 6.63243 12.2483 6.5791 12.2633V13.245C6.64243 13.26 6.7216 13.2642 6.83077 13.2642C7.22993 13.2642 7.47577 13.0625 7.47577 12.7217C7.47577 12.4167 7.2641 12.2333 6.8891 12.2333ZM9.79493 12.2433C9.62827 12.2433 9.51993 12.2583 9.45577 12.2733V14.4483C9.51993 14.4633 9.62327 14.4633 9.7166 14.4633C10.3974 14.4683 10.8408 14.0933 10.8408 13.3C10.8458 12.6083 10.4416 12.2433 9.79493 12.2433Z"
                                                                                fill="#939393"
                                                                            />
                                                                            <path
                                                                                d="M11.6663 1.66666H4.99967C4.55765 1.66666 4.13372 1.84225 3.82116 2.15481C3.5086 2.46737 3.33301 2.8913 3.33301 3.33332V16.6667C3.33301 17.1087 3.5086 17.5326 3.82116 17.8452C4.13372 18.1577 4.55765 18.3333 4.99967 18.3333H14.9997C15.4417 18.3333 15.8656 18.1577 16.1782 17.8452C16.4907 17.5326 16.6663 17.1087 16.6663 16.6667V6.66666L11.6663 1.66666ZM7.91467 13.4917C7.65717 13.7333 7.27717 13.8417 6.83467 13.8417C6.74887 13.8426 6.66311 13.8376 6.57801 13.8267V15.015H5.83301V11.735C6.16922 11.6848 6.50894 11.662 6.84884 11.6667C7.31301 11.6667 7.64301 11.755 7.86551 11.9325C8.07717 12.1008 8.22051 12.3767 8.22051 12.7017C8.21967 13.0283 8.11134 13.3042 7.91467 13.4917ZM11.0872 14.6208C10.7372 14.9117 10.2047 15.05 9.55384 15.05C9.16384 15.05 8.88801 15.025 8.70051 15V11.7358C9.03684 11.6867 9.37646 11.6636 9.71634 11.6667C10.3472 11.6667 10.7572 11.78 11.0772 12.0217C11.423 12.2783 11.6397 12.6875 11.6397 13.275C11.6397 13.9108 11.4072 14.35 11.0872 14.6208ZM14.1663 12.3083H12.8897V13.0675H14.083V13.6792H12.8897V15.0158H12.1347V11.6917H14.1663V12.3083ZM11.6663 7.49999H10.833V3.33332L14.9997 7.49999H11.6663Z"
                                                                                fill="#939393"
                                                                            />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="link-item__label">
                                                                        Полный каталог бренда
                                                                    </div>
                                                                </div>
                                                                <!-- end .link-item-->
                                                            </div>
                                                            <div class="doc-list__link">
                                                                <!-- begin .link-item-->
                                                                <a
                                                                    class="link-item link-item_text-size_l link-item_icon-size_m link-item_style_primary"
                                                                    href="#"
                                                                >
                                                                    <span class="link-item__icon-wrapper">
                                                                        <svg
                                                                            class="link-item__icon"
                                                                            width="20"
                                                                            height="20"
                                                                            viewBox="0 0 20 20"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                        >
                                                                            <path
                                                                                d="M9.99967 13.3333L5.83301 9.16668L6.99967 7.95834L9.16634 10.125V3.33334H10.833V10.125L12.9997 7.95834L14.1663 9.16668L9.99967 13.3333ZM3.33301 16.6667V12.5H4.99967V15H14.9997V12.5H16.6663V16.6667H3.33301Z"
                                                                            />
                                                                        </svg>
                                                                    </span>
                                                                    <span class="link-item__label">Скачать</span>
                                                                </a>
                                                                <!-- end .link-item-->
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- end .doc-list-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end .tabs-->
                        </div>
                        <div class="page__info-spollers">
                            <div class="page__info-spoller page__info-spoller_state_closed">
                                <div class="page__title page__title-trigger">
                                    <button
                                        type="button"
                                        data-toggle-scope=".page__info-spoller"
                                        data-toggle-class="page__info-spoller_state_closed"
                                        class="info-spoller js-toggle"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="30"
                                            height="29"
                                            viewBox="0 0 30 29"
                                            fill="none"
                                            class="page__icon"
                                        >
                                            <ellipse
                                                cx="14.9386"
                                                cy="14.5"
                                                rx="14.7042"
                                                ry="14.5"
                                                fill="white"
                                            ></ellipse>
                                            <line
                                                x1="15.2906"
                                                y1="9.66675"
                                                x2="15.2906"
                                                y2="20.0239"
                                                stroke="#145FAD"
                                                stroke-width="0.690476"
                                            ></line>
                                            <line
                                                x1="10.043"
                                                y1="14.8454"
                                                x2="20.546"
                                                y2="14.8454"
                                                stroke="#145FAD"
                                                stroke-width="0.690476"
                                            ></line>
                                        </svg>
                                        <!-- begin .title-->
                                        <div class="title title_size_h1">Описание</div>
                                        <!-- end .title-->
                                    </button>
                                </div>
                                <div class="page__text">
                                    <p>
                                        Тепловизор RGK TL-400 - это тепловизор промышленного класса, старшая модель в
                                        линейке RGK. С ним можно обследовать как отдельные станки и электроустановки,
                                        так и инспектировать большие объекты под открытым небом. И все это - с высокой
                                        точностью и на безопасном расстоянии.
                                    </p>
                                    <p class="highlight-weight">Ключевые преимущества</p>
                                    <ul>
                                        <li>
                                            Разрешение матрицы 384x288 точек обеспечивает высокую детализацию
                                            изображения.
                                        </li>
                                        <li>
                                            Разрешение матрицы 384x288 точек обеспечивает высокую детализацию
                                            изображения.
                                        </li>
                                        <li>
                                            Разрешение матрицы 384x288 точек обеспечивает высокую детализацию
                                            изображения.
                                        </li>
                                        <li>
                                            Разрешение матрицы 384x288 точек обеспечивает высокую детализацию
                                            изображения.
                                        </li>
                                        <li>
                                            Разрешение матрицы 384x288 точек обеспечивает высокую детализацию
                                            изображения.
                                        </li>
                                    </ul>
                                    <p>
                                        Тепловизор RGK TL-400 - это тепловизор промышленного класса, старшая модель в
                                        линейке RGK. С ним можно обследовать как отдельные станки и электроустановки,
                                        так и инспектировать большие объекты под открытым небом. И все это - с высокой
                                        точностью и на безопасном расстоянии.
                                    </p>
                                </div>
                            </div>
                            <div class="page__info-spoller page__info-spoller_state_closed">
                                <div class="page__title page__title-trigger">
                                    <button
                                        type="button"
                                        data-toggle-scope=".page__info-spoller"
                                        data-toggle-class="page__info-spoller_state_closed"
                                        class="info-spoller js-toggle"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="30"
                                            height="29"
                                            viewBox="0 0 30 29"
                                            fill="none"
                                            class="page__icon"
                                        >
                                            <ellipse
                                                cx="14.9386"
                                                cy="14.5"
                                                rx="14.7042"
                                                ry="14.5"
                                                fill="white"
                                            ></ellipse>
                                            <line
                                                x1="15.2906"
                                                y1="9.66675"
                                                x2="15.2906"
                                                y2="20.0239"
                                                stroke="#145FAD"
                                                stroke-width="0.690476"
                                            ></line>
                                            <line
                                                x1="10.043"
                                                y1="14.8454"
                                                x2="20.546"
                                                y2="14.8454"
                                                stroke="#145FAD"
                                                stroke-width="0.690476"
                                            ></line>
                                        </svg>
                                        <!-- begin .title-->
                                        <div class="title title_size_h1">Характеристики</div>
                                        <!-- end .title-->
                                    </button>
                                </div>
                                <div class="page__text"><p>Тут характеристики</p></div>
                            </div>
                            <div class="page__info-spoller page__info-spoller_state_closed">
                                <div class="page__title page__title-trigger">
                                    <button
                                        type="button"
                                        data-toggle-scope=".page__info-spoller"
                                        data-toggle-class="page__info-spoller_state_closed"
                                        class="info-spoller js-toggle"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="30"
                                            height="29"
                                            viewBox="0 0 30 29"
                                            fill="none"
                                            class="page__icon"
                                        >
                                            <ellipse
                                                cx="14.9386"
                                                cy="14.5"
                                                rx="14.7042"
                                                ry="14.5"
                                                fill="white"
                                            ></ellipse>
                                            <line
                                                x1="15.2906"
                                                y1="9.66675"
                                                x2="15.2906"
                                                y2="20.0239"
                                                stroke="#145FAD"
                                                stroke-width="0.690476"
                                            ></line>
                                            <line
                                                x1="10.043"
                                                y1="14.8454"
                                                x2="20.546"
                                                y2="14.8454"
                                                stroke="#145FAD"
                                                stroke-width="0.690476"
                                            ></line>
                                        </svg>
                                        <!-- begin .title-->
                                        <div class="title title_size_h1">Конфигуратор</div>
                                        <!-- end .title-->
                                    </button>
                                </div>
                                <div class="page__text"><p>Тут конфигуратор</p></div>
                            </div>
                            <div class="page__info-spoller page__info-spoller_state_closed">
                                <div class="page__title page__title-trigger">
                                    <button
                                        type="button"
                                        data-toggle-scope=".page__info-spoller"
                                        data-toggle-class="page__info-spoller_state_closed"
                                        class="info-spoller js-toggle"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="30"
                                            height="29"
                                            viewBox="0 0 30 29"
                                            fill="none"
                                            class="page__icon"
                                        >
                                            <ellipse
                                                cx="14.9386"
                                                cy="14.5"
                                                rx="14.7042"
                                                ry="14.5"
                                                fill="white"
                                            ></ellipse>
                                            <line
                                                x1="15.2906"
                                                y1="9.66675"
                                                x2="15.2906"
                                                y2="20.0239"
                                                stroke="#145FAD"
                                                stroke-width="0.690476"
                                            ></line>
                                            <line
                                                x1="10.043"
                                                y1="14.8454"
                                                x2="20.546"
                                                y2="14.8454"
                                                stroke="#145FAD"
                                                stroke-width="0.690476"
                                            ></line>
                                        </svg>
                                        <!-- begin .title-->
                                        <div class="title title_size_h1">Комлектация</div>
                                        <!-- end .title-->
                                    </button>
                                </div>
                                <div class="page__text"><p>Тут комплектация</p></div>
                            </div>
                            <div class="page__info-spoller page__info-spoller_state_closed">
                                <div class="page__title page__title-trigger">
                                    <button
                                        type="button"
                                        data-toggle-scope=".page__info-spoller"
                                        data-toggle-class="page__info-spoller_state_closed"
                                        class="info-spoller js-toggle"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="30"
                                            height="29"
                                            viewBox="0 0 30 29"
                                            fill="none"
                                            class="page__icon"
                                        >
                                            <ellipse
                                                cx="14.9386"
                                                cy="14.5"
                                                rx="14.7042"
                                                ry="14.5"
                                                fill="white"
                                            ></ellipse>
                                            <line
                                                x1="15.2906"
                                                y1="9.66675"
                                                x2="15.2906"
                                                y2="20.0239"
                                                stroke="#145FAD"
                                                stroke-width="0.690476"
                                            ></line>
                                            <line
                                                x1="10.043"
                                                y1="14.8454"
                                                x2="20.546"
                                                y2="14.8454"
                                                stroke="#145FAD"
                                                stroke-width="0.690476"
                                            ></line>
                                        </svg>
                                        <!-- begin .title-->
                                        <div class="title title_size_h1">Скачать</div>
                                        <!-- end .title-->
                                    </button>
                                </div>
                                <div class="page__text">
                                    <div class="page__docs">
                                        <!-- begin .doc-list-->
                                        <div class="doc-list">
                                            <ul class="doc-list__list">
                                                <li class="doc-list__item">
                                                    <div class="doc-list__document">
                                                        <div class="doc-list__main">
                                                            <!-- begin .link-item-->
                                                            <div
                                                                class="link-item link-item_text-size_l link-item_icon-size_m link-item_effects_static"
                                                            >
                                                                <div class="link-item__icon-wrapper">
                                                                    <svg
                                                                        class="link-item__icon"
                                                                        width="20"
                                                                        height="20"
                                                                        viewBox="0 0 20 20"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                    >
                                                                        <path
                                                                            d="M6.8891 12.2333C6.73577 12.2333 6.63243 12.2483 6.5791 12.2633V13.245C6.64243 13.26 6.7216 13.2642 6.83077 13.2642C7.22993 13.2642 7.47577 13.0625 7.47577 12.7217C7.47577 12.4167 7.2641 12.2333 6.8891 12.2333ZM9.79493 12.2433C9.62827 12.2433 9.51993 12.2583 9.45577 12.2733V14.4483C9.51993 14.4633 9.62327 14.4633 9.7166 14.4633C10.3974 14.4683 10.8408 14.0933 10.8408 13.3C10.8458 12.6083 10.4416 12.2433 9.79493 12.2433Z"
                                                                            fill="#939393"
                                                                        />
                                                                        <path
                                                                            d="M11.6663 1.66666H4.99967C4.55765 1.66666 4.13372 1.84225 3.82116 2.15481C3.5086 2.46737 3.33301 2.8913 3.33301 3.33332V16.6667C3.33301 17.1087 3.5086 17.5326 3.82116 17.8452C4.13372 18.1577 4.55765 18.3333 4.99967 18.3333H14.9997C15.4417 18.3333 15.8656 18.1577 16.1782 17.8452C16.4907 17.5326 16.6663 17.1087 16.6663 16.6667V6.66666L11.6663 1.66666ZM7.91467 13.4917C7.65717 13.7333 7.27717 13.8417 6.83467 13.8417C6.74887 13.8426 6.66311 13.8376 6.57801 13.8267V15.015H5.83301V11.735C6.16922 11.6848 6.50894 11.662 6.84884 11.6667C7.31301 11.6667 7.64301 11.755 7.86551 11.9325C8.07717 12.1008 8.22051 12.3767 8.22051 12.7017C8.21967 13.0283 8.11134 13.3042 7.91467 13.4917ZM11.0872 14.6208C10.7372 14.9117 10.2047 15.05 9.55384 15.05C9.16384 15.05 8.88801 15.025 8.70051 15V11.7358C9.03684 11.6867 9.37646 11.6636 9.71634 11.6667C10.3472 11.6667 10.7572 11.78 11.0772 12.0217C11.423 12.2783 11.6397 12.6875 11.6397 13.275C11.6397 13.9108 11.4072 14.35 11.0872 14.6208ZM14.1663 12.3083H12.8897V13.0675H14.083V13.6792H12.8897V15.0158H12.1347V11.6917H14.1663V12.3083ZM11.6663 7.49999H10.833V3.33332L14.9997 7.49999H11.6663Z"
                                                                            fill="#939393"
                                                                        />
                                                                    </svg>
                                                                </div>
                                                                <div class="link-item__label">Технические условия</div>
                                                            </div>
                                                            <!-- end .link-item-->
                                                        </div>
                                                        <div class="doc-list__link">
                                                            <!-- begin .link-item-->
                                                            <a
                                                                class="link-item link-item_text-size_l link-item_icon-size_m link-item_style_primary"
                                                                href="#"
                                                            >
                                                                <span class="link-item__icon-wrapper">
                                                                    <svg
                                                                        class="link-item__icon"
                                                                        width="20"
                                                                        height="20"
                                                                        viewBox="0 0 20 20"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                    >
                                                                        <path
                                                                            d="M9.99967 13.3333L5.83301 9.16668L6.99967 7.95834L9.16634 10.125V3.33334H10.833V10.125L12.9997 7.95834L14.1663 9.16668L9.99967 13.3333ZM3.33301 16.6667V12.5H4.99967V15H14.9997V12.5H16.6663V16.6667H3.33301Z"
                                                                        />
                                                                    </svg>
                                                                </span>
                                                                <span class="link-item__label">Скачать</span>
                                                            </a>
                                                            <!-- end .link-item-->
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="doc-list__item">
                                                    <div class="doc-list__document">
                                                        <div class="doc-list__main">
                                                            <!-- begin .link-item-->
                                                            <div
                                                                class="link-item link-item_text-size_l link-item_icon-size_m link-item_effects_static"
                                                            >
                                                                <div class="link-item__icon-wrapper">
                                                                    <svg
                                                                        class="link-item__icon"
                                                                        width="20"
                                                                        height="20"
                                                                        viewBox="0 0 20 20"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                    >
                                                                        <path
                                                                            d="M6.8891 12.2333C6.73577 12.2333 6.63243 12.2483 6.5791 12.2633V13.245C6.64243 13.26 6.7216 13.2642 6.83077 13.2642C7.22993 13.2642 7.47577 13.0625 7.47577 12.7217C7.47577 12.4167 7.2641 12.2333 6.8891 12.2333ZM9.79493 12.2433C9.62827 12.2433 9.51993 12.2583 9.45577 12.2733V14.4483C9.51993 14.4633 9.62327 14.4633 9.7166 14.4633C10.3974 14.4683 10.8408 14.0933 10.8408 13.3C10.8458 12.6083 10.4416 12.2433 9.79493 12.2433Z"
                                                                            fill="#939393"
                                                                        />
                                                                        <path
                                                                            d="M11.6663 1.66666H4.99967C4.55765 1.66666 4.13372 1.84225 3.82116 2.15481C3.5086 2.46737 3.33301 2.8913 3.33301 3.33332V16.6667C3.33301 17.1087 3.5086 17.5326 3.82116 17.8452C4.13372 18.1577 4.55765 18.3333 4.99967 18.3333H14.9997C15.4417 18.3333 15.8656 18.1577 16.1782 17.8452C16.4907 17.5326 16.6663 17.1087 16.6663 16.6667V6.66666L11.6663 1.66666ZM7.91467 13.4917C7.65717 13.7333 7.27717 13.8417 6.83467 13.8417C6.74887 13.8426 6.66311 13.8376 6.57801 13.8267V15.015H5.83301V11.735C6.16922 11.6848 6.50894 11.662 6.84884 11.6667C7.31301 11.6667 7.64301 11.755 7.86551 11.9325C8.07717 12.1008 8.22051 12.3767 8.22051 12.7017C8.21967 13.0283 8.11134 13.3042 7.91467 13.4917ZM11.0872 14.6208C10.7372 14.9117 10.2047 15.05 9.55384 15.05C9.16384 15.05 8.88801 15.025 8.70051 15V11.7358C9.03684 11.6867 9.37646 11.6636 9.71634 11.6667C10.3472 11.6667 10.7572 11.78 11.0772 12.0217C11.423 12.2783 11.6397 12.6875 11.6397 13.275C11.6397 13.9108 11.4072 14.35 11.0872 14.6208ZM14.1663 12.3083H12.8897V13.0675H14.083V13.6792H12.8897V15.0158H12.1347V11.6917H14.1663V12.3083ZM11.6663 7.49999H10.833V3.33332L14.9997 7.49999H11.6663Z"
                                                                            fill="#939393"
                                                                        />
                                                                    </svg>
                                                                </div>
                                                                <div class="link-item__label">Сертификат качества</div>
                                                            </div>
                                                            <!-- end .link-item-->
                                                        </div>
                                                        <div class="doc-list__link">
                                                            <!-- begin .link-item-->
                                                            <a
                                                                class="link-item link-item_text-size_l link-item_icon-size_m link-item_style_primary"
                                                                href="#"
                                                            >
                                                                <span class="link-item__icon-wrapper">
                                                                    <svg
                                                                        class="link-item__icon"
                                                                        width="20"
                                                                        height="20"
                                                                        viewBox="0 0 20 20"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                    >
                                                                        <path
                                                                            d="M9.99967 13.3333L5.83301 9.16668L6.99967 7.95834L9.16634 10.125V3.33334H10.833V10.125L12.9997 7.95834L14.1663 9.16668L9.99967 13.3333ZM3.33301 16.6667V12.5H4.99967V15H14.9997V12.5H16.6663V16.6667H3.33301Z"
                                                                        />
                                                                    </svg>
                                                                </span>
                                                                <span class="link-item__label">Скачать</span>
                                                            </a>
                                                            <!-- end .link-item-->
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="doc-list__item">
                                                    <div class="doc-list__document">
                                                        <div class="doc-list__main">
                                                            <!-- begin .link-item-->
                                                            <div
                                                                class="link-item link-item_text-size_l link-item_icon-size_m link-item_effects_static"
                                                            >
                                                                <div class="link-item__icon-wrapper">
                                                                    <svg
                                                                        class="link-item__icon"
                                                                        width="20"
                                                                        height="20"
                                                                        viewBox="0 0 20 20"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                    >
                                                                        <path
                                                                            d="M6.8891 12.2333C6.73577 12.2333 6.63243 12.2483 6.5791 12.2633V13.245C6.64243 13.26 6.7216 13.2642 6.83077 13.2642C7.22993 13.2642 7.47577 13.0625 7.47577 12.7217C7.47577 12.4167 7.2641 12.2333 6.8891 12.2333ZM9.79493 12.2433C9.62827 12.2433 9.51993 12.2583 9.45577 12.2733V14.4483C9.51993 14.4633 9.62327 14.4633 9.7166 14.4633C10.3974 14.4683 10.8408 14.0933 10.8408 13.3C10.8458 12.6083 10.4416 12.2433 9.79493 12.2433Z"
                                                                            fill="#939393"
                                                                        />
                                                                        <path
                                                                            d="M11.6663 1.66666H4.99967C4.55765 1.66666 4.13372 1.84225 3.82116 2.15481C3.5086 2.46737 3.33301 2.8913 3.33301 3.33332V16.6667C3.33301 17.1087 3.5086 17.5326 3.82116 17.8452C4.13372 18.1577 4.55765 18.3333 4.99967 18.3333H14.9997C15.4417 18.3333 15.8656 18.1577 16.1782 17.8452C16.4907 17.5326 16.6663 17.1087 16.6663 16.6667V6.66666L11.6663 1.66666ZM7.91467 13.4917C7.65717 13.7333 7.27717 13.8417 6.83467 13.8417C6.74887 13.8426 6.66311 13.8376 6.57801 13.8267V15.015H5.83301V11.735C6.16922 11.6848 6.50894 11.662 6.84884 11.6667C7.31301 11.6667 7.64301 11.755 7.86551 11.9325C8.07717 12.1008 8.22051 12.3767 8.22051 12.7017C8.21967 13.0283 8.11134 13.3042 7.91467 13.4917ZM11.0872 14.6208C10.7372 14.9117 10.2047 15.05 9.55384 15.05C9.16384 15.05 8.88801 15.025 8.70051 15V11.7358C9.03684 11.6867 9.37646 11.6636 9.71634 11.6667C10.3472 11.6667 10.7572 11.78 11.0772 12.0217C11.423 12.2783 11.6397 12.6875 11.6397 13.275C11.6397 13.9108 11.4072 14.35 11.0872 14.6208ZM14.1663 12.3083H12.8897V13.0675H14.083V13.6792H12.8897V15.0158H12.1347V11.6917H14.1663V12.3083ZM11.6663 7.49999H10.833V3.33332L14.9997 7.49999H11.6663Z"
                                                                            fill="#939393"
                                                                        />
                                                                    </svg>
                                                                </div>
                                                                <div class="link-item__label">
                                                                    Полный каталог бренда
                                                                </div>
                                                            </div>
                                                            <!-- end .link-item-->
                                                        </div>
                                                        <div class="doc-list__link">
                                                            <!-- begin .link-item-->
                                                            <a
                                                                class="link-item link-item_text-size_l link-item_icon-size_m link-item_style_primary"
                                                                href="#"
                                                            >
                                                                <span class="link-item__icon-wrapper">
                                                                    <svg
                                                                        class="link-item__icon"
                                                                        width="20"
                                                                        height="20"
                                                                        viewBox="0 0 20 20"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                    >
                                                                        <path
                                                                            d="M9.99967 13.3333L5.83301 9.16668L6.99967 7.95834L9.16634 10.125V3.33334H10.833V10.125L12.9997 7.95834L14.1663 9.16668L9.99967 13.3333ZM3.33301 16.6667V12.5H4.99967V15H14.9997V12.5H16.6663V16.6667H3.33301Z"
                                                                        />
                                                                    </svg>
                                                                </span>
                                                                <span class="link-item__label">Скачать</span>
                                                            </a>
                                                            <!-- end .link-item-->
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end .doc-list-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page__footer">
            <!-- begin .footer-->
            <div class="footer">
                <div class="page__container">
                    <div class="footer__top">
                        <div class="footer__col footer__logo-col">
                            <div class="footer__logo">
                                <!-- begin .logo-->
                                <a href="/" class="logo">
                                    <img
                                        src="assets/blocks/logo/images/Logo-white.svg"
                                        alt="GeoVector"
                                        class="logo__image"
                                        title=""
                                    />
                                </a>
                                <!-- end .logo-->
                            </div>
                        </div>
                        <div class="footer__col footer__select-country">
                            <div class="footer__geo-selector">
                                <!-- begin .geo-selector-->
                                <div class="geo-selector">
                                    <a href="#modalGeoSelect" class="geo-selector__trigger js-modal">
                                        <svg
                                            width="28"
                                            height="28"
                                            viewBox="0 0 28 28"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="geo-selector__icon"
                                        >
                                            <circle
                                                cx="14"
                                                cy="14"
                                                r="13.6585"
                                                stroke="#4F4F4F"
                                                stroke-width="0.682927"
                                            ></circle>
                                            <path
                                                d="M14.9331 20.0165C16.2104 18.4711 19.1235 14.7256 19.1235 12.6217C19.1235 10.0701 16.9822 8 14.343 8C11.7038 8 9.5625 10.0701 9.5625 12.6217C9.5625 14.7256 12.4756 18.4711 13.7529 20.0165C14.0591 20.3848 14.6268 20.3848 14.9331 20.0165ZM14.343 11.0811C14.7656 11.0811 15.1709 11.2435 15.4698 11.5324C15.7686 11.8213 15.9365 12.2131 15.9365 12.6217C15.9365 13.0303 15.7686 13.4222 15.4698 13.7111C15.1709 14 14.7656 14.1623 14.343 14.1623C13.9204 14.1623 13.5151 14 13.2162 13.7111C12.9174 13.4222 12.7495 13.0303 12.7495 12.6217C12.7495 12.2131 12.9174 11.8213 13.2162 11.5324C13.5151 11.2435 13.9204 11.0811 14.343 11.0811Z"
                                                fill="#4F4F4F"
                                            ></path>
                                        </svg>
                                        <span class="geo-selector__label">Москва</span>
                                    </a>
                                </div>
                                <!-- end .geo-selector-->
                            </div>
                        </div>
                        <div class="footer__col footer__search-col">
                            <div class="footer__search">
                                <!-- begin .search-form-->
                                <form class="search-form">
                                    <div class="search-form__field">
                                        <input
                                            type="text"
                                            class="search-form__input js-search-with-results"
                                            placeholder="Поиск по сайту"
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
                    <div class="footer__main">
                        <div class="footer__col footer__info-col">
                            <div class="footer__sub-group">
                                <div class="footer__sub-col footer__sub-col_state_closed">
                                    <div class="footer__title footer__title-trigger">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="#fff"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="footer__icon"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M21 17C21.5523 17 22 17.4477 22 18C22 18.5523 21.5523 19 21 19H3C2.44772 19 2 18.5523 2 18C2 17.4477 2.44772 17 3 17H21ZM21 11C21.5523 11 22 11.4477 22 12C22 12.5523 21.5523 13 21 13H3C2.44772 13 2 12.5523 2 12C2 11.4477 2.44772 11 3 11H21ZM21 5C21.5523 5 22 5.44772 22 6C22 6.55228 21.5523 7 21 7H3C2.44772 7 2 6.55228 2 6C2 5.44772 2.44772 5 3 5H21Z"
                                            ></path>
                                        </svg>
                                        <!-- begin .title-->
                                        <div class="title title_size_h4">
                                            <button
                                                type="button"
                                                data-toggle-scope=".footer__sub-col"
                                                data-toggle-class="footer__sub-col_state_closed"
                                                class="footer__trigger js-toggle"
                                            >
                                                Геодезическое оборудование
                                            </button>
                                        </div>
                                        <!-- end .title-->
                                    </div>
                                    <div class="footer__nav">
                                        <!-- begin .nav-->
                                        <nav class="nav">
                                            <ul class="nav__list">
                                                <li class="nav__item">
                                                    <a class="nav__link" href="#">Геодезические приемники</a>
                                                </li>
                                                <li class="nav__item">
                                                    <a class="nav__link" href="#">Электронные тахеометры</a>
                                                </li>
                                                <li class="nav__item">
                                                    <a class="nav__link" href="#">Лазерные сканеры</a>
                                                </li>
                                                <li class="nav__item">
                                                    <a class="nav__link" href="#">Полевые контроллеры</a>
                                                </li>
                                                <li class="nav__item"><a class="nav__link" href="#">Теодолиты</a></li>
                                                <li class="nav__item"><a class="nav__link" href="#">Нивелиры</a></li>
                                                <li class="nav__item">
                                                    <a class="nav__link" href="#">Лазерные уровни</a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <!-- end .nav-->
                                    </div>
                                </div>
                                <div class="footer__sub-col footer__sub-col_state_closed">
                                    <div class="footer__title footer__title-trigger">
                                        <svg
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="#fff"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="footer__icon"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M21 17C21.5523 17 22 17.4477 22 18C22 18.5523 21.5523 19 21 19H3C2.44772 19 2 18.5523 2 18C2 17.4477 2.44772 17 3 17H21ZM21 11C21.5523 11 22 11.4477 22 12C22 12.5523 21.5523 13 21 13H3C2.44772 13 2 12.5523 2 12C2 11.4477 2.44772 11 3 11H21ZM21 5C21.5523 5 22 5.44772 22 6C22 6.55228 21.5523 7 21 7H3C2.44772 7 2 6.55228 2 6C2 5.44772 2.44772 5 3 5H21Z"
                                            ></path>
                                        </svg>
                                        <!-- begin .title-->
                                        <div class="title title_size_h4">
                                            <button
                                                type="button"
                                                data-toggle-scope=".footer__sub-col"
                                                data-toggle-class="footer__sub-col_state_closed"
                                                class="footer__trigger js-toggle"
                                            >
                                                Контрольно-измерительные приборы
                                            </button>
                                        </div>
                                        <!-- end .title-->
                                    </div>
                                    <div class="footer__nav">
                                        <!-- begin .nav-->
                                        <nav class="nav">
                                            <ul class="nav__list">
                                                <li class="nav__item"><a class="nav__link" href="#">Тепловизоры</a></li>
                                                <li class="nav__item">
                                                    <a class="nav__link" href="#">Приборы теплового контроля</a>
                                                </li>
                                                <li class="nav__item">
                                                    <a class="nav__link" href="#">Приборы неразрушающего контроля</a>
                                                </li>
                                                <li class="nav__item">
                                                    <a class="nav__link" href="#">Электроизмерительные приборы</a>
                                                </li>
                                                <li class="nav__item">
                                                    <a class="nav__link" href="#">Радиоизмерительные приборы</a>
                                                </li>
                                                <li class="nav__item">
                                                    <a class="nav__link" href="#">
                                                        Измерители параметров окружающей среды
                                                    </a>
                                                </li>
                                                <li class="nav__item"><a class="nav__link" href="#">Калибраторы</a></li>
                                            </ul>
                                        </nav>
                                        <!-- end .nav-->
                                    </div>
                                </div>
                                <div class="footer__sub-col footer__sub-col_type-info">
                                    <div class="footer__title">
                                        <!-- begin .title-->
                                        <div class="title title_size_h4">Услуги</div>
                                        <!-- end .title-->
                                    </div>
                                    <div class="footer__nav">
                                        <!-- begin .nav-->
                                        <nav class="nav">
                                            <ul class="nav__list">
                                                <li class="nav__item"><a class="nav__link" href="#">Аренда</a></li>
                                                <li class="nav__item"><a class="nav__link" href="#">Ремонт</a></li>
                                                <li class="nav__item"><a class="nav__link" href="#">Поверка</a></li>
                                                <li class="nav__item"><a class="nav__link" href="#">Trade In</a></li>
                                                <li class="nav__item"><a class="nav__link" href="#">Лизинг</a></li>
                                                <li class="nav__item"><a class="nav__link" href="#">Выкуп</a></li>
                                            </ul>
                                        </nav>
                                        <!-- end .nav-->
                                    </div>
                                </div>
                                <div class="footer__sub-col footer__sub-col_state_closed footer__sub-col_type-info">
                                    <div class="footer__title">
                                        <!-- begin .title-->
                                        <div class="title title_size_h4">
                                            <button
                                                type="button"
                                                data-toggle-scope=".footer__sub-col"
                                                data-toggle-class="footer__sub-col_state_closed"
                                                class="footer__trigger js-toggle"
                                            >
                                                информация
                                            </button>
                                        </div>
                                        <!-- end .title-->
                                    </div>
                                    <div class="footer__nav">
                                        <!-- begin .nav-->
                                        <nav class="nav">
                                            <ul class="nav__list">
                                                <li class="nav__item">
                                                    <a class="nav__link" href="#">Сервисный центр</a>
                                                </li>
                                                <li class="nav__item"><a class="nav__link" href="#">Гарантия</a></li>
                                            </ul>
                                        </nav>
                                        <!-- end .nav-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer__col-for-mobile">
                            <div class="footer__sub-col footer__sub-col_type-services">
                                <div class="footer__title">
                                    <!-- begin .title-->
                                    <div class="title title_size_h4">Услуги</div>
                                    <!-- end .title-->
                                </div>
                                <div class="footer__nav">
                                    <!-- begin .nav-->
                                    <nav class="nav">
                                        <ul class="nav__list">
                                            <li class="nav__item"><a class="nav__link" href="#">Аренда</a></li>
                                            <li class="nav__item"><a class="nav__link" href="#">Ремонт</a></li>
                                            <li class="nav__item"><a class="nav__link" href="#">Поверка</a></li>
                                            <li class="nav__item"><a class="nav__link" href="#">Trade In</a></li>
                                            <li class="nav__item"><a class="nav__link" href="#">Лизинг</a></li>
                                            <li class="nav__item"><a class="nav__link" href="#">Выкуп</a></li>
                                        </ul>
                                    </nav>
                                    <!-- end .nav-->
                                </div>
                            </div>
                            <div class="footer__col footer__contact-col">
                                <div class="footer__title">
                                    <!-- begin .title-->
                                    <div class="title title_size_h4">Cвяжитесь с нами</div>
                                    <!-- end .title-->
                                </div>
                                <div class="footer__contact-group">
                                    <div class="footer__contacts">
                                        <!-- begin .link-group-->
                                        <div
                                            class="link-group link-group_content_centered link-group_content_m-uncentered"
                                        >
                                            <ul class="link-group__list">
                                                <li class="link-group__item">
                                                    <div class="link-group__wrapper">
                                                        <div class="link-group__sub">
                                                            <!-- begin .link-item-->
                                                            <a
                                                                class="link-item link-item_text-size_l"
                                                                href="tel:89285551516"
                                                            >
                                                                <span class="link-item__label">+7 (978) 555-15-16</span>
                                                            </a>
                                                            <!-- end .link-item-->
                                                        </div>
                                                        <div class="link-group__sub">
                                                            <!-- begin .link-item-->
                                                            <a
                                                                class="link-item link-item_text-size_l"
                                                                href="tel:89089184784"
                                                            >
                                                                <span class="link-item__label">+7 (908) 918-47-84</span>
                                                            </a>
                                                            <!-- end .link-item-->
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="link-group__item">
                                                    <div class="link-group__wrapper">
                                                        <!-- begin .link-item-->
                                                        <a class="link-item" href="mailto:zakaz@mirvendinga.ru">
                                                            <span class="link-item__label">gro-vectorru@yandex.ru</span>
                                                        </a>
                                                        <!-- end .link-item-->
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end .link-group-->
                                    </div>
                                    <div class="footer__social-nav">
                                        <!-- begin .social-nav-->
                                        <div class="social-nav">
                                            <ul class="social-nav__list">
                                                <li class="social-nav__item">
                                                    <a
                                                        class="social-nav__link"
                                                        href="https://wa.me/79785551516"
                                                        target="_blank"
                                                    >
                                                        <span class="social-nav__icon-wrapper">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="16"
                                                                height="16"
                                                                viewBox="0 0 16 16"
                                                                fill="none"
                                                            >
                                                                <g clip-path="url(#clip0_283_732)">
                                                                    <path
                                                                        d="M0.34122 7.90403C0.340848 9.24834 0.692103 10.561 1.36001 11.7179L0.277344 15.6709L4.32274 14.6102C5.44164 15.2193 6.69529 15.5385 7.96925 15.5386H7.9726C12.1782 15.5386 15.6016 12.1164 15.6034 7.91005C15.6042 5.87179 14.8112 3.95514 13.3703 2.51315C11.9297 1.07129 10.0137 0.276809 7.97229 0.275879C3.76621 0.275879 0.343018 3.69789 0.341282 7.90403"
                                                                        fill="url(#paint0_linear_283_732)"
                                                                    />
                                                                    <path
                                                                        d="M0.0663566 7.90177C0.0659225 9.29445 0.429767 10.654 1.12149 11.8524L0 15.9471L4.19045 14.8484C5.34505 15.4779 6.64502 15.8098 7.96781 15.8103H7.97122C12.3277 15.8103 15.8741 12.265 15.876 7.90809C15.8767 5.79659 15.0551 3.81104 13.5628 2.3174C12.0703 0.823938 10.0858 0.000868217 7.97122 0C3.61402 0 0.068093 3.54481 0.0663566 7.90177ZM2.56186 11.646L2.4054 11.3976C1.74766 10.3518 1.4005 9.14326 1.40099 7.90226C1.40242 4.28087 4.34964 1.33457 7.97371 1.33457C9.72874 1.33532 11.3781 2.01947 12.6187 3.26078C13.8592 4.5022 14.5418 6.15243 14.5413 7.9076C14.5397 11.529 11.5924 14.4757 7.97122 14.4757H7.96862C6.78952 14.475 5.63312 14.1584 4.62462 13.56L4.38462 13.4177L1.89792 14.0696L2.56186 11.646V11.646Z"
                                                                        fill="url(#paint1_linear_283_732)"
                                                                    />
                                                                    <path
                                                                        d="M5.99796 4.59831C5.84999 4.26944 5.69427 4.2628 5.55356 4.25704C5.43833 4.25208 5.30661 4.25245 5.17502 4.25245C5.04329 4.25245 4.82928 4.302 4.64838 4.49952C4.46729 4.69722 3.95703 5.17499 3.95703 6.14671C3.95703 7.11849 4.66481 8.0576 4.76348 8.1895C4.86227 8.32116 6.12987 10.3791 8.13743 11.1708C9.8059 11.8287 10.1454 11.6978 10.5075 11.6649C10.8697 11.632 11.6762 11.1872 11.8407 10.726C12.0053 10.2649 12.0053 9.86956 11.956 9.78696C11.9066 9.70466 11.7749 9.65524 11.5774 9.55651C11.3798 9.45772 10.4088 8.97989 10.2277 8.91397C10.0466 8.84811 9.91498 8.81524 9.78326 9.01301C9.65154 9.21046 9.27331 9.65524 9.15802 9.78696C9.04286 9.91899 8.92757 9.93542 8.73012 9.83663C8.53247 9.73753 7.89638 9.52922 7.14171 8.85642C6.55455 8.33288 6.15815 7.68637 6.04292 7.4886C5.9277 7.29115 6.03058 7.18411 6.12962 7.08569C6.21836 6.99719 6.3272 6.85505 6.42605 6.73977C6.52454 6.62442 6.5574 6.54212 6.62326 6.4104C6.68919 6.27856 6.65619 6.16321 6.60689 6.06442C6.5574 5.96563 6.17359 4.98882 5.99796 4.59831Z"
                                                                        fill="white"
                                                                    />
                                                                </g>
                                                                <defs>
                                                                    <linearGradient
                                                                        id="paint0_linear_283_732"
                                                                        x1="766.581"
                                                                        y1="1539.78"
                                                                        x2="766.581"
                                                                        y2="0.275879"
                                                                        gradientUnits="userSpaceOnUse"
                                                                    >
                                                                        <stop stop-color="#1FAF38" />
                                                                        <stop offset="1" stop-color="#60D669" />
                                                                    </linearGradient>
                                                                    <linearGradient
                                                                        id="paint1_linear_283_732"
                                                                        x1="793.798"
                                                                        y1="1594.71"
                                                                        x2="793.798"
                                                                        y2="0"
                                                                        gradientUnits="userSpaceOnUse"
                                                                    >
                                                                        <stop stop-color="#F9F9F9" />
                                                                        <stop offset="1" stop-color="white" />
                                                                    </linearGradient>
                                                                    <clipPath id="clip0_283_732">
                                                                        <rect width="15.876" height="16" fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </span>
                                                        <span class="social-nav__text">What’s App</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end .social-nav-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer__sub">
                        <div class="footer__links">
                            <!-- begin .nav-->
                            <nav class="nav nav_style_dim nav_align_right">
                                <ul class="nav__list">
                                    <li class="nav__item">
                                        <a class="nav__link" href="#">Политика конфиденциальности</a>
                                    </li>
                                    <li class="nav__item">
                                        <a class="nav__link" href="#">Согласие на обработку персональных данных</a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- end .nav-->
                        </div>
                        <div class="footer__copyright">
                            Copyright © 2012–2023 geo-vector.ru
                            <br />
                            Все права защищены.
                        </div>
                    </div>
                </div>
            </div>
            <!-- end .footer-->
        </div>
        <div class="page__slide-nav">
            <!-- begin .mobile-menu-->
            <div class="mobile-menu">
                <div class="mobile-menu__nav">
                    <!-- begin .nav-->
                    <nav class="nav nav_type_separated">
                        <ul class="nav__list">
                            <li class="nav__item"><a class="nav__link" href="#">О компании</a></li>
                            <li class="nav__item"><a class="nav__link" href="#">Оплата и доставка</a></li>
                            <li class="nav__item"><a class="nav__link" href="#">Услуги</a></li>
                            <li class="nav__item"><a class="nav__link" href="#">Информация</a></li>
                            <li class="nav__item"><a class="nav__link" href="#">Контакты</a></li>
                        </ul>
                    </nav>
                    <!-- end .nav-->
                </div>
                <div class="mobile-menu__search">
                    <!-- begin .search-form-->
                    <form class="search-form">
                        <div class="search-form__field">
                            <input
                                type="text"
                                class="search-form__input js-search-with-results"
                                placeholder="Поиск по сайту"
                            />
                            <div class="search-form__clear-control">
                                <button type="button" class="search-form__clear js-search-clear">Очистить</button>
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
                <div class="mobile-menu__contact-group">
                    <div class="mobile-menu__contact">
                        <a href="tel:88003015678" class="mobile-menu__link">+7 (978) 555-15-16</a>
                    </div>
                    <div class="mobile-menu__contact">
                        <a href="tel:84951315678" class="mobile-menu__link">+7 (908) 918-47-84</a>
                    </div>
                </div>
                <div class="mobile-menu__social-nav">
                    <!-- begin .social-nav-->
                    <div class="social-nav">
                        <ul class="social-nav__list">
                            <li class="social-nav__item">
                                <a class="social-nav__link" href="https://wa.me/79785551516" target="_blank">
                                    <span class="social-nav__icon-wrapper">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            viewBox="0 0 16 16"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_283_732)">
                                                <path
                                                    d="M0.34122 7.90403C0.340848 9.24834 0.692103 10.561 1.36001 11.7179L0.277344 15.6709L4.32274 14.6102C5.44164 15.2193 6.69529 15.5385 7.96925 15.5386H7.9726C12.1782 15.5386 15.6016 12.1164 15.6034 7.91005C15.6042 5.87179 14.8112 3.95514 13.3703 2.51315C11.9297 1.07129 10.0137 0.276809 7.97229 0.275879C3.76621 0.275879 0.343018 3.69789 0.341282 7.90403"
                                                    fill="url(#paint0_linear_283_732)"
                                                />
                                                <path
                                                    d="M0.0663566 7.90177C0.0659225 9.29445 0.429767 10.654 1.12149 11.8524L0 15.9471L4.19045 14.8484C5.34505 15.4779 6.64502 15.8098 7.96781 15.8103H7.97122C12.3277 15.8103 15.8741 12.265 15.876 7.90809C15.8767 5.79659 15.0551 3.81104 13.5628 2.3174C12.0703 0.823938 10.0858 0.000868217 7.97122 0C3.61402 0 0.068093 3.54481 0.0663566 7.90177ZM2.56186 11.646L2.4054 11.3976C1.74766 10.3518 1.4005 9.14326 1.40099 7.90226C1.40242 4.28087 4.34964 1.33457 7.97371 1.33457C9.72874 1.33532 11.3781 2.01947 12.6187 3.26078C13.8592 4.5022 14.5418 6.15243 14.5413 7.9076C14.5397 11.529 11.5924 14.4757 7.97122 14.4757H7.96862C6.78952 14.475 5.63312 14.1584 4.62462 13.56L4.38462 13.4177L1.89792 14.0696L2.56186 11.646V11.646Z"
                                                    fill="url(#paint1_linear_283_732)"
                                                />
                                                <path
                                                    d="M5.99796 4.59831C5.84999 4.26944 5.69427 4.2628 5.55356 4.25704C5.43833 4.25208 5.30661 4.25245 5.17502 4.25245C5.04329 4.25245 4.82928 4.302 4.64838 4.49952C4.46729 4.69722 3.95703 5.17499 3.95703 6.14671C3.95703 7.11849 4.66481 8.0576 4.76348 8.1895C4.86227 8.32116 6.12987 10.3791 8.13743 11.1708C9.8059 11.8287 10.1454 11.6978 10.5075 11.6649C10.8697 11.632 11.6762 11.1872 11.8407 10.726C12.0053 10.2649 12.0053 9.86956 11.956 9.78696C11.9066 9.70466 11.7749 9.65524 11.5774 9.55651C11.3798 9.45772 10.4088 8.97989 10.2277 8.91397C10.0466 8.84811 9.91498 8.81524 9.78326 9.01301C9.65154 9.21046 9.27331 9.65524 9.15802 9.78696C9.04286 9.91899 8.92757 9.93542 8.73012 9.83663C8.53247 9.73753 7.89638 9.52922 7.14171 8.85642C6.55455 8.33288 6.15815 7.68637 6.04292 7.4886C5.9277 7.29115 6.03058 7.18411 6.12962 7.08569C6.21836 6.99719 6.3272 6.85505 6.42605 6.73977C6.52454 6.62442 6.5574 6.54212 6.62326 6.4104C6.68919 6.27856 6.65619 6.16321 6.60689 6.06442C6.5574 5.96563 6.17359 4.98882 5.99796 4.59831Z"
                                                    fill="white"
                                                />
                                            </g>
                                            <defs>
                                                <linearGradient
                                                    id="paint0_linear_283_732"
                                                    x1="766.581"
                                                    y1="1539.78"
                                                    x2="766.581"
                                                    y2="0.275879"
                                                    gradientUnits="userSpaceOnUse"
                                                >
                                                    <stop stop-color="#1FAF38" />
                                                    <stop offset="1" stop-color="#60D669" />
                                                </linearGradient>
                                                <linearGradient
                                                    id="paint1_linear_283_732"
                                                    x1="793.798"
                                                    y1="1594.71"
                                                    x2="793.798"
                                                    y2="0"
                                                    gradientUnits="userSpaceOnUse"
                                                >
                                                    <stop stop-color="#F9F9F9" />
                                                    <stop offset="1" stop-color="white" />
                                                </linearGradient>
                                                <clipPath id="clip0_283_732">
                                                    <rect width="15.876" height="16" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="social-nav__text">What’s App</span>
                                </a>
                            </li>
                            <li class="social-nav__item">
                                <a class="social-nav__link" href="mailto:geo-vectorru@yandex.ru" target="_blank">
                                    <span class="social-nav__text">geo-vectorru@yandex.ru</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- end .social-nav-->
                </div>
            </div>
            <!-- end .mobile-menu-->
        </div>
        <div class="page__modals">
            <!-- begin .modal-->
            <div class="modal" id="modalQuestion">
                <div class="modal__header">
                    <div class="modal__title">
                        <!-- begin .title-->
                        <h3 class="title title_size_h3">Задать вопрос</h3>
                        <!-- end .title-->
                    </div>
                </div>
                <div class="modal__content">
                    <!-- begin .form-->
                    <!-- Modifiers-->
                    <!-- form_messages_shown - display the messages element. this will automatically display all the .form__message elements-->
                    <form class="form form_type_close form_controls_full modal__form" id="formQuestion">
                        <!-- messages can be placed before or after the form-->
                        <div class="form__messages">
                            <!-- Modifiers-->
                            <!-- form__message_style_error - red color-->
                            <div class="form__message">Сообщение формы</div>
                        </div>
                        <div class="form__main">
                            <div class="form__inputs">
                                <div class="form__line">
                                    <!-- begin .form-control-->
                                    <div class="form-control">
                                        <label class="form-control__holder">
                                            <span class="form-control__label">ФИО*</span>
                                            <span class="form-control__field">
                                                <!-- Modifiers-->
                                                <!-- form-control__input_state_invalid - red border, one of the two options to show invalid field-->
                                                <input
                                                    type="text"
                                                    class="form-control__input"
                                                    required="required"
                                                    name="name"
                                                />
                                            </span>
                                            <span class="form-control__messages">
                                                <span
                                                    style="display: none"
                                                    class="form-control__message form-control__message_style_error"
                                                >
                                                    Ошибка поля
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <!-- end .form-control-->
                                </div>
                                <div class="form__line">
                                    <!-- begin .form-control-->
                                    <div class="form-control">
                                        <label class="form-control__holder">
                                            <span class="form-control__label">Телефон*</span>
                                            <span class="form-control__field">
                                                <!-- Modifiers-->
                                                <!-- form-control__input_state_invalid - red border, one of the two options to show invalid field-->
                                                <input
                                                    type="text"
                                                    class="form-control__input js-phone-input"
                                                    required="required"
                                                    name="phone"
                                                />
                                            </span>
                                            <span class="form-control__messages">
                                                <span
                                                    style="display: none"
                                                    class="form-control__message form-control__message_style_error"
                                                >
                                                    Ошибка поля
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <!-- end .form-control-->
                                </div>
                                <div class="form__line">
                                    <!-- begin .form-control-->
                                    <div class="form-control">
                                        <label class="form-control__holder">
                                            <span class="form-control__label">E-mail*</span>
                                            <span class="form-control__field">
                                                <!-- Modifiers-->
                                                <!-- form-control__input_state_invalid - red border, one of the two options to show invalid field-->
                                                <input
                                                    type="email"
                                                    class="form-control__input js-email-input"
                                                    required="required"
                                                    name="email"
                                                />
                                            </span>
                                            <span class="form-control__messages">
                                                <span
                                                    style="display: none"
                                                    class="form-control__message form-control__message_style_error"
                                                >
                                                    Ошибка поля
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <!-- end .form-control-->
                                </div>
                                <div class="form__line">
                                    <!-- begin .form-control-->
                                    <div class="form-control">
                                        <label class="form-control__holder">
                                            <span class="form-control__label">Комментарий</span>
                                            <span class="form-control__field">
                                                <!-- Modifiers-->
                                                <!-- form-control__textarea_state_invalid - red border, one of the two options to show invalid field-->
                                                <textarea class="form-control__textarea" name="comment"></textarea>
                                            </span>
                                            <span class="form-control__messages">
                                                <span
                                                    style="display: none"
                                                    class="form-control__message form-control__message_style_error"
                                                >
                                                    Ошибка поля
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <!-- end .form-control-->
                                </div>
                                <div class="form__line">
                                    <!-- begin .form-control-->
                                    <div class="form-control">
                                        <label class="form-control__holder">
                                            <span class="form-control__label">Прикрепить файл</span>
                                            <span class="form-control__field">
                                                <span class="form-control__file">
                                                    <!-- begin .file-input-->
                                                    <span class="file-input">
                                                        <span class="file-input__panel">
                                                            <!-- begin .file-panel-->
                                                            <span class="file-panel">
                                                                <label class="file-panel__wrapper">
                                                                    <input
                                                                        type="file"
                                                                        class="file-panel__input js-file-input"
                                                                        accept=".pdf,.txt,.doc,.png,.jpeg,.jpg"
                                                                        multiple="multiple"
                                                                    />
                                                                    <span class="file-panel__content">
                                                                        <span class="file-panel__label"></span>
                                                                    </span>
                                                                    <span class="file-panel__note"></span>
                                                                    <span class="file-panel__control">
                                                                        <!-- begin .button-->
                                                                        <span
                                                                            class="button button_width_full button_style_outline"
                                                                        >
                                                                            <span class="button__holder">Обзор...</span>
                                                                        </span>
                                                                        <!-- end .button-->
                                                                    </span>
                                                                </label>
                                                            </span>
                                                            <!-- end .file-panel-->
                                                        </span>
                                                    </span>
                                                    <!-- end .file-input-->
                                                </span>
                                            </span>
                                            <span class="form-control__messages">
                                                <span
                                                    style="display: none"
                                                    class="form-control__message form-control__message_style_error"
                                                >
                                                    Ошибка поля
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <!-- end .form-control-->
                                </div>
                            </div>
                            <div class="form__confirmation-check">
                                <!-- begin .check-elem-->
                                <label class="check-elem check-elem_text-size_s">
                                    <input
                                        class="check-elem__input"
                                        type="checkbox"
                                        name="agreement"
                                        required="required"
                                    />
                                    <span class="check-elem__label">
                                        Я даю согласие на обработку
                                        <a class="link" href="#" target="_blank">персональных данных</a>
                                    </span>
                                </label>
                                <!-- end .check-elem-->
                            </div>
                            <div class="form__controls">
                                <div class="form__submit form__submit_width_l">
                                    <!-- begin .button-->
                                    <button class="button button_width_full button_size_s" type="submit">
                                        <span class="button__holder">Отправить</span>
                                    </button>
                                    <!-- end .button-->
                                </div>
                            </div>
                        </div>
                        <div class="form__final">
                            <div class="form__illustration">
                                <img
                                    src="assets/blocks/form/images/check.svg"
                                    alt="Успех!"
                                    class="form__image"
                                    title=""
                                />
                            </div>
                            <div class="form__message-wrapper">
                                <div class="form__title">
                                    <!-- begin .title-->
                                    <h3 class="title title_size_h4">Ваша заявка успешно отправлена</h3>
                                    <!-- end .title-->
                                </div>
                                <div class="form__text">Форма успешно отправлена</div>
                                <div class="form__controls">
                                    <div class="form__control">
                                        <!-- begin .button-->
                                        <a class="button button_width_full" href="#">
                                            <span class="button__holder">Понятно</span>
                                        </a>
                                        <!-- end .button-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- end .form-->
                </div>
            </div>
            <!-- end .modal-->
            <!-- begin .modal-->
            <div class="modal" id="modalOrder">
                <div class="modal__header">
                    <div class="modal__title">
                        <!-- begin .title-->
                        <h3 class="title title_size_h3">Товар под заказ</h3>
                        <!-- end .title-->
                    </div>
                </div>
                <div class="modal__content">
                    <!-- begin .form-->
                    <!-- Modifiers-->
                    <!-- form_messages_shown - display the messages element. this will automatically display all the .form__message elements-->
                    <form class="form form_type_close form_controls_full modal__form" id="formOrder">
                        <!-- messages can be placed before or after the form-->
                        <div class="form__messages">
                            <!-- Modifiers-->
                            <!-- form__message_style_error - red color-->
                            <div class="form__message">Сообщение формы</div>
                        </div>
                        <div class="form__main">
                            <div class="form__inputs">
                                <div class="form__line">
                                    <!-- begin .form-control-->
                                    <div class="form-control">
                                        <label class="form-control__holder">
                                            <span class="form-control__label">ФИО*</span>
                                            <span class="form-control__field">
                                                <!-- Modifiers-->
                                                <!-- form-control__input_state_invalid - red border, one of the two options to show invalid field-->
                                                <input
                                                    type="text"
                                                    class="form-control__input"
                                                    required="required"
                                                    name="name"
                                                />
                                            </span>
                                            <span class="form-control__messages">
                                                <span
                                                    style="display: none"
                                                    class="form-control__message form-control__message_style_error"
                                                >
                                                    Ошибка поля
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <!-- end .form-control-->
                                </div>
                                <div class="form__line">
                                    <!-- begin .form-control-->
                                    <div class="form-control">
                                        <label class="form-control__holder">
                                            <span class="form-control__label">Телефон*</span>
                                            <span class="form-control__field">
                                                <!-- Modifiers-->
                                                <!-- form-control__input_state_invalid - red border, one of the two options to show invalid field-->
                                                <input
                                                    type="text"
                                                    class="form-control__input js-phone-input"
                                                    required="required"
                                                    name="phone"
                                                />
                                            </span>
                                            <span class="form-control__messages">
                                                <span
                                                    style="display: none"
                                                    class="form-control__message form-control__message_style_error"
                                                >
                                                    Ошибка поля
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <!-- end .form-control-->
                                </div>
                                <div class="form__line">
                                    <!-- begin .form-control-->
                                    <div class="form-control">
                                        <label class="form-control__holder">
                                            <span class="form-control__label">E-mail*</span>
                                            <span class="form-control__field">
                                                <!-- Modifiers-->
                                                <!-- form-control__input_state_invalid - red border, one of the two options to show invalid field-->
                                                <input
                                                    type="email"
                                                    class="form-control__input js-email-input"
                                                    required="required"
                                                    name="email"
                                                />
                                            </span>
                                            <span class="form-control__messages">
                                                <span
                                                    style="display: none"
                                                    class="form-control__message form-control__message_style_error"
                                                >
                                                    Ошибка поля
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <!-- end .form-control-->
                                </div>
                                <div class="form__line">
                                    <!-- begin .form-control-->
                                    <div class="form-control">
                                        <label class="form-control__holder">
                                            <span class="form-control__label">Название товара</span>
                                            <span class="form-control__field">
                                                <!-- Modifiers-->
                                                <!-- form-control__input_state_invalid - red border, one of the two options to show invalid field-->
                                                <input
                                                    type="text"
                                                    class="form-control__input"
                                                    name="product"
                                                    value=""
                                                />
                                            </span>
                                            <span class="form-control__messages">
                                                <span
                                                    style="display: none"
                                                    class="form-control__message form-control__message_style_error"
                                                >
                                                    Ошибка поля
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <!-- end .form-control-->
                                </div>
                                <div class="form__line">
                                    <!-- begin .form-control-->
                                    <div class="form-control">
                                        <label class="form-control__holder">
                                            <span class="form-control__label">Комментарий</span>
                                            <span class="form-control__field">
                                                <!-- Modifiers-->
                                                <!-- form-control__textarea_state_invalid - red border, one of the two options to show invalid field-->
                                                <textarea class="form-control__textarea" name="comment"></textarea>
                                            </span>
                                            <span class="form-control__messages">
                                                <span
                                                    style="display: none"
                                                    class="form-control__message form-control__message_style_error"
                                                >
                                                    Ошибка поля
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <!-- end .form-control-->
                                </div>
                            </div>
                            <div class="form__confirmation-check">
                                <!-- begin .check-elem-->
                                <label class="check-elem check-elem_text-size_s">
                                    <input
                                        class="check-elem__input"
                                        type="checkbox"
                                        name="agreement"
                                        required="required"
                                    />
                                    <span class="check-elem__label">
                                        Я даю согласие на обработку
                                        <a class="link" href="#" target="_blank">персональных данных</a>
                                    </span>
                                </label>
                                <!-- end .check-elem-->
                            </div>
                            <div class="form__controls">
                                <div class="form__submit form__submit_width_l">
                                    <!-- begin .button-->
                                    <button class="button button_width_full button_size_s" type="submit">
                                        <span class="button__holder">Отправить</span>
                                    </button>
                                    <!-- end .button-->
                                </div>
                            </div>
                        </div>
                        <div class="form__final">
                            <div class="form__illustration">
                                <img
                                    src="assets/blocks/form/images/check.svg"
                                    alt="Успех!"
                                    class="form__image"
                                    title=""
                                />
                            </div>
                            <div class="form__message-wrapper">
                                <div class="form__title">
                                    <!-- begin .title-->
                                    <h3 class="title title_size_h4">Ваша заявка успешно отправлена</h3>
                                    <!-- end .title-->
                                </div>
                                <div class="form__text">Форма успешно отправлена</div>
                                <div class="form__controls">
                                    <div class="form__control">
                                        <!-- begin .button-->
                                        <a class="button button_width_full" href="#">
                                            <span class="button__holder">Понятно</span>
                                        </a>
                                        <!-- end .button-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- end .form-->
                </div>
            </div>
            <!-- end .modal-->
            <!-- begin .modal-->
            <div class="modal" id="modalGeoSelect">
                <div class="modal__header">
                    <div class="modal__title">
                        <!-- begin .title-->
                        <h3 class="title title_size_h3">Выберите город</h3>
                        <!-- end .title-->
                    </div>
                </div>
                <div class="modal__content">
                    <div class="modal__search">
                        <!-- begin .search-form-->
                        <form class="search-form">
                            <div class="search-form__field">
                                <input
                                    type="text"
                                    class="search-form__input js-search-with-results"
                                    placeholder="Введите город"
                                />
                                <div class="search-form__clear-control">
                                    <button type="button" class="search-form__clear js-search-clear">Очистить</button>
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
                    <div class="modal__geo-list">
                        <!-- begin .geo-list-->
                        <div class="geo-list">
                            <div class="geo-list__links">
                                <!-- begin .link-->
                                <a class="link" href="#">Определить город автоматически</a>
                                <!-- end .link-->
                            </div>
                            <ul class="geo-list__list">
                                <li class="geo-list__item">
                                    <a class="geo-list__link" href="#">
                                        <span class="geo-list__label">Ростов-на-Дону</span>
                                        <span class="geo-list__icon-wrapper">
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="geo-list__icon"
                                            >
                                                <path
                                                    d="M8.9999 16.2001L4.7999 12.0001L3.3999 13.4001L8.9999 19.0001L20.9999 7.0001L19.5999 5.6001L8.9999 16.2001Z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="geo-list__item">
                                    <a class="geo-list__link geo-list__link_state_active" href="#">
                                        <span class="geo-list__label">Москва</span>
                                        <span class="geo-list__icon-wrapper">
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="geo-list__icon"
                                            >
                                                <path
                                                    d="M8.9999 16.2001L4.7999 12.0001L3.3999 13.4001L8.9999 19.0001L20.9999 7.0001L19.5999 5.6001L8.9999 16.2001Z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="geo-list__item">
                                    <a class="geo-list__link" href="#">
                                        <span class="geo-list__label">Екатеринбург</span>
                                        <span class="geo-list__icon-wrapper">
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="geo-list__icon"
                                            >
                                                <path
                                                    d="M8.9999 16.2001L4.7999 12.0001L3.3999 13.4001L8.9999 19.0001L20.9999 7.0001L19.5999 5.6001L8.9999 16.2001Z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="geo-list__item">
                                    <a class="geo-list__link" href="#">
                                        <span class="geo-list__label">Краснодар</span>
                                        <span class="geo-list__icon-wrapper">
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="geo-list__icon"
                                            >
                                                <path
                                                    d="M8.9999 16.2001L4.7999 12.0001L3.3999 13.4001L8.9999 19.0001L20.9999 7.0001L19.5999 5.6001L8.9999 16.2001Z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="geo-list__item">
                                    <a class="geo-list__link" href="#">
                                        <span class="geo-list__label">Самара</span>
                                        <span class="geo-list__icon-wrapper">
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="geo-list__icon"
                                            >
                                                <path
                                                    d="M8.9999 16.2001L4.7999 12.0001L3.3999 13.4001L8.9999 19.0001L20.9999 7.0001L19.5999 5.6001L8.9999 16.2001Z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="geo-list__item">
                                    <a class="geo-list__link" href="#">
                                        <span class="geo-list__label">Санкт-Петербург</span>
                                        <span class="geo-list__icon-wrapper">
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="geo-list__icon"
                                            >
                                                <path
                                                    d="M8.9999 16.2001L4.7999 12.0001L3.3999 13.4001L8.9999 19.0001L20.9999 7.0001L19.5999 5.6001L8.9999 16.2001Z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="geo-list__item">
                                    <a class="geo-list__link" href="#">
                                        <span class="geo-list__label">Уфа</span>
                                        <span class="geo-list__icon-wrapper">
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="geo-list__icon"
                                            >
                                                <path
                                                    d="M8.9999 16.2001L4.7999 12.0001L3.3999 13.4001L8.9999 19.0001L20.9999 7.0001L19.5999 5.6001L8.9999 16.2001Z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="geo-list__item">
                                    <a class="geo-list__link" href="#">
                                        <span class="geo-list__label">Челябинск</span>
                                        <span class="geo-list__icon-wrapper">
                                            <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="geo-list__icon"
                                            >
                                                <path
                                                    d="M8.9999 16.2001L4.7999 12.0001L3.3999 13.4001L8.9999 19.0001L20.9999 7.0001L19.5999 5.6001L8.9999 16.2001Z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end .geo-list-->
                    </div>
                </div>
            </div>
            <!-- end .modal-->
            <!-- begin .modal-->
            <div class="modal modal_size_l modal_height_contained" id="modalText">
                <div class="modal__header">
                    <div class="modal__title">
                        <!-- begin .title-->
                        <h3 class="title title_size_h3">Обработка персональных данных</h3>
                        <!-- end .title-->
                    </div>
                </div>
                <div class="modal__content">
                    <div class="modal__text">
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, ut. Laborum, magnam
                            placeat! Sequi temporibus aspernatur et eum fugiat. Nulla officia dignissimos voluptates
                            temporibus nisi!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur
                            <a href="#">adipisicing elit</a>
                            . Distinctio voluptas doloremque beatae accusamus reprehenderit optio.
                        </p>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptas incidunt et
                            ipsam maxime! Temporibus soluta explicabo quidem ratione magnam sint nemo omnis laborum
                            officiis. Laudantium consequatur a, aliquid, neque explicabo cupiditate reiciendis error
                            accusamus nostrum laboriosam similique vero quas nulla saepe, labore possimus doloremque
                            sint repellendus consectetur necessitatibus molestiae beatae delectus asperiores? Minima
                            aliquam sit repudiandae cum tempore dolores placeat est molestias quasi omnis assumenda
                            similique reiciendis ad natus debitis numquam consectetur officia voluptate dolorum,
                            consequuntur maiores accusamus reprehenderit. Nihil aliquid amet esse eius blanditiis nam
                            sapiente, quos quam facilis modi. Commodi repudiandae natus quia quaerat facilis consequatur
                            placeat.
                        </p>
                        <h3>Lorem, ipsum dolor.</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum, possimus quaerat
                            itaque architecto quo! Hic laudantium molestias earum ipsa.
                        </p>
                        <ul>
                            <li>Lorem ipsum dolor sit.</li>
                            <li>Lorem ipsum dolor sit.</li>
                            <li>Lorem ipsum dolor sit.</li>
                        </ul>
                        <h3>Lorem, ipsum.</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate deserunt dignissimos
                            placeat fugiat, voluptatem incidunt inventore architecto, consequuntur et possimus at
                            dolorum? Quia placeat atque optio at commodi dolorem obcaecati ratione ipsam. Nemo,
                            obcaecati quas!
                        </p>
                    </div>
                </div>
            </div>
            <!-- end .modal-->
            <!-- begin .modal-->
            <div class="modal modal_size_xs modal_close_hidden" id="modalGeoPrompt">
                <div class="modal__content">
                    <div class="modal__text"><p>Ваш город Ростов-на-Дону?</p></div>
                    <div class="modal__controls">
                        <div class="modal__control">
                            <!-- begin .button-->
                            <button class="button button_width_full button_size_s js-fancybox-close" type="submit">
                                <span class="button__holder">Все верно</span>
                            </button>
                            <!-- end .button-->
                        </div>
                        <div class="modal__control">
                            <!-- begin .button-->
                            <a
                                class="button button_width_full button_size_s button_style_light js-geo-select-modal"
                                href="#modalGeoSelect"
                            >
                                <span class="button__holder">Выбрать город</span>
                            </a>
                            <!-- end .button-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end .modal-->
        </div>
        <script src="assets/components/jquery-3.4.1/jquery.min.js?1686691538586"></script>
        <script src="assets/components/vanilla-lazyload-17.5.0/lazyload.min.js?1686691538586"></script>
        <script src="assets/components/swiper-7.2.0/js/swiper-bundle.min.js?1686691538586"></script>
        <script src="assets/components/wnumb-1.1.0/wNumb.js?1686691538586"></script>
        <script src="assets/components/noUiSlider-master/nouislider.min.js?1686691538586"></script>
        <script src="assets/components/just-validate-3.10.0/just-validate.production.min.js?1686691538586"></script>
        <script src="assets/components/Inputmask/inputmask.min.js?1686691538586"></script>
        <script src="assets/components/fancybox-4.0.7/fancybox.umd.js?1686691538586"></script>
        <script src="assets/scripts/svg4everybody.js?1686691538586"></script>
        <script src="assets/scripts/helpers.js?1686691538586"></script>
        <script src="assets/scripts/common.js?1686691538586"></script>
        <script src="assets/scripts/ymap.js?1686691538586"></script>
        <script src="assets/scripts/validate.js?1686691538586"></script>
        <script src="assets/scripts/search-form.js?1686691538586"></script>
        <script src="assets/scripts/profile-forms.js?1686691538586"></script>
        <script src="assets/scripts/custom.js?1686691538586"></script>
    </body>
</html>
<!-- end .page-->
