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
        var showSelectTrigger = false;

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
                    if (showSelectTrigger) {
                        Fancybox.show([
                            {
                                src: showSelectTrigger.attributes.href ? showSelectTrigger.attributes.href.value : '#modalGeoSelect'
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

        document.body.addEventListener('click', function (e) {
            var trigger = e.target.closest('.js-geo-select-modal');
            if (trigger) {
                showSelectTrigger = trigger;
                Fancybox.getInstance().close();
            }
        });
    }, false);
})();