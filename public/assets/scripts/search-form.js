function searchForm() {
	$(document).ready(function () {
		var searchSelector = '#product-js',
			searchFormSelector = '#form-product',
			searchResultsSelector = '#result-product',
			searchClearSelector = '#clear-product',
			searchFormOpenClass = 'search-form_results_shown',
			searchFormFilledClass = 'search-form_state_filled',
			searchResultsFilledClass = 'search-results_state_filled',
			searchResultsNoResultsClass = 'search-results_state_no-results';

		var searches = $(searchSelector);

		function searchFocusHandler() {
			const search = $(this);
			const form = search.closest(searchFormSelector);

			form.addClass(searchFormOpenClass);
		}

		function searchBlurHandler() {
			const search = $(this);
			const form = search.closest(searchFormSelector);
		}

		function updateForm(search) {
			var form = search.closest(searchFormSelector),
				results = form.find(searchResultsSelector),
				message = results.find('#result-message-product');

			form.toggleClass(searchFormFilledClass, !!search.val());
			results.toggleClass(searchResultsFilledClass, !!search.val());
			results.toggleClass(searchResultsNoResultsClass, search.val().length === 0);

			if (message) {
				message.css('display', search.val().length > 0 && !results.children().length ? 'block' : 'none');
			}
		}

		$(document).on('input', '#product-js', function () {
			var searchValue = $(this).val();
			search(searchValue);
		});

		function search(query) {
			var token = $('meta[name="csrf-token"]').attr('content');
			$.ajax({
				url: '/search-result',
				type: 'POST',
				data: {
					_token: token,
					query: query
				},
				success: function (response) {
					if (typeof (response) == "string") {
						response = JSON.parse(response)
					}

					var searchResults = $('#result-product');
					searchResults.empty();

					if (response.length > 0) {
						$.each(response, function (index, result) {
							var listItem = $('<li class="search-results__item">');
							var link = $(`<a href="/product-card?id=${result.id}" class="search-results__link">`).text(result.name);
							listItem.append(link);
							searchResults.append(listItem);
						});
					}

					var message = $('#result-message-product');
					if (response.length === 0) {
						message.css('display', response.length === 0 ? 'block' : 'none');
					}
				}
			});
		}

		function searchInputHandler() {
			var search = $(this);
			updateForm(search);
		}

		function clearClickHandler(e) {
			var form = $(this).closest(searchFormSelector),
				search = form.find('#product-js');

			search.val('');
			updateForm(search);
		}

		searches.on('focus', searchFocusHandler);
		searches.on('blur', searchBlurHandler);
		searches.on('input', searchInputHandler);
		$(document).on('click', searchClearSelector, clearClickHandler);
	});
}

searchForm();
