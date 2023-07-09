window.addEventListener('DOMContentLoaded', function() {
    console.log('poverka-offers.js ready');

    $(document).ready(function() {
        let offersPoverka;

        function loadPoverka(sortData = '') {
            $.ajax({
                url: '/get-poverka-ajax',
                method: 'GET',
                data: {
                    filter: sortData, 
                },
                success: function(response) {
                    offersPoverka = response.data;
                    renderPoverkaTable(offersPoverka);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

        function renderPoverkaTable(data) {
            let tbody = $('tbody.poverka-panel__body');
            tbody.empty();

            if (data.length === 0) {
                tbody.append($('<tr/>').addClass('poverka-panel__row')
                    .append($('<td/>').attr('colspan', '8').text('Совпадений не найдено')));
                return;
            }

            $.each(data, function(index, item) {
                let newRow = $('<tr/>').addClass('poverka-panel__row')
                    .append($('<td/>').addClass('poverka-panel__id').attr('data-label', 'ID').text(item.stateregister ? item.stateregister : 'Нет информации'))
                    .append($('<td/>').addClass('poverka-panel__type').attr('data-label', 'Услуга').text('Поверка'))
                    .append($('<td/>').addClass('poverka-panel__category').attr('data-label', 'Категория').text(item.name_category ? item.name_category : 'Нет информации'))
                    .append($('<td/>').addClass('poverka-panel__brend').attr('data-label', 'Бренд').text(item.brand ? item.brand : 'Нет информации'))
                    .append($('<td/>').addClass('poverka-panel__model').attr('data-label', 'Модель').text(item.modalDevice ? item.modalDevice : 'Нет информации'))
                    .append($('<td/>').addClass('poverka-panel__time').attr('data-label', 'Срок').text(item.poverkaTime ? item.poverkaTime + ' р.д.' : 'Нет информации'))
                    .append($('<td/>').addClass('poverka-panel__price').attr('data-label', 'Цена РРЦ').text(item.rrp ? 'от ' + item.rrp + ' р.' : 'Нет информации'))
                    .append($('<td/>').addClass('poverka-panel__button')
                        .append($('<a/>').addClass('button button_text-size_s button_style_outline button_type_order')
                            .append($('<span/>').addClass('button__wrapper button__wrapper_type_initial')
                                .append($('<span/>').addClass('button__holder')
                                    .append($('<span/>').addClass('button__text').text('Добавить'))
                                )
                            )
                        )
                    );

                newRow.appendTo(tbody);
            });
        }

        function filterPoverkaTable(searchText) {
            let filteredData = offersPoverka.filter(function(item) {
                return item.stateregister && item.stateregister.toLowerCase().includes(searchText.toLowerCase()) ||
                    item.modalDevice && item.modalDevice.toLowerCase().includes(searchText.toLowerCase()) ||
                    item.brand && item.brand.toLowerCase().includes(searchText.toLowerCase());
            });

            renderPoverkaTable(filteredData);
        }

        loadPoverka();

        $('.poverka-sort_input').on('input', function() {
            let searchText = $(this).val().trim();

            if (searchText === '') {
                renderPoverkaTable(offersPoverka);
            } else {
                filterPoverkaTable(searchText);
            }
        });
    });
});
