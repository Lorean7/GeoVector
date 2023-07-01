"use strict";

(function ($) {
  $(function () {
    if (!String.prototype.startsWith) {
      String.prototype.startsWith = function (searchString, position) {
        position = position || 0;
        return this.indexOf(searchString, position) === position;
      };
    }
    console.log('common.js is ready');
    (function bannerCarousel() {
      function initIfSlideable(swiper, carousel, slideSelector, containerSelector, inactiveClass) {
        if (!carousel || !swiper) {
          return;
        }
        var slides = carousel.querySelectorAll(slideSelector);
        if (slides.length > 1) {
          swiper.init();
        } else if (containerSelector && inactiveClass) {
          console.log(carousel);
          carousel.closest(containerSelector).classList.add(inactiveClass);
        }
        return slides.length > 1;
      }
      function renderOneBullet(swiper, index, className) {
        var slide = swiper.slides[index],
          labelText = slide.dataset['paginationLabel'] || 'Слайд №' + (index + 1);
        return '<button class="' + className + '" type="button">' + labelText + '</button>';
      }
      window.addEventListener('load', function () {
        var carouselSelector = '.js-banner-carousel',
          carouselSet = document.querySelectorAll(carouselSelector),
          myCarousel;
        if (carouselSet.length) {
          myCarousel = new Swiper(carouselSelector, {
            init: false,
            speed: 600,
            spaceBetween: 16,
            slidesPerView: 1,
            slidesPerGroup: 1,
            allowTouch: true,
            touchReleaseOnEdges: true,
            pagination: {
              el: '.bullet-pagination',
              type: 'bullets',
              clickable: true,
              bulletEl: 'button',
              modifierClass: 'bullet-pagination_',
              bulletClass: 'bullet-pagination__button',
              bulletActiveClass: 'bullet-pagination__button_state_active',
              renderBullet: function renderBullet(index, className) {
                return renderOneBullet(this, index, className);
              }
            }
          });
          if (!myCarousel.length) {
            myCarousel = [myCarousel];
          }
          var slideSelector = '.swiper-slide';
          var containerSelector = '.banner-carousel';
          var inactiveClass = 'banner-carousel_state_inactive';
          carouselSet.forEach(function (carousel, i) {
            var slideable = initIfSlideable(myCarousel[i], carousel, slideSelector, containerSelector, inactiveClass);
            if (slideable && carousel.ftSwiperNav) {
              carousel.ftSwiperNav.init();
            }
          });
        }
      });
    })();
    (function carouselNav() {
      window.addEventListener('load', function () {
        var navSelector = '.js-carousel-nav',
          navs = document.querySelectorAll(navSelector);
        if (navs.length) {
          var prevSelector = '.js-carousel-nav-prev',
            nextSelector = '.js-carousel-nav-next',
            paginationSelector = '.js-carousel-nav-pagination',
            currentSelector = '.js-carousel-nav-current',
            totalSelector = '.js-carousel-nav-total';
          window.addFTSwiperNav = function (nav) {
            var navScope = nav.dataset.navScope,
              navTarget = nav.dataset.navTarget,
              targetScope = null,
              target = null;
            if (navScope) {
              targetScope = nav.closest(navScope);
            }
            if (!targetScope) {
              targetScope = document;
            }
            if (navTarget) {
              target = targetScope.querySelector(navTarget);
            }
            if (!target) {
              target = targetScope;
            }
            if (target === document) {
              return;
            }
            var prevTrigger = nav.querySelector(prevSelector),
              nextTrigger = nav.querySelector(nextSelector),
              pagination = nav.querySelector(paginationSelector),
              current = nav.querySelector(currentSelector),
              total = nav.querySelector(totalSelector);
            target.ftSwiperNav = {
              initialized: false,
              target: target,
              swiper: null,
              nav: nav,
              triggers: {
                prev: prevTrigger,
                next: nextTrigger
              },
              pagination: {
                container: pagination,
                current: current,
                total: total
              },
              selectors: {
                nav: navSelector,
                prev: prevSelector,
                next: nextSelector,
                pagination: paginationSelector,
                current: currentSelector,
                total: totalSelector
              },
              init: function init() {
                if (!this.target.swiper || this.initialized) {
                  return;
                }
                var ftNav = this;
                ftNav.swiper = ftNav.target.swiper;
                ftNav.slidePrev = ftNav.slidePrev.bind(ftNav);
                ftNav.slideNext = ftNav.slideNext.bind(ftNav);
                if (ftNav.triggers.prev) {
                  ftNav.triggers.prev.addEventListener('click', ftNav.slidePrev);
                }
                if (ftNav.triggers.next) {
                  ftNav.triggers.next.addEventListener('click', ftNav.slideNext);
                }
                if (ftNav.triggers.prev || ftNav.triggers.next) {
                  ftNav.updateArrows();
                  ftNav.swiper.on('transitionStart', function () {
                    ftNav.updateArrows();
                  });
                }
                if (ftNav.pagination.container) {
                  ftNav.updatePagination();
                  ftNav.swiper.on('transitionStart', function () {
                    ftNav.updatePagination();
                  });
                }
                ftNav.initialized = true;
              },
              destroy: function destroy() {
                var hard = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;
                var ftNav = this;
                if (ftNav.triggers.prev) {
                  ftNav.triggers.prev.removeEventListener('click', ftNav.slidePrev);
                }
                if (ftNav.triggers.next) {
                  ftNav.triggers.next.removeEventListener('click', ftNav.slideNext);
                }
                ftNav.initialized = false;
                if (hard) {
                  delete this;
                }
              },
              slidePrev: function slidePrev() {
                this.swiper.slidePrev();
              },
              slideNext: function slideNext() {
                this.swiper.slideNext();
              },
              updateArrows: function updateArrows() {
                if (this.swiper.isBeginning) {
                  this.triggers.prev.disabled = true;
                } else {
                  this.triggers.prev.disabled = false;
                }
                if (this.swiper.isEnd) {
                  this.triggers.next.disabled = true;
                } else {
                  this.triggers.next.disabled = false;
                }
              },
              updatePagination: function updatePagination() {
                if (this.swiper.params.loop) {
                  this.pagination.current.innerText = this.swiper.realIndex + 1;
                  this.pagination.total.innerText = this.swiper.slides.length - this.swiper.loopedSlides * 2;
                } else {
                  this.pagination.current.innerText = this.swiper.snapIndex + 1;
                  this.pagination.total.innerText = this.swiper.snapGrid.length;
                }
              }
            };
            target.ftSwiperNav.init();
          };
          navs.forEach(function (nav) {
            window.addFTSwiperNav(nav);
          });
        }
      });
    })();
    (function catalog() {
      window.addEventListener('load', function () {
        var addSelector = '.js-catalog-add-trigger',
          addAllSelector = '.js-catalog-add-all',
          catalogSelector = '.catalog',
          amountSelector = '.js-catalog-cart-product-amount',
          catalogCartShownClass = 'catalog_cart-panel_shown';
        function toggleItem(trigger, affectAll) {
          var catalog = document.querySelector(catalogSelector),
            allTrigger = affectAll ? trigger : document.querySelector(addAllSelector),
            items = catalog ? catalog.querySelectorAll(addSelector) : null,
            amountEl = catalog ? catalog.querySelector(amountSelector) : null,
            totalAmount = 0;
          if (!allTrigger || !catalog || !items.length) {
            return;
          }
          if (affectAll) {
            items.forEach(function (el) {
              el.checked = trigger.checked;
            });
            totalAmount = trigger.checked ? items.length : 0;
          } else {
            items.forEach(function (el) {
              totalAmount += Number(el.checked);
            });
          }
          catalog.classList.toggle(catalogCartShownClass, totalAmount > 0);
          console.log(allTrigger);
          allTrigger.checked = totalAmount === items.length;
          if (amountEl) {
            amountEl.innerText = totalAmount;
          }
        }
        document.body.addEventListener('change', function (e) {
          var isTrigger = e.target.matches(addSelector),
            isAllTrigger = e.target.matches(addAllSelector);
          if (isTrigger) {
            toggleItem(e.target);
          } else if (isAllTrigger) {
            toggleItem(e.target, true);
          }
        });
      }, false);
    })();
    (function catalogMenu() {
      var triggerSelector = '.js-catalog-menu-trigger',
        closeTriggerSelector = '.js-catalog-menu-close',
        containerSelector = '.js-catalog-menu',
        backdropSelector = '.js-catalog-menu-backdrop',
        listSelector = '.js-catalog-menu-list',
        itemSelector = '.js-catalog-menu-item',
        submenuSelector = '.js-catalog-menu-submenu',
        itemOpenClass = 'catalog-menu__item_state_open',
        containerOpenModifier = 'page__body_floating-catalog_open';
      function listScrollHandler(e) {
        var list = e.target,
          submenus = list ? list.querySelectorAll(submenuSelector) : [];
        if (submenus.length) {
          submenus.forEach(function (el) {
            el.style.transform = "translate(0, ".concat(list.scrollTop, "px)");
          });
        }
      }
      function toggleMenu(forceToggle) {
        var list = document.querySelector(listSelector);
        if (list) {
          list.removeEventListener('scroll', listScrollHandler);
        }
        if (typeof forceToggle === 'boolean') {
          document.body.classList.toggle(containerOpenModifier, forceToggle);
        } else {
          document.body.classList.toggle(containerOpenModifier);
        }
        if (list && document.body.classList.contains(containerOpenModifier)) {
          list.addEventListener('scroll', listScrollHandler);
        }
      }
      function getSubmenuWidth(list, item) {
        var availableWidth = Number(window.getComputedStyle(list).paddingRight.replace('px', ''));
        if (item.classList.contains('catalog-menu__item_width_s')) {
          return availableWidth / 3;
        } else if (item.classList.contains('catalog-menu__item_width_m')) {
          return availableWidth * 2 / 3;
        }
        return availableWidth;
      }
      function resizeSubmenu(container, item) {
        var backdrop = container.querySelector(backdropSelector),
          list = container.querySelector(listSelector),
          submenu = item.querySelector(submenuSelector);

        // submenu.style.width = getSubmenuWidth(list, item) + 'px';
        backdrop.style.width = '';
        backdrop.style.width = item.offsetWidth + submenu.offsetWidth + 'px';
        container.style.height = '';
        container.style.height = Math.max(list.offsetHeight, submenu.offsetHeight) + 'px';
      }
      function resizeOpenSubmenu() {
        var activeItem = document.querySelector('.' + itemOpenClass),
          container = activeItem ? activeItem.closest(containerSelector) : null;
        if (!container) {
          return;
        }
        if (activeItem) {
          resizeSubmenu(container, activeItem);
        }
        if (window.outerWidth < 1025) {
          var list = container.querySelector(listSelector),
            submenus = list ? list.querySelectorAll(submenuSelector) : [];
          if (list) {
            list.removeEventListener('scroll', listScrollHandler);
          }
          if (submenus.length) {
            submenus.forEach(function (el) {
              el.style.transform = '';
            });
          }
        }
      }
      function openSubmenu(item) {
        if (item.classList.contains(itemOpenClass)) {
          return;
        }
        var container = item.closest(containerSelector),
          activeItem = container.querySelector('.' + itemOpenClass);
        item.classList.add(itemOpenClass);
        if (activeItem) {
          activeItem.classList.remove(itemOpenClass);
        }
        resizeSubmenu(container, item);
      }
      document.body.addEventListener('click', function (e) {
        var trigger = e.target.closest(triggerSelector),
          closeTrigger = e.target.closest(closeTriggerSelector),
          container = e.target.closest(containerSelector);
        if (trigger) {
          toggleMenu();
        } else if (closeTrigger || !container) {
          toggleMenu(false);
        }
        if (window.outerWidth < 1025) {
          var link = e.target.closest(itemSelector + ' > a'),
            item = e.target.closest(itemSelector);
          if (link && item) {
            // e.preventDefault();
            openSubmenu(item);
          }
        }
      });
      document.body.addEventListener('mouseover', function (e) {
        if (window.outerWidth > 1024) {
          var item = e.target.closest(itemSelector);
          if (item) {
            openSubmenu(item);
          }
        }
      });
      window.addEventListener('resize', function () {
        resizeOpenSubmenu();
      });
    })();
    (function controlledDropdown() {
      window.addEventListener('load', function () {
        function toggleDropdown(trigger) {
          var scopeId = trigger.dataset.forDropdown,
            scope = scopeId ? document.getElementById(scopeId) : trigger.closest(scopeSelector),
            triggerActiveClass = trigger.dataset.activeClass || 'active';
          scope.classList.toggle(openClass);
          trigger.classList.toggle(triggerActiveClass);
        }
        function closeAllDropdowns() {
          var openDropdowns = document.querySelectorAll('.' + openClass);
          if (openDropdowns.length) {
            openDropdowns.forEach(function (el) {
              var trigger = el.querySelector(triggerSelector + ', ' + triggerHoverSelector) || document.querySelectorAll("[data-for-dropdown=\"".concat(el.id, "\"]"));
              el.classList.remove(openClass);
              if (typeof trigger.length === 'number') {
                trigger.forEach(function (triggerItem) {
                  var triggerActiveClass = triggerItem.dataset.activeClass || 'active';
                  triggerItem.classList.remove(triggerActiveClass);
                });
              } else if (trigger) {
                var triggerActiveClass = trigger.dataset.activeClass || 'active';
                trigger.classList.remove(triggerActiveClass);
              }
            });
          }
        }
        function addMouseLeaveHandler(el) {
          el.addEventListener('mouseleave', mouseLeaveHandler);
        }
        function removeMouseLeaveHandler(el) {
          el.removeEventListener('mouseLeave', mouseLeaveHandler);
        }
        function mouseLeaveHandler(e) {
          removeMouseLeaveHandler(e.target);
          openHoverMenuExists = false;
          closeTimer = setTimeout(function () {
            closeTimer = null;
            closeAllDropdowns();
          }, 500);
        }
        var triggerSelector = '.js-controlled-dropdown-trigger',
          triggerHoverSelector = '.js-controlled-dropdown-trigger-hover',
          scopeSelector = '.controlled-dropdown',
          openClass = 'controlled-dropdown_state_open',
          closeTimer = null,
          openHoverMenuExists = false;
        document.body.addEventListener('click', function (e) {
          var trigger = e.target.closest(triggerSelector + ', ' + triggerHoverSelector);
          if (trigger) {
            e.preventDefault();
            toggleDropdown(trigger);
          } else {
            closeAllDropdowns();
          }
        });
        document.body.addEventListener('mouseover', function (e) {
          var trigger = e.target.closest(triggerHoverSelector),
            scope = e.target.closest(scopeSelector);
          if ((scope || trigger) && closeTimer) {
            clearInterval(closeTimer);
            closeTimer = null;
            openHoverMenuExists = true;
            addMouseLeaveHandler(trigger || scope);
          }
          if (trigger && !openHoverMenuExists) {
            toggleDropdown(trigger);
            addMouseLeaveHandler(trigger);
            openHoverMenuExists = true;
          }
          if (scope && !openHoverMenuExists) {
            addMouseLeaveHandler(scope);
            openHoverMenuExists = true;
          }
        });
      });
    })();

    /* eslint-disable complexity */
    (function fileInput() {
      function getElements(input, settings) {
        var result = {
          input: input
        };
        if (!settings.containerSelector) {
          return;
        }
        result.container = input.closest(settings.containerSelector);
        if (settings.labelSelector) {
          result.label = result.container.querySelector(settings.labelSelector);
        }
        if (settings.imageSelector) {
          result.image = result.container.querySelector(settings.imageSelector);
        }
        if (settings.listSelector) {
          result.list = result.container.querySelector(settings.listSelector);
        }
        if (settings.itemSelector) {
          result.inputItem = input.closest(settings.itemSelector);
        }
        if (settings.infoScopeSelector) {
          result.infoScope = input.closest(settings.infoScopeSelector);
          if (settings.titleSelector) {
            result.title = result.infoScope.querySelector(settings.titleSelector);
          }
          if (settings.noteSelector) {
            result.note = result.infoScope.querySelector(settings.noteSelector);
          }
        }
        return result;
      }
      function getDataObject(obj, input) {
        if (input) {
          return {
            elements: getElements(input, obj),
            settings: obj
          };
        }
        return obj;
      }
      function removeImageURL(image) {
        if (image) {
          var src = image.src;
          if (src && typeof src === 'string' && src.match('http')) {
            window.URL.revokeObjectURL(src);
          }
        }
      }
      function removeOverweightFiles(data) {
        var input = data.elements.input,
          files = input.files,
          maxSize = input.dataset.maxMb * 1024 * 1024,
          dataTransfer = new DataTransfer();
        for (var i = 0; i < files.length; i++) {
          if (files[i].size <= maxSize) {
            dataTransfer.items.add(files[i]);
          }
        }
        if (dataTransfer.items.length === 0) {
          data.elements.input.value = '';
          data.elements.input.cachedFiles = null;
        } else {
          data.elements.input.files = dataTransfer.files;
        }
      }
      function removeFiles(data, indexStart, indexEnd) {
        var files = data.elements.input.files,
          dataTransfer = new DataTransfer(),
          lastIndex = files.length - 1;
        if (indexStart === 'all') {
          data.elements.input.value = '';
          data.elements.input.cachedFiles = null;
        } else if (files.length) {
          if (!indexEnd || indexEnd === 0) {
            indexEnd = lastIndex;
          } else if (indexEnd === -1) {
            indexEnd = indexStart;
          }
          for (var i = 0; i < files.length; i++) {
            if (i < indexStart || i > indexEnd) {
              dataTransfer.items.add(files[i]);
            }
          }
          if (dataTransfer.items.length === 0) {
            data.elements.input.value = '';
            data.elements.input.cachedFiles = null;
          } else {
            data.elements.input.files = dataTransfer.files;
            data.elements.input.cachedFiles = dataTransfer.files;
          }
        }
      }
      function mergeNewFiles(data) {
        if (data.elements.input.cachedFiles) {
          var input = data.elements.input,
            files = input.files,
            dataTransfer = new DataTransfer();
          for (var i = 0; i < data.elements.input.cachedFiles.length; i++) {
            dataTransfer.items.add(data.elements.input.cachedFiles[i]);
          }
          for (var i = 0; i < files.length; i++) {
            dataTransfer.items.add(files[i]);
          }
          data.elements.input.files = dataTransfer.files;
        }
      }
      function removeItems(data, indexStart, indexEnd) {
        var items = data.elements.container.querySelectorAll(data.settings.itemSelector),
          lastIndex = items.length - 2,
          // -1 because 0-based, another -1 because last is input
          length = items.length;
        if (indexStart === 'all') {
          for (var i = 0; i < length - 1; i++) {
            removeImageURL(items[i].querySelector(data.settings.imageSelector));
            items[i].remove();
          }
        } else if (items.length) {
          if (!indexEnd || indexEnd === 0) {
            indexEnd = lastIndex;
          } else if (indexEnd === -1) {
            indexEnd = indexStart;
          }
          for (var i = 0; i < length; i++) {
            if (i >= indexStart && i <= indexEnd) {
              removeImageURL(items[i].querySelector(data.settings.imageSelector));
              items[i].remove();
            }
          }
        }
      }
      function addItems(data) {
        var itemTpl = data.settings.itemTemplate,
          input = data.elements.input,
          files = input.files;
        removeItems(data, 'all');
        data.elements.inputItem.remove();
        for (var i = 0; i < files.length; i++) {
          var type = files[i].type,
            item;
          if (type && type.match('video')) {
            var el = document.createElement('DIV');
            item = document.createDocumentFragment();
            el.innerHTML = data.settings.itemVideoTemplate;
            item.appendChild(el.childNodes[0]);
          } else {
            var imageSrc = window.URL.createObjectURL(files[i]);
            item = elFromString(itemTpl.replace('%src%', imageSrc));
          }
          data.elements.list.appendChild(item);
        }
        data.elements.list.appendChild(data.elements.inputItem);
      }
      function updateImage(files, data) {
        var src = window.URL.createObjectURL(files[0]);
        removeImageURL(data.elements.image);
        data.elements.image.src = src;
      }
      function updateInput(obj, input, limited) {
        var data = getDataObject(obj, input);
        if (!limited && data.elements.input.value && data.elements.input.dataset.maxMb) {
          removeOverweightFiles(data);
        }
        if (!limited && data.elements.input.value) {
          mergeNewFiles(data);
        }
        if (!limited && data.elements.input.value && data.elements.input.dataset.maxFiles) {
          var max = Number(data.elements.input.dataset.maxFiles);
          if (data.elements.input.files.length > max) {
            removeFiles(data, max);
          }
        }
        if (data.elements.input.value) {
          var files = data.elements.input.files;
          data.elements.input.cachedFiles = files;
          if (data.elements.label) {
            var labelText = files[0].name;
            if (files.length > 1) {
              labelText += data.settings.andMoreLabelText;
              labelText = labelText.replace('%num%', files.length - 1);
            }
            data.elements.label.innerText = labelText;
          }
          if (!limited && data.settings.type === 'image') {
            addItems(data);
          }
          if (!limited && data.settings.hasFilesClass) {
            data.elements.input.classList.add(data.settings.hasFilesClass);
          }
          if (data.settings.maxFilesClass && data.elements.input.dataset.maxFiles) {
            if (data.elements.input.dataset.maxFiles <= files.length) {
              data.elements.input.classList.add(data.settings.maxFilesClass);
            } else {
              data.elements.input.classList.remove(data.settings.maxFilesClass);
            }
          }
        } else {
          data.elements.input.cachedFiles = null;
          if (data.elements.label) {
            data.elements.label.innerText = data.elements.input.dataset.defaultLabel;
          }
          if (data.settings.hasFilesClass) {
            data.elements.input.classList.remove(data.settings.hasFilesClass);
          }
          if (data.elements.input.dataset.maxFiles) {
            data.elements.input.classList.remove(data.settings.maxFilesClass);
          }
        }
        if (!limited && data.settings.type === 'image-single') {
          if (data.elements.image) {
            updateImage(data.elements.input.files, data);
          }
        }
      }
      function resetInput(data) {
        removeItems(data, 'all');
        removeFiles(data, 'all');
        updateInput(data);
      }
      function resetInputFromControl(resetEl, settings) {
        var container = resetEl.closest(settings.containerSelector),
          input = container.querySelector(settings.inputSelector),
          data = getDataObject(settings, input);
        resetInput(data);
      }
      function removeFileFromControl(removeEl, settings) {
        var container = removeEl.closest(settings.containerSelector),
          input = container.querySelector(settings.inputSelector),
          removeTriggers = container.querySelectorAll(settings.removeSelector),
          removedIndex = null,
          data = getDataObject(settings, input);
        for (var i = 0; i < removeTriggers.length; i++) {
          if (removeTriggers[i] === removeEl) {
            removedIndex = i;
            break;
          }
        }
        removeItems(data, removedIndex, -1);
        removeFiles(data, removedIndex, -1);
        updateInput(data, null, true);
      }
      function getFormattedInfoText(data, template, returnEmptyIfNoMatches) {
        var result = template,
          noMatches = true;
        if (result.match('%quantity%')) {
          if (data.elements.input.dataset.maxFiles && data.settings.quantityTemplate) {
            result = result.replace('%quantity%', data.settings.quantityTemplate).replace('%num%', data.elements.input.dataset.maxFiles);
            noMatches = false;
          } else {
            result = result.replace('%quantity%', '');
          }
        }
        if (result.match('%size%')) {
          if (data.elements.input.dataset.maxMb && data.settings.sizeTemplate) {
            result = result.replace('%size%', data.settings.sizeTemplate).replace('%num%', data.elements.input.dataset.maxMb);
            noMatches = false;
          } else {
            result = result.replace('%size%', '');
          }
        }
        if (result.match('%formats%')) {
          if (data.elements.input.accept) {
            result = result.replace('%formats%', data.elements.input.accept.replace(/,/gi, ', '));
            noMatches = false;
          } else {
            result = result.replace('%formats%', '');
          }
        }
        return noMatches && returnEmptyIfNoMatches ? '' : result;
      }
      function addMeta(settings) {
        var inputs = document.querySelectorAll(settings.inputSelector);
        inputs.forEach(function (input) {
          var container = input.closest(settings.containerSelector);
          if (settings.labelSelector && !input.datasetDefaultLabel) {
            var label = container.querySelector(settings.labelSelector),
              labelText = settings.defaultLabel || label.innerText.trim();
            input.dataset.defaultLabel = labelText;
          }
          if (settings.maxFiles && !input.dataset.maxFiles) {
            input.dataset.maxFiles = settings.maxFiles;
          }
          if (settings.maxMB && !input.dataset.maxMb) {
            input.dataset.maxMb = settings.maxMB;
          }
          input.fileInputSettings = settings;
        });
      }
      function addChangeEvent(settings) {
        document.body.addEventListener('change', function (e) {
          if (e.target.matches(settings.inputSelector)) {
            updateInput(settings, e.target);
          }
        });
      }
      function addResetEvent(settings) {
        document.body.addEventListener('click', function (e) {
          var target = e.target.closest(settings.resetSelector);
          if (target) {
            resetInputFromControl(target, settings);
          }
        });
      }
      function addRemoveEvent(settings) {
        document.body.addEventListener('click', function (e) {
          var target = e.target.closest(settings.removeSelector);
          if (target) {
            removeFileFromControl(target, settings);
          }
        });
      }
      function addInfo(settings) {
        var inputs = settings.inputSelector ? document.querySelectorAll(settings.inputSelector) : [];
        if (inputs.length) {
          inputs.forEach(function (input) {
            var data = getDataObject(settings, input);
            if (data.elements.title && data.settings.titleTemplate) {
              data.elements.title.innerText = getFormattedInfoText(data, data.settings.titleTemplate);
            }
            if (data.elements.note && data.settings.noteTemplate) {
              data.elements.note.innerText = getFormattedInfoText(data, data.settings.noteTemplate, true);
            }
          });
        }
      }
      function addFileInput(settings) {
        addMeta(settings);
        addChangeEvent(settings);
        addInfo(settings);
        if (settings.resetSelector) {
          addResetEvent(settings);
        }
        if (settings.removeSelector) {
          addRemoveEvent(settings);
        }
      }
      window.resetFileInput = function (input) {
        var data = getDataObject(input.fileInputSettings, input);
        resetInput(data);
      };
      window.addEventListener('load', function () {
        addFileInput({
          type: 'simple',
          inputSelector: '.js-file-input',
          containerSelector: '.file-panel',
          labelSelector: '.file-panel__label',
          andMoreLabelText: ', и еще %num%',
          infoScopeSelector: '.file-panel',
          noteSelector: '.file-panel__note',
          noteTemplate: 'Допустимые форматы %formats%%size%',
          quantityTemplate: '(до %num% шт.)',
          sizeTemplate: ' размером до %num% Mb',
          defaultLabel: ' ',
          // priority order: data-default-label > settings.defaultLabel > labelElement.innerTest
          hasFilesClass: 'file-panel__input_state_has-files'
        });
        addFileInput({
          type: 'image-single',
          inputSelector: '.js-avatar-input',
          resetSelector: '.js-avatar-reset',
          containerSelector: '.avatar-input',
          imageSelector: '.avatar-input__image',
          hasFilesClass: 'avatar-input__input_state_has-files'
        });
        addFileInput({
          type: 'image',
          inputSelector: '.js-image-input',
          resetSelector: '.js-image-reset',
          containerSelector: '.image-input',
          listSelector: '.image-input__list',
          itemSelector: '.image-input__item',
          itemTemplate: '<div class="image-input__item">' + '    <div class="image-input__illustration">' + '        <img src="%src%" alt class="image-input__image" />' + '        <button type="button" class="image-input__remove js-image-remove">Удалить фото</button>' + '    </div>' + '</div>',
          itemVideoTemplate: '<div class="image-input__item"><div class="image-input__illustration"><svg class="image-input__video-icon" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"><rect fill="none" height="256" width="256"/><polyline fill="none" points="152 32 152 88 208 88" stroke="#FAB909" stroke-linecap="round" stroke-linejoin="round" stroke-width="8"/><path d="M176,224h24a8,8,0,0,0,8-8V88L152,32H56a8,8,0,0,0-8,8v88" fill="none" stroke="#FAB909" stroke-linecap="round" stroke-linejoin="round" stroke-width="8"/><rect fill="none" height="56" rx="8" stroke="#FAB909" stroke-linecap="round" stroke-linejoin="round" stroke-width="8" width="72" x="40" y="160"/><polyline fill="none" points="112 180 144 164 144 213.2 112 196" stroke="#FAB909" stroke-linecap="round" stroke-linejoin="round" stroke-width="8"/></svg><button type="button" class="image-input__remove js-image-remove">Удалить фото</button></div></div>',
          imageSelector: '.image-input__image',
          removeSelector: '.js-image-remove',
          hasFilesClass: 'image-input__input_state_has-files',
          maxFilesClass: 'image-input__input_state_max-files',
          maxFiles: 5,
          // fallback value, data-max-files on input has priority
          maxMB: 15,
          // fallback value, data-max-mb on input has priority
          infoScopeSelector: '.file-input',
          titleSelector: '.file-input__label',
          noteSelector: '.file-input__text',
          titleTemplate: 'Добавьте фото или/и видео %quantity%',
          noteTemplate: 'Вы можете загружать изображения и видео в формате %formats%%size%',
          quantityTemplate: '(до %num% шт.)',
          sizeTemplate: ' размером до %num% Mb'
        });
      });
    })();
    (function form() {
      window.addEventListener('load', function () {
        function visualPassword(trigger, hide) {
          if (trigger) {
            var input = trigger.closest('.form-control').querySelector('input');
            if (input) {
              var text = trigger.innerText,
                altText = trigger.dataset.textAlt;
              trigger.classList.toggle('form-control__trigger_state_active');
              if (input.type === 'password' && (typeof hide === 'undefined' || hide === true)) {
                input.type = 'text';
              } else {
                input.type = 'password';
              }
              trigger.innerText = altText;
              trigger.dataset.textAlt = text;
            }
          }
        }
        function updateSubmit(check) {
          var form = check.closest('form');
          if (form) {
            var submits = form.querySelectorAll('[type="submit"], [data-type="submit"]');
            submits.forEach(function (submit) {
              submit.disabled = !check.checked;
            });
          }
        }
        document.body.addEventListener('click', function (e) {
          var trigger = e.target.matches('.js-show-password') ? e.target : null;
          if (trigger) {
            visualPassword(trigger);
          }
        });
        document.body.addEventListener('mouseup', function (e) {
          if (!e.target.matches('.js-show-password') && e.target.closest('.js-show-password') === null) {
            var activeTriggers = document.querySelectorAll('.js-show-password.form__trigger_state_active');
            if (activeTriggers.length) {
              activeTriggers.forEach(function (item) {
                visualPassword(item, true);
              });
            }
          }
        });
        function updateTextareaHeight(textarea) {
          textarea.style.height = '';
          textarea.style.height = textarea.scrollHeight + textarea.offsetHeight - textarea.clientHeight + 'px';
        }
        window.updateFormFields = function () {
          var phoneInputs = document.getElementsByClassName('js-phone-input'),
            phoneInputsBroad = document.getElementsByClassName('js-broad-phone-input'),
            emailInputs = document.getElementsByClassName('js-email-input'),
            disablingCheckbox = document.getElementsByClassName('js-disabling-checkbox'),
            expandingTextareaSelector = '.js-expanding-textarea';
          if (phoneInputs.length) {
            [].slice.call(phoneInputs).forEach(function (el) {
              Inputmask('+7(999) 999-99-99').mask(el);
            });
          }
          if (phoneInputsBroad.length) {
            [].slice.call(phoneInputsBroad).forEach(function (el) {
              Inputmask('+9(999) 999-99-99').mask(el);
            });
          }
          if (emailInputs.length) {
            [].slice.call(emailInputs).forEach(function (el) {
              Inputmask('email').mask(el);
            });
          }
          if (disablingCheckbox.length) {
            [].slice.call(disablingCheckbox).forEach(function (el) {
              updateSubmit(el);
              el.addEventListener('change', function () {
                updateSubmit(el);
              });
            });
          }
          document.querySelectorAll(expandingTextareaSelector).forEach(function (textarea) {
            updateTextareaHeight(textarea);
          });
          document.body.addEventListener('input', function (e) {
            if (e.target.matches(expandingTextareaSelector)) {
              updateTextareaHeight(e.target);
            }
          });
        };
        window.updateFormFields();
      }, false);
    })();
    (function headerFix() {
      window.addEventListener('load', function () {
        var button1 = document.getElementById('button1');
        var button2 = document.getElementById('button2');
        var menu1 = document.getElementById('menu1');
        var menu2 = document.getElementById('menu2');
        // Функция для закрытия меню
        function closeMenus() {
          menu1.style.display = 'none';
          menu2.style.display = 'none';
        }
        // При нажатии на кнопку 1
        button1.addEventListener('click', function () {
          if (menu1.style.display === 'block') {
            closeMenus();
          } else {
            closeMenus();
            menu1.style.display = 'block';
          }
        });
        // При нажатии на кнопку 2
        button2.addEventListener('click', function () {
          if (menu2.style.display === 'block') {
            closeMenus();
          } else {
            closeMenus();
            menu2.style.display = 'block';
          }
        });

        // Закрытие меню при нажатии на другую область
        document.addEventListener('click', function (event) {
          var target = event.target;
          if (target !== button1 && target !== button2 && !menu1.contains(target) && !menu2.contains(target)) {
            closeMenus();
          }
        });
      }, false);
    })();
    (function layoutGroup() {
      window.addEventListener('load', function () {
        var triggerSelector = '.js-layout-group-trigger',
          triggerScopeSelector = '.js-layout-group',
          scopeSelector = '.catalog',
          productContainerSelector = '.product-grid',
          productSelector = '.product-snippet',
          triggerActiveClass = 'layout-group__trigger_state_active',
          productContainerListClass = 'product-grid_layout_list',
          productListClass = 'product-snippet_layout_list-item';
        function toggleList(trigger) {
          var triggerScope = trigger.closest(triggerScopeSelector),
            scope = trigger.closest(scopeSelector),
            container = scope ? scope.querySelector(productContainerSelector) : null,
            products = container ? container.querySelectorAll(productSelector) : null,
            isGrid = trigger.dataset.layout === 'grid' || trigger.attributes['aria-label'].value === 'Вид сетки';
          if (triggerScope && container && products.length) {
            var activeTrigger = triggerScope.querySelector('.' + triggerActiveClass);
            if (activeTrigger) {
              activeTrigger.classList.remove(triggerActiveClass);
            }
            trigger.classList.add(triggerActiveClass);
            container.classList.toggle(productContainerListClass, !isGrid);
            products.forEach(function (product) {
              product.classList.toggle(productListClass, !isGrid);
            });
          }
        }
        document.body.addEventListener('click', function (e) {
          var trigger = e.target.closest(triggerSelector);
          if (trigger) {
            e.preventDefault();
            toggleList(trigger);
          }
        });
      }, false);
    })();
    (function lazyload() {
      /* eslint-disable camelcase */
      window.addEventListener('load', function () {
        // eslint-disable-next-line no-unused-vars
        var lazyLoadInstance = new LazyLoad({
          elements_selector: '.lazyload',
          class_applied: 'lazyload_applied',
          class_loading: 'lazyload_loading',
          class_loaded: 'lazyload_loaded',
          class_error: 'lazyload_error',
          class_entered: 'lazyload_entered',
          class_exited: 'lazyload_exited'
        });
        /* eslint-enable camelcase */

        document.querySelectorAll('.lazyload').forEach(function (item) {
          item.addEventListener('load', function () {
            if (typeof this.dataset['data-object-fit'] === 'string' && this.dataset['ll-status'] === 'loaded') {
              objectFitPolyfill(this);
            }
          });
        });
      });
    })();
    (function linkFilter() {
      window.addEventListener('load', function () {
        var containerSelector = '.js-link-filter',
          triggerSelector = '.js-link-filter-trigger',
          openModifier = 'link-filter_state_open';
        function closeIfClickedOutside(e) {
          var target = e.target;
          if (!target.closest('.' + openModifier)) {
            var openFilters = document.querySelectorAll('.' + openModifier);
            if (openFilters.length) {
              openFilters.forEach(function (item) {
                item.classList.remove(openModifier);
              });
            }
            document.body.removeEventListener('click', closeIfClickedOutside);
          }
        }
        document.body.addEventListener('click', function (e) {
          var trigger = e.target.closest(triggerSelector),
            filter;
          if (trigger) {
            filter = trigger.closest(containerSelector);
            filter.classList.toggle(openModifier);
            if (filter.classList.contains(openModifier)) {
              document.body.addEventListener('click', closeIfClickedOutside);
            } else {
              document.body.removeEventListener('click', closeIfClickedOutside);
            }
          }
        });
      });
    })();
    (function logoCarousel() {
      window.addEventListener('load', function () {
        var carouselSelector = '.js-logo-carousel',
          carouselSet = document.querySelectorAll(carouselSelector),
          // eslint-disable-next-line no-unused-vars
          myCarousel;
        if (carouselSet.length) {
          myCarousel = new Swiper(carouselSelector, {
            lazy: {
              enabled: true,
              checkInView: true,
              loadPrevNext: true,
              loadPrevNextAmount: 6
            },
            speed: 600,
            slidesPerView: 'auto',
            slidesPerGroup: 1,
            spaceBetween: 16,
            touchReleaseOnEdges: true,
            breakpoints: {
              1281: {
                slidesPerView: 4
              }
            }
          });
          carouselSet.forEach(function (carousel) {
            if (carousel.ftSwiperNav) {
              carousel.ftSwiperNav.init();
            }
          });
        }
      });
    })();
    (function modal() {
      window.addEventListener('load', function () {
        Fancybox.bind('.js-modal', {
          closeExisting: true,
          autoFocus: false,
          touch: false,
          on: {
            done: function done() {
              if (typeof initCaptcha !== 'undefined') {
                initCaptcha();
              }
            }
          }
        });
        document.body.addEventListener('click', function (e) {
          var trigger = e.target.matches('.js-fancybox-close') ? e.target : e.target.closest('.js-fancybox-close');
          if (trigger) {
            Fancybox.close();
          }
        });
      });
    })();
    (function optionFilter() {
      window.addEventListener('load', function () {
        var containerSelector = '.js-option-filter',
          triggerSelector = '.js-option-filter-trigger',
          openModifier = 'option-filter_state_open';
        function closeIfClickedOutside(e) {
          var target = e.target;
          if (!target.closest('.' + openModifier)) {
            var openFilters = document.querySelectorAll('.' + openModifier);
            if (openFilters.length) {
              openFilters.forEach(function (item) {
                item.classList.remove(openModifier);
              });
            }
            document.body.removeEventListener('click', closeIfClickedOutside);
          }
        }
        function operateFilter(e) {
          var trigger = e.target.closest(triggerSelector);
          if (trigger) {
            toggleFilter(trigger);
          }
        }
        function toggleFilter(trigger) {
          var filter = trigger.closest(containerSelector);
          filter.classList.toggle(openModifier);
          if (filter.classList.contains(openModifier)) {
            document.body.addEventListener('click', closeIfClickedOutside);
          } else {
            document.body.removeEventListener('click', closeIfClickedOutside);
          }
        }
        window.updateOptionFilters = function () {
          document.body.removeEventListener('click', operateFilter);
          document.body.addEventListener('click', operateFilter);
        };
        window.updateOptionFilters();
      }, false);
    })();
    (function orderGroup() {
      window.addEventListener('load', function () {
        var searchSelector = '.js-order-group-search',
          scopeSelector = '.js-order-group-scope',
          groupSelector = '.js-order-group',
          itemSelector = '.js-order-group-item',
          groupEmptyModifier = 'order-group_state_empty',
          itemHiddenModifier = 'order-group__item_state_hidden',
          searches = document.querySelectorAll(searchSelector);
        function searchInputHandler(e) {
          var search = e.target,
            scope = search.closest(scopeSelector),
            group = scope ? scope.querySelector(groupSelector) : null,
            items = group ? group.querySelectorAll(itemSelector) : null;
          if (!items || !items.length) {
            return;
          }
          console.log({
            asd: search.value
          });
          if (!search.value) {
            items.forEach(function (item) {
              item.classList.remove(itemHiddenModifier);
            });
            scope.classList.remove(groupEmptyModifier);
          } else {
            var testValue = new RegExp(search.value, 'i'),
              matchedCount = 0;
            items.forEach(function (item) {
              var match = testValue.test(item.dataset.orderId);
              item.classList.toggle(itemHiddenModifier, !match);
              if (match) {
                matchedCount++;
              }
            });
            scope.classList.toggle(groupEmptyModifier, matchedCount === 0);
          }
        }
        if (searches.length) {
          searches.forEach(function (search) {
            search.addEventListener('input', searchInputHandler);
          });
        }
      }, false);
    })();
    (function logoCarousel() {
      window.addEventListener('load', function () {
        var carouselSelector = '.js-photo-carousel',
          carouselSet = document.querySelectorAll(carouselSelector),
          // eslint-disable-next-line no-unused-vars
          myCarousel;
        if (carouselSet.length) {
          myCarousel = new Swiper(carouselSelector, {
            speed: 600,
            slidesPerView: 'auto',
            slidesPerGroup: 1,
            spaceBetween: 16,
            touchReleaseOnEdges: true,
            breakpoints: {
              1281: {
                slidesPerView: 3
              }
            }
          });
          carouselSet.forEach(function (carousel) {
            if (carousel.ftSwiperNav) {
              carousel.ftSwiperNav.init();
            }
          });
        }
      });
    })();
    (function photoCarouselGroup() {
      window.addEventListener('load', function () {
        function init() {
          var mainSwiper,
            navSwiper,
            mainSwiperEl = document.querySelector('.js-photo-carousel-main'),
            navSwiperEl = document.querySelector('.js-photo-carousel-nav'),
            navSlides = document.querySelectorAll('.photo-carousel-group__nav-slide');
          if (mainSwiperEl && navSwiperEl && !navSwiperEl.swiper) {
            navSwiper = new Swiper(navSwiperEl, {
              speed: 300,
              slidesPerView: 3,
              slidesPerGroup: 1,
              spaceBetween: 31,
              normalizeSlideIndex: false,
              breakpoints: {
                768: {
                  spaceBetween: 20
                },
                1281: {
                  spaceBetween: 20
                }
              }
            });
          }
          function renderOneBullet(swiper, index, className) {
            var slide = swiper.slides[index],
              labelText = slide.dataset['paginationLabel'] || 'Слайд №' + (index + 1);
            return '<button class="' + className + '" type="button">' + labelText + '</button>';
          }
          if (navSwiper) {
            mainSwiper = new Swiper(mainSwiperEl, {
              speed: 300,
              slidesPerView: 1,
              slidesPerGroup: 1,
              allowTouch: true,
              thumbs: {
                swiper: navSwiper,
                slideThumbActiveClass: 'photo-carousel-group__nav-slide_state_active'
              },
              pagination: {
                el: '.bullet-pagination',
                type: 'bullets',
                clickable: true,
                bulletEl: 'button',
                modifierClass: 'bullet-pagination_',
                bulletClass: 'bullet-pagination__button',
                bulletActiveClass: 'bullet-pagination__button_state_active',
                renderBullet: function renderBullet(index, className) {
                  return renderOneBullet(this, index, className);
                }
              },
              on: {
                init: function init() {
                  this.update();
                }
              }
            });
            if (mainSwiper) {
              if (mainSwiperEl.ftSwiperNav) {
                mainSwiperEl.ftSwiperNav.init();
              } else {
                var scope = mainSwiperEl.parentElement,
                  nav = scope.querySelector('.js-carousel-nav');
                if (nav) {
                  window.addFTSwiperNav(nav);
                }
              }
            }
            if (navSlides.length) {
              navSlides.forEach(function (slide) {
                slide.addEventListener('click', function () {
                  var slider = slide.closest('.swiper'),
                    slides = slider.querySelectorAll('.swiper-slide'),
                    index = 0;
                  slides.forEach(function (testSlide, i) {
                    if (testSlide === slide) {
                      index = i;
                    }
                  });
                  mainSwiper.slideTo(index);
                });
                var img = slide.querySelector('img');
                if (img) {
                  img.addEventListener('load', function () {
                    mainSwiper.update();
                  });
                }
              });
            }
          }
        }
        init();
        if (typeof BX !== 'undefined') {
          BX.addCustomEvent('onAjaxSuccess', function () {
            init();
          });
        }
      }, false);
    })();
    (function productCarousel() {
      window.addEventListener('load', function () {
        function init() {
          var carouselSelector = '.js-product-carousel',
            carouselSet = document.querySelectorAll(carouselSelector),
            // eslint-disable-next-line no-unused-vars
            myCarousel;
          if (carouselSet.length && !carouselSet[0].swiper) {
            myCarousel = new Swiper(carouselSelector, {
              lazy: {
                enabled: true,
                checkInView: true,
                loadPrevNext: true,
                loadPrevNextAmount: 6
              },
              speed: 600,
              spaceBetween: 24,
              slidesPerView: 1,
              slidesPerGroup: 1,
              touchReleaseOnEdges: true,
              breakpoints: {
                620: {
                  slidesPerGroup: 1,
                  slidesPerView: 2
                },
                1025: {
                  slidesPerGroup: 1,
                  slidesPerView: 3
                },
                1281: {
                  slidesPerGroup: 1,
                  slidesPerView: 4
                }
              }
            });
            carouselSet.forEach(function (carousel) {
              if (carousel.ftSwiperNav) {
                carousel.ftSwiperNav.init();
              }
            });
          }
        }
        init();
      });
    })();
    (function promoGroup() {
      window.addEventListener('load', function () {
        if (window.ftDestroyableSwiper) {
          // selector, destruction breakpoint, destroy above breakpoint (inclusive), swiper rules
          window.ftDestroyableSwiper.add('.js-promo-group-carousel', 1025, true, {
            wrapperClass: 'promo-group__wrapper',
            slideClass: 'promo-group__item',
            slideActiveClass: 'promo-group__item_state_active',
            speed: 600,
            slidesPerView: 'auto',
            slidesPerGroup: 1,
            spaceBetween: 10,
            breakpoints: {
              375: {
                spaceBetween: 19
              }
            }
          });
        }
      });
    })();
    (function quantityInput() {
      window.addEventListener('load', function () {
        function init() {
          var containerSelector = '.js-quantity-container',
            inputSelector = '.js-quantity-input',
            decreaseSelector = '.js-quantity-decrease',
            increaseSelector = '.js-quantity-increase',
            inputs = document.querySelectorAll(inputSelector),
            triggers = document.querySelectorAll('.js-quantity-decrease, .js-quantity-increase');
          function decrease(container, input, cur, min, max) {
            var dec = container.querySelector(decreaseSelector),
              inc = container.querySelector(increaseSelector),
              ratio = Number(input.dataset.ratio) || 1,
              newValue = cur - ratio;
            input.value = newValue;
            input.dataset.lastVal = newValue;
            if (cur === max) {
              inc.disabled = false;
            } else if (newValue === min) {
              dec.disabled = true;
            }
          }
          function increase(container, input, cur, min, max) {
            var dec = container.querySelector(decreaseSelector),
              inc = container.querySelector(increaseSelector),
              ratio = Number(input.dataset.ratio) || 1,
              newValue = cur + ratio;
            input.value = newValue;
            input.dataset.lastVal = newValue;
            if (newValue === max) {
              inc.disabled = true;
            } else if (cur === min) {
              dec.disabled = false;
            }
          }
          function update(input) {
            var container = input.closest(containerSelector),
              dec = container.querySelector(decreaseSelector),
              inc = container.querySelector(increaseSelector),
              cur = Number(input.value),
              min = Number(input.dataset.min),
              max = Number(input.dataset.max),
              last = Number(input.dataset.lastVal) || 0;
            if (Number.isNaN(cur)) {
              cur = last;
            }
            if (Number.isNaN(min)) {
              min = 0;
            }
            if (Number.isNaN(max)) {
              max = 99;
            }
            if (cur <= min) {
              cur = min;
              dec.disabled = true;
            } else if (cur >= max) {
              cur = max;
              inc.disabled = true;
            }
            input.value = cur;
            input.dataset.lastVal = cur;
            if (cur > min && dec.disabled) {
              dec.disabled = false;
            } else if (cur < max && inc.disabled) {
              inc.disabled = false;
            }
          }
          triggers.forEach(function (trigger) {
            if (!trigger.quantityTriggerInit) {
              trigger.quantityTriggerInit = true;
              trigger.addEventListener('click', function () {
                var container = trigger.closest(containerSelector),
                  input = container.querySelector(inputSelector),
                  cur = Number(input.value),
                  min = Number(input.dataset.min),
                  max = Number(input.dataset.max);
                if (Number.isNaN(min)) {
                  min = 0;
                }
                if (Number.isNaN(max)) {
                  max = 99;
                }
                if (trigger.matches(decreaseSelector) && cur !== min) {
                  decrease(container, input, cur, min, max);
                } else if (trigger.matches(increaseSelector) && cur !== max) {
                  increase(container, input, cur, min, max);
                }
                if ('createEvent' in document) {
                  var evt = document.createEvent('HTMLEvents');
                  evt.initEvent('change', true, true);
                  input.dispatchEvent(evt);
                } else {
                  input.fireEvent('onchange');
                }
              });
            }
          });
          inputs.forEach(function (input) {
            if (!input.quantityInputInit) {
              input.quantityInputInit = true;
              update(input);
              input.addEventListener('change', function () {
                update(input);
              });
            }
          });
        }
        init();
        if (typeof BX !== 'undefined') {
          BX.addCustomEvent('onAjaxSuccess', function () {
            init();
          });
        }
      });
    })();
    (function tabs() {
      window.addEventListener('load', function () {
        function changeTab(tabsBlocks, triggers, panels, activeIndex) {
          if (tabsBlocks && triggers.length && panels.length) {
            var activeTrigger = triggers.item(activeIndex);
            triggers.forEach(function (item) {
              item.classList.remove('tabs__label_state_active');
            });
            activeTrigger.classList.add('tabs__label_state_active');
            panels.forEach(function (item) {
              item.classList.remove('tabs__panel_state_active');
            });
            panels.item(activeIndex).classList.add('tabs__panel_state_active');
            if (activeTrigger.dataset.hrefSwitch) {
              var href = activeTrigger.dataset.hrefSwitch,
                id = activeTrigger.dataset.hrefSwitchTarget,
                targets = document.body.querySelectorAll('[data-href-switch-id="' + id + '"]');
              if (targets.length) {
                targets.forEach(function (target) {
                  if (target.attributes.href) {
                    target.attributes.href.value = href;
                  }
                });
              }
            }
          }
        }
        function getActiveIndex(tabsBlocks, triggers, currentTrigger) {
          var activeIndex = 0;
          triggers.forEach(function (item, i) {
            if (item === currentTrigger) {
              activeIndex = i;
            }
          });
          return activeIndex;
        }
        var containerSelector = '.js-tabs',
          triggerSelector = '.js-tabs-trigger',
          panelSelector = '.js-tabs-panel',
          panelHiddenClass = 'tabs__panel_state_hidden',
          panelActiveClass = 'tabs__label_state_active',
          tabsBlocks = document.querySelectorAll(containerSelector);
        if (tabsBlocks.length) {
          tabsBlocks.forEach(function (tabSet) {
            var triggers = tabSet.querySelectorAll(triggerSelector);
            var panels = tabSet.querySelectorAll(panelSelector);
            var currentTrigger;
            var activeIndex = 0;
            if (!triggers.length) {
              return;
            }
            if (!panels.length) {
              var targetQuery = tabSet.dataset.tabsFor,
                target = targetQuery ? document.querySelector(targetQuery) : null;
              if (target) {
                panels = target.querySelectorAll(panelSelector);
              }
              if (!panels.length) {
                return;
              }
            }
            triggers.forEach(function (item) {
              if (item.matches('.' + panelActiveClass)) {
                currentTrigger = item;
              }
            });
            if (currentTrigger) {
              activeIndex = getActiveIndex(tabSet, triggers, currentTrigger);
            }
            panels.forEach(function (item) {
              item.classList.add(panelHiddenClass);
            });
            changeTab(tabSet, triggers, panels, activeIndex);
            triggers.forEach(function (item) {
              item.addEventListener('click', function (e) {
                e.preventDefault();
                activeIndex = getActiveIndex(tabSet, triggers, this);
                changeTab(tabSet, triggers, panels, activeIndex);
                return false;
              });
            });
          });
        }
      }, false);
    })();
  });
})(jQuery);