<!-- begin .page-->
<?php

$city = 'Москва';
if (isset($_COOKIE['city'])){
    $city = $_COOKIE['city'];
}

?>
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
        <title>Карточка товара | Мир Вендинга</title>
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
                                                <a href="/catalog?category_id=<?=$category['id']; ?>" class="catalog-filter__filter-link"><?= $category['name']; ?></a>
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
                                                <a href="/catalog?category_id=<?=$category['id']; ?>" class="catalog-filter__filter-link"><?= $category['name']; ?></a>
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
                                                        <?php if (1 ==($offer['hit']) ){ ?>
                                                        <div
                                                            class="label__label label__label_style_popular"
                                                        >
                                                            Хит продаж!
                                                        </div>
                                                        <?php } ?>
                                                        <?php if (1 ==($offer['verification']) ){ ?>
                                                        <div
                                                            class="label__label label__label_style_check"
                                                        >
                                                            Поверка в комплекте
                                                        </div>
                                                        <?php } ?>
                                                        <?php if (null !=($offer['stateregister']) ){ ?>
                                                        <div
                                                            class="label__label label__label_style_gos"
                                                        >
                                                            Госреестр
                                                        </div>
                                                        <?php } ?>
                                                        <?php if ($offer['discount'] != null && $offer['discount'] > 0 && $offer['discount'] <= 100 ){ ?>
                                                            <div
                                                            class="label__label label__label_style_discount">
                                                                Скидка
                                                            </div>
                                                            <?php }?>
                                                    </div>
                                                </div>
                                                
                                                <!-- end .label-->
                                            </div>
                                            <div class="product-card__code">Код товара: <?= $offer['vendorCode'] ?></div>
                                            <?php if (isset($offer['guaranty'])){ ?>
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
                                                <span>Гарантия: <?= $offer['guaranty'] ?></span>
                                            </div>
                                            <?php } ?>
                                            <?php if(null !=$offer['stateregister'] ){ ?>
                                                <div class="product-card__gosreestr"> Госреестр №<?=$offer['stateregister'] ?></div>
                                            <?php } ?>
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
                                                                <?php if ($offer['discount'] != null && $offer['discount'] > 0 && $offer['discount'] <= 100 ){
                                                                    $newPrice = $offer['price'] * (1 - ($offer['discount'] / 100))
                                                                    ?>
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
                                                                <?php } ?>
                                                                <div class="price-group__main">
                                                                    <div class="price-group__price">
                                                                        <span class="price-group__value">
                                                                            <?= ($offer['discount'] != null)? $newPrice: $offer['price']?>
                                                                        </span>
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
                                                                <?php 
                                                                    if ($offer['quantity'] >0){ ?>
                                                                <span
                                                                class="product-card__availability product-card__availability_status_available"
                                                                >
                                                                        В наличии <?= $offer['quantity']?> шт.
                                                                </span>
                                                                  <?php }else{ ?>
                                                                    <span
                                                                    class="product-card__availability product-card__availability_status_unavailable"
                                                                    >
                                                                        Нет в наличии
                                                                    </span>
                                                                <?php  } ?>

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
                                                                                <?= $city ?>
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
                                            <?= ($offer['description'] != null) ? $offer['description'] : "Описание отсутствует"; ?>
                                        </div>
                                    </div>
                                    <div class="tabs__panel js-tabs-panel">
                                        <?= ($offer['specifications'] != null) ? $offer['specifications'] : "Характеристики отсутствуют"; ?>
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
                                    <?= ($offer['description'] != null) ? $offer['description'] : "Описание отсутствует"; ?>
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
                                <div class="page__text"><?= ($offer['specifications'] != null) ? $offer['specifications'] : "Характеристики отсутствуют"; ?>></div>
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
        @include('layouts.footer')
        <div class="page__modals">
            @include('layouts.modalQuestion')
            @include('layouts.modalOrder')
            @include('layouts.modalGeoPromt')
            @include('layouts.modalGeoSelect')
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
        <script src="assets/scripts/validate.js?1686691538586"></script>
        <script src="assets/scripts/search-form.js?1686691538586"></script>
        <script src="assets/scripts/custom.js?1686691538586"></script>
    </body>
</html>
<!-- end .page-->
