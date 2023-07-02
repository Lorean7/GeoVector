<!-- begin .page-->
<?php
$currentCategory = end($list_category); // получение текущей категории
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
        <title>Каталог | Мир Вендинга</title>
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
        <link href="assets/styles/app.css?1686691535380" rel="stylesheet" />
        <link href="assets/styles/custom.css?1686691535380" rel="stylesheet" />
    </head>
    <body class="page__body">
    @include('layouts.app')
        <div class="page__content">
            <div class="page__section">
                <div class="page__container">
                    <!-- begin .section-->
                    <div class="section">
                        <div class="section__content">
                            <div class="section__catalog">
                                <!-- begin .catalog-->
                                <div class="catalog">
                                    <div class="catalog__content">
                                        <div class="catalog__aside">
                                            <!-- begin .catalog-filters-->
                                            <div class="catalog-filters catalog__filters">
                                                <div class="catalog-filters__wrapper">
                                                    <div class="catalog-filters__header">
                                                        <button
                                                            type="button"
                                                            data-toggle-scope=".catalog, .page__body"
                                                            data-toggle-class="catalog_filters_open, frozen-scroll"
                                                            class="catalog-filters__close js-toggle"
                                                        >
                                                            Закрыть фильтр
                                                        </button>
                                                        <div class="catalog-filters__title">
                                                            <!-- begin .title-->
                                                            <h2 class="title title_size_h1">Фильтры</h2>
                                                            <!-- end .title-->
                                                        </div>
                                                    </div>
                                                    <ul class="catalog-filters__list">
                                                        <li class="catalog-filters__item">
                                                            <!-- begin .catalog-filter-->
                                                            <div class="catalog-filter catalog-filter_state_open">
                                                                <div class="catalog-filter__header">
                                                                    <button
                                                                        type="button"
                                                                        data-toggle-scope=".catalog-filter"
                                                                        data-toggle-class="catalog-filter_state_open"
                                                                        class="catalog-filter__trigger js-toggle"
                                                                    >
                                                                        <?= $currentCategory['name']; ?>
                                                                    </button>
                                                                </div>
                                                                <div class="catalog-filter__body">
                                                                    <ul>
                                                                        <?php 
                                                                            $check = true;
                                                                            foreach ($categoriesData as $category) { 
                                                                                if ($category['parent_id'] == $currentCategory['id']){ 
                                                                                    $check = false;

                                                                                    ?>
                                                                                    <li class="catalog-filter__filter-item">
                                                                                        <a href="/catalog?category_id=<?= $category['id'] ?>" class="catalog-filter__filter-link"><?= $category['name']; ?></a>
                                                                                    </li>
                                                                            <?php } ?>
                                                                        <?php } 
                                                                        if ($check){ ?>
                                                                            <li class="catalog-filter__filter-item">
                                                                                <p class="catalog-filter__filter-link">Категорий не обнаружено</p>
                                                                            </li>
                                                                     <?php } ?>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- end .catalog-filter-->
                                                        </li>
                                                        <li class="catalog-filters__item">
                                                            <!-- begin .catalog-filter-->
                                                            <div class="catalog-filter catalog-filter_state_open">
                                                                <div class="catalog-filter__header">
                                                                    <button
                                                                        type="button"
                                                                        data-toggle-scope=".catalog-filter"
                                                                        data-toggle-class="catalog-filter_state_open"
                                                                        class="catalog-filter__trigger js-toggle"
                                                                    >
                                                                        Цена
                                                                    </button>
                                                                </div>
                                                                <div class="catalog-filter__body">
                                                                    <div class="catalog-filter__range">
                                                                        <!-- begin .range-->
                                                                        <div
                                                                            class="range js-range"
                                                                            data-start="39990"
                                                                            data-stop="249990"
                                                                            data-min="0"
                                                                            data-max="249990"
                                                                        >
                                                                            <div class="range__fields">
                                                                                <label class="range__field">
                                                                                    <span class="range__label">от</span>
                                                                                    <input
                                                                                        type="text"
                                                                                        value="39990"
                                                                                        class="range__input range__input_type_from"
                                                                                    />
                                                                                    <input
                                                                                        type="text"
                                                                                        value="39990"
                                                                                        class="range__input range__input_type_visual-from"
                                                                                    />
                                                                                </label>
                                                                                <label class="range__field">
                                                                                    <span class="range__label">до</span>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="range__input range__input_type_to"
                                                                                    />
                                                                                    <input
                                                                                        type="text"
                                                                                        value="249990"
                                                                                        class="range__input range__input_type_visual-to"
                                                                                    />
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end .range-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end .catalog-filter-->
                                                        </li>
                                                        <li class="catalog-filters__item">
                                                            <!-- begin .catalog-filter-->
                                                            <div class="catalog-filter catalog-filter_state_open">
                                                                <div class="catalog-filter__header">
                                                                    <button
                                                                        type="button"
                                                                        data-toggle-scope=".catalog-filter"
                                                                        data-toggle-class="catalog-filter_state_open"
                                                                        class="catalog-filter__trigger js-toggle"
                                                                    >
                                                                        Тип тепловизоров
                                                                    </button>
                                                                </div>
                                                                <div class="catalog-filter__body">
                                                                    <div class="catalog-filter__check-group">
                                                                        <div class="catalog-filter__check-item">
                                                                            <!-- begin .check-elem-->
                                                                            <label class="check-elem">
                                                                                <input
                                                                                    class="check-elem__input"
                                                                                    type="checkbox"
                                                                                    name="checkgroup-1"
                                                                                    checked="checked"
                                                                                />
                                                                                <span class="check-elem__label">
                                                                                    Базовый
                                                                                </span>
                                                                            </label>
                                                                            <!-- end .check-elem-->
                                                                        </div>
                                                                        <div class="catalog-filter__check-item">
                                                                            <!-- begin .check-elem-->
                                                                            <label class="check-elem">
                                                                                <input
                                                                                    class="check-elem__input"
                                                                                    type="checkbox"
                                                                                    name="checkgroup-1"
                                                                                    disabled="disabled"
                                                                                />
                                                                                <span class="check-elem__label">
                                                                                    Промышленный
                                                                                </span>
                                                                            </label>
                                                                            <!-- end .check-elem-->
                                                                        </div>
                                                                        <div class="catalog-filter__check-item">
                                                                            <!-- begin .check-elem-->
                                                                            <label class="check-elem">
                                                                                <input
                                                                                    class="check-elem__input"
                                                                                    type="checkbox"
                                                                                    name="checkgroup-1"
                                                                                />
                                                                                <span class="check-elem__label">
                                                                                    Профессиональный
                                                                                </span>
                                                                            </label>
                                                                            <!-- end .check-elem-->
                                                                        </div>
                                                                        <div class="catalog-filter__check-item">
                                                                            <!-- begin .check-elem-->
                                                                            <label class="check-elem">
                                                                                <input
                                                                                    class="check-elem__input"
                                                                                    type="checkbox"
                                                                                    name="checkgroup-1"
                                                                                    checked="checked"
                                                                                    disabled="disabled"
                                                                                />
                                                                                <span class="check-elem__label">
                                                                                    Портативный
                                                                                </span>
                                                                            </label>
                                                                            <!-- end .check-elem-->
                                                                        </div>
                                                                        <div class="catalog-filter__check-item">
                                                                            <!-- begin .check-elem-->
                                                                            <label class="check-elem">
                                                                                <input
                                                                                    class="check-elem__input"
                                                                                    type="checkbox"
                                                                                    name="checkgroup-1"
                                                                                />
                                                                                <span class="check-elem__label">
                                                                                    Бюджетный
                                                                                </span>
                                                                            </label>
                                                                            <!-- end .check-elem-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end .catalog-filter-->
                                                        </li>
                                                        <li class="catalog-filters__item">
                                                            <!-- begin .catalog-filter-->
                                                            <div class="catalog-filter catalog-filter_state_open">
                                                                <div class="catalog-filter__header">
                                                                    <button
                                                                        type="button"
                                                                        data-toggle-scope=".catalog-filter"
                                                                        data-toggle-class="catalog-filter_state_open"
                                                                        class="catalog-filter__trigger js-toggle"
                                                                    >
                                                                        Матрица детектора
                                                                    </button>
                                                                </div>
                                                                <div class="catalog-filter__body">
                                                                    <div class="catalog-filter__check-group">
                                                                        <div class="catalog-filter__check-item">
                                                                            <!-- begin .check-elem-->
                                                                            <label class="check-elem">
                                                                                <input
                                                                                    class="check-elem__input"
                                                                                    type="checkbox"
                                                                                    name="checkgroup-1"
                                                                                />
                                                                                <span class="check-elem__label">
                                                                                    до 80*80 px 2
                                                                                </span>
                                                                            </label>
                                                                            <!-- end .check-elem-->
                                                                        </div>
                                                                        <div class="catalog-filter__check-item">
                                                                            <!-- begin .check-elem-->
                                                                            <label class="check-elem">
                                                                                <input
                                                                                    class="check-elem__input"
                                                                                    type="checkbox"
                                                                                    name="checkgroup-1"
                                                                                />
                                                                                <span class="check-elem__label">
                                                                                    160*120 px 2
                                                                                </span>
                                                                            </label>
                                                                            <!-- end .check-elem-->
                                                                        </div>
                                                                        <div class="catalog-filter__check-item">
                                                                            <!-- begin .check-elem-->
                                                                            <label class="check-elem">
                                                                                <input
                                                                                    class="check-elem__input"
                                                                                    type="checkbox"
                                                                                    name="checkgroup-1"
                                                                                />
                                                                                <span class="check-elem__label">
                                                                                    384*288 ox 2
                                                                                </span>
                                                                            </label>
                                                                            <!-- end .check-elem-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end .catalog-filter-->
                                                        </li>
                                                        <li class="catalog-filters__item">
                                                            <!-- begin .catalog-filter-->
                                                            <div class="catalog-filter catalog-filter_state_open">
                                                                <div class="catalog-filter__header">
                                                                    <button
                                                                        type="button"
                                                                        data-toggle-scope=".catalog-filter"
                                                                        data-toggle-class="catalog-filter_state_open"
                                                                        class="catalog-filter__trigger js-toggle"
                                                                    >
                                                                        Диапазон температур
                                                                    </button>
                                                                </div>
                                                                <div class="catalog-filter__body">
                                                                    <div class="catalog-filter__check-group">
                                                                        <div class="catalog-filter__check-item">
                                                                            <!-- begin .check-elem-->
                                                                            <label class="check-elem">
                                                                                <input
                                                                                    class="check-elem__input"
                                                                                    type="checkbox"
                                                                                    name="checkgroup-1"
                                                                                />
                                                                                <span class="check-elem__label">
                                                                                    до 4000 оС
                                                                                </span>
                                                                            </label>
                                                                            <!-- end .check-elem-->
                                                                        </div>
                                                                        <div class="catalog-filter__check-item">
                                                                            <!-- begin .check-elem-->
                                                                            <label class="check-elem">
                                                                                <input
                                                                                    class="check-elem__input"
                                                                                    type="checkbox"
                                                                                    name="checkgroup-1"
                                                                                />
                                                                                <span class="check-elem__label">
                                                                                    Более 600 оС
                                                                                </span>
                                                                            </label>
                                                                            <!-- end .check-elem-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end .catalog-filter-->
                                                        </li>
                                                    </ul>
                                                    <div class="catalog-filters__controls">
                                                        <div class="catalog-filters__control">
                                                            <!-- begin .button-->
                                                            <a
                                                                class="button button_width_full button_size_s button_style_light"
                                                                href="#"
                                                            >
                                                                <span class="button__holder">Скрыть опции</span>
                                                            </a>
                                                            <!-- end .button-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end .catalog-filters-->
                                        </div>
                                        <div class="catalog__main">
                                            <div class="catalog__breadcrumbs">
                                                <div class="catalog__container">
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
                                                </div>
                                            </div>
                                            <div class="catalog__title">
                                                <!-- begin .title-->
                                                <div class="title title_size_h2">
                                                    <?php 
                                                        $list_categ = end($list_category);
                                                        echo $list_categ['name'];
                                                    ?>
                                                </div>
                                                <!-- end .title-->
                                            </div>
                                            <!-- ???????????????????????ВЫРЕЗАТЬ??????????????????????? -->
                                            <div class="catalog__filter-panel">
                                                <div class="catalog__filter-trigger">
                                                    <!-- begin .filter-trigger-->
                                                    <button
                                                        class="filter-trigger js-toggle"
                                                        type="button"
                                                        data-toggle-scope=".catalog, .page__body"
                                                        data-toggle-class="catalog_filters_open, frozen-scroll"
                                                    >
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="14"
                                                            height="14"
                                                            viewBox="0 0 14 14"
                                                            fill="none"
                                                            class="filter-trigger__icon"
                                                        >
                                                            <path
                                                                fill-rule="evenodd"
                                                                clip-rule="evenodd"
                                                                d="M1.75 2.33333C1.75 2.01117 2.01117 1.75 2.33333 1.75H11.6667C11.9888 1.75 12.25 2.01117 12.25 2.33333V3.60033C12.2499 4.0644 12.0655 4.50954 11.7373 4.83765C11.7373 4.83767 11.7373 4.83762 11.7373 4.83765L9.33333 7.24162V11.0833C9.33333 11.3344 9.17267 11.5573 8.93447 11.6367L5.43447 12.8034C5.25658 12.8627 5.06103 12.8329 4.90892 12.7232C4.7568 12.6136 4.66667 12.4375 4.66667 12.25V7.51719L2.20503 4.80939C1.9123 4.48733 1.75005 4.0677 1.75 3.63248V2.33333ZM2.91667 2.91667V3.63235C2.91667 3.63233 2.91667 3.63238 2.91667 3.63235C2.9167 3.77739 2.97076 3.91727 3.0683 4.02461C3.06829 4.02459 3.06831 4.02462 3.0683 4.02461L5.68163 6.89927C5.77925 7.00665 5.83333 7.14655 5.83333 7.29167V11.4407L8.16667 10.6629V7C8.16667 6.84529 8.22812 6.69692 8.33752 6.58752L10.9124 4.01269C11.0217 3.90335 11.0833 3.75498 11.0833 3.60033C11.0833 3.60029 11.0833 3.60037 11.0833 3.60033V2.91667H2.91667Z"
                                                                fill="black"
                                                            ></path>
                                                        </svg>
                                                        <div class="filter-trigger__text">Фильтр</div>
                                                    </button>
                                                    <!-- end .filter-trigger-->
                                                </div>
                                                <div class="catalog__filter-group">
                                                    <!-- begin .filter-group-->
                                                    <div class="filter-group">
                                                        <div class="filter-group__wrapper">
                                                            <div class="filter-group__item">
                                                                <div class="filter-group__option-filter">
                                                                    <!-- begin .option-filter-->
                                                                    <div class="option-filter js-option-filter">
                                                                        <div class="option-filter__header">
                                                                            <button
                                                                                class="option-filter__trigger js-option-filter-trigger"
                                                                            >
                                                                                <span class="option-filter__label" id="current_filter">
                                                                                    По алфавиту
                                                                                </span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="option-filter__body">
                                                                            <ul class="option-filter__list">
                                                                                <li class="option-filter__item" >
                                                                                    <a
                                                                                        class="option-filter__link option-filter__link_state_active"
                                                                                        id='alphabet'
                                                                                    >
                                                                                        <span
                                                                                            class="option-filter__text"
                                                                                        >
                                                                                            По алфавиту
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="option-filter__item" >
                                                                                    <a
                                                                                        class="option-filter__link"
                                                                                        id="priceup"
                                                                                    >
                                                                                        <svg
                                                                                            class="option-filter__icon"
                                                                                            width="16"
                                                                                            height="16"
                                                                                            viewBox="0 0 16 16"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                        >
                                                                                            <path
                                                                                                d="M8.66667 4C8.85556 4 9.01378 4.064 9.14133 4.192C9.26933 4.31955 9.33333 4.47778 9.33333 4.66667C9.33333 4.85556 9.26933 5.01378 9.14133 5.14133C9.01378 5.26933 8.85556 5.33333 8.66667 5.33333L7.33333 5.33333C7.14444 5.33333 6.986 5.26933 6.858 5.14133C6.73045 5.01378 6.66667 4.85555 6.66667 4.66667C6.66667 4.47778 6.73045 4.31955 6.858 4.192C6.986 4.064 7.14444 4 7.33333 4L8.66667 4ZM13.3333 10.6667C13.5222 10.6667 13.6804 10.7304 13.808 10.858C13.936 10.986 14 11.1444 14 11.3333C14 11.5222 13.936 11.6807 13.808 11.8087C13.6804 11.9362 13.5222 12 13.3333 12L2.66667 12C2.47778 12 2.31956 11.9362 2.192 11.8087C2.064 11.6807 2 11.5222 2 11.3333C2 11.1444 2.064 10.986 2.192 10.858C2.31956 10.7304 2.47778 10.6667 2.66667 10.6667L13.3333 10.6667ZM11.3333 7.33333C11.5222 7.33333 11.6807 7.39733 11.8087 7.52533C11.9362 7.65289 12 7.81111 12 8C12 8.18889 11.9362 8.34733 11.8087 8.47533C11.6807 8.60289 11.5222 8.66667 11.3333 8.66667L4.66667 8.66667C4.47778 8.66667 4.31956 8.60289 4.192 8.47533C4.064 8.34733 4 8.18889 4 8C4 7.81111 4.064 7.65289 4.192 7.52533C4.31956 7.39733 4.47778 7.33333 4.66667 7.33333L11.3333 7.33333Z"
                                                                                            />
                                                                                        </svg>
                                                                                        <span
                                                                                            class="option-filter__text"
                                                                                        >
                                                                                            По цене (сначала дешевле)
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="option-filter__item">
                                                                                    <a
                                                                                        class="option-filter__link"
                                                                                        id="pricedown"
                                                                                    >
                                                                                        <svg
                                                                                            class="option-filter__icon"
                                                                                            width="16"
                                                                                            height="16"
                                                                                            viewBox="0 0 16 16"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                        >
                                                                                            <path
                                                                                                d="M8.66667 12C8.85555 12 9.01378 11.936 9.14133 11.808C9.26933 11.6804 9.33333 11.5222 9.33333 11.3333C9.33333 11.1444 9.26933 10.9862 9.14133 10.8587C9.01378 10.7307 8.85555 10.6667 8.66667 10.6667L7.33333 10.6667C7.14444 10.6667 6.986 10.7307 6.858 10.8587C6.73044 10.9862 6.66667 11.1444 6.66667 11.3333C6.66667 11.5222 6.73044 11.6804 6.858 11.808C6.986 11.936 7.14444 12 7.33333 12L8.66667 12ZM13.3333 5.33333C13.5222 5.33333 13.6804 5.26956 13.808 5.142C13.936 5.014 14 4.85556 14 4.66667C14 4.47778 13.936 4.31933 13.808 4.19133C13.6804 4.06378 13.5222 4 13.3333 4L2.66667 4C2.47778 4 2.31956 4.06378 2.192 4.19133C2.064 4.31933 2 4.47778 2 4.66667C2 4.85555 2.064 5.014 2.192 5.142C2.31956 5.26955 2.47778 5.33333 2.66667 5.33333L13.3333 5.33333ZM11.3333 8.66667C11.5222 8.66667 11.6807 8.60267 11.8087 8.47467C11.9362 8.34711 12 8.18889 12 8C12 7.81111 11.9362 7.65267 11.8087 7.52467C11.6807 7.39711 11.5222 7.33333 11.3333 7.33333L4.66667 7.33333C4.47778 7.33333 4.31955 7.39711 4.192 7.52467C4.064 7.65267 4 7.81111 4 8C4 8.18889 4.064 8.34711 4.192 8.47467C4.31955 8.60267 4.47778 8.66667 4.66667 8.66667L11.3333 8.66667Z"
                                                                                            />
                                                                                        </svg>
                                                                                        <span
                                                                                            class="option-filter__text"
                                                                                        >
                                                                                            По цене (сначала дороже)
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="option-filter__item">
                                                                                    <a
                                                                                        class="option-filter__link"
                                                                                        id='hitup'
                                                                                    >
                                                                                        <svg
                                                                                            class="option-filter__icon"
                                                                                            width="16"
                                                                                            height="16"
                                                                                            viewBox="0 0 16 16"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                        >
                                                                                            <path
                                                                                                d="M8.66667 4C8.85556 4 9.01378 4.064 9.14133 4.192C9.26933 4.31955 9.33333 4.47778 9.33333 4.66667C9.33333 4.85556 9.26933 5.01378 9.14133 5.14133C9.01378 5.26933 8.85556 5.33333 8.66667 5.33333L7.33333 5.33333C7.14444 5.33333 6.986 5.26933 6.858 5.14133C6.73045 5.01378 6.66667 4.85555 6.66667 4.66667C6.66667 4.47778 6.73045 4.31955 6.858 4.192C6.986 4.064 7.14444 4 7.33333 4L8.66667 4ZM13.3333 10.6667C13.5222 10.6667 13.6804 10.7304 13.808 10.858C13.936 10.986 14 11.1444 14 11.3333C14 11.5222 13.936 11.6807 13.808 11.8087C13.6804 11.9362 13.5222 12 13.3333 12L2.66667 12C2.47778 12 2.31956 11.9362 2.192 11.8087C2.064 11.6807 2 11.5222 2 11.3333C2 11.1444 2.064 10.986 2.192 10.858C2.31956 10.7304 2.47778 10.6667 2.66667 10.6667L13.3333 10.6667ZM11.3333 7.33333C11.5222 7.33333 11.6807 7.39733 11.8087 7.52533C11.9362 7.65289 12 7.81111 12 8C12 8.18889 11.9362 8.34733 11.8087 8.47533C11.6807 8.60289 11.5222 8.66667 11.3333 8.66667L4.66667 8.66667C4.47778 8.66667 4.31956 8.60289 4.192 8.47533C4.064 8.34733 4 8.18889 4 8C4 7.81111 4.064 7.65289 4.192 7.52533C4.31956 7.39733 4.47778 7.33333 4.66667 7.33333L11.3333 7.33333Z"
                                                                                            />
                                                                                        </svg>
                                                                                        <span class="option-filter__text" >
                                                                                            По популярности (сначала менее популярные)
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="option-filter__item">
                                                                                    <a
                                                                                        class="option-filter__link"
                                                                                        id='hitdown'
                                                                                    >
                                                                                        <svg
                                                                                            class="option-filter__icon"
                                                                                            width="16"
                                                                                            height="16"
                                                                                            viewBox="0 0 16 16"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                        >
                                                                                            <path
                                                                                                d="M8.66667 12C8.85555 12 9.01378 11.936 9.14133 11.808C9.26933 11.6804 9.33333 11.5222 9.33333 11.3333C9.33333 11.1444 9.26933 10.9862 9.14133 10.8587C9.01378 10.7307 8.85555 10.6667 8.66667 10.6667L7.33333 10.6667C7.14444 10.6667 6.986 10.7307 6.858 10.8587C6.73044 10.9862 6.66667 11.1444 6.66667 11.3333C6.66667 11.5222 6.73044 11.6804 6.858 11.808C6.986 11.936 7.14444 12 7.33333 12L8.66667 12ZM13.3333 5.33333C13.5222 5.33333 13.6804 5.26956 13.808 5.142C13.936 5.014 14 4.85556 14 4.66667C14 4.47778 13.936 4.31933 13.808 4.19133C13.6804 4.06378 13.5222 4 13.3333 4L2.66667 4C2.47778 4 2.31956 4.06378 2.192 4.19133C2.064 4.31933 2 4.47778 2 4.66667C2 4.85555 2.064 5.014 2.192 5.142C2.31956 5.26955 2.47778 5.33333 2.66667 5.33333L13.3333 5.33333ZM11.3333 8.66667C11.5222 8.66667 11.6807 8.60267 11.8087 8.47467C11.9362 8.34711 12 8.18889 12 8C12 7.81111 11.9362 7.65267 11.8087 7.52467C11.6807 7.39711 11.5222 7.33333 11.3333 7.33333L4.66667 7.33333C4.47778 7.33333 4.31955 7.39711 4.192 7.52467C4.064 7.65267 4 7.81111 4 8C4 8.18889 4.064 8.34711 4.192 8.47467C4.31955 8.60267 4.47778 8.66667 4.66667 8.66667L11.3333 8.66667Z"
                                                                                            />
                                                                                        </svg>
                                                                                        <span
                                                                                            class="option-filter__text" >
                                                                                            По популярности (сначала более популярные)
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end .option-filter-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end .filter-group-->
                                                </div>
                                                <div class="catalog__filters">
                                                    <!-- begin .link-filter-->
                                                    <div class="link-filter undefined js-link-filter">
                                                        <ul class="link-filter__list">
                                                            <li class="link-filter__item" >
                                                                <button class="link-filter__link" id="hit">
                                                                    По популярности
                                                                </button>
                                                            </li>
                                                            <li class="link-filter__item">
                                                                <button class="link-filter__link" id="sort-asc-btn">
                                                                    По возрастанию цены
                                                                </button>
                                                            </li>
                                                            <li class="link-filter__item" id="sort-desc-btn">
                                                                <button class="link-filter__link">
                                                                    По убыванию цены
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- end .link-filter-->
                                                </div>
                                            </div>
                                            <!-- ???????????????????????ВЫРЕЗАТЬ??????????????????????? -->

                                            <div class="catalog__products">
                                                <!-- begin .product-grid-->
                                                <div class="product-grid product-grid_cols_3">
                                                    <div class="product-grid__wrapper" id="product-grid__wrapper">
                                                        {{-- ВСТАВКА БЛОКОВ С ТОВАРАМИ ЧЕРЕЗ АЯКС --}}
                                                    </div>
                                                </div>
                                                <!-- end .product-grid-->
                                            </div>
                                            <div id="pagination"></div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <!-- end .catalog-->
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="assets/components/vanilla-lazyload-17.5.0/lazyload.min.js?1686691535380"></script>
        <script src="assets/components/swiper-7.2.0/js/swiper-bundle.min.js?1686691535380"></script>
        <script src="assets/components/wnumb-1.1.0/wNumb.js?1686691535380"></script>
        <script src="assets/components/noUiSlider-master/nouislider.min.js?1686691535380"></script>
        <script src="assets/components/just-validate-3.10.0/just-validate.production.min.js?1686691535380"></script>
        <script src="assets/components/Inputmask/inputmask.min.js?1686691535380"></script>
        <script src="assets/components/fancybox-4.0.7/fancybox.umd.js?1686691535380"></script>
        <script src="assets/scripts/svg4everybody.js?1686691535380"></script>
        <script src="assets/scripts/helpers.js?1686691535380"></script>
        <script src="assets/scripts/common.js?1686691535380"></script>
        {{-- <script src="assets/scripts/ymap.js?1686691535380"></script> --}}
        <script src="assets/scripts/validate.js?1686691535380"></script>
        <script src="assets/scripts/search-form.js?1686691535380"></script>
        {{-- <script src="assets/scripts/profile-forms.js?1686691535380"></script> --}}
        <script src="assets/scripts/custom.js?1686691535380"></script>
        <script src="assets/scripts/paginate-get-offers.js" data-id-category="<?= $currentCategory['id'] ?>"></script>

    </body>
</html>
<!-- end .page-->
