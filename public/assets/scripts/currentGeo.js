$(document).ready(function() {
    console.log('currentGeo.js ready');
    $.ajax({
        url: '/get-geo-data-ajax',
        method: 'GET',
        success: function(response) {
            let mainCity = response.mainCity;
            let otherCity = response.otherCity;
    
            // Далее обрабатывайте полученные данные
            console.log('Main City:', mainCity);
            console.log('Other City:', otherCity);
        },
        error: function(xhr, status, error) {
            console.log('AJAX Error:', error);
        }
    });

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
});
