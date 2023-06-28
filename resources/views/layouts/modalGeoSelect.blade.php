<?php 
$city = "Москва";
// main city

// serach location
if (empty($_COOKIE['city'])){ 
    // Получение IP-адреса пользователя
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    // Запрос к сервису для получения информации о геолокации
    $response = file_get_contents("http://ip-api.com/json/{$ip}");


    // Декодирование JSON-ответа
    $data = json_decode($response);
    if ($data->status != "fail"){
        // Получение города из полученных данных
        $cityEnglish = $data->city;
        // Проверяем наличие соответствующего русского названия города
        if (isset($mainCity[$cityEnglish])) {
            $city = $mainCity[$cityEnglish];
        }
    }
    setcookie('city',$city,time()+18000,'/');
}
?>
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
                                    <a class="geo-list__link" href="#">
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
                                <li>Другие города </li>
                                <?php 
                                usort($otherCity, function($a, $b) {
                                    $cityA = mb_strtolower($a['city']);
                                    $cityB = mb_strtolower($b['city']);
                                    return strcmp($cityA, $cityB);
                                });
                                foreach($otherCity as $c){ ?>
                                <li class="geo-list__item">
                                    <a class="geo-list__link" href="#">
                                        <span class="geo-list__label"><?= $c['city'] ?></span>
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
                                <?php }?>
                            </ul>
                        </div>
                        <!-- end .geo-list-->
                    </div>
                </div>
            </div>
            <script src="assets/components/jquery-3.4.1/jquery.min.js"></script>
            <script src="assets/scripts/currentGeo.js"></script>
   
                        