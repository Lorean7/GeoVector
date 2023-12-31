window.addEventListener('DOMContentLoaded', function() {
    console.log('paginate-get-offers.js ready');
    $(document).ready(function() {
        let currentPageGlobal = 1; // Инициализируем текущую страницу значением 1
        const fixedPrePage = 12;
        let sortType = 'alphabet'; // Глобальная переменная для хранения текущего типа сортировки

        let idCategory = $('script[data-id-category]').data('id-category');
        loadCatalogData(idCategory); 

        // Обработчик нажатия кнопки сортировки по возрастанию цены десктоп 
        $('#sort-asc-btn').on('click', function() {
            sortType = 'asc';
            loadCatalogData(idCategory, currentPageGlobal,fixedPrePage, sortType);
        });

        // Обработчик нажатия кнопки сортировки по убыванию цены декстоп 
        $('#sort-desc-btn').on('click', function() {
            sortType = 'desc';
            loadCatalogData(idCategory, currentPageGlobal,fixedPrePage, sortType);
        });

          // Обработчик нажатия кнопки сортировки по возрастанию цены мобайл 
          $('#priceup').on('click', function() {
            var name = $(this).find('span').text();
            $('#current_filter').text(name);
            sortType = 'asc';
            loadCatalogData(idCategory, currentPageGlobal,fixedPrePage, sortType);

            var activeBlock = $('.option-filter__link_state_active');
            activeBlock.removeClass('option-filter__link_state_active');
            $(this).addClass('option-filter__link_state_active');
        });

        // Обработчик нажатия кнопки сортировки по убыванию цены мобайл 
        $('#pricedown').on('click', function() {
          var name = $(this).find('span').text();
          $('#current_filter').text(name);
            sortType = 'desc';
            loadCatalogData(idCategory, currentPageGlobal,fixedPrePage, sortType);

            var activeBlock = $('.option-filter__link_state_active');
            activeBlock.removeClass('option-filter__link_state_active');
            $(this).addClass('option-filter__link_state_active');
        });

          // Обработчик нажатия кнопки сортировки по возрастанию цены мобайл 
        $('#hit').on('click', function() {
          var name = $(this).find('span').text();
          $('#current_filter').text(name);
            sortType = 'hitdown';
            loadCatalogData(idCategory, currentPageGlobal,fixedPrePage, sortType);

            var activeBlock = $('.option-filter__link_state_active');
            activeBlock.removeClass('option-filter__link_state_active');
            $(this).addClass('option-filter__link_state_active');
        });

          // Обработчик нажатия кнопки сортировки по возрастанию цены мобайл 
        $('#hitup').on('click', function() {
          var name = $(this).find('span').text();
          $('#current_filter').text(name);
            sortType = 'hitup';
            loadCatalogData(idCategory, currentPageGlobal,fixedPrePage, sortType);

            var activeBlock = $('.option-filter__link_state_active');
            activeBlock.removeClass('option-filter__link_state_active');
            $(this).addClass('option-filter__link_state_active');
        });

        // Обработчик нажатия кнопки сортировки по убыванию цены мобайл 
        $('#hitdown').on('click', function() {
          var name = $(this).find('span').text();
          $('#current_filter').text(name);
            sortType = 'hitdown';
            loadCatalogData(idCategory, currentPageGlobal,fixedPrePage, sortType);

            var activeBlock = $('.option-filter__link_state_active');
            activeBlock.removeClass('option-filter__link_state_active');
            $(this).addClass('option-filter__link_state_active');
        });

        // Обработчик нажатия кнопки сортировки по убыванию цены мобайл 
        $('#alphabet').on('click', function() {
          var name = $(this).find('span').text();
          $('#current_filter').text(name);
          sortType = 'alphabet';
          loadCatalogData(idCategory, currentPageGlobal,fixedPrePage, sortType);

          var activeBlock = $('.option-filter__link_state_active');
          activeBlock.removeClass('option-filter__link_state_active');
          $(this).addClass('option-filter__link_state_active');
      });

        function loadCatalogData(idCategory, page = 1, perPage =fixedPrePage,sort='alphabet' ) {
            $.ajax({
                url: `/catalog/ajax?id_category=${idCategory}`,
                method: "GET",
                data: {
                    idCategory: idCategory, 
                    page: page,
                    perPage: perPage,
                    sort: sort
                },
                success: function(response) {
                    let catalogResults = $('#product-grid__wrapper');
                    catalogResults.empty(); // Очистка всех элементов на странице
                    $.each(response.data, function(index, item) {
                      
                        let urls = JSON.parse(item.pictures);
                        let imageUrl = urls[0];
                        let mainPropsItem =  JSON.parse(item.offer_props);
                        let productUrl = `/product-card?id=${item.id}`;

                        let snippetMainProps = [];
                        if (mainPropsItem  != null) {
                          for (let prop of mainPropsItem) {
                            let snipProp = $('<div>').addClass('props__prop').append(
                              $('<div>').addClass('props__label').text(prop.label),
                              $('<div>').addClass('props__value').text(prop.value)
                            );
                            snippetMainProps.push(snipProp);
                          }
                        } else {
                          let snipProp = $('<div>').addClass('props__prop').append(
                            $('<div>').addClass('props__label').text("Основные характеристики:"),
                            $('<div>').addClass('props__value').text("Отсутствуют")
                          );
                          snippetMainProps.push(snipProp);
                        }

                        let snippetPriceGroup = $('<div>').addClass('price-group');
                        if(item.discount != null && item.discount > 0 && item.discount < 100){
                          newPrice = item.price * (1 - (item.discount / 100))
                          snippetPriceGroup.append(
                            $('<div>').addClass('price-group__extra').append(
                              $('<div>').addClass('price-group__price price-group__price_type_old').append(
                                $('<span>').addClass('price-group__value').text(item.price),
                                $('<span>').addClass('price-group__unit').text('₽')
                              ),
                              $('<div>').addClass('price-group__price').append(
                                $('<span>').addClass('price-group__value').text(newPrice),
                                $('<span>').addClass('price-group__unit').text('₽')
                              )
                            )
                          )
                        }else{
                          snippetPriceGroup.append(
                            $('<div>').addClass('price-group__main').append(
                  
                              $('<div>').addClass('price-group__price').append(
                                $('<span>').addClass('price-group__value').text(item.price),
                                $('<span>').addClass('price-group__unit').text('₽')
                              )
                            )
                          )
                        }
                        let orderButton = $('<a>', {
                          class: 'order_btn button button_width_full button_size_l button_type_order js-modal ',
                          href: '#modalOrder',
                          'data-order': item.id
                        }).append($('<span>', {
                          class: 'button__holder ',
                          text: 'Заказать',
                        }));
                        //  обработчик покупки
                        orderButton.click(function() {
                          var orderId = $(this).data('order');
                          $.ajax({
                            url: `/data/offer/ajax?id=${orderId}`,
                            method: 'GET',
                            success: function(response) {
                              // Ваш обработчик успешного ответа
                              // Найти основной блок с классом "card-order"
                              let urls = JSON.parse(response.pictures);
                              let imageUrl = urls[0];
                              var cardOrder = $('.card-order');
                              // Найти картинку внутри блока "card-order"
                              var image = cardOrder.find('.card-order__image');
                              // Заменить значение атрибута src картинки
                              image.attr('src', imageUrl);
                              // Найти блок "card-order__content"
                              var contentBlock = cardOrder.find('.card-order__content');
                              // Создать новый элемент span с названием
                              var titleSpan = $('<span>', {
                                class: 'card-order__title',
                                text: response.name
                              });
                              contentBlock.empty()
                              
                              contentBlock.append(titleSpan);
                              // Ваш обработчик успешного ответа
                            },
                            error: function(error) {
                              // Ваш обработчик ошибок
                            }
                          });
                        });
                        

                        let productSnippet = $('<div>').addClass('product-grid__item').append(
                          $('<div>').addClass('product-snippet product-snippet_type_adaptive product-grid__snippet').append(
                            $('<a>').addClass('product-snippet__illustration').attr('href', productUrl).append(
                              $('<picture>').addClass('product-snippet__picture').append(
                                $('<img>').addClass('product-snippet__image lazyload').attr('src', imageUrl).attr('alt', 'image').attr('title', '')
                              )
                            ),
                            $('<div>').addClass('product-snippet__main').append(
                              $('<div>').addClass('product-snippet__info').append(
                                $('<div>').addClass('product-snippet__labels').append(
                                  $('<div>').addClass('label').append(
                                    $('<div>').addClass('label__labels').append(
                                      $('<div>').addClass('label__label label__label_style_popular').text('Хит продаж!').toggle(item.hit == 1),
                                      $('<div>').addClass('label__label label__label_style_check').text('Поверка в комплекте').toggle(item.verification == 1),
                                      $('<div>').addClass('label__label label__label_style_gos').text('Госреестр').toggle(item.stateregister != null),
                                      $('<div>').addClass('label__label label__label_style_discount').text('Скидка').toggle(item.discount != null && item.discount > 0 && item.discount <100)
                                    )
                                  )
                                ),
                                $('<div>').addClass('product-snippet__title').append(
                                  $('<a>').addClass('product-snippet__link').attr('href',productUrl).text(item.name)
                                ),
                                $('<div>').addClass('product-snippet__props').append(
                                  $('<div>').addClass('props').append(snippetMainProps)
                                )
                              ),
                              $('<div>').addClass('product-snippet__price-group').append(
                                snippetPriceGroup
                              ),
                              
                              $('<div>')
                                .addClass('product-snippet__availability')
                                .addClass(item.quantity > 0 ? 'product-snippet__availability_green' : 'product-snippet__availability_red')
                                .text(item.quantity > 0 ? `В наличии ${item.quantity} шт.` : 'Нет в наличии')).append(orderButton),
                          )
                        );
                        
                        catalogResults.append(productSnippet);
                        
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
