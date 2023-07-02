function searchForm() {
	$(document).ready(function() {
		var searchFormSelector = '.search-offer',
			searchResultsSelector = '.results-offer',
			searchClearSelector = '.clear-offer',
			searchFormOpenClass = 'search-form_results_shown',
			searchFormFilledClass = 'search-form_state_filled',
			searchResultsFilledClass = 'search-results_state_filled',
			searchResultsNoResultsClass = 'search-results_state_no-results';
  
	  	var searches = $('.search-form__input');
  
		searches.on('focus', function() {
			var search = $(this);
			search.closest(searchFormSelector).addClass(searchFormOpenClass);
		});
  
  
		searches.on('input', function() {
			var search = $(this);
			updateForm(search);
			var searchValue = search.val();
			searchRequest(searchValue);
		});
  
		$(document).on('click', searchClearSelector, function(e) {
			e.preventDefault();
			var search = $(this).closest(searchFormSelector).find('.search-form__input');
			search.val('');
			updateForm(search);
		});
  
		function updateForm(search) {
			var form = search.closest(searchFormSelector),
			results = form.find(searchResultsSelector),
			message = results.find('.search-results__message');
	
			form.toggleClass(searchFormFilledClass, !!search.val());
			results.toggleClass(searchResultsFilledClass, !!search.val());
			results.toggleClass(searchResultsNoResultsClass, search.val().length === 0);
	
			if (message) {
			message.css('display', search.val().length > 0 && !results.children().length ? 'block' : 'none');
			}
		}

		function searchRequest(query) {
			if(query == '') {
				clearResults();
			} else {
				var token = $('meta[name="csrf-token"]').attr('content');
				$.ajax({
				url: '/search-result',
				type: 'POST',
				data: {
					_token: token,
					query: query
				},
				success: function(response) {
					var searchResults = $(searchResultsSelector);
					searchResults.empty();
		
					if (response.length > 0) {
					$.each(response, function(index, result) {
						var listItem = $('<li class="search-results__item">');
						var link = $('<a href="/product-card?id=' + result.id + '" class="search-results__link">').text(result.name);
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
		}
		searches.on('blur', function() {
			var search = $(this);
		// задержка для выполнения переадрисации	
			setTimeout(function() {
				search.closest(searchFormSelector).removeClass(searchFormOpenClass);
				clearResults();
			  }, 300); 
		});
	  
		function clearResults() {
			var searchResults = $(searchResultsSelector);
			searchResults.empty();
		}
	});
}
  
searchForm();  