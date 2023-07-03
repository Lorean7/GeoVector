$(document).ready(function() {
  console.log('create-modal.js is ready!');
  
  $('.order_btn').click(function() {
    data = $('.order_btn');
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

        // Заменить содержимое блока "card-order__content" на новый элемент span
        contentBlock.empty()
        contentBlock.append(titleSpan);
      },
      error: function(error) {
        // Ваш обработчик ошибок
      }
    });
  });
});
