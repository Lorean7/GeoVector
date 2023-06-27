window.addEventListener('DOMContentLoaded', function() {
    console.log('paginate-get-offers.js ready');
    $(document).ready(function() {
        let currentPageGlobal = 1; // Инициализируем текущую страницу значением 1
        const fixedPrePage = 12;
        let idCategory = $('script[data-my-variable]').data('my-variable');
        loadCatalogData(idCategory); 

        // Обработчик нажатия кнопки сортировки по возрастанию цены
        $('#sort-asc-btn').on('click', function() {
            sortType = 'asc';
            loadCatalogData(idCategory, currentPageGlobal,fixedPrePage, sortType);
        });

        // Обработчик нажатия кнопки сортировки по убыванию цены
        $('#sort-desc-btn').on('click', function() {
            sortType = 'desc';
            loadCatalogData(idCategory, currentPageGlobal,fixedPrePage, sortType);
        });

        function loadCatalogData(idCategory, page = 1, perPage =fixedPrePage,sort='' ) {
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
                                      $('<div>').addClass('label__label label__label_style_check').text('Поверка в комплекте'),
                                      $('<div>').addClass('label__label label__label_style_gos').text('Госреестр')
                                    )
                                  )
                                ),
                                $('<div>').addClass('product-snippet__title').append(
                                  $('<a>').addClass('product-snippet__link').attr('href', `/product-card?id=${item.id}`).text(item.name)
                                ),
                                $('<div>').addClass('product-snippet__props').append(
                                  $('<div>').addClass('props').append(snippetMainProps)
                                )
                              ),
                              $('<div>').addClass('product-snippet__price-group').append(
                                $('<div>').addClass('price-group').append(
                                  $('<div>').addClass('price-group__main').append(
                                    $('<div>').addClass('price-group__price').append(
                                      $('<span>').addClass('price-group__value').text(item.price),
                                      $('<span>').addClass('price-group__unit').text('₽')
                                    )
                                  )
                                )
                              ),
                              
                              $('<div>')
                                .addClass('product-snippet__availability')
                                .addClass(item.quantity > 0 ? 'product-snippet__availability_green' : 'product-snippet__availability_red')
                                .text(item.quantity > 0 ? `В наличии ${item.quantity} шт.` : 'Нет в наличии')

                            ),
                            $('<div>').addClass('product-snippet__button').append(
                              $('<a>').addClass('button button_width_full button_size_l button_type_order').attr('href', '#').append(
                                $('<span>').addClass('button__holder').text('Заказать')
                              )
                            )
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
                                    loadCatalogData(idCategory, page, perPage);
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
