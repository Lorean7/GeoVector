$(document).ready(function() {
    console.log('currentGeo.js ready');

    // Получение значения cookie
    let cityCookie = document.cookie
        .split(';')
        .map(cookie => cookie.trim())
        .find(cookie => cookie.startsWith('city='));

    // Функция для обновления значения cookie
    function updateCityCookie(city) {
        document.cookie = `city=${encodeURIComponent(city)}`;
    }

    // Функция для обновления текста в элементе "geo-selector__label"
    function updateGeoSelectorLabel(text) {
        let geoSelectorLabel = $('.geo-selector__label');
        if (geoSelectorLabel.length > 0) {
            geoSelectorLabel.text(text);
        }
    }

    // Проверка наличия cookie
    if (cityCookie) {
        let urlCode = cityCookie.split('=')[1];
        let city = decodeURIComponent(urlCode);

        // Обновляем текст в элементе "geo-selector__label"
        updateGeoSelectorLabel(city);

        // Находим все ссылки с классом "geo-list__link"
        let geoLinks = $('.geo-list__link');

        // Перебираем найденные ссылки
        geoLinks.each(function() {
            let cityName = $(this).find('.geo-list__label').text();

            if (cityName === city) {
                // Если города совпадают, добавляем класс "geo-list__link_state_active" к ссылке
                $(this).addClass('geo-list__link_state_active');
            }

            // Добавляем обработчик события на каждую ссылку
            $(this).on('click', function(event) {
                event.preventDefault();

                // Удаляем класс "geo-list__link_state_active" со всех ссылок
                geoLinks.removeClass('geo-list__link_state_active');

                // Добавляем класс "geo-list__link_state_active" к выбранной ссылке
                $(this).addClass('geo-list__link_state_active');

                // Получаем выбранный город
                let selectedCity = $(this).find('.geo-list__label').text();

                // Обновляем значение cookie
                updateCityCookie(selectedCity);

                // Обновляем текст в элементе "geo-selector__label"
                updateGeoSelectorLabel(selectedCity);
            });
        });
    }

    // Массив со списком городов России
    let cities = [
        'Таганрог',
        'Шахты',
        // Добавьте остальные города России сюда
    ];

    // Функция для создания элемента списка с городом
    function createCityListItem(city) {
        let listItem = $('<li>').addClass('geo-list__item');

        let link = $('<a>').addClass('geo-list__link').attr('href', '#');

        let label = $('<span>').addClass('geo-list__label').text(city);

        link.append(label);

        listItem.append(link);

        // Добавляем обработчик события на каждую ссылку
        link.on('click', function(event) {
            event.preventDefault();

            // Удаляем класс "geo-list__link_state_active" со всех ссылок
            $('.geo-list__link').removeClass('geo-list__link_state_active');

            // Добавляем класс "geo-list__link_state_active" к выбранной ссылке
            $(this).addClass('geo-list__link_state_active');

            // Получаем выбранный город
            let selectedCity = $(this).find('.geo-list__label').text();

            // Обновляем значение cookie
            updateCityCookie(selectedCity);

            // Обновляем текст в элементе "geo-selector__label"
            updateGeoSelectorLabel(selectedCity);
        });

        return listItem;
    }

    // Получение ссылки на блок <ul> с классом "geo-list__list"
    let geoList = $('.geo-list__list');
    let labelOther = 'Другие города для доставки';
    let currentLetter = '';
    let currentLetterList = null;

    // Добавление городов в блок <ul> с учетом текущей буквы
    geoList.append($('<span>').addClass('geo-list__item geo-list__item_title').text(labelOther));
    cities.sort(); // Сортировка городов по алфавиту

    cities.forEach(function(city) {
        let cityLetter = city[0].toUpperCase();

        if (cityLetter !== currentLetter) {
            currentLetter = cityLetter;
            let letterListItem = $('<li>').addClass('geo-list__item geo-list__item_letter').text(currentLetter);
            currentLetterList = $('<ul>').addClass('geo-list__other-cities').append(letterListItem);
            geoList.append(currentLetterList);
        }

        let cityListItem = createCityListItem(city);
        currentLetterList.append(cityListItem);
    });
});
