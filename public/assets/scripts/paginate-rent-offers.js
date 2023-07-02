window.addEventListener('DOMContentLoaded', function() {
  console.log('paginate-get-rent.js ready');
  $(document).ready(function() {
      let currentPageGlobal = 1; // Инициализируем текущую страницу значением 1
      const fixedPrePage = 12;
      let sortType = 'alphabet'; // Глобальная переменная для хранения текущего типа сортировки

      let idCategory = $('script[data-id-category]').data('id-category');
      loadCatalogData(idCategory); 

      function loadCatalogData(idCategory, page = 1, perPage = fixedPrePage) {
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

                  if (response.data.length > 0) {
                      $.each(response.data, function(index, item) { 
                          let urls = JSON.parse(item.pictures);
                          let imageUrl = urls[0];

                          let listItem =  $('<li>', { class: 'card-list__item' });
                          let cardItem = $('<div>', { class: 'card-item' });
                          let illustration = $('<div>', { class: 'card-item__illustration' });
                          let picture = $('<picture>', { class: 'card-item__picture' });
                          let image = $('<img>', {
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
                          
                          let content = $('<div>', { class: 'card-item__content' });
                          let title = $('<span>', { class: 'card-item__title', text: item.name });
                          let quantity = $('<div>', { class: 'card-item__quantity' });
                          let quantityLabel = $('<span>', { class: 'card-item__quantity-label', text: 'Расчет аренды:' });
                          let quantityInput = $('<div>', { class: 'card-item__quantity-input' });
                          let quantityInputWrapper = $('<div>', { class: 'quantity-input__wrapper js-quantity-container' });
                          let quantityField = $('<div>', { class: 'quantity-input__field' });
                          let quantityInputNumber = $('<input>', {
                              type: 'number',
                              value: '7',
                              min: '1',
                              max: '365',
                              'data-min': '1',
                              'data-max': '365',
                              class: 'quantity-input__input js-quantity-input rent-quant'
                          });

                          quantityField.append(quantityInputNumber);
                          quantityInputWrapper.append(quantityField);
                          quantityInput.append(quantityInputWrapper);

                          let totalAmount = $('<span>', { class: 'card-item__quantity-label', text: 'дней = 45 000 ₽' });

                          quantity.append(quantityLabel, quantityInput, totalAmount);
                          content.append(title, quantity);

                          let props = $('<div>', { class: 'card-item__props' });
                          let propsContainer = $('<div>', { class: 'props' });
                          let prop1 = $('<div>', { class: 'props__prop props__prop_rent' });
                          let prop1Label = $('<div>', { class: 'props__label', text: '61 - 360 дней -' });
                          let prop1Value = $('<div>', { class: 'props__value', text: '4 200 ₽/день' });

                          prop1.append(prop1Label, prop1Value);

                          let prop2 = $('<div>', { class: 'props__prop props__prop_rent' });
                          let prop2Label = $('<div>', { class: 'props__label', text: '31 - 60 дней -' });
                          let prop2Value = $('<div>', { class: 'props__value', text: '4 800 ₽/день' });

                          prop2.append(prop2Label, prop2Value);

                          let prop3 = $('<div>', { class: 'props__prop props__prop_rent' });
                          let prop3Label = $('<div>', { class: 'props__label', text: '16 - 30 дней -' });
                          let prop3Value = $('<div>', { class: 'props__value', text: '5 400 ₽/день' });

                          prop3.append(prop3Label, prop3Value);

                          let prop4 = $('<div>', { class: 'props__prop props__prop_rent' });
                          let prop4Label = $('<div>', { class: 'props__label', text: '7 - 15 дней -' });
                          let prop4Value = $('<div>', { class: 'props__value', text: '6 000 ₽/день' });

                          prop4.append(prop4Label, prop4Value);

                          propsContainer.append(prop1, prop2, prop3, prop4);
                          props.append(propsContainer);
                          content.append(props);

                          let button = $('<div>', { class: 'card-item__button' });
                          let orderButton = $('<a>', {
                            class: 'button button_width_full button_size_l button_type_order js-modal ',
                            href: '#modalOrder',
                            'data-order': item.id
                          }).append($('<span>', {
                            class: 'button__holder order_btn',
                            text: 'Заказать',
                          }));
                          let rentQuantValue = $('.rent-quant').val();
                          quantityInputNumber.on('input', function() {
                            rentQuantValue = $(this).val(); // Обновляем значение rentQuantValue при изменении значения в инпуте
                            if (!rentQuantValue){
                                rentQuantValue = 0
                            }
                          });
                          
                                                  //  обработчик покупки
                        orderButton.click(function() { 
                            let orderId = $(this).data('order');    
                            $.ajax({
                              url: `/data/offer/ajax?id=${orderId}`,
                              method: 'GET',
                              success: function(response) {
                                
                                // Ваш обработчик успешного ответа
                                // Найти основной блок с классом "card-order"
                                let urls = JSON.parse(response.pictures);
                                let imageUrl = urls[0];

                                let cardOrder = $('.card-order');
                                // Найти картинку внутри блока "card-order"
                                let image = cardOrder.find('.card-order__image');
                                // Заменить значение атрибута src картинки
                                image.attr('src', imageUrl);
                                // Найти блок "card-order__content"
                                let contentBlock = cardOrder.find('.card-order__content');
                                contentBlock.empty()
                                // Создать новый элемент span с названием
                                let titleSpan = $('<span>', {
                                  class: 'card-order__title',
                                  text: response.name
                                });
                                let allRentItem = response.rent * rentQuantValue;
                                
                                console.log(rentQuantValue)

                                let quantityElement = $('<div>', { class: 'card-order__quantity' })
                                .append($('<span>', { class: 'card-order__quantity-label', text: 'Срок аренды:' }))
                                .append($('<span>', { class: 'card-order__quantity-value', text: `${rentQuantValue} дней` }));
                              
                                let priceElement = $('<div>', { class: 'card-order__price' })
                                .append($('<span>', { class: 'card-order__price-label', text: 'Стоимость аренды:' }))
                                .append($('<span>', { class: 'card-order__price-value', text: `${allRentItem} ₽` }));
                              
  
                                // Заменить содержимое блока "card-order__content" на новый элемент span
                                contentBlock.append(titleSpan).append(quantityElement).append(priceElement);
                                // Ваш обработчик успешного ответа
                              },
                              error: function(error) {
                                // Ваш обработчик ошибок
                              }
                            });
                          });
                          button.append(orderButton);
                          content.append(button);

                          cardItem.append(content);
                          listItem.append(cardItem);

                          // Добавляем элемент в нужное место на странице
                          catalogResults.append(listItem);

                          // Обновляем итоговую сумму при изменении количества дней аренды
                          quantityInputNumber.on('input', function() {
                              let days = parseInt($(this).val());
                              updateTotalAmount(totalAmount, item.rent, days);
                          });

                          // Обновляем итоговую сумму при загрузке данных
                          updateTotalAmount(totalAmount, item.rent, parseInt(quantityInputNumber.val()));
                      });

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
                                      loadCatalogData(idCategory, page, perPage, sortType);
                                  });
                          }
                          pagination.append(pageLink);
                      }
                  } else {
                      warning = $('<div>').text('НЕТ ТОВАРОВ ДЛЯ АРЕНДЫ')
                      catalogResults.append(warning)
                  }
              },
              error: function(xhr, status, error) {
                  console.error(error);
              }
          });
      }

      // Функция для обновления итоговой суммы
      function updateTotalAmount(element, rent, days) {
        if (days){ 
          let totalAmount = rent * days;
          element.text('дней = ' + totalAmount + ' ₽');
        }else{
          element.text('дней = 0 ₽');
        }
      }
  });
});
