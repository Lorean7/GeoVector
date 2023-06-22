<!-- begin .page-->
<?php 
foreach($categoryIds as $d){
    dump($d);
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
                                                                    <a href="#" itemprop="name" class="breadcrumbs__link"><?= $category['name'] ?></a>
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
                                                                                <span class="option-filter__label">
                                                                                    По алфавиту
                                                                                </span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="option-filter__body">
                                                                            <ul class="option-filter__list">
                                                                                <li class="option-filter__item">
                                                                                    <a
                                                                                        class="option-filter__link option-filter__link_state_active"
                                                                                        href="#"
                                                                                    >
                                                                                        <span
                                                                                            class="option-filter__text"
                                                                                        >
                                                                                            По алфавиту
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="option-filter__item">
                                                                                    <a
                                                                                        class="option-filter__link"
                                                                                        href="#"
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
                                                                                        href="#"
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
                                                                                        href="#"
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
                                                                                            По популярности (сначала
                                                                                            менее популярные)
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="option-filter__item">
                                                                                    <a
                                                                                        class="option-filter__link"
                                                                                        href="#"
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
                                                                                            По популярности (сначала
                                                                                            более популярные)
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
                                                            <li class="link-filter__item">
                                                                <a
                                                                    class="link-filter__link link-filter__link_state_active"
                                                                    href="#"
                                                                >
                                                                    По популярности
                                                                </a>
                                                            </li>
                                                            <li class="link-filter__item">
                                                                <a class="link-filter__link" href="#">
                                                                    По возрастанию цены
                                                                </a>
                                                            </li>
                                                            <li class="link-filter__item">
                                                                <a class="link-filter__link" href="# ">
                                                                    По убыванию цены
                                                                </a>
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
                                                    <div class="product-grid__wrapper">

                                                        <div class="product-grid__item">
                                                            <!-- begin .product-snippet-->
                                                            <div
                                                                class="product-snippet product-snippet_type_adaptive product-grid__snippet"
                                                            >
                                                                <a href="#" class="product-snippet__illustration">
                                                                    <picture class="product-snippet__picture">
                                                                        <img
                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                            data-src="assets/blocks/product-snippet/images/1.png"
                                                                            alt="image"
                                                                            class="product-snippet__image lazyload"
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
                                                                                    <div
                                                                                        class="label__label label__label_style_check"
                                                                                    >
                                                                                        Поверка в комплекте
                                                                                    </div>
                                                                                    <div
                                                                                        class="label__label label__label_style_gos"
                                                                                    >
                                                                                        Госреестр
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end .label-->
                                                                        </div>
                                                                        <div class="product-snippet__title">
                                                                            <a href="#" class="product-snippet__link">
                                                                                RGK RT-25
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-snippet__props">
                                                                            <!-- begin .props-->
                                                                            <div class="props">
                                                                                <div class="props__prop">
                                                                                    <div class="props__label">
                                                                                        Испытательное напряжение:
                                                                                    </div>
                                                                                    <div class="props__value">
                                                                                        500-2500 В
                                                                                    </div>
                                                                                </div>
                                                                                <div class="props__prop">
                                                                                    <div class="props__label">
                                                                                        Сопротивление изоляции:
                                                                                    </div>
                                                                                    <div class="props__value">
                                                                                        0,01 МОм-20 ГОм
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end .props-->
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-snippet__price-group">
                                                                        <!-- begin .price-group-->
                                                                        <div class="price-group">
                                                                            <div class="price-group__main">
                                                                                <div class="price-group__price">
                                                                                    <span class="price-group__value">
                                                                                        13 990
                                                                                    </span>
                                                                                    <span class="price-group__unit">
                                                                                        ₽
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end .price-group-->
                                                                        <div
                                                                            class="product-snippet__availability product-snippet__availability product-snippet__availability_green"
                                                                        >
                                                                            В наличии
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-snippet__button">
                                                                        <!-- begin .button-->
                                                                        <a
                                                                            class="button button_width_full button_size_l button_type_order"
                                                                            href="#"
                                                                        >
                                                                            <span class="button__holder">Заказать</span>
                                                                        </a>
                                                                        <!-- end .button-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end .product-snippet-->
                                                        </div>
                                                        <div class="product-grid__item">
                                                            <!-- begin .product-snippet-->
                                                            <div
                                                                class="product-snippet product-snippet_type_adaptive product-grid__snippet"
                                                            >
                                                                <a href="#" class="product-snippet__illustration">
                                                                    <picture class="product-snippet__picture">
                                                                        <img
                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                            data-src="assets/blocks/product-snippet/images/2.png"
                                                                            alt="image"
                                                                            class="product-snippet__image lazyload"
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
                                                                                        class="label__label label__label_style_new"
                                                                                    >
                                                                                        Новинка
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end .label-->
                                                                        </div>
                                                                        <div class="product-snippet__title">
                                                                            <a href="#" class="product-snippet__link">
                                                                                DJI Mavic 3 Enterprise (Universal
                                                                                Edition)
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-snippet__props">
                                                                            <!-- begin .props-->
                                                                            <div class="props">
                                                                                <div class="props__prop">
                                                                                    <div class="props__label">
                                                                                        Испытательное напряжение:
                                                                                    </div>
                                                                                    <div class="props__value">
                                                                                        500-2500 В
                                                                                    </div>
                                                                                </div>
                                                                                <div class="props__prop">
                                                                                    <div class="props__label">
                                                                                        Сопротивление изоляции:
                                                                                    </div>
                                                                                    <div class="props__value">
                                                                                        0,01 МОм-20 ГОм
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end .props-->
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-snippet__price-group">
                                                                        <!-- begin .price-group-->
                                                                        <div class="price-group">
                                                                            <div class="price-group__main">
                                                                                <div class="price-group__price">
                                                                                    <span class="price-group__value">
                                                                                        13 990
                                                                                    </span>
                                                                                    <span class="price-group__unit">
                                                                                        ₽
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end .price-group-->
                                                                        <div
                                                                            class="product-snippet__availability product-snippet__availability product-snippet__availability_green"
                                                                        >
                                                                            В наличии
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-snippet__button">
                                                                        <!-- begin .button-->
                                                                        <a
                                                                            class="button button_width_full button_size_l button_type_order"
                                                                            href="#"
                                                                        >
                                                                            <span class="button__holder">Заказать</span>
                                                                        </a>
                                                                        <!-- end .button-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end .product-snippet-->
                                                        </div>
                                                        <div class="product-grid__item">
                                                            <!-- begin .product-snippet-->
                                                            <div
                                                                class="product-snippet product-snippet_type_adaptive product-grid__snippet"
                                                            >
                                                                <a href="#" class="product-snippet__illustration">
                                                                    <picture class="product-snippet__picture">
                                                                        <img
                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                            data-src="assets/blocks/product-snippet/images/3.png"
                                                                            alt="image"
                                                                            class="product-snippet__image lazyload"
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
                                                                                        class="label__label label__label_style_discount"
                                                                                    >
                                                                                        Скидка
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end .label-->
                                                                        </div>
                                                                        <div class="product-snippet__title">
                                                                            <a href="#" class="product-snippet__link">
                                                                                DJI Mavic 3 Enterprise (Universal
                                                                                Edition)
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-snippet__props">
                                                                            <!-- begin .props-->
                                                                            <div class="props">
                                                                                <div class="props__prop">
                                                                                    <div class="props__label">
                                                                                        Испытательное напряжение:
                                                                                    </div>
                                                                                    <div class="props__value">
                                                                                        500-2500 В
                                                                                    </div>
                                                                                </div>
                                                                                <div class="props__prop">
                                                                                    <div class="props__label">
                                                                                        Сопротивление изоляции:
                                                                                    </div>
                                                                                    <div class="props__value">
                                                                                        0,01 МОм-20 ГОм
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end .props-->
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-snippet__price-group">
                                                                        <!-- begin .price-group-->
                                                                        <div class="price-group">
                                                                            <div class="price-group__extra">
                                                                                <div
                                                                                    class="price-group__price price-group__price_type_old"
                                                                                >
                                                                                    <span class="price-group__value">
                                                                                        13 990
                                                                                    </span>
                                                                                    <span class="price-group__unit">
                                                                                        ₽
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="price-group__main">
                                                                                <div class="price-group__price">
                                                                                    <span class="price-group__value">
                                                                                        10 990
                                                                                    </span>
                                                                                    <span class="price-group__unit">
                                                                                        ₽
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end .price-group-->
                                                                        <div
                                                                            class="product-snippet__availability product-snippet__availability product-snippet__availability_green"
                                                                        >
                                                                            В наличии
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-snippet__button">
                                                                        <!-- begin .button-->
                                                                        <a
                                                                            class="button button_width_full button_size_l button_type_order"
                                                                            href="#"
                                                                        >
                                                                            <span class="button__holder">Заказать</span>
                                                                        </a>
                                                                        <!-- end .button-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end .product-snippet-->
                                                        </div>
                                                        <div class="product-grid__item">
                                                            <!-- begin .product-snippet-->
                                                            <div
                                                                class="product-snippet product-snippet_type_adaptive product-grid__snippet"
                                                            >
                                                                <a href="#" class="product-snippet__illustration">
                                                                    <picture class="product-snippet__picture">
                                                                        <img
                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                            data-src="assets/blocks/product-snippet/images/4.png"
                                                                            alt="image"
                                                                            class="product-snippet__image lazyload"
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
                                                                                        class="label__label label__label_style_discount"
                                                                                    >
                                                                                        Скидка
                                                                                    </div>
                                                                                    <div
                                                                                        class="label__label label__label_style_check"
                                                                                    >
                                                                                        Поверка в комплекте
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end .label-->
                                                                        </div>
                                                                        <div class="product-snippet__title">
                                                                            <a href="#" class="product-snippet__link">
                                                                                RGK RT-25
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-snippet__props">
                                                                            <!-- begin .props-->
                                                                            <div class="props">
                                                                                <div class="props__prop">
                                                                                    <div class="props__label">
                                                                                        Испытательное напряжение:
                                                                                    </div>
                                                                                    <div class="props__value">
                                                                                        500-2500 В
                                                                                    </div>
                                                                                </div>
                                                                                <div class="props__prop">
                                                                                    <div class="props__label">
                                                                                        Сопротивление изоляции:
                                                                                    </div>
                                                                                    <div class="props__value">
                                                                                        0,01 МОм-20 ГОм
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end .props-->
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-snippet__price-group">
                                                                        <!-- begin .price-group-->
                                                                        <div class="price-group">
                                                                            <div class="price-group__extra">
                                                                                <div
                                                                                    class="price-group__price price-group__price_type_old"
                                                                                >
                                                                                    <span class="price-group__value">
                                                                                        10 772 990
                                                                                    </span>
                                                                                    <span class="price-group__unit">
                                                                                        ₽
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="price-group__main">
                                                                                <div class="price-group__price">
                                                                                    <span class="price-group__value">
                                                                                        10 654 990
                                                                                    </span>
                                                                                    <span class="price-group__unit">
                                                                                        ₽
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end .price-group-->
                                                                        <div
                                                                            class="product-snippet__availability product-snippet__availability product-snippet__availability_red"
                                                                        >
                                                                            нет в наличии
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-snippet__button">
                                                                        <!-- begin .button-->
                                                                        <a
                                                                            class="button button_width_full button_size_l button_type_order"
                                                                            href="#"
                                                                        >
                                                                            <span class="button__holder">Заказать</span>
                                                                        </a>
                                                                        <!-- end .button-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end .product-snippet-->
                                                        </div>
                                                        <div class="product-grid__item">
                                                            <!-- begin .product-snippet-->
                                                            <div
                                                                class="product-snippet product-snippet_type_adaptive product-grid__snippet"
                                                            >
                                                                <a href="#" class="product-snippet__illustration">
                                                                    <picture class="product-snippet__picture">
                                                                        <img
                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                            data-src="assets/blocks/product-snippet/images/1.png"
                                                                            alt="image"
                                                                            class="product-snippet__image lazyload"
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
                                                                                    <div
                                                                                        class="label__label label__label_style_check"
                                                                                    >
                                                                                        Поверка в комплекте
                                                                                    </div>
                                                                                    <div
                                                                                        class="label__label label__label_style_gos"
                                                                                    >
                                                                                        Госреестр
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end .label-->
                                                                        </div>
                                                                        <div class="product-snippet__title">
                                                                            <a href="#" class="product-snippet__link">
                                                                                RGK RT-25
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-snippet__props">
                                                                            <!-- begin .props-->
                                                                            <div class="props">
                                                                                <div class="props__prop">
                                                                                    <div class="props__label">
                                                                                        Испытательное напряжение:
                                                                                    </div>
                                                                                    <div class="props__value">
                                                                                        500-2500 В
                                                                                    </div>
                                                                                </div>
                                                                                <div class="props__prop">
                                                                                    <div class="props__label">
                                                                                        Сопротивление изоляции:
                                                                                    </div>
                                                                                    <div class="props__value">
                                                                                        0,01 МОм-20 ГОм
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end .props-->
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-snippet__price-group">
                                                                        <!-- begin .price-group-->
                                                                        <div class="price-group">
                                                                            <div class="price-group__main">
                                                                                <div class="price-group__price">
                                                                                    <span class="price-group__value">
                                                                                        13 990
                                                                                    </span>
                                                                                    <span class="price-group__unit">
                                                                                        ₽
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end .price-group-->
                                                                        <div
                                                                            class="product-snippet__availability product-snippet__availability product-snippet__availability_green"
                                                                        >
                                                                            В наличии
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-snippet__button">
                                                                        <!-- begin .button-->
                                                                        <a
                                                                            class="button button_width_full button_size_l button_type_order"
                                                                            href="#"
                                                                        >
                                                                            <span class="button__holder">Заказать</span>
                                                                        </a>
                                                                        <!-- end .button-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end .product-snippet-->
                                                        </div>
                                                        <div class="product-grid__item">
                                                            <!-- begin .product-snippet-->
                                                            <div
                                                                class="product-snippet product-snippet_type_adaptive product-grid__snippet"
                                                            >
                                                                <a href="#" class="product-snippet__illustration">
                                                                    <picture class="product-snippet__picture">
                                                                        <img
                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                            data-src="assets/blocks/product-snippet/images/2.png"
                                                                            alt="image"
                                                                            class="product-snippet__image lazyload"
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
                                                                                        class="label__label label__label_style_new"
                                                                                    >
                                                                                        Новинка
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end .label-->
                                                                        </div>
                                                                        <div class="product-snippet__title">
                                                                            <a href="#" class="product-snippet__link">
                                                                                DJI Mavic 3 Enterprise (Universal
                                                                                Edition)
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-snippet__props">
                                                                            <!-- begin .props-->
                                                                            <div class="props">
                                                                                <div class="props__prop">
                                                                                    <div class="props__label">
                                                                                        Испытательное напряжение:
                                                                                    </div>
                                                                                    <div class="props__value">
                                                                                        500-2500 В
                                                                                    </div>
                                                                                </div>
                                                                                <div class="props__prop">
                                                                                    <div class="props__label">
                                                                                        Сопротивление изоляции:
                                                                                    </div>
                                                                                    <div class="props__value">
                                                                                        0,01 МОм-20 ГОм
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end .props-->
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-snippet__price-group">
                                                                        <!-- begin .price-group-->
                                                                        <div class="price-group">
                                                                            <div class="price-group__main">
                                                                                <div class="price-group__price">
                                                                                    <span class="price-group__value">
                                                                                        13 990
                                                                                    </span>
                                                                                    <span class="price-group__unit">
                                                                                        ₽
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end .price-group-->
                                                                        <div
                                                                            class="product-snippet__availability product-snippet__availability product-snippet__availability_green"
                                                                        >
                                                                            В наличии
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-snippet__button">
                                                                        <!-- begin .button-->
                                                                        <a
                                                                            class="button button_width_full button_size_l button_type_order"
                                                                            href="#"
                                                                        >
                                                                            <span class="button__holder">Заказать</span>
                                                                        </a>
                                                                        <!-- end .button-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end .product-snippet-->
                                                        </div>
                                                        <div class="product-grid__item">
                                                            <!-- begin .product-snippet-->
                                                            <div
                                                                class="product-snippet product-snippet_type_adaptive product-grid__snippet"
                                                            >
                                                                <a href="#" class="product-snippet__illustration">
                                                                    <picture class="product-snippet__picture">
                                                                        <img
                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                            data-src="assets/blocks/product-snippet/images/3.png"
                                                                            alt="image"
                                                                            class="product-snippet__image lazyload"
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
                                                                                        class="label__label label__label_style_discount"
                                                                                    >
                                                                                        Скидка
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end .label-->
                                                                        </div>
                                                                        <div class="product-snippet__title">
                                                                            <a href="#" class="product-snippet__link">
                                                                                DJI Mavic 3 Enterprise (Universal
                                                                                Edition)
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-snippet__props">
                                                                            <!-- begin .props-->
                                                                            <div class="props">
                                                                                <div class="props__prop">
                                                                                    <div class="props__label">
                                                                                        Испытательное напряжение:
                                                                                    </div>
                                                                                    <div class="props__value">
                                                                                        500-2500 В
                                                                                    </div>
                                                                                </div>
                                                                                <div class="props__prop">
                                                                                    <div class="props__label">
                                                                                        Сопротивление изоляции:
                                                                                    </div>
                                                                                    <div class="props__value">
                                                                                        0,01 МОм-20 ГОм
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end .props-->
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-snippet__price-group">
                                                                        <!-- begin .price-group-->
                                                                        <div class="price-group">
                                                                            <div class="price-group__extra">
                                                                                <div
                                                                                    class="price-group__price price-group__price_type_old"
                                                                                >
                                                                                    <span class="price-group__value">
                                                                                        13 990
                                                                                    </span>
                                                                                    <span class="price-group__unit">
                                                                                        ₽
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="price-group__main">
                                                                                <div class="price-group__price">
                                                                                    <span class="price-group__value">
                                                                                        10 990
                                                                                    </span>
                                                                                    <span class="price-group__unit">
                                                                                        ₽
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end .price-group-->
                                                                        <div
                                                                            class="product-snippet__availability product-snippet__availability product-snippet__availability_green"
                                                                        >
                                                                            В наличии
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-snippet__button">
                                                                        <!-- begin .button-->
                                                                        <a
                                                                            class="button button_width_full button_size_l button_type_order"
                                                                            href="#"
                                                                        >
                                                                            <span class="button__holder">Заказать</span>
                                                                        </a>
                                                                        <!-- end .button-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end .product-snippet-->
                                                        </div>
                                                        <div class="product-grid__item">
                                                            <!-- begin .product-snippet-->
                                                            <div
                                                                class="product-snippet product-snippet_type_adaptive product-grid__snippet"
                                                            >
                                                                <a href="#" class="product-snippet__illustration">
                                                                    <picture class="product-snippet__picture">
                                                                        <img
                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                            data-src="assets/blocks/product-snippet/images/4.png"
                                                                            alt="image"
                                                                            class="product-snippet__image lazyload"
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
                                                                                        class="label__label label__label_style_discount"
                                                                                    >
                                                                                        Скидка
                                                                                    </div>
                                                                                    <div
                                                                                        class="label__label label__label_style_check"
                                                                                    >
                                                                                        Поверка в комплекте
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end .label-->
                                                                        </div>
                                                                        <div class="product-snippet__title">
                                                                            <a href="#" class="product-snippet__link">
                                                                                RGK RT-25
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-snippet__props">
                                                                            <!-- begin .props-->
                                                                            <div class="props">
                                                                                <div class="props__prop">
                                                                                    <div class="props__label">
                                                                                        Испытательное напряжение:
                                                                                    </div>
                                                                                    <div class="props__value">
                                                                                        500-2500 В
                                                                                    </div>
                                                                                </div>
                                                                                <div class="props__prop">
                                                                                    <div class="props__label">
                                                                                        Сопротивление изоляции:
                                                                                    </div>
                                                                                    <div class="props__value">
                                                                                        0,01 МОм-20 ГОм
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end .props-->
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-snippet__price-group">
                                                                        <!-- begin .price-group-->
                                                                        <div class="price-group">
                                                                            <div class="price-group__extra">
                                                                                <div
                                                                                    class="price-group__price price-group__price_type_old"
                                                                                >
                                                                                    <span class="price-group__value">
                                                                                        10 772 990
                                                                                    </span>
                                                                                    <span class="price-group__unit">
                                                                                        ₽
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="price-group__main">
                                                                                <div class="price-group__price">
                                                                                    <span class="price-group__value">
                                                                                        10 654 990
                                                                                    </span>
                                                                                    <span class="price-group__unit">
                                                                                        ₽
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end .price-group-->
                                                                        <div
                                                                            class="product-snippet__availability product-snippet__availability product-snippet__availability_red"
                                                                        >
                                                                            нет в наличии
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-snippet__button">
                                                                        <!-- begin .button-->
                                                                        <a
                                                                            class="button button_width_full button_size_l button_type_order"
                                                                            href="#"
                                                                        >
                                                                            <span class="button__holder">Заказать</span>
                                                                        </a>
                                                                        <!-- end .button-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end .product-snippet-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end .product-grid-->
                                            </div>
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
        <script src="assets/components/jquery-3.4.1/jquery.min.js?1686691535380"></script>
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
        <script src="assets/scripts/ymap.js?1686691535380"></script>
        <script src="assets/scripts/validate.js?1686691535380"></script>
        <script src="assets/scripts/search-form.js?1686691535380"></script>
        <script src="assets/scripts/profile-forms.js?1686691535380"></script>
        <script src="assets/scripts/custom.js?1686691535380"></script>
    </body>
</html>
<!-- end .page-->
