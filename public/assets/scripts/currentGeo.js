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

    $.ajax({
        url: '/get-geo-data-ajax',
        method: 'GET',
        success: function(response) {
            let mainCity = response.mainCity;
            let otherCity = response.otherCity;
            searchGeo(mainCity, otherCity);
            // // Далее обрабатывайте полученные данные
            // console.log('Main City:', mainCity);
            // console.log('Other City:', otherCity);
        },
        error: function(xhr, status, error) {
            console.log('AJAX Error:', error);
        }
    });

    function searchGeo(main, other) {
        let mainArray = Object.values(main);
        let otherArray = Object.values(other);

        var searchSelector = '#city-js',
            searchFormSelector = '#formGeo',
            searchResultsSelector = '#result-city',
            searchClearSelector = '#clear-city',
            searchFormOpenClass = 'search-form_results_shown',
            searchFormFilledClass = 'search-form_state_filled',
            searchResultsFilledClass = 'search-results_state_filled',
            searchResultsNoResultsClass = 'search-results_state_no-results';

        var searches = $(searchSelector);

        function searchFocusHandler() {
            const search = $(this);
            const form = search.closest(searchFormSelector);

            form.addClass(searchFormOpenClass);
        }

        function searchBlurHandler() {
            const search = $(this);
            const form = search.closest(searchFormSelector);
        }

        function updateForm(search) {
            var form = search.closest(searchFormSelector),
                results = form.find(searchResultsSelector),
                message = results.find('.search-results__message');

            form.toggleClass(searchFormFilledClass, !!search.val());
            results.toggleClass(searchResultsFilledClass, !!search.val());
            results.toggleClass(searchResultsNoResultsClass, search.val().length === 0);

            if (message) {
                message.css('display', search.val().length > 3 && !results.children().length ? 'block' : 'none');
            }
        }

        $(document).on('input', searchSelector, function() {
            var searchValue = $(this).val();
            search(searchValue);
        });

        function search(query) {
            var results = [];

            if (query.trim().length > 0) {
                results = mainArray.filter(function(city) {
                    return city.toLowerCase().includes(query.toLowerCase());
                });

                results = results.concat(otherArray.filter(function(city) {
                    return city.toLowerCase().includes(query.toLowerCase());
                }));
            }

            var searchResults = $(searchResultsSelector).find('#result-city');
            searchResults.empty();

            if (results.length > 0) {
                $.each(results, function(index, result) {
                    var listItem = $('<li class="search-results__item">');
                    console.log(listItem)
                    var link = $(`<a href="#" class="search-results__link">`).text(result);
                    listItem.append(link);
                    searchResults.append(listItem);
                    // Добавляем обработчик события на каждую ссылку
                    link.on('click', function(event) {
                        event.preventDefault();

                        // Получаем выбранный город
                        var selectedCity = $(this).text();

                        // Обновляем значение cookie
                        updateCityCookie(selectedCity);

                        // Обновляем текст в элементе "geo-selector__label"
                        updateGeoSelectorLabel(selectedCity);
                    });

                });
            }

            var message = $(searchResultsSelector).find('.search-results__message');
            if (results.length === 0) {
                message.css('display', results.length === 0 ? 'block' : 'none');
            }
        }

        function searchInputHandler() {
            var search = $(this);
            updateForm(search);
        }

        function clearClickHandler(e) {
            var form = $(this).closest(searchFormSelector),
                search = form.find(searchSelector);

            search.val('');
            updateForm(search);
        }

        searches.on('focus', searchFocusHandler);
        searches.on('blur', searchBlurHandler);
        searches.on('input', searchInputHandler);
        $(document).on('click', searchClearSelector, clearClickHandler);
    }
});
