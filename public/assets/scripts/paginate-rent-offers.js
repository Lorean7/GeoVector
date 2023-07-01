window.addEventListener('DOMContentLoaded', function() {
    console.log('paginate-get-rent.js ready');
    $(document).ready(function() {
        let currentPageGlobal = 1; // Инициализируем текущую страницу значением 1
        const fixedPrePage = 12;
        let sortType = 'alphabet'; // Глобальная переменная для хранения текущего типа сортировки

        let idCategory = $('script[data-id-category]').data('id-category');
        loadCatalogData(idCategory); 

        function loadCatalogData(idCategory, page = 1, perPage =fixedPrePage ) {
            $.ajax({
                url: `/rent/ajax?id_category=${idCategory}`,
                method: "GET",
                data: {
                    idCategory: idCategory, 
                    page: page,
                    perPage: perPage,
                },
                success: function(response) {

                    let catalogResults = $('.rent_data');
                    catalogResults.empty(); // Очистка всех элементов на странице
                    $.each(response.data, function(index, item) {
                      
                      
                        let urls = JSON.parse(item.pictures);
                        let imageUrl = urls[0];


                        let listItem =  $('<li>', { class: 'card-list__item' });

                        var cardItem = $('<div>', { class: 'card-item' });
                        
                        var illustration = $('<div>', { class: 'card-item__illustration' });
                        var picture = $('<picture>', { class: 'card-item__picture' });
                        var image = $('<img>', {
                          src: imageUrl,
                          width: '231',
                          height: '231',
                          alt: 'image',
                          class: 'card-item__image lazyload',
                          title: ''
                        });
                        
                        picture.append(image);
                        illustration.append(picture);
                        cardItem.append(illustration);
                        
                        var content = $('<div>', { class: 'card-item__content' });
                        var title = $('<span>', { class: 'card-item__title', text: 'Leica BLK360 со специалистом' });
                        var quantity = $('<div>', { class: 'card-item__quantity' });
                        var quantityLabel = $('<span>', { class: 'card-item__quantity-label', text: 'Расчет аренды:' });
                        var quantityInput = $('<div>', { class: 'card-item__quantity-input' });
                        var quantityInputWrapper = $('<div>', { class: 'quantity-input__wrapper js-quantity-container' });
                        var quantityField = $('<div>', { class: 'quantity-input__field' });
                        var quantityInputNumber = $('<input>', {
                          type: 'number',
                          value: '7',
                          min: '1',
                          max: '99',
                          'data-min': '1',
                          'data-max': '99',
                          class: 'quantity-input__input js-quantity-input'
                        });
                        
                        quantityField.append(quantityInputNumber);
                        quantityInputWrapper.append(quantityField);
                        quantityInput.append(quantityInputWrapper);
                        
                        quantity.append(quantityLabel, quantityInput, $('<span>', { class: 'card-item__quantity-label', text: 'дней = 45 000 ₽' }));
                        content.append(title, quantity);
                        
                        var props = $('<div>', { class: 'card-item__props' });
                        var propsContainer = $('<div>', { class: 'props' });
                        var prop1 = $('<div>', { class: 'props__prop props__prop_rent' });
                        var prop1Label = $('<div>', { class: 'props__label', text: '61 - 360 дней -' });
                        var prop1Value = $('<div>', { class: 'props__value', text: '4 200 ₽/день' });
                        
                        prop1.append(prop1Label, prop1Value);
                        
                        var prop2 = $('<div>', { class: 'props__prop props__prop_rent' });
                        var prop2Label = $('<div>', { class: 'props__label', text: '31 - 60 дней -' });
                        var prop2Value = $('<div>', { class: 'props__value', text: '4 800 ₽/день' });
                        
                        prop2.append(prop2Label, prop2Value);
                        
                        var prop3 = $('<div>', { class: 'props__prop props__prop_rent' });
                        var prop3Label = $('<div>', { class: 'props__label', text: '16 - 30 дней -' });
                        var prop3Value = $('<div>', { class: 'props__value', text: '5 400 ₽/день' });
                        
                        prop3.append(prop3Label, prop3Value);
                        
                        var prop4 = $('<div>', { class: 'props__prop props__prop_rent' });
                        var prop4Label = $('<div>', { class: 'props__label', text: '7 - 15 дней -' });
                        var prop4Value = $('<div>', { class: 'props__value', text: '6 000 ₽/день' });
                        
                        prop4.append(prop4Label, prop4Value);
                        
                        propsContainer.append(prop1, prop2, prop3, prop4);
                        props.append(propsContainer);
                        content.append(props);
                        
                        var button = $('<div>', { class: 'card-item__button' });
                        var orderButton = $('<a>', {
                          class: 'button button_width_full button_size_l button_type_order js-modal',
                          href: '#modalOrder'
                        }).append($('<span>', { class: 'button__holder', text: 'Заказать' }));
                        
                        button.append(orderButton);
                        content.append(button);
                        
                        cardItem.append(content);
                        listItem.append(cardItem);
                        
                        // Добавляем элемент в нужное место на странице
                        catalogResults.append(listItem);
                        
                    })

                    let pagination = $('#pagination');
                    pagination.empty(); // Очистка блока пагинации перед добавлением новых ссылок
                    let totalPages = Math.ceil(response.total / perPage);
                    for (let i = 1; i <= totalPages; i++) {
                        let pageLink = $('<a>').text(i).addClass('pagination-link');
                        if (i === page) {
                            pageLink.addClass('active');
                        } else {
                            pageLink.attr('href', 'javascript:void(0)')
                                .data('page', i)
                                .on('click', function() {
                                    let page = $(this).data('page');
                                    currentPageGlobal = page
                                    loadCatalogData(idCategory, page, perPage,sortType);
                                });
                        }
                        pagination.append(pageLink);
                    }
                    
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }
    });
});
