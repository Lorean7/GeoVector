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




	// (function profileEventHandlers() {
	// 	window.addEventListener('load', function () {
	// 		var profile = document.querySelector('.js-profile-scope');
	// 		if (profile) {
	// 			document.body.addEventListener('profile:address:open', function (e) {
	// 				console.log('address open');
	// 				console.log(e.data);
	// 			});

	// 			document.body.addEventListener('profile:address:close', function (e) {
	// 				console.log('address close');
	// 				console.log(e.data);
	// 			});

	// 			document.body.addEventListener('profile:panel:open', function (e) {
	// 				console.log('panel open');
	// 				console.log(e.data);
	// 			});

	// 			document.body.addEventListener('profile:panel:close', function (e) {
	// 				console.log('panel close');
	// 				console.log(e.data);
	// 			});

	// 			document.body.addEventListener('profile:address:remove', function (e) {
	// 				console.log('address remove');
	// 				console.log(e.data);
	// 			});

	// 			document.body.addEventListener('profile:panel:remove', function (e) {
	// 				console.log('panel remove');
	// 				console.log(e.data);
	// 			});

	// 			document.body.addEventListener('profile:address:add', function (e) {
	// 				console.log('address add');
	// 				console.log(e.data);
	// 			});

	// 			document.body.addEventListener('profile:panel:add', function (e) {
	// 				console.log('panel add');
	// 				console.log(e.data);
	// 			});

	// 			document.body.addEventListener('profile:address:updateName', function (e) {
	// 				console.log('address updateName');
	// 				console.log(e.data);
	// 			});

	// 			document.body.addEventListener('profile:panel:updateName', function (e) {
	// 				console.log('panel updateName');
	// 				console.log(e.data);
	// 			});

	// 			document.body.addEventListener('profile:address:submitSuccess', function (e) {
	// 				console.log('address submitSuccess');
	// 				console.log(e.data);
	// 			});

	// 			document.body.addEventListener('profile:panel:submitSuccess', function (e) {
	// 				console.log('panel submitSuccess');
	// 				console.log(e.data);
	// 			});

	// 			document.body.addEventListener('profile:address:submitFail', function (e) {
	// 				console.log('address submitFail');
	// 				console.log(e.data);
	// 			});

	// 			document.body.addEventListener('profile:panel:submitFail', function (e) {
	// 				console.log('panel submitFail');
	// 				console.log(e.data);
	// 			});

	// 			const validateForm = function (form, onSuccess, onFail) {
	// 				var formValidation = StandardForm();

	// 				formValidation.init(form);

	// 				if (onSuccess) {
	// 					formValidation.onSuccess(onSuccess);
	// 				}

	// 				if (onFail) {
	// 					formValidation.onFail(onFail);
	// 				}
	// 			}

	// 			const validateFormGroup = function (selector, onSuccess, onFail) {
	// 				var forms = document.querySelectorAll(selector);

	// 				if (forms.length) {
	// 					forms.forEach(function(form) {
	// 						validateForm(form, onSuccess, onFail);
	// 					});
	// 				}
	// 			}

	// 			const validateProfile = function () {
	// 				validateFormGroup(
	// 					'.js-profile-panel-address-form',
	// 					function (e, form, validation) {
	// 						console.log('validation address sent');
	// 					},
	// 					null // onFail()
	// 				);

	// 				validateFormGroup(
	// 					'.js-profile-panel-form',
	// 					function (e, form, validation) {
	// 						console.log('validation panel sent');
	// 					},
	// 					null // onFail()
	// 				);
	// 			}

	// 			validateProfile();

	// 			document.body.addEventListener('profile:address:add', function (e) {
	// 				var form = e.data.itemScope.querySelector('.js-profile-panel-address-form');

	// 				validateForm(
	// 					form,
	// 					function (e, form, validation) {
	// 						console.log('validation address sent');
	// 					},
	// 					null // onFail()
	// 				);
	// 			});

	// 			document.body.addEventListener('profile:panel:add', function (e) {
	// 				var form = e.data.itemScope.querySelector('.js-profile-panel-form');

	// 				validateForm(
	// 					form,
	// 					function (e, form, validation) {
	// 						console.log('validation panel sent');
	// 					},
	// 					null // onFail()
	// 				);
	// 			});
	// 		}
	// 	}, false);

	// 	window.profileAccordionStatuses = [];
	// 	window.profileAccordionsSave = function () {
	// 		var profile = document.querySelector('.js-profile-scope');

	// 		if (profile) {
	// 			var container = profile.querySelector('.js-profile-panel-list'),
	// 				accordions = container ? container.querySelectorAll('.js-profile-panel') : [],
	// 				result = [];

	// 			accordions.forEach(function(el, i) {
	// 				result.push(Number(el.classList.contains(el.dataset.openModifier)));
	// 			});

	// 			window.profileAccordionStatuses = result;
	// 		}
	// 	}
	// 	window.profileAccordionsApply = function () {
	// 		var profile = document.querySelector('.js-profile-scope');

	// 		if (profile) {
	// 			var container = profile.querySelector('.js-profile-scope'),
	// 				accordions = container ? container.querySelectorAll('.js-profile-panel') : [];

	// 			accordions.forEach(function(el, i) {
	// 				if (window.profileAccordionStatuses[i] === 0) {
	// 					el.classList.remove(el.dataset.openModifier);
	// 				} else if (window.profileAccordionStatuses[i] === 1) {
	// 					el.classList.add(el.dataset.openModifier);
	// 				}
	// 			});
	// 		}
	// 	}
	// })();
})();