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
                            <a href="/rent" itemprop="name" class="breadcrumbs__link">Аренда</a>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page__section">
            <div class="page__container">
                <!-- begin .section-->
                <div class="section">
                    <div class="section__header section__header_type_inline">
                        <div class="section__title">
                            <!-- begin .title-->
                            <div class="title title_size_h2">Аренда</div>
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
                                                <a href="rent-detail?id_category=<?= $cat['id'] ?>" class="rent-item__link">Подробнее</a>
                                            </div>
                                        </div>
                                        <!-- end .rent-item-->
                                    </li>
                                <?php }
                            ?>
                        </ul>
                    </div>
                    <!-- end .rent-list-->
                </div>
                <!-- end .section-->
            </div>
        </div>
        <div class="page__section">
            <div class="page__container">
                <!-- begin .section-->
                <div class="section">
                    <div class="section__text-content">
                        <div class="section__row">
                            <p class="section__pragraph">
                                Аренда геодезического оборудования позволяет использовать профессиональные приборы с
                                минимальными финансовыми затратами. Это отличное решение в таких случаях, как:
                            </p>
                        </div>
                        <div class="section__row">
                            <ul class="section__list">
                                <li class="section__list-item">Разовые либо сезонные работы.</li>
                                <li class="section__list-item">
                                    Ограниченный бюджет при необходимости качественного оборудования.
                                </li>
                                <li class="section__list-item">
                                    Открытие нового предприятия или направления деятельности.
                                </li>
                                <li class="section__list-item">
                                    Испытание нового типа приборов или нового бренда.
                                </li>
                            </ul>
                        </div>
                        <div class="section__row"><h4 class="section__title">Аренда — это выгодно!</h4></div>
                        <div class="section__row">
                            <p>
                                Стоимость аренды геодезического оборудования тем ниже, чем дольше срок его
                                использования. К примеру, прокат геодезического прибора в течение двух месяцев
                                сэкономит вам до 30% ежедневной цены аренды и более 80% от стоимости самого прибора.
                            </p>
                        </div>
                        <div class="section__row">
                            <p>
                                Срок аренды большинства устройств может составлять от 7 дней до 60 дней и более. Для
                                некоторых приборов время проката не ограничено.
                            </p>
                        </div>
                        <div class="section__row"><h4 class="section__title">Широкий ассортимент</h4></div>
                        <div class="section__row">
                            <p>
                                Широкий ассортимент Наша компания предоставляет в аренду геодезическое оборудование
                                для проведения широкого спектра геодезических, строительных, инженерных,
                                землеустроительных работ. В нашем ассортименте имеются:
                            </p>
                        </div>
                        <div class="section__row">
                            <ul class="section__list">
                                <li class="section__list-item">Оптические или лазерные нивелиры.</li>
                                <li class="section__list-item">Электронные или оптические теодолиты.</li>
                                <li class="section__list-item">Электронные тахеометры.</li>
                                <li class="section__list-item">Геодезические GPS/GNSS/GLONASS-приемники.</li>
                                <li class="section__list-item">Трассопоисковое оборудование.</li>
                                <li class="section__list-item">Тепловизионное оборудование.</li>
                            </ul>
                        </div>
                        <div class="section__row">
                            <p>
                                Большой выбор брендов позволит вам как обратиться к привычному и знакомому
                                оборудованию, так и попробовать приборы других производителей перед покупкой. Аренда
                                геодезического оборудования доступна для таких брендов, как RGK, Sokkia, Topcon,
                                Nikon, Trimble, Testo, Flir и т.п. Мы следим за новинками рынка и предоставляем в
                                аренду геодезическое оборудование, отвечающее современным требованиям качества и
                                функциональности и успевшее зарекомендовать себя.
                            </p>
                        </div>
                        <div class="section__row"><h4 class="section__title">Быстро и качественно</h4></div>
                        <div class="section__row">
                            <p>
                                Приступайте к работе без задержек! Каждый прибор поставляется со всем необходимым
                                для эффективного использования и проходит предварительную калибровку. Вы можете
                                изменить стандартную комплектацию и расширить её дополнительными аксессуарами в
                                зависимости от стоящих перед вами задач.
                            </p>
                        </div>
                        <div class="section__row">
                            <p>
                                Гарантируем высокое качество сдаваемого в аренду геодезического оборудования. Все
                                приборы проходят регулярное обслуживание и обязательную проверку перед выдачей
                                заказчику. Мы экономим ваши деньги и время, избавляя от необходимости проводить
                                поверку прибора перед использованием.
                            </p>
                        </div>
                        <div class="section__row"><h4 class="section__title">Помощь в выборе</h4></div>
                        <div class="section__row">
                            <p>
                                Наши специалисты помогут вам подобрать оптимальный вариант оборудования для
                                выполнения стоящих перед вами задач, ответят на все интересующие вас вопросы по
                                приборам и пояснят условия аренды геодезического оборудования при необходимости. Мы
                                также обучим вас пользоваться новым устройством, продемонстрируем его в действии и
                                предоставим квалифицированную консультацию в течение всего срока аренды.
                            </p>
                        </div>
                        <div class="section__row">
                            <p>
                                Аренда геодезического оборудования будет актуальна как для частных и домашних
                                мастеров, так и для различных организаций. Благодаря этой услуге вы сможете браться
                                за любые виды работ, не беспокоясь о покупке соответствующего оборудования, а
                                сэкономленные средства можно потратить на развитие компании.
                            </p>
                        </div>
                        <div class="section__row">
                            <p>
                                Для оформления заявки на аренду геодезического оборудования заполните простую форму
                                на сайте, позвоните или закажите обратный звонок, и наш специалист свяжется с вами в
                                удобное для вас время для уточнения деталей.
                            </p>
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
