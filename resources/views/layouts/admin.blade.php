<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <!-- Stylesheets -->
    {{--
    <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ mix('css/vendors.css') }}">
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
    <title>@yield('title') | Аквазонд</title>
</head>

<body class="preloader-visible" data-barba="wrapper">
    <!-- preloader start -->
    <div class="preloader js-preloader">
        <div class="preloader__bg"></div>
    </div>
    <!-- preloader end -->
    <!-- barba container start -->
    <div class="barba-container" data-barba="container">
        <main class="main-content">
            <header class="header -dashboard -dark-bg-dark-1 js-header">
                <div class="header__container py-20 px-30">
                    <div class="row justify-between items-center">
                        <div class="col-auto">
                            <div class="d-flex items-center">
                                <div class="header__explore text-dark-1">
                                    <button class="d-flex items-center js-dashboard-home-9-sidebar-toggle">
                                        <i class="icon -dark-text-white icon-explore"></i>
                                    </button>
                                </div>
                                <div class="header__logo ml-30 md:ml-20">
                                    <a data-barba href="/">
                                        <img class="-light-d-none" src="{{asset('img/general/logo.svg')}}" alt="logo">
                                        <img class="-dark-d-none" src="{{asset('img/general/logo.svg')}}" alt="logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="d-flex items-center">
                                <div class="d-flex items-center sm:d-none">
                                    <div class="relative">
                                        <button class="js-darkmode-toggle text-light-1 d-flex items-center justify-center size-50 rounded-16 -hover-dshb-header-light">
                                            <i class="text-24 icon icon-night"></i>
                                        </button>
                                    </div>
                                    <div class="relative">
                                        <button data-maximize class="d-flex text-light-1 items-center justify-center size-50 rounded-16 -hover-dshb-header-light">
                                            <i class="text-24 icon icon-maximize"></i>
                                        </button>
                                    </div>
                                    <div class="relative d-flex items-center ml-10">
                                        <a href="#" data-el-toggle=".js-profile-toggle">
                                            <img class="size-50" src="{{asset('img/misc/user-profile.png')}}" alt="image">
                                        </a>
                                        <div class="toggle-element js-profile-toggle">
                                            <div class="toggle-bottom -profile bg-white -dark-bg-dark-1 shadow-4 border-light rounded-8 mt-10">
                                                <div class="px-30 py-30">
                                                    <div class="sidebar -dashboard">
                                                        <div class="sidebar__item -is-active -dark-bg-dark-2">
                                                            <a href="{{route('admin/dashboard')}}" class="d-flex items-center text-17 lh-1 fw-500 -dark-text-white">
                                                                <i class="text-20 icon-discovery mr-15"></i>
                                                                Обзор
                                                            </a>
                                                        </div>
                                                        <div class="sidebar__item ">
                                                            <a href="{{route('product.index')}}" class="d-flex items-center text-17 lh-1 fw-500 ">
                                                                <i class="text-20 icon-list mr-15"></i>
                                                                Продукция
                                                            </a>
                                                        </div>
                                                        <div class="sidebar__item ">
                                                            <a href="#" class="d-flex items-center text-17 lh-1 fw-500 ">
                                                                <i class="text-20 icon-setting mr-15"></i>
                                                                Настройки
                                                            </a>
                                                        </div>
                                                        <div class="sidebar__item -is-active -dark-bg-dark-2">
                                                            <a href="{{route('category.index')}}" class="d-flex items-center text-17 lh-1 fw-500 -dark-text-white">
                                                                <i class="text-20 icon-discovery mr-15"></i>
                                                                Синхронизация
                                                            </a>
                                                        </div>
                                                        <div class="sidebar__item ">
                                                            <a href="#" class="d-flex items-center text-17 lh-1 fw-500 ">
                                                                <i class="text-20 icon-power mr-15"></i>
                                                                Выйти
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </header>
            <div class="content-wrapper js-content-wrapper">
                <div class="dashboard -home-9 js-dashboard-home-9">
                    <div class="dashboard__sidebar scroll-bar-1">
                        <div class="sidebar -dashboard">
                            <div class="sidebar__item {{ request()->route()->getName() == 'admin/dashboard' ? '-is-active -dark-bg-dark-2' : '' }} ">
                                <a href="{{route('admin/dashboard')}}" class="d-flex items-center text-17 lh-1 fw-500 -dark-text-white">
                                    <i class="text-20 icon-discovery mr-15"></i>
                                    Обзор
                                </a>
                            </div>
                            <div class="sidebar__item {{ in_array(request()->route()->getName(),['product.index','product.create','product.edit']) ? '-is-active -dark-bg-dark-2' : '' }}">
                                <a href="{{route('product.index')}}" class="d-flex items-center text-17 lh-1 fw-500 -dark-text-white">
                                    <i class="text-20 icon-list mr-15"></i>
                                    Продукция
                                </a>
                            </div>
                            <div class="sidebar__item ">
                                <a href="#" class="d-flex items-center text-17 lh-1 fw-500 ">
                                    <i class="text-20 icon-setting mr-15"></i>
                                    Настройки
                                </a>
                            </div>
                            <div class="sidebar__item {{ in_array(request()->route()->getName(),['category.index','category.create','category.edit']) ? '-is-active -dark-bg-dark-2' : '' }}">
                                <a href="{{route('category.index')}}" class="d-flex items-center text-17 lh-1 fw-500 -dark-text-white">
                                    <i class="text-20 icon-list mr-15"></i>
                                    Синхронизация
                                </a>
                            </div>
                            <div class="sidebar__item ">
                                <a href="#" class="d-flex items-center text-17 lh-1 fw-500 ">
                                    <i class="text-20 icon-power mr-15"></i>
                                    Выход
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard__main" id="">
                        {{$slot}}
                        <footer class="footer -dashboard py-30">
                            {{-- <div class="row items-center justify-between">
                                <div class="col-auto">
                                    <div class="text-13 lh-1">© 2022 Educrat. All Right Reserved.</div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="d-flex items-center flex-wrap x-gap-20">
                                            <div>
                                                <a href="help-center.html" class="text-13 lh-1">Help</a>
                                            </div>
                                            <div>
                                                <a href="terms.html" class="text-13 lh-1">Privacy Policy</a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-13 lh-1">Cookie Notice</a>
                                            </div>
                                            <div>
                                                <a href="#" class="text-13 lh-1">Security</a>
                                            </div>
                                            <div>
                                                <a href="terms.html" class="text-13 lh-1">Terms of Use</a>
                                            </div>
                                        </div>
                                        <button class="button -md -rounded bg-light-4 text-light-1 ml-30">English</button>
                                    </div>
                                </div>
                            </div> --}}
                        </footer>
                    </div>
                </div>
            </div>
        </main>
        <aside class="sidebar-menu toggle-element js-msg-toggle js-dsbh-sidebar-menu">
            <div class="sidebar-menu__bg"></div>
            <div class="sidebar-menu__content scroll-bar-1 py-30 px-40 sm:py-25 sm:px-20 bg-white -dark-bg-dark-1">
                <div class="row items-center justify-between mb-30">
                    <div class="col-auto">
                        <div class="-sidebar-buttons">
                            <button data-sidebar-menu-button="messages" class="text-17 text-dark-1 fw-500 -is-button-active">
                                Messages
                            </button>
                            <button data-sidebar-menu-button="messages-2" data-sidebar-menu-target="messages" class="d-flex items-center text-17 text-dark-1 fw-500">
                                <i class="icon-chevron-left text-11 text-purple-1 mr-10"></i>
                                Messages
                            </button>
                            <button data-sidebar-menu-button="settings" data-sidebar-menu-target="messages" class="d-flex items-center text-17 text-dark-1 fw-500">
                                <i class="icon-chevron-left text-11 text-purple-1 mr-10"></i>
                                Settings
                            </button>
                            <button data-sidebar-menu-button="contacts" data-sidebar-menu-target="messages" class="d-flex items-center text-17 text-dark-1 fw-500">
                                <i class="icon-chevron-left text-11 text-purple-1 mr-10"></i>
                                Contacts
                            </button>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="row x-gap-10">
                            <div class="col-auto">
                                <button data-sidebar-menu-target="settings" class="button -purple-3 text-purple-1 size-40 d-flex items-center justify-center rounded-full">
                                    <i class="icon-setting text-16"></i>
                                </button>
                            </div>
                            <div class="col-auto">
                                <button data-sidebar-menu-target="contacts" class="button -purple-3 text-purple-1 size-40 d-flex items-center justify-center rounded-full">
                                    <i class="icon-friend text-16"></i>
                                </button>
                            </div>
                            <div class="col-auto">
                                <button data-el-toggle=".js-msg-toggle" class="button -purple-3 text-purple-1 size-40 d-flex items-center justify-center rounded-full">
                                    <i class="icon-close text-14"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative js-menu-switch">
                    <div data-sidebar-menu-open="messages" class="sidebar-menu__item -sidebar-menu -sidebar-menu-opened">
                        <form class="search-field rounded-8 h-50" action="post">
                            <input class="bg-light-3 pr-50" type="text" placeholder="Search Courses">
                            <button class="" type="submit">
                                <i class="icon-search text-light-1 text-20"></i>
                            </button>
                        </form>
                        <div class="accordion -block text-left pt-20 js-accordion">
                            <div class="accordion__item border-light rounded-16">
                                <div class="accordion__button">
                                    <div class="accordion__icon size-30 -dark-bg-dark-2 mr-10">
                                        <div class="icon d-flex items-center justify-center">
                                            <span class="lh-1 fw-500">2</span>
                                        </div>
                                        <div class="icon d-flex items-center justify-center">
                                            <span class="lh-1 fw-500">2</span>
                                        </div>
                                    </div>
                                    <span class="text-17 fw-500 text-dark-1 pt-3">Starred</span>
                                </div>
                                <div class="accordion__content">
                                    <div class="accordion__content__inner pl-20 pr-20 pb-20">
                                        <div data-sidebar-menu-target="messages-2" class="row x-gap-10 y-gap-10 pointer">
                                            <div class="col-auto">
                                                <img src="img/dashboard/right-sidebar/messages/1.png" alt="image">
                                            </div>
                                            <div class="col">
                                                <div class="text-15 lh-12 fw-500 text-dark-1 pt-8">Darlene Robertson</div>
                                                <div class="text-14 lh-1 mt-5"><span class="text-dark-1">You:</span> Hello</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="text-13 lh-12 pt-8">35 mins</div>
                                            </div>
                                        </div>
                                        <div data-sidebar-menu-target="messages-2" class="row x-gap-10 y-gap-10 pt-15 pointer">
                                            <div class="col-auto">
                                                <img src="img/dashboard/right-sidebar/messages/1.png" alt="image">
                                            </div>
                                            <div class="col">
                                                <div class="text-15 lh-12 fw-500 text-dark-1 pt-8">Darlene Robertson</div>
                                                <div class="text-14 lh-1 mt-5"><span class="text-dark-1">You:</span> Hello</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="text-13 lh-12 pt-8">35 mins</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__item border-light rounded-16">
                                <div class="accordion__button">
                                    <div class="accordion__icon size-30 -dark-bg-dark-2 mr-10">
                                        <div class="icon d-flex items-center justify-center">
                                            <span class="lh-1 fw-500">2</span>
                                        </div>
                                        <div class="icon d-flex items-center justify-center">
                                            <span class="lh-1 fw-500">2</span>
                                        </div>
                                    </div>
                                    <span class="text-17 fw-500 text-dark-1 pt-3">Group</span>
                                </div>
                                <div class="accordion__content">
                                    <div class="accordion__content__inner pl-20 pr-20 pb-20">
                                        <div data-sidebar-menu-target="messages-2" class="row x-gap-10 y-gap-10 pointer">
                                            <div class="col-auto">
                                                <img src="img/dashboard/right-sidebar/messages/1.png" alt="image">
                                            </div>
                                            <div class="col">
                                                <div class="text-15 lh-12 fw-500 text-dark-1 pt-8">Darlene Robertson</div>
                                                <div class="text-14 lh-1 mt-5"><span class="text-dark-1">You:</span> Hello</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="text-13 lh-12 pt-8">35 mins</div>
                                            </div>
                                        </div>
                                        <div data-sidebar-menu-target="messages-2" class="row x-gap-10 y-gap-10 pt-15 pointer">
                                            <div class="col-auto">
                                                <img src="img/dashboard/right-sidebar/messages/1.png" alt="image">
                                            </div>
                                            <div class="col">
                                                <div class="text-15 lh-12 fw-500 text-dark-1 pt-8">Darlene Robertson</div>
                                                <div class="text-14 lh-1 mt-5"><span class="text-dark-1">You:</span> Hello</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="text-13 lh-12 pt-8">35 mins</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__item border-light rounded-16">
                                <div class="accordion__button">
                                    <div class="accordion__icon size-30 -dark-bg-dark-2 mr-10">
                                        <div class="icon d-flex items-center justify-center">
                                            <span class="lh-1 fw-500">2</span>
                                        </div>
                                        <div class="icon d-flex items-center justify-center">
                                            <span class="lh-1 fw-500">2</span>
                                        </div>
                                    </div>
                                    <span class="text-17 fw-500 text-dark-1 pt-3">Private</span>
                                </div>
                                <div class="accordion__content">
                                    <div class="accordion__content__inner pl-20 pr-20 pb-20">
                                        <div data-sidebar-menu-target="messages-2" class="row x-gap-10 y-gap-10 pointer">
                                            <div class="col-auto">
                                                <img src="img/dashboard/right-sidebar/messages/1.png" alt="image">
                                            </div>
                                            <div class="col">
                                                <div class="text-15 lh-12 fw-500 text-dark-1 pt-8">Darlene Robertson</div>
                                                <div class="text-14 lh-1 mt-5"><span class="text-dark-1">You:</span> Hello</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="text-13 lh-12 pt-8">35 mins</div>
                                            </div>
                                        </div>
                                        <div data-sidebar-menu-target="messages-2" class="row x-gap-10 y-gap-10 pt-15 pointer">
                                            <div class="col-auto">
                                                <img src="img/dashboard/right-sidebar/messages/1.png" alt="image">
                                            </div>
                                            <div class="col">
                                                <div class="text-15 lh-12 fw-500 text-dark-1 pt-8">Darlene Robertson</div>
                                                <div class="text-14 lh-1 mt-5"><span class="text-dark-1">You:</span> Hello</div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="text-13 lh-12 pt-8">35 mins</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sidebar-menu-open="messages-2" class="sidebar-menu__item -sidebar-menu">
                        <div class="row x-gap-10 y-gap-10">
                            <div class="col-auto">
                                <img src="img/dashboard/right-sidebar/messages-2/1.png" alt="image">
                            </div>
                            <div class="col">
                                <div class="text-15 lh-12 fw-500 text-dark-1 pt-8">Arlene McCoy</div>
                                <div class="text-14 lh-1 mt-5">Active</div>
                            </div>
                        </div>
                        <div class="mt-20 pt-30 border-top-light">
                            <div class="row y-gap-20">
                                <div class="col-12">
                                    <div class="row x-gap-10 y-gap-10 items-center">
                                        <div class="col-auto">
                                            <img src="img/dashboard/right-sidebar/messages-2/2.png" alt="image">
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-15 lh-12 fw-500 text-dark-1">Albert Flores</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-14 lh-1 ml-3">35 mins</div>
                                        </div>
                                    </div>
                                    <div class="bg-light-3 rounded-8 px-30 py-20 mt-15">
                                        How likely are you to recommend our company to your friends and family?
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row x-gap-10 y-gap-10 items-center justify-end">
                                        <div class="col-auto">
                                            <div class="text-14 lh-1 mr-3">35 mins</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-15 lh-12 fw-500 text-dark-1">You</div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="img/dashboard/right-sidebar/messages-2/3.png" alt="image">
                                        </div>
                                    </div>
                                    <div class="text-right bg-light-7 -dark-bg-dark-2 text-purple-1 rounded-8 px-30 py-20 mt-15">
                                        How likely are you to recommend our company to your friends and family?
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row x-gap-10 y-gap-10 items-center">
                                        <div class="col-auto">
                                            <img src="img/dashboard/right-sidebar/messages-2/3.png" alt="image">
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-15 lh-12 fw-500 text-dark-1">Cameron Williamson</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-14 lh-1 ml-3">35 mins</div>
                                        </div>
                                    </div>
                                    <div class="bg-light-3 rounded-8 px-30 py-20 mt-15">
                                        Ok, Understood!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-30 pb-20">
                            <form class="contact-form row y-gap-20" action="post">
                                <div class="col-12">
                                    <textarea placeholder="Write a message" rows="7"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="button -md -purple-1 text-white">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div data-sidebar-menu-open="contacts" class="sidebar-menu__item -sidebar-menu">
                        <div class="tabs -pills js-tabs">
                            <div class="tabs__controls d-flex js-tabs-controls">
                                <button class="tabs__button px-15 py-8 rounded-8 text-dark-1 js-tabs-button is-active" data-tab-target=".-tab-item-1" type="button">Contacts</button>
                                <button class="tabs__button px-15 py-8 rounded-8 text-dark-1 js-tabs-button " data-tab-target=".-tab-item-2" type="button">Request</button>
                            </div>
                            <div class="tabs__content pt-30 js-tabs-content">
                                <div class="tabs__pane -tab-item-1 is-active">
                                    <div class="row x-gap-10 y-gap-10 items-center">
                                        <div class="col-auto">
                                            <img src="img/dashboard/right-sidebar/contacts/1.png" alt="image">
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-15 lh-12 fw-500 text-dark-1">Darlene Robertson</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs__pane -tab-item-2 ">
                                    <div class="row x-gap-10 y-gap-10 items-center">
                                        <div class="col-auto">
                                            <img src="img/dashboard/right-sidebar/contacts/1.png" alt="image">
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-15 lh-12 fw-500 text-dark-1">Darlene Robertson</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sidebar-menu-open="settings" class="sidebar-menu__item -sidebar-menu">
                        <div class="text-17 text-dark-1 fw-500">Privacy</div>
                        <div class="text-15 mt-5">You can restrict who can message you</div>
                        <div class="mt-30">
                            <div class="form-radio d-flex items-center ">
                                <div class="radio">
                                    <input type="radio">
                                    <div class="radio__mark">
                                        <div class="radio__icon"></div>
                                    </div>
                                </div>
                                <div class="lh-1 text-13 text-dark-1 ml-12">My contacts only</div>
                            </div>
                            <div class="form-radio d-flex items-center mt-15">
                                <div class="radio">
                                    <input type="radio">
                                    <div class="radio__mark">
                                        <div class="radio__icon"></div>
                                    </div>
                                </div>
                                <div class="lh-1 text-13 text-dark-1 ml-12">My contacts and anyone in my courses</div>
                            </div>
                            <div class="form-radio d-flex items-center mt-15">
                                <div class="radio">
                                    <input type="radio">
                                    <div class="radio__mark">
                                        <div class="radio__icon"></div>
                                    </div>
                                </div>
                                <div class="lh-1 text-13 text-dark-1 ml-12">Anyone on the site</div>
                            </div>
                        </div>
                        <div class="text-17 text-dark-1 fw-500 mt-30 mb-30">Notification preferences</div>
                        <div class="form-switch d-flex items-center">
                            <div class="switch">
                                <input type="checkbox">
                                <span class="switch__slider"></span>
                            </div>
                            <div class="text-13 lh-1 text-dark-1 ml-10">Email</div>
                        </div>
                        <div class="text-17 text-dark-1 fw-500 mt-30 mb-30">General</div>
                        <div class="form-switch d-flex items-center">
                            <div class="switch">
                                <input type="checkbox">
                                <span class="switch__slider"></span>
                            </div>
                            <div class="text-13 lh-1 text-dark-1 ml-10">Use enter to send</div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="{{asset('js/vendors2.js')}}"></script>
    <script src="{{asset('js/main2.js')}}"></script>
    
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>

</html>