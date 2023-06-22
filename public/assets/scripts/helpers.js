(function () {
	$(function () {
		'use strict';
		console.log('helpers.js is ready');



		(function frozenScroll() {
			var testEl = document.createElement('DIV');
			testEl.style.overflowY = 'scroll';
			testEl.style.height = '10px';
			document.body.appendChild(testEl);

			var styleTag = document.createElement('STYLE'),
				scrollWidth = testEl.offsetWidth - testEl.clientWidth;

			styleTag.innerText = `.frozen-scroll {\n\tmargin-right: ${scrollWidth}px\n}`;
			document.head.append(styleTag);
			testEl.remove();
		})();



		(function toggle() {
			function parseAtribute(str) {
				if (typeof str === 'undefined') {
					return null;
				}

				if (str) {
					var arrayItems = str.split(',');
					var clearArrayItems = arrayItems.map(function (classString) {
						return classString.trim();
					});

					return clearArrayItems;
				}
			}

			var triggerSelector = '.js-toggle';

			$('body').on('click', triggerSelector, function () {
				var toggleScope = $(this).data('toggleScope'),
					toggleTarget = $(this).data('toggleTarget'),
					toggleClass = $(this).data('toggleClass'),
					scopeList = false,
					targetList = false,
					classList = false,
					trigger = this;

				// Scoped and targeted
				if (toggleScope && toggleTarget && toggleClass) {
					scopeList = parseAtribute(toggleScope);
					targetList = parseAtribute(toggleTarget);
					classList = parseAtribute(toggleClass);

					if (scopeList.length && targetList.length && classList.length) {
						targetList.forEach(function (item, i) {
							if (typeof classList[i] !== 'undefined') {
								$(trigger).closest(scopeList[i]).find(targetList[i]).toggleClass(classList[i]);
							}
						});
					}
				// Targeted at parent
				} else if (toggleScope && toggleClass) {
					scopeList = parseAtribute(toggleScope);
					classList = parseAtribute(toggleClass);

					if (scopeList.length && classList.length) {
						scopeList.forEach(function (item, i) {
							if (typeof classList[i] !== 'undefined') {
								$(trigger).closest(scopeList[i]).toggleClass(classList[i]);
							}
						});
					}
				// Not scoped
				} else if (toggleTarget && toggleClass) {
					targetList = parseAtribute(toggleTarget);
					classList = parseAtribute(toggleClass);

					if (targetList.length && classList.length) {
						targetList.forEach(function (item, i) {
							if (typeof classList[i] !== 'undefined') {
								$(targetList[i]).toggleClass(classList[i]);
							}
						});
					}
				}

				return false;
			});
		})();



		(function extend() {
			var targets = document.querySelectorAll('.js-extend-left, .js-extend-right');

			function update() {
				var sizer = document.querySelector('.page__sizer');
				targets.forEach(function (item) {
					var margin = -Math.floor(sizer.getBoundingClientRect().x) - Number(window.getComputedStyle(sizer).paddingLeft.replace('px', ''));

					if (item.className.match('js-extend-left')) {
						item.style.setProperty('margin-left', margin + 'px');
					}
					if (item.className.match('js-extend-right')) {
						item.style.setProperty('margin-right', margin + 'px');
					}
				});
			}

			update();
			window.addEventListener('resize', function () {
				update();
			});
		})();



		(function destroyableSwiper() {
			window.ftDestroyableSwiper = {
				list: [],
				add: function(selector, breakpoint, destroyAboveBreakpoint, rules) {
					this.list.push({
						rules,
						selector,
						breakpoint,
						destroyAboveBreakpoint,
						carouselArray: []
					});
					this.update(true);
				},
				update: function(onlyLatest = false) {
					var windowWidth = window.innerWidth;

					if (onlyLatest) {
						this.updateSpecific(this.list[this.list.length - 1], windowWidth);
					} else {
						for (var i = 0; i < this.list.length; i++) {
							this.updateSpecific(this.list[i], windowWidth);
						}
					}
				},
				updateSpecific: function(item, ww) {
					var carouselSet = document.querySelectorAll(item.selector),
						// check if window has appropriate with to destroy the carousel based on the breakpoint
						isInDestroyRange = (item.destroyAboveBreakpoint && ww >= item.breakpoint) || (!item.destroyAboveBreakpoint && ww <= item.breakpoint),
						// if there are no carousels in array, that means they are already uninitialized
						// this also works for the first time init
						canBeDestroyed = item.carouselArray.length > 0;

					// If in destroy range and have active carousels, destroy them completely through native
					// Swiper method and destroy from custom nav controls, if there are such controls.
					// Also reset the carousel array, so it doesn't constantly attempt to destroy stuff
					// while in range.
					if (isInDestroyRange && canBeDestroyed) {
						for (var i = 0; i < item.carouselArray.length; i++) {
							item.carouselArray[i].destroy(true, true);
							if (carouselSet[i].ftSwiperNav) {
								carouselSet[i].ftSwiperNav.destroy();
							}
						}
						item.carouselArray = [];
					// if not in destroy range and don't have initialized carousels, init
					// these carousels anew with their rules, as well as custom controls
					} else if (!isInDestroyRange && !canBeDestroyed) {
						carouselSet.forEach(function (carouselEl) {
							var localCarousel = new Swiper(carouselEl, item.rules);
							item.carouselArray.push(localCarousel);
							if (carouselEl.ftSwiperNav) {
								carouselEl.ftSwiperNav.init();
							}
						});
					}

				}
			};

			window.addEventListener('resize', function () {
				window.ftDestroyableSwiper.update();
			});
		})();



	});
})();
