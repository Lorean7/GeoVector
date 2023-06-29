<?php foreach($categoriesData as $c){
    if ($c['parent_id'] == 0){
        $genesis_categories[] = $c; // Добавляем генезисную категорию в массив
    }
}
?>

<div class="page__header">
    <!-- begin .header-->
    <div class="header">
        <div class="header__top">
            <div class="page__container">
                <div class="header__top-wrapper">
                    <div class="header__logo">
                        <!-- begin .logo-->
                        <a href="/" class="logo">
                            <img
                                src="assets/blocks/logo/images/Logo-color.svg"
                                alt="GeoVector"
                                class="logo__image"
                                title=""
                            />
                        </a>
                        <!-- end .logo-->
                    </div>
                    <div class="header__nav">
                        <!-- begin .nav-->
                        <nav class="nav nav_type_primary">
                            <ul class="nav__list">
                                <li class="nav__item"><a class="nav__link" href="#">О компании</a></li>
                                <li class="nav__item">
                                    <a class="nav__link" href="/delivery">Оплата и доставка</a>
                                </li>
                                <li class="nav__item"><a class="nav__link" href="#">Услуги</a></li>
                                <li class="nav__item"><a class="nav__link" href="#">Информация</a></li>
                                <li class="nav__item"><a class="nav__link" href="#">Контакты</a></li>
                            </ul>
                        </nav>
                        <!-- end .nav-->
                    </div>
                    <div class="header__contact-group">
                        <svg
                            width="41"
                            height="41"
                            viewBox="0 0 41 41"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            class="header__icon"
                        >
                            <circle cx="20.5" cy="20.5" r="20.5" fill="#F3F3F3"></circle>
                            <g clip-path="url(#clip0_182_38)"></g>
                            <path
                                d="M19.9191 21.0268C20.7309 21.8503 21.7131 22.4861 22.7969 22.8896L24.263 21.7229C24.3064 21.693 24.358 21.677 24.4108 21.677C24.4635 21.677 24.5151 21.693 24.5585 21.7229L27.2808 23.4768C27.3841 23.5389 27.4716 23.6243 27.5363 23.726C27.601 23.8278 27.6412 23.9432 27.6536 24.0631C27.6661 24.1831 27.6505 24.3042 27.608 24.4171C27.5656 24.53 27.4975 24.6314 27.4091 24.7135L26.1335 25.9735C25.9509 26.154 25.7263 26.2864 25.48 26.359C25.2337 26.4316 24.9732 26.4421 24.7219 26.3896C22.2144 25.8717 19.9032 24.6588 18.0524 22.8896C16.2427 21.1027 14.9904 18.8291 14.4474 16.3446C14.3938 16.0971 14.405 15.84 14.4799 15.5981C14.5549 15.3562 14.691 15.1378 14.8752 14.964L16.1974 13.6885C16.2792 13.6044 16.379 13.5399 16.4893 13.4999C16.5996 13.4598 16.7175 13.4452 16.8342 13.4572C16.9509 13.4692 17.0634 13.5074 17.1632 13.569C17.2631 13.6306 17.3477 13.714 17.4108 13.8129L19.223 16.5001C19.2542 16.5423 19.2711 16.5935 19.2711 16.646C19.2711 16.6985 19.2542 16.7496 19.223 16.7918L18.0291 18.2268C18.4435 19.2888 19.0891 20.2453 19.9191 21.0268Z"
                                fill="#A0A0A0"
                            ></path>
                            <clipPath id="clip0_182_38"></clipPath>
                        </svg>
                        <div class="header__cotacts">
                            <div class="header__contact">
                                <a href="tel:89785551516" class="header__link">+7 (978) 555-15-16</a>
                            </div>
                            <div class="header__contact">
                                <a href="tel:89089184784" class="header__link">+7 (908) 918-47-84</a>
                            </div>
                        </div>
                    </div>
                    <div class="header__social-nav">
                        <!-- begin .social-nav-->
                        <div class="social-nav social-nav_layout_inline-to-col">
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
                                                width="20"
                                                height="20"
                                                viewBox="0 0 20 20"
                                                fill="none"
                                            >
                                                <g clip-path="url(#clip0_182_48)">
                                                    <path
                                                        d="M0.34122 7.90403C0.340848 9.24834 0.692103 10.561 1.36001 11.7179L0.277344 15.6709L4.32274 14.6102C5.44164 15.2193 6.69529 15.5385 7.96925 15.5386H7.9726C12.1782 15.5386 15.6016 12.1164 15.6034 7.91005C15.6042 5.87179 14.8112 3.95514 13.3703 2.51315C11.9297 1.07129 10.0137 0.276809 7.97229 0.275879C3.76621 0.275879 0.343018 3.69789 0.341282 7.90403"
                                                        fill="url(#paint0_linear_182_48)"
                                                    />
                                                    <path
                                                        d="M0.0663566 7.90177C0.0659225 9.29445 0.429767 10.654 1.12149 11.8524L0 15.9471L4.19045 14.8484C5.34505 15.4779 6.64502 15.8098 7.96781 15.8103H7.97122C12.3277 15.8103 15.8741 12.265 15.876 7.90809C15.8767 5.79659 15.0551 3.81104 13.5628 2.3174C12.0703 0.823938 10.0858 0.000868217 7.97122 0C3.61402 0 0.068093 3.54481 0.0663566 7.90177ZM2.56186 11.646L2.4054 11.3976C1.74766 10.3518 1.4005 9.14326 1.40099 7.90226C1.40242 4.28087 4.34964 1.33457 7.97371 1.33457C9.72874 1.33532 11.3781 2.01947 12.6187 3.26078C13.8592 4.5022 14.5418 6.15243 14.5413 7.9076C14.5397 11.529 11.5924 14.4757 7.97122 14.4757H7.96862C6.78952 14.475 5.63312 14.1584 4.62462 13.56L4.38462 13.4177L1.89792 14.0696L2.56186 11.646V11.646Z"
                                                        fill="url(#paint1_linear_182_48)"
                                                    />
                                                    <path
                                                        d="M5.99796 4.59831C5.84999 4.26944 5.69427 4.2628 5.55356 4.25704C5.43833 4.25208 5.30661 4.25245 5.17502 4.25245C5.04329 4.25245 4.82928 4.302 4.64838 4.49952C4.46729 4.69722 3.95703 5.17499 3.95703 6.14671C3.95703 7.11849 4.66481 8.0576 4.76348 8.1895C4.86227 8.32116 6.12987 10.3791 8.13743 11.1708C9.8059 11.8287 10.1454 11.6978 10.5075 11.6649C10.8697 11.632 11.6762 11.1872 11.8407 10.726C12.0053 10.2649 12.0053 9.86956 11.956 9.78696C11.9066 9.70466 11.7749 9.65524 11.5774 9.55651C11.3798 9.45772 10.4088 8.97989 10.2277 8.91397C10.0466 8.84811 9.91498 8.81524 9.78326 9.01301C9.65154 9.21046 9.27331 9.65524 9.15802 9.78696C9.04286 9.91899 8.92757 9.93542 8.73012 9.83663C8.53247 9.73753 7.89638 9.52922 7.14171 8.85642C6.55455 8.33288 6.15815 7.68637 6.04292 7.4886C5.9277 7.29115 6.03058 7.18411 6.12962 7.08569C6.21836 6.99719 6.3272 6.85505 6.42605 6.73977C6.52454 6.62442 6.5574 6.54212 6.62326 6.4104C6.68919 6.27856 6.65619 6.16321 6.60689 6.06442C6.5574 5.96563 6.17359 4.98882 5.99796 4.59831Z"
                                                        fill="white"
                                                    />
                                                </g>
                                                <defs>
                                                    <linearGradient
                                                        id="paint0_linear_182_48"
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
                                                        id="paint1_linear_182_48"
                                                        x1="793.798"
                                                        y1="1594.71"
                                                        x2="793.798"
                                                        y2="0"
                                                        gradientUnits="userSpaceOnUse"
                                                    >
                                                        <stop stop-color="#F9F9F9" />
                                                        <stop offset="1" stop-color="white" />
                                                    </linearGradient>
                                                    <clipPath id="clip0_182_48">
                                                        <rect width="15.876" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="social-nav__text">What’s App</span>
                                    </a>
                                </li>
                                <li class="social-nav__item">
                                    <a
                                        class="social-nav__link"
                                        href="mailto:geo-vectorru@yandex.ru"
                                        target="_blank"
                                    >
                                        <span class="social-nav__text">geo-vectorru@yandex.ru</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end .social-nav-->
                    </div>
                </div>
            </div>
        </div>
        <div class="header__main">
            <div class="page__container">
                <div class="header__main-wrapper">
                    <div class="header__logo">
                        <!-- begin .logo-->
                        <a href="/" class="logo">
                            <img
                                src="assets/blocks/logo/images/Logo-color-s.svg"
                                alt="GeoVector"
                                class="logo__image"
                                title=""
                            />
                        </a>
                        <!-- end .logo-->
                    </div>
                    <div class="header__catalog-triggers">
                        <!-- begin .button-->
                    
                        <?php foreach ($genesis_categories as $i=>$genesis){ ?>
                        <div class="button button_width_full button_text-size_s">
                            <span class="button__holder">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="button__icon"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M21 17C21.5523 17 22 17.4477 22 18C22 18.5523 21.5523 19 21 19H3C2.44772 19 2 18.5523 2 18C2 17.4477 2.44772 17 3 17H21ZM21 11C21.5523 11 22 11.4477 22 12C22 12.5523 21.5523 13 21 13H3C2.44772 13 2 12.5523 2 12C2 11.4477 2.44772 11 3 11H21ZM21 5C21.5523 5 22 5.44772 22 6C22 6.55228 21.5523 7 21 7H3C2.44772 7 2 6.55228 2 6C2 5.44772 2.44772 5 3 5H21Z"
                                    ></path>
                                </svg>
                                <span id="button<?= $i+1?>" class="button__text"><?= $genesis['name']?></span>
                                <span id="menu<?= $i+1?>" class="button__dropdown-menu">
                                    <span class="button__menu-level-1">
                                        <span class="button__catalog-menu">
                                            <!-- begin .catalog-menu-->
                                            <span class="catalog-menu js-catalog-menu js-catalog-menu_small">
                                                <span class="catalog-menu__wrapper js-catalog-menu-wrapper">
                                                    <ul
                                                        class="catalog-menu__list js-catalog-menu-list js-floating-catalog-max-height"
                                                    >
                                                    <?php foreach($categoriesData as $c){
                                                        if ($c['parent_id'] == $genesis['id']){ ?>
                                                        <li
                                                            class="catalog-menu__item catalog-menu__item_width_m js-catalog-menu-item"
                                                        >
                                                            <a href="/catalog?category_id=<?= $c['id']; ?>" class="catalog-menu__panel">
                                                                <span class="catalog-menu__text">
                                                                <?= $c['name']; ?>
                                                                </span>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="10"
                                                                    height="10"
                                                                    viewBox="0 0 6 10"
                                                                    fill="none"
                                                                    class="catalog-menu__icon"
                                                                >
                                                                    <path
                                                                        d="M5.42426 5.42426C5.65858 5.18995 5.65858 4.81005 5.42426 4.57574L1.60589 0.757359C1.37157 0.523045 0.991674 0.523045 0.757359 0.757359C0.523045 0.991674 0.523045 1.37157 0.757359 1.60589L4.15147 5L0.757359 8.39411C0.523045 8.62843 0.523045 9.00833 0.757359 9.24264C0.991674 9.47696 1.37157 9.47696 1.60589 9.24264L5.42426 5.42426ZM4 5.6H5V4.4H4V5.6Z"
                                                                        fill="#A0A0A0"
                                                                    ></path>
                                                                </svg>
                                                            </a>
                                                            <div
                                                                class="catalog-menu__submenu js-catalog-menu-submenu js-floating-catalog-max-height"
                                                            >
                                                                <ul class="catalog-menu__sub-list">
                                                                    <?php foreach ($categoriesData as $subCategory){
                                                                    if ($subCategory['parent_id'] == $c['id']){ ?>
                                                                        <li class="catalog-menu__sub-item">
                                                                            <a
                                                                                href="/catalog?category_id=<?= $subCategory['id']; ?>"
                                                                                class="catalog-menu__panel"
                                                                            >
                                                                                <span class="catalog-menu__text">
                                                                                    <?= $subCategory['name']?>
                                                                                </span>
                                                                            </a>
                                                                            <div
                                                                                class="catalog-menu__sub-submenu js-catalog-menu-submenu js-floating-catalog-max-height"
                                                                            >
                                                                                <ul class="catalog-menu__sub-list">
                                                                                    <?php foreach($categoriesData as $subSubCategory) { 
                                                                                        if($subSubCategory['parent_id'] == $subCategory['id']) { ?>
                                                                                            <li
                                                                                                class="catalog-menu__sub-item"
                                                                                            >
                                                                                                <a
                                                                                                    href="/catalog?category_id=<?= $subSubCategory['id'] ?>"
                                                                                                    class="catalog-menu__panel"
                                                                                                >
                                                                                                    <span
                                                                                                        class="catalog-menu__text"
                                                                                                    >
                                                                                                        <?= $subSubCategory['name']; ?>
                                                                                                    </span>
                                                                                                </a>
                                                                                                <div
                                                                                                    class="catalog-menu__sub-submenu js-catalog-menu-submenu js-floating-catalog-max-height"
                                                                                                >
                                                                                                    <ul class="catalog-menu__sub-list">
                                                                                                        <?php foreach($categoriesData as $subSubSubCategory) { 
                                                                                                            if($subSubSubCategory['parent_id'] == $subSubCategory['id']) { ?>
                                                                                                                <li
                                                                                                                    class="catalog-menu__sub-item"
                                                                                                                >
                                                                                                                    <a
                                                                                                                        href="/catalog?category_id=<?= $subSubSubCategory['id'] ?>"
                                                                                                                        class="catalog-menu__panel"
                                                                                                                    >
                                                                                                                        <span
                                                                                                                            class="catalog-menu__text"
                                                                                                                        >
                                                                                                                            <?= $subSubSubCategory['name']; ?>
                                                                                                                        </span>
                                                                                                                    </a>
                                                                                                                    
                                                                                                                </li>
                                                                                                            <?php } ?>
                                                                                                        <?php } ?>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </li>
                                                                                        <?php } ?>
                                                                                    <?php } ?>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                    <?php }} ?>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <?php }} ?>
                                                    </ul>
                                                </span>
                                            </span>
                                            <!-- end .catalog-menu-->
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </div>
                        <?php } ?>                 
                        <!-- end .button-->
                    </div>
                    @include("layouts.formSearchProduct")
                    <div class="header__geo-selector">
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
                                <span class="geo-selector__label"></span>
                                @include('layouts.modalGeoPromt')
                            </a>
                        </div>
                        <!-- end .geo-selector-->
                    </div>
                    <div class="header__burger">
                        <!-- begin .button-->
                        <button
                            class="button button_width_full button_size_xs js-toggle"
                            type="button"
                            data-toggle-scope=".page__body"
                            data-toggle-class="page__body_nav_open frozen-scroll"
                            aria-label="Открыть меню"
                        >
                            <span class="button__holder"><span class="button__burger-line"></span></span>
                        </button>
                        <!-- end .button-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end .header-->
</div>