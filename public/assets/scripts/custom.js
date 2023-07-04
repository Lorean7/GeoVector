(function () {
	'use strict';
	console.log('custom.js is ready');

	(function validation() {
		window.addEventListener('load', function () {
			let checkoutForm = document.getElementById('formCheckout');

			if (checkoutForm) {
				let checkoutFormValidation = StandardForm();
				checkoutFormValidation.init(checkoutForm);
				checkoutFormValidation.onSuccess(function(e, form, validation) {
					console.log('Form submitted. form.submit() if wish to do a normal POST')
				});
			}

			let loginForm = document.getElementById('formLogin');

			if (loginForm) {
				let loginFormValidation = StandardForm();
				loginFormValidation.init(loginForm);
				loginFormValidation.onSuccess(function(e, form, validation) {
					console.log('Form submitted. form.submit() if wish to do a normal POST')
				});
			}

			let registerForm = document.getElementById('formRegister');

			if (registerForm) {
				let registerFormValidation = StandardForm();
				registerFormValidation.init(registerForm);
				registerFormValidation.onSuccess(function(e, form, validation) {
					console.log('Form submitted. form.submit() if wish to do a normal POST')
				});
			}

			let restoreForm = document.getElementById('formRestore');

			if (restoreForm) {
				let restoreFormValidation = StandardForm();
				restoreFormValidation.init(restoreForm);
				restoreFormValidation.onSuccess(function(e, form, validation) {
					console.log('Form submitted. form.submit() if wish to do a normal POST')
				});
			}

			let codeForm = document.getElementById('formRestoreCode');

			if (codeForm) {
				let codeFormValidation = StandardForm();
				codeFormValidation.init(codeForm);
				codeFormValidation.onSuccess(function(e, form, validation) {
					console.log('Form submitted. form.submit() if wish to do a normal POST');

					let container = form.closest('.content-panel');
					if (container) {
						container.classList.add('content-panel_state_result');
					}
				});
			}

			let partnershipForm = document.getElementById('formPartnership');

			if (partnershipForm) {
				let partnershipFormValidation = StandardForm();
				partnershipFormValidation.init(partnershipForm);
				partnershipFormValidation.onSuccess(function(e, form, validation) {
					console.log('Form submitted. form.submit() if wish to do a normal POST')
				});
			}

			let questionForm = document.getElementById('formQuestion');

			if (questionForm) {
				let questionFormValidation = StandardForm();
				questionFormValidation.init(questionForm);
				questionFormValidation.onSuccess(function(e, form, validation) {
					console.log('Form submitted. form.submit() if wish to do a normal POST')
				});
			}

			let personalForm = document.getElementById('formPersonal');

			if (personalForm) {
				let personalFormValidation = StandardForm();
				personalFormValidation.init(personalForm);
				personalFormValidation.onSuccess(function(e, form, validation) {
					console.log('Form submitted. form.submit() if wish to do a normal POST')
				});
			}
			let sendQuestUslugi = document.getElementById('sendQuestUslugi');
			if (sendQuestUslugi) {
				let orderFormValidation = StandardForm();
				orderFormValidation.init(orderForm);
				orderFormValidation.onSuccess(function(e, form, validation) {
					// Получение CSRF-токена из мета-тега в HTML-документе
					console.log('Form submitted. form.submit() if wish to do a normal POST')
						// получение данных
						  let titleProduct = $('.card-order__title').text()
						  let quantityValue = $('.card-order__quantity-value').text()
						  let priceValue = $('.card-order__price-value').text()
						  let name = $('.js-name').val()
						  let phone = $('.js_phone_data').val()
						  let comment = $('.js-comment').val()

						  if (name && phone && comment && titleProduct){ 
							if (quantityValue && priceValue){
				// Получение CSRF-токена из мета-тега в HTML-документе
								let csrfToken = $('meta[name="csrf-token"]').attr('content');

								// Отправка AJAX-запроса с передачей CSRF-токена
								$.ajax({
								url: "/send-order",
								method: "POST",
								data: {
									_token: csrfToken, // Передача CSRF-токена
									titleProduct: titleProduct,
									quantityValue: quantityValue,
									priceValue: priceValue,
									name: name,
									phone: phone,
									comment: comment
								},
								success: function(response) {
									console.log(response);
									// Действия при успешном получении ответа от сервера
								},
								error: function(xhr, status, error) {
									console.log(error);
									// Действия при возникновении ошибки
								}
								});
							}else{
								console.log(' только тильт')
								// Получение CSRF-токена из мета-тега в HTML-документе
								let csrfToken = $('meta[name="csrf-token"]').attr('content');

								// Отправка AJAX-запроса с передачей CSRF-токена
								$.ajax({
								url: "/send-order",
								method: "POST",
								data: {
									_token: csrfToken, // Передача CSRF-токена
									titleProduct: titleProduct,
									name: name,
									phone: phone,
									comment: comment
								},
								success: function(response) {
									console.log(response);
									// Действия при успешном получении ответа от сервера
								},
								error: function(xhr, status, error) {
									console.log(error);
									// Действия при возникновении ошибки
								}
								});
							}	
						}					  
				});
			}

			let orderForm = document.getElementById('formOrder');
			if (orderForm) {
				let orderFormValidation = StandardForm();
				orderFormValidation.init(orderForm);
				orderFormValidation.onSuccess(function(e, form, validation) {
					// Получение CSRF-токена из мета-тега в HTML-документе
					console.log('Form submitted. form.submit() if wish to do a normal POST')
						// получение данных
						  let titleProduct = $('.card-order__title').text()
						  let quantityValue = $('.card-order__quantity-value').text()
						  let priceValue = $('.card-order__price-value').text()
						  let name = $('.js-name').val()
						  let phone = $('.js_phone_data').val()
						  let comment = $('.js-comment').val()

						  if (name && phone && comment && titleProduct){ 
							if (quantityValue && priceValue){
				// Получение CSRF-токена из мета-тега в HTML-документе
								let csrfToken = $('meta[name="csrf-token"]').attr('content');

								// Отправка AJAX-запроса с передачей CSRF-токена
								$.ajax({
								url: "/send-order",
								method: "POST",
								data: {
									_token: csrfToken, // Передача CSRF-токена
									titleProduct: titleProduct,
									quantityValue: quantityValue,
									priceValue: priceValue,
									name: name,
									phone: phone,
									comment: comment
								},
								success: function(response) {
									console.log(response);
									// Действия при успешном получении ответа от сервера
								},
								error: function(xhr, status, error) {
									console.log(error);
									// Действия при возникновении ошибки
								}
								});
							}else{
								console.log(' только тильт')
								// Получение CSRF-токена из мета-тега в HTML-документе
								let csrfToken = $('meta[name="csrf-token"]').attr('content');

								// Отправка AJAX-запроса с передачей CSRF-токена
								$.ajax({
								url: "/send-order",
								method: "POST",
								data: {
									_token: csrfToken, // Передача CSRF-токена
									titleProduct: titleProduct,
									name: name,
									phone: phone,
									comment: comment
								},
								success: function(response) {
									console.log(response);
									// Действия при успешном получении ответа от сервера
								},
								error: function(xhr, status, error) {
									console.log(error);
									// Действия при возникновении ошибки
								}
								});
							}	
						}					  
				});
			}

			let testForm = document.getElementById('formTest');

			if (testForm) {
				let testFormValidation = StandardForm();
				testFormValidation.init(testForm);
				testFormValidation.onSuccess(function(e, form, validation) {
					console.log('Form submitted. form.submit() if wish to do a normal POST')
				});
			}
		});
	})();


})();
(function () {
    window.addEventListener('load', function () {
        let visitedCookie = getCookie("visited");
        let city = getCookie("city");
        console.log(city);
        
        let confirmQuest = document.querySelector('.geo_city');
        if (confirmQuest) {
            confirmQuest.querySelector('p').textContent = 'Ваш город ' + city + '?';
        }
        
        let confirmButton = document.querySelector('.js-fancybox-close');
        confirmButton.addEventListener('click', function () {
            if (!visitedCookie) {
				setCookieVisited()
            }
        });

		let otherCityButton = document.querySelector('.open-geo-select');
        otherCityButton.addEventListener('click', function () {
			 // Закрытие предыдущего модального окна
			 Fancybox.close()
			setTimeout(()=>{
				Fancybox.show([
					{
						src:  '#modalGeoSelect'
					}
				], {
					closeExisting: true,
					autoFocus: false,
					touch: false,
				});
				setCookieVisited()
				
			},500)

        });
        
        if (!visitedCookie) {
            Fancybox.show([
                {
                    src: '#modalGeoPrompt'
                },
            ], 
            {
                closeExisting: true,
                autoFocus: false,
                touch: false,
            });
        }
        
    }, false);

    function getCookie(name) {
        let matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }

	function setCookieVisited(){
		let expirationTime = new Date();
		expirationTime.setTime(expirationTime.getTime() + (5 * 3600 * 1000)); // 5 hours in milliseconds
		document.cookie = "visited=true; expires=" + expirationTime.toUTCString() + "; path=/";
	}
})();






