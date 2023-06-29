<?php 
$city = "Москва"; // default ciy

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
                        <form class="search-form search-geoselector" id='formGeo'>
                            @csrf
                            <div class="search-form__field">
                                <input
                                    type="text"
                                    class="search-form__input input-geoselector js-search-with-results"
                                    id="city-js"
                                    placeholder="Введите город"
                                />
                                <div class="search-form__clear-control">
                                    <button type="button" class="search-form__clear clear-geoselector js-search-clear" id="clear-city">Очистить</button>
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
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="search-form__results" id="geoResult">
                                <!-- begin .search-results-->
                                <div class="search-results results-geoselector" id="result-city">
                                    <div class="search-results__message" id="result-message-city">Совпадений не найдено</div>
                                    <div class="search-results__matches">
                                        <ul class="search-results__list" id="result-city">
                                           
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
                            <div class="geo-list__geo-guide">
                                <div class="geo-list__guide-item">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        class="geo-list__icon"
                                    >
                                        <path
                                            d="M12 2C14.5013 4.73835 15.9228 8.29203 16 12C15.9228 15.708 14.5013 19.2616 12 22M12 2C9.49872 4.73835 8.07725 8.29203 8 12C8.07725 15.708 9.49872 19.2616 12 22M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22M2.50002 9H21.5M2.5 15H21.5"
                                            stroke="black"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                    </svg>
                                    <div class="geo-list__guide-label">- города в которых есть магазины</div>
                                </div>
                                <div class="geo-list__guide-item">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        class="geo-list__icon"
                                    >
                                        <path
                                            d="M14 7H16.3373C16.5818 7 16.7041 7 16.8192 7.02763C16.9213 7.05213 17.0188 7.09253 17.1083 7.14736C17.2092 7.2092 17.2957 7.29568 17.4686 7.46863L21.5314 11.5314C21.7043 11.7043 21.7908 11.7908 21.8526 11.8917C21.9075 11.9812 21.9479 12.0787 21.9724 12.1808C22 12.2959 22 12.4182 22 12.6627V15.5C22 15.9659 22 16.1989 21.9239 16.3827C21.8224 16.6277 21.6277 16.8224 21.3827 16.9239C21.1989 17 20.9659 17 20.5 17M15.5 17H14M14 17V7.2C14 6.0799 14 5.51984 13.782 5.09202C13.5903 4.71569 13.2843 4.40973 12.908 4.21799C12.4802 4 11.9201 4 10.8 4H5.2C4.0799 4 3.51984 4 3.09202 4.21799C2.71569 4.40973 2.40973 4.71569 2.21799 5.09202C2 5.51984 2 6.0799 2 7.2V15C2 16.1046 2.89543 17 4 17M14 17H10M10 17C10 18.6569 8.65685 20 7 20C5.34315 20 4 18.6569 4 17M10 17C10 15.3431 8.65685 14 7 14C5.34315 14 4 15.3431 4 17M20.5 17.5C20.5 18.8807 19.3807 20 18 20C16.6193 20 15.5 18.8807 15.5 17.5C15.5 16.1193 16.6193 15 18 15C19.3807 15 20.5 16.1193 20.5 17.5Z"
                                            stroke="black"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                    </svg>
                                    <div class="geo-list__guide-label">- доставка в ваш город</div>
                                </div>
                            </div>
                            <ul class="geo-list__lists">
                                <li class="geo-list__list-items">
                                    <ul class="geo-list__list-item">
                                        <?php foreach ($mainCity as $main) { ?>
                                            <li class="geo-list__item">
                                                <a class="geo-list__link main" href="#">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24"
                                                        fill="none"
                                                        class="geo-list__icon"
                                                    >
                                                        <path
                                                            d="M12 2C14.5013 4.73835 15.9228 8.29203 16 12C15.9228 15.708 14.5013 19.2616 12 22M12 2C9.49872 4.73835 8.07725 8.29203 8 12C8.07725 15.708 9.49872 19.2616 12 22M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22M2.50002 9H21.5M2.5 15H21.5"
                                                            stroke="black"
                                                            stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                    <span class="geo-list__label"><?= $main ?></span>
                                                </a>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </li>
                                <li class="geo-list__list-items">
                                    <?php
                                    // Сортируем массив $otherCity по полю "city" в алфавитном порядке
                                    usort($otherCity, function($a, $b) {
                                        return strcmp($a['city'], $b['city']);
                                    });
                                
                                    $currentLetter = ''; // Переменная для хранения текущей буквы
                                
                                    foreach($otherCity as $other) {
                                        $cityName = $other['city']; // Получаем название города из массива
                                
                                        // Получаем первую букву названия города
                                        $firstLetter = mb_substr($cityName, 0, 1, 'UTF-8');
                                
                                        // Если текущая буква отличается от предыдущей, выводим заголовок с новой буквой
                                        if ($firstLetter !== $currentLetter) {
                                            $currentLetter = $firstLetter;
                                            echo '<div class="geo-list__list-title">' . $currentLetter . '</div>';
                                        }
                                    ?>
                                    <ul class="geo-list__list-item">
                                        <li class="geo-list__item">
                                            <a class="geo-list__link" href="#">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    class="geo-list__icon"
                                                >
                                                    <path
                                                        d="M14 7H16.3373C16.5818 7 16.7041 7 16.8192 7.02763C16.9213 7.05213 17.0188 7.09253 17.1083 7.14736C17.2092 7.2092 17.2957 7.29568 17.4686 7.46863L21.5314 11.5314C21.7043 11.7043 21.7908 11.7908 21.8526 11.8917C21.9075 11.9812 21.9479 12.0787 21.9724 12.1808C22 12.2959 22 12.4182 22 12.6627V15.5C22 15.9659 22 16.1989 21.9239 16.3827C21.8224 16.6277 21.6277 16.8224 21.3827 16.9239C21.1989 17 20.9659 17 20.5 17M15.5 17H14M14 17V7.2C14 6.0799 14 5.51984 13.782 5.09202C13.5903 4.71569 13.2843 4.40973 12.908 4.21799C12.4802 4 11.9201 4 10.8 4H5.2C4.0799 4 3.51984 4 3.09202 4.21799C2.71569 4.40973 2.40973 4.71569 2.21799 5.09202C2 5.51984 2 6.0799 2 7.2V15C2 16.1046 2.89543 17 4 17M14 17H10M10 17C10 18.6569 8.65685 20 7 20C5.34315 20 4 18.6569 4 17M10 17C10 15.3431 8.65685 14 7 14C5.34315 14 4 15.3431 4 17M20.5 17.5C20.5 18.8807 19.3807 20 18 20C16.6193 20 15.5 18.8807 15.5 17.5C15.5 16.1193 16.6193 15 18 15C19.3807 15 20.5 16.1193 20.5 17.5Z"
                                                        stroke="black"
                                                        stroke-width="2"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    ></path>
                                                </svg>
                                                <span class="geo-list__label"><?php echo $cityName; ?></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <?php } ?>
                                </li>
                                
                            </ul>
                        </div>
                        <!-- end .geo-list-->
                    </div>
                </div>
            </div>
            <script src="assets/components/jquery-3.4.1/jquery.min.js"></script>
            <script src="assets/scripts/currentGeo.js"></script>
   
                        