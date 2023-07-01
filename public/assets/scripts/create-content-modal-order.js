$(document).ready(function() {
    var rentBtn = $('.rent-btn');
    var cardOrderContent = $('.card-order__content');
  
    if (rentBtn.length > 0) {
      // Найден элемент с классом "rent-btn", заполняем содержимое из него
      var title = rentBtn.find('.card-order__title').html();
      var quantityLabel = rentBtn.find('.card-order__quantity-label').html();
      var quantityValue = rentBtn.find('.card-order__quantity-value').html();
      var priceLabel = rentBtn.find('.card-order__price-label').html();
      var priceValue = rentBtn.find('.card-order__price-value').html();
  
      // Создаем HTML-код с полученными данными
      var html = `
        <span class="card-order__title">${title}</span>
        <div class="card-order__quantity">
          <span class="card-order__quantity-label">${quantityLabel}</span>
          <span class="card-order__quantity-value">${quantityValue}</span>
        </div>
        <div class="card-order__price">
          <span class="card-order__price-label">${priceLabel}</span>
          <span class="card-order__price-value">${priceValue}</span>
        </div>
      `;
  
      // Заполняем содержимое блока card-order__content
      cardOrderContent.html(html);
    } else {
      // Элемент с классом "rent-btn" не найден, подставляем статический контент
      cardOrderContent.html(`
        <span class="card-order__title">Оформление заказа продукт: Leica BLK360</span>
      `);
    }
  });
  