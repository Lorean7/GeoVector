(function () {
	'use strict';
	console.log('custom.js is ready');

	(function validation() {
		window.addEventListener('load', function () {
			var checkoutForm = document.getElementById('formCheckout');

			if (checkoutForm) {
				var checkoutFormValidation = StandardForm();
				checkoutFormValidation.init(checkoutForm);
				checkoutFormValidation.onSuccess(function(e, form, validation) {
					console.log('Form submitted. form.submit() if wish to do a normal POST')
				});
			}

			var loginForm = document.getElementById('formLogin');

			if (loginForm) {
				var loginFormValidation = StandardForm();
				loginFormValidation.init(loginForm);
				loginFormValidation.onSuccess(function(e, form, validation) {
					console.log('Form submitted. form.submit() if wish to do a normal POST')
				});
			}

			var registerForm = document.getElementById('formRegister');

			if (registerForm) {
				var registerFormValidation = StandardForm();
				registerFormValidation.init(registerForm);
				registerFormValidation.onSuccess(function(e, form, validation) {
					console.log('Form submitted. form.submit() if wish to do a normal POST')
				});
			}

			var restoreForm = document.getElementById('formRestore');

			if (restoreForm) {
				var restoreFormValidation = StandardForm();
				restoreFormValidation.init(restoreForm);
				restoreFormValidation.onSuccess(function(e, form, validation) {
					console.log('Form submitted. form.submit() if wish to do a normal POST')
				});
			}

			var codeForm = document.getElementById('formRestoreCode');

			if (codeForm) {
				var codeFormValidation = StandardForm();
				codeFormValidation.init(codeForm);
				codeFormValidation.onSuccess(function(e, form, validation) {
					console.log('Form submitted. form.submit() if wish to do a normal POST');

					var container = form.closest('.content-panel');
					if (container) {
						container.classList.add('content-panel_state_result');
					}
				});
			}

			var partnershipForm = document.getElementById('formPartnership');

			if (partnershipForm) {
				var partnershipFormValidation = StandardForm();
				partnershipFormValidation.init(partnershipForm);
				partnershipFormValidation.onSuccess(function(e, form, validation) {
					console.log('Form submitted. form.submit() if wish to do a normal POST')
				});
			}

			var questionForm = document.getElementById('formQuestion');

			if (questionForm) {
				var questionFormValidation = StandardForm();
				questionFormValidation.init(questionForm);
				questionFormValidation.onSuccess(function(e, form, validation) {
					console.log('Form submitted. form.submit() if wish to do a normal POST')
				});
			}

			var personalForm = document.getElementById('formPersonal');

			if (personalForm) {
				var personalFormValidation = StandardForm();
				personalFormValidation.init(personalForm);
				personalFormValidation.onSuccess(function(e, form, validation) {
					console.log('Form submitted. form.submit() if wish to do a normal POST')
				});
			}

			var orderForm = document.getElementById('formOrder');

			if (orderForm) {
				var orderFormValidation = StandardForm();
				orderFormValidation.init(orderForm);
				orderFormValidation.onSuccess(function(e, form, validation) {
					console.log('Form submitted. form.submit() if wish to do a normal POST')
				});
			}

			var testForm = document.getElementById('formTest');

			if (testForm) {
				var testFormValidation = StandardForm();
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
        var visitedCookie = getCookie("visited");
        var city = getCookie("city");
        console.log(city);
        
        var confirmQuest = document.querySelector('.geo_city');
        if (confirmQuest) {
            confirmQuest.querySelector('p').textContent = 'Ваш город ' + city + '?';
        }
        
        var confirmButton = document.querySelector('.js-fancybox-close');
        confirmButton.addEventListener('click', function () {
            if (!visitedCookie) {
                var expirationTime = new Date();
                expirationTime.setTime(expirationTime.getTime() + (5 * 3600 * 1000)); // 5 hours in milliseconds
                document.cookie = "visited=true; expires=" + expirationTime.toUTCString() + "; path=/";
            }
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
                on: {
                    destroy: function (fancybox, slide) {
                        var showSelectTrigger = fancybox.opts.$orig;
                        if (showSelectTrigger) {
                            Fancybox.show([
                                {
                                    src: showSelectTrigger.attr('href') || '#modalGeoSelect'
                                }
                            ], {
                                closeExisting: true,
                                autoFocus: false,
                                touch: false,
                                trapFocus: false
                            });
                        }
                    }
                }
            });
        }
        
        document.body.addEventListener('click', function (e) {
            var trigger = e.target.closest('.js-geo-select-modal');
            if (trigger) {
                Fancybox.getInstance().close();
            }
        });
    }, false);

    function getCookie(name) {
        var matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }
})();






