<?php foreach($categoriesData as $c){
    if ($c['parent_id'] == 0){
        $genesis_categories[] = $c; // Добавляем генезисную категорию в массив
    }
}
$city = 'Москва';
if (isset($_COOKIE['city'])){
    $city = $_COOKIE['city'];
}
?>
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
                                <span class="geo-selector__label"><?= $city ?></span>
                            </a>
                        </div>
                        <!-- end .geo-selector-->
                    </div>
                </div>
                <div class="footer__col footer__search-col">
                    @include("layouts.formSearchProduct")
                </div>
            </div>
            <div class="footer__main">
                <div class="footer__col footer__info-col">
                    <div class="footer__sub-group">
                        <?php foreach ($genesis_categories as $genesis) { ?>
                        
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
                                        <?= $genesis['name'] ?>
                                    </button>
                                </div>
                                <!-- end .title-->
                            </div>
                            <div class="footer__nav">
                                <!-- begin .nav-->
                                <nav class="nav">
                                    <ul class="nav__list">
                                        <?php foreach ($categoriesData as $c) {
                                            if ($c['parent_id'] == $genesis['id']){  ?>
                                          
                                                <li class="nav__item">
                                                    <a class="nav__link" href="/catalog?category_id=<?= $c['id']?>"><?= $c['name'] ?></a>
                                                </li>
                                        <?php  }} ?>
                                    </ul>
                                </nav>
                                <!-- end .nav-->
                            </div>
                        </div>

                        <?php } ?>
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
                                        <li class="nav__item"><a class="nav__link" href="/rent">Аренда</a></li>
                                        <li class="nav__item"><a class="nav__link" href="/repair">Ремонт</a></li>
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
                                            <a class="nav__link" href="/service-center">Сервисный центр</a>
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
                                    <li class="nav__item"><a class="nav__link" href="/rent">Аренда</a></li>
                                    <li class="nav__item"><a class="nav__link" href="/repair">Ремонт</a></li>
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
                    <li class="nav__item"><a class="nav__link" href="/about">О компании</a></li>
                    <li class="nav__item"><a class="nav__link" href="#">Оплата и доставка</a></li>
                    <li class="nav__item"><a class="nav__link" href="/uslugi">Услуги</a></li>
                    <li class="nav__item"><a class="nav__link" href="#">Информация</a></li>
                    <li class="nav__item"><a class="nav__link" href="#">Контакты</a></li>
                </ul>
            </nav>
            <!-- end .nav-->
        </div>
        <div class="mobile-menu__search">
            <!-- begin .search-form-->
            <form class="search-form" id="form-product">
                @csrf
                <div class="search-form__field">
                    <input
                        type="text"
                        class="search-form__input js-search-with-results"
                        id="product-js"
                        placeholder="Поиск по сайту"
                    />
                    <div class="search-form__clear-control">
                        <button type="button" class="search-form__clear js-search-clear" id="clear-product">Очистить</button>
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
                    <div class="search-results" id="result-product">
                        <div class="search-results__message" id="result-message-product">Совпадений не найдено</div>
                        <div class="search-results__matches">
                            <ul class="search-results__list">
                                
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
