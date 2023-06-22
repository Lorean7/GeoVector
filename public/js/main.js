/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
function _readOnlyError(name) { throw new TypeError("\"" + name + "\" is read-only"); }
function _defineProperty(obj, key, value) { key = _toPropertyKey(key); if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }
(function () {
  "use strict";

  /*------------------------------------------------------------------
  
    01. Custom easings
  
  -------------------------------------------------------------------*/

  // GSAP: turn off console warnings
  gsap.config({
    nullTargetWarn: false
  });
  window.App = {};
  App.config = {
    headroom: {
      enabled: true,
      options: {
        classes: {
          initial: "headroom",
          pinned: "is-pinned",
          unpinned: "is-unpinned",
          top: "is-top",
          notTop: "is-not-top",
          bottom: "is-bottom",
          notBottom: "is-not-bottom",
          frozen: "is-frozen"
        }
      }
    },
    ajax: {
      enabled: true
    },
    cursorFollower: {
      enabled: false,
      disableBreakpoint: '992' // cursor will be disabled on this device width
    }
  };

  App.html = document.querySelector('html');
  App.body = document.querySelector('body');
  App.SMcontroller = new ScrollMagic.Controller();
  window.onload = function () {
    customEasingsInit();
    Preloader.init();
    document.fonts.ready.then(function () {
      initComponents();
      initialReveal();
    });
  };

  // Reloads all scripts when navigating through pages
  function initComponents() {
    lazyLoading();
    Header.init();
    Accordion.init();
    ShowMore.init();
    Tabs.init();
    SectionSlider();
    feather.replace();
    countDown();
    headerSticky();
    dropDown();
    shopSlider();
    inputCounter();
    mapInit();
    lineChart();
    pieChart();
    clickElToggle();
    fullScreenModeToggle();
    parallaxIt();
    mainSlider1();
    parallaxInit();
    testimonialsSlider();
    testimonialsSlider2();
    home1MastheadParticles();
    pinOnScroll();
    scrollToIdInit();
    customSelect();
    hideSidebar();
    darkModeSwitch();
    calendarDate();
    dashboardSidebarSwitch();
    detectWidthForSidebar();
    galleryInit();
    Select.init(".js-select");
    priceRangeSliderInit();

    //
    // your custom plugins init here
    //
  }

  function priceRangeSliderInit() {
    var targets = document.querySelectorAll('.js-price-rangeSlider');
    targets.forEach(function (el) {
      var slider = el.querySelector('.js-slider');
      noUiSlider.create(slider, {
        start: [0, 500],
        step: 100,
        connect: true,
        range: {
          'min': 0,
          'max': 2000
        },
        format: {
          to: function to(value) {
            return "$" + value;
          },
          from: function from(value) {
            return value;
          }
        }
      });
      var snapValues = [el.querySelector('.js-lower'), el.querySelector('.js-upper')];
      slider.noUiSlider.on('update', function (values, handle) {
        snapValues[handle].innerHTML = values[handle];
      });
    });
  }
  function customSelect() {}
  function detectWidthForSidebar() {
    if (!document.querySelector('.js-dashboard-home-9')) return;
    var check = function check() {
      var width = window.innerWidth > 0 ? window.innerWidth : screen.width;
      if (width < 992) document.querySelector('.js-dashboard-home-9').classList.add('-is-sidebar-hidden');else document.querySelector('.js-dashboard-home-9').classList.remove('-is-sidebar-hidden');
    };
    check();
    window.addEventListener('resize', function () {
      return check();
    });
  }
  function dashboardSidebarSwitch() {
    var target = document.querySelector('.js-dsbh-sidebar-menu');
    if (!target) return;
    var buttons = target.querySelectorAll('[data-sidebar-menu-target]');
    buttons.forEach(function (el) {
      el.addEventListener('click', function () {
        var attr = el.getAttribute('data-sidebar-menu-target');
        var openMenu = target.querySelector("[data-sidebar-menu-open=\"".concat(attr, "\"]"));
        var openedMenu = target.querySelector('.-sidebar-menu-opened');
        openedMenu.classList.remove('-sidebar-menu-opened');
        openMenu.classList.add('-sidebar-menu-opened');
        var openButton = target.querySelector("[data-sidebar-menu-button=\"".concat(attr, "\"]"));
        var openedButton = target.querySelector('.-is-button-active');
        openedButton.classList.remove('-is-button-active');
        openButton.classList.add('-is-button-active');
      });
    });
  }
  function calendarDate() {
    var target = document.querySelector('.js-sidebar-calendar');
    if (!target) return;
    var buttons = target.querySelectorAll('.js-button');
    buttons.forEach(function (el) {
      el.addEventListener('click', function () {
        var activeButton = target.querySelector('.-is-active');
        activeButton.classList.remove('-is-active');
        el.classList.add('-is-active');
      });
    });
  }
  function darkModeSwitch() {
    var button = document.querySelector('.js-darkmode-toggle');
    if (!button) return;
    button.addEventListener('click', function () {
      return App.html.classList.toggle('-dark-mode');
    });
  }
  function hideSidebar() {
    var target = document.querySelector('.js-dashboard-home-9-sidebar-toggle');
    if (!target) return;
    var content = document.querySelector('.js-dashboard-home-9');
    target.addEventListener('click', function () {
      content.classList.toggle('-is-sidebar-hidden');
    });
  }
  function pinOnScroll() {
    var target = document.querySelectorAll('.js-pin-container');
    if (!target) return;
    target.forEach(function (el) {
      var sceneDuration = el.offsetHeight;
      var sceneOffset = el.querySelector('.js-pin-content').offsetHeight + 70;
      var scene = new ScrollMagic.Scene({
        duration: sceneDuration - sceneOffset,
        offset: sceneOffset,
        triggerElement: el,
        triggerHook: "onEnter"
      }).setPin(".js-pin-content").addTo(App.SMcontroller);
      var width = window.innerWidth > 0 ? window.innerWidth : screen.width;
      if (width < 992) {
        scene.duration('1px');
        scene.refresh();
      } else {
        scene.duration(sceneDuration - sceneOffset);
        scene.refresh();
      }
      window.addEventListener('resize', function () {
        var width = window.innerWidth > 0 ? window.innerWidth : screen.width;
        if (width < 992) {
          scene.duration('1px');
          scene.refresh();
        } else {
          scene.duration(sceneDuration - sceneOffset);
          scene.refresh();
        }
      });
    });
  }
  function home1MastheadParticles() {
    var target = document.querySelector('#js-masthead-1-particles');
    if (!target) return;
    particlesJS("js-masthead-1-particles", {
      "particles": {
        "number": {
          "value": 20,
          "density": {
            "enable": false,
            "value_area": 200
          }
        },
        "color": {
          "value": ["#00ff96", "#0044EB", "#1A3454"]
        },
        "shape": {
          "type": "circle",
          "stroke": {
            "width": 0,
            "color": "#000000"
          },
          "polygon": {
            "nb_sides": 5
          }
        },
        "opacity": {
          "value": 0.5,
          "random": false,
          "anim": {
            "enable": false,
            "speed": 1,
            "opacity_min": 0.1,
            "sync": false
          }
        },
        "size": {
          "value": 6,
          "random": true,
          "anim": {
            "enable": false,
            "speed": 20,
            "size_min": 0.1,
            "sync": false
          }
        },
        "line_linked": {
          "enable": false,
          "distance": 150,
          "color": "#ffffff",
          "opacity": 0.4,
          "width": 1
        },
        "move": {
          "enable": true,
          "speed": 2,
          "direction": "none",
          "random": false,
          "straight": false,
          "out_mode": "bounce",
          "bounce": false,
          "attract": {
            "enable": false,
            "rotateX": 600,
            "rotateY": 1200
          }
        }
      },
      "interactivity": {
        "detect_on": "canvas",
        "events": {
          "onhover": {
            "enable": false,
            "mode": "repulse"
          },
          "onclick": {
            "enable": false,
            "mode": "push"
          },
          "resize": false
        },
        "modes": {
          "grab": {
            "distance": 400,
            "line_linked": {
              "opacity": 1
            }
          },
          "bubble": {
            "distance": 400,
            "size": 40,
            "duration": 2,
            "opacity": 8,
            "speed": 3
          },
          "repulse": {
            "distance": 200,
            "duration": 0.4
          },
          "push": {
            "particles_nb": 4
          },
          "remove": {
            "particles_nb": 2
          }
        }
      },
      "retina_detect": true
    });
  }
  function mainSlider1() {
    new Swiper('.js-mainSlider', {
      speed: 800,
      parallax: true,
      lazy: {
        loadPrevNext: true
      },
      navigation: {
        prevEl: '.js-prev',
        nextEl: '.js-next'
      }
    });
  }
  function testimonialsSlider2() {
    new Swiper('.js-testimonials-slider-2', {
      speed: 800,
      effect: "cards",
      cardsEffect: {
        slideShadows: true
      },
      grabCursor: true,
      lazy: {
        loadPrevNext: true
      },
      navigation: {
        prevEl: '.js-prev',
        nextEl: '.js-next'
      },
      pagination: {
        el: '.js-pagination',
        bulletClass: 'pagination__item',
        bulletActiveClass: 'is-active',
        bulletElement: 'div',
        clickable: true
      }
    });
  }
  function testimonialsSlider() {
    var slider = new Swiper('.js-testimonials-slider', {
      speed: 700,
      loop: true,
      lazy: {
        loadPrevNext: true
      }
    });
    var paginationItems = document.querySelectorAll('.js-testimonials-slider .js-testimonials-pagination > * > *');
    paginationItems.forEach(function (el, i) {
      el.addEventListener('click', function () {
        document.querySelector('.js-testimonials-slider .js-testimonials-pagination .is-active').classList.remove('is-active');
        el.classList.add('is-active');
        slider.slideTo(i + 1);
      });
    });
    slider.on('slideChangeTransitionEnd', function () {
      document.querySelector('.js-testimonials-slider .js-testimonials-pagination .is-active').classList.remove('is-active');
      paginationItems[slider.realIndex].classList.add('is-active');
    });
  }
  function parallaxIt() {
    var target = document.querySelectorAll('.js-mouse-move-container');
    target.forEach(function (container) {
      var $this = container;
      var targets = container.querySelectorAll('.js-mouse-move');
      targets.forEach(function (el) {
        var movement = el.getAttribute('data-move');
        document.addEventListener('mousemove', function (e) {
          var relX = e.pageX - $this.offsetLeft;
          var relY = e.pageY - $this.offsetTop;
          gsap.to(el, {
            x: (relX - $this.offsetWidth / 2) / $this.offsetWidth * movement,
            y: (relY - $this.offsetHeight / 2) / $this.offsetHeight * movement,
            duration: 0.2
          });
        });
      });
    });
  }
  function lineChart() {
    var ctx = document.getElementById('lineChart');
    if (!ctx) return;
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Marc', 'April', 'May', 'Jun', 'July', 'Agust', 'Sept', 'Oct', 'Now', 'Dec'],
        datasets: [{
          label: '#',
          data: [148, 100, 205, 110, 165, 145, 180, 156, 148, 220, 180, 245],
          tension: 0.4,
          backgroundColor: '#336CFB',
          borderColor: '#336CFB',
          borderWidth: 2
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            display: false
          }
        },
        scales: {
          y: {
            min: 0,
            max: 300,
            ticks: {
              stepSize: 50
            }
          }
        }
      }
    });
  }
  function fullScreenModeToggle() {
    var documentElement = document.documentElement;
    var buttons = document.querySelectorAll('[data-maximize]');
    if (!buttons) return;
    var state = false;
    var closeFullscreen = function closeFullscreen() {
      state = false;
      if (document.exitFullscreen) {
        document.exitFullscreen();
      } else if (document.webkitExitFullscreen) {
        /* Safari */
        document.webkitExitFullscreen();
      } else if (document.msExitFullscreen) {
        /* IE11 */
        document.msExitFullscreen();
      }
    };
    var openFullscreen = function openFullscreen() {
      state = true;
      if (documentElement.requestFullscreen) {
        documentElement.requestFullscreen();
      } else if (documentElement.webkitRequestFullscreen) {
        /* Safari */
        documentElement.webkitRequestFullscreen();
      } else if (documentElement.msRequestFullscreen) {
        /* IE11 */
        documentElement.msRequestFullscreen();
      }
    };
    buttons.forEach(function (el) {
      el.addEventListener('click', function () {
        if (!state) {
          openFullscreen();
        } else {
          closeFullscreen();
        }
      });
    });
  }
  function pieChart() {
    var ctx = document.getElementById('pieChart');
    if (!ctx) return;
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Direct', 'Referal', 'Organic'],
        datasets: [{
          label: '#',
          data: [40, 28, 32]
        }]
      },
      options: {
        cutout: '75%',
        plugins: {
          legend: {
            position: 'left'
          }
        },
        elements: {
          arc: {
            backgroundColor: '#336CFB',
            hoverBackgroundColor: '#556CFB'
          }
        }
      }
    });
    var getOrCreateLegendList = function getOrCreateLegendList(chart, id) {
      var legendContainer = document.getElementById(id);
      var listContainer = legendContainer.querySelector('ul');
      if (!listContainer) {
        listContainer = document.createElement('ul');
        listContainer.style.display = 'flex';
        listContainer.style.flexDirection = 'row';
        listContainer.style.margin = 0;
        listContainer.style.padding = 0;
        legendContainer.appendChild(listContainer);
      }
      return listContainer;
    };
    var htmlLegendPlugin = {
      id: 'htmlLegend',
      afterUpdate: function afterUpdate(chart, args, options) {
        var ul = getOrCreateLegendList(chart, options.containerID);

        // Remove old legend items
        while (ul.firstChild) {
          ul.firstChild.remove();
        }

        // Reuse the built-in legendItems generator
        var items = chart.options.plugins.legend.labels.generateLabels(chart);
        items.forEach(function (item) {
          var li = document.createElement('li');
          li.style.alignItems = 'center';
          li.style.cursor = 'pointer';
          li.style.display = 'flex';
          li.style.flexDirection = 'row';
          li.style.marginLeft = '10px';
          li.onclick = function () {
            var type = chart.config.type;
            if (type === 'pie' || type === 'doughnut') {
              // Pie and doughnut charts only have a single dataset and visibility is per item
              chart.toggleDataVisibility(item.index);
            } else {
              chart.setDatasetVisibility(item.datasetIndex, !chart.isDatasetVisible(item.datasetIndex));
            }
            chart.update();
          };

          // Color box
          var boxSpan = document.createElement('span');
          boxSpan.style.background = item.fillStyle;
          boxSpan.style.borderColor = item.strokeStyle;
          boxSpan.style.borderWidth = item.lineWidth + 'px';
          boxSpan.style.display = 'inline-block';
          boxSpan.style.height = '20px';
          boxSpan.style.marginRight = '10px';
          boxSpan.style.width = '20px';

          // Text
          var textContainer = document.createElement('p');
          textContainer.style.color = item.fontColor;
          textContainer.style.margin = 0;
          textContainer.style.padding = 0;
          textContainer.style.textDecoration = item.hidden ? 'line-through' : '';
          var text = document.createTextNode(item.text);
          textContainer.appendChild(text);
          li.appendChild(boxSpan);
          li.appendChild(textContainer);
          ul.appendChild(li);
        });
      }
    };
  }
  function countDown() {
    var target = document.querySelector('.js-countdown');
    if (!target) return;
    var countDownDate = new Date("Jan 5, 2023 15:37:25").getTime();
    setInterval(function () {
      var now = new Date().getTime();
      var distance = countDownDate - now;
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor(distance % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
      var minutes = Math.floor(distance % (1000 * 60 * 60) / (1000 * 60));
      var seconds = Math.floor(distance % (1000 * 60) / 1000);
      target.querySelector('.js-countdown-days').innerHTML = days;
      target.querySelector('.js-countdown-hours').innerHTML = hours;
      target.querySelector('.js-countdown-minutes').innerHTML = minutes;
      target.querySelector('.js-countdown-seconds').innerHTML = seconds;
    }, 1000);
  }
  function headerSticky() {
    var header = document.querySelector('.js-header');
    if (!header) return;
    var classList = [];
    if (header.getAttribute('data-add-bg')) {
      classList = header.getAttribute('data-add-bg');
    }
    var scene = new ScrollMagic.Scene({
      offset: '6px'
    });
    scene.setClassToggle(header, classList);
    scene.addTo(App.SMcontroller);
  }
  function clickElToggle() {
    var target = document.querySelectorAll('[data-el-toggle]');
    if (!target) return;
    target.forEach(function (el) {
      var attr = el.getAttribute('data-el-toggle');
      var openElement = document.querySelector(attr);
      var attrActive = el.getAttribute('data-el-toggle-active');
      var activeElement = document.querySelector(attrActive);
      el.addEventListener('click', function () {
        var allDD = document.querySelectorAll('.js-click-dropdown.-is-el-visible');
        if (allDD) {
          allDD.forEach(function (el) {
            return el.classList.remove('-is-el-visible');
          });
        }
        var allActiveDD = document.querySelectorAll('.-is-dd-active');
        if (allActiveDD) {
          allActiveDD.forEach(function (el) {
            return el.classList.remove('-is-dd-active');
          });
        }
        openElement.classList.toggle('-is-el-visible');
        if (activeElement) activeElement.classList.toggle('-is-dd-active');
      });
    });
  }
  function dropDown() {
    var target = document.querySelectorAll('.js-dropdown');
    if (!target) return;
    target.forEach(function (el) {
      var items = el.querySelectorAll('.js-dropdown-list .js-dropdown-link');
      var title = el.querySelector('.js-dropdown-title');
      items.forEach(function (el) {
        el.addEventListener('click', function (e) {
          e.preventDefault();
          title.innerHTML = el.innerHTML;
          var allDD = document.querySelectorAll('.js-click-dropdown.-is-el-visible');
          if (allDD) {
            allDD.forEach(function (el) {
              el.classList.remove('-is-el-visible');
            });
          }
          var allActiveDD = document.querySelectorAll('.-is-dd-active');
          if (allActiveDD) {
            allActiveDD.forEach(function (el) {
              return el.classList.remove('-is-dd-active');
            });
          }
        });
      });
    });
  }
  function shopSlider() {
    var slider = document.querySelector('.js-shop-slider .js-slider-slider');
    var sliderInstance = new Swiper(slider, {
      spaceBetween: 0,
      speed: 1000,
      parallax: true,
      lazy: {
        loadPrevNext: true
      },
      breakpoints: {
        575: {
          parallax: false
        }
      }
    });
    var sliderPaginationItems = document.querySelectorAll('.js-shop-slider .js-slider-pagination > *');
    sliderInstance.on('slideChangeTransitionStart', function () {
      sliderPaginationItems[sliderInstance.activeIndex].classList.add('is-active');
    });
    var _loop = function _loop(i) {
      var el = sliderPaginationItems[i];
      el.addEventListener('click', function (e) {
        sliderInstance.slideTo(i);
      });
    };
    for (var i = 0; i < sliderPaginationItems.length; i++) {
      _loop(i);
    }
  }
  function inputCounter() {
    var target = document.querySelectorAll('.js-input-counter');
    if (!target) return;
    target.forEach(function (el) {
      var input = el.querySelector('input');
      var value = input.value;
      el.querySelector('.js-up').addEventListener('click', function () {
        input.focus();
        value = parseInt(value) + 1;
        input.value = value;
      });
      el.querySelector('.js-down').addEventListener('click', function () {
        input.focus();
        value = parseInt(value) - 1;
        value = value < 0 ? 0 : value;
        input.value = value;
      });
    });
  }
  function mapInit() {
    var target = document.querySelector("#map");
    if (!target) return;
    var map = L.map(target).setView([51.505, -0.09], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    L.marker([51.5, -0.09]).addTo(map).openPopup();
  }
  function galleryInit() {
    GLightbox({
      selector: '.js-gallery',
      touchNavigation: true,
      loop: false,
      autoplayVideos: true
    });
  }
  var Select = function () {
    function init(selector) {
      document.querySelectorAll(selector).forEach(function (el) {
        return singleSelect(el);
      });
      document.querySelectorAll('.js-multiple-select').forEach(function (el) {
        return multipleSelect(el);
      });
    }
    function multipleSelect(target) {
      var button = target.querySelector('.js-button');
      var title = button.querySelector('.js-button-title');
      button.addEventListener('click', function () {
        var dropdown = target.querySelector('.js-dropdown');
        if (dropdown.classList.contains('-is-visible')) {
          dropdown.classList.remove('-is-visible');
        } else {
          closeAlldropdowns();
          dropdown.classList.add('-is-visible');
        }
      });
      var dropdown = target.querySelector('.js-dropdown');
      var options = dropdown.querySelectorAll('.js-options > *');
      var selectTag = target.querySelector('.js-select-tag');
      options.forEach(function (el) {
        el.addEventListener('click', function () {
          var selectedValues = [];
          el.classList.toggle('-is-choosen');
          var array = dropdown.querySelectorAll('.-is-choosen.js-target-title');
          array.forEach(function (el2) {
            selectedValues.push(el2.getAttribute('data-value'));
          });
          if (!array.length) {
            title.innerHTML = "Default";
            target.setAttribute("data-select-value", "");
            selectTag.value = "";
          } else {
            title.innerHTML = selectedValues.join(', ');
            target.setAttribute("data-select-value", selectedValues.join(', '));
            Array.from(selectTag.options).forEach(function (option) {
              option.selected = false;
            });
            selectedValues.forEach(function (selectedVal) {
              Array.from(selectTag.options).forEach(function (option) {
                if (option.value == selectedVal) {
                  option.selected = true;
                }
              });
            });
          }
          var checkbox = el.querySelector('input');
          checkbox.checked = !checkbox.checked;
        });
      });
    }
    function singleSelect(target) {
      var button = target.querySelector('.js-button');
      var title = button.querySelector('.js-button-title');
      button.addEventListener('click', function () {
        var dropdown = target.querySelector('.js-dropdown');
        if (dropdown.classList.contains('-is-visible')) {
          dropdown.classList.remove('-is-visible');
        } else {
          closeAlldropdowns();
          dropdown.classList.add('-is-visible');
        }
        if (target.classList.contains('js-liveSearch')) {
          target.querySelector('.js-search').focus();
        }
      });
      var dropdown = target.querySelector('.js-dropdown');
      var options = dropdown.querySelectorAll('.js-options > *');
      var selectTag = target.querySelector('.js-select-tag');
      if (target.classList.contains('js-liveSearch')) {
        liveSearch(target);
      }
      options.forEach(function (el) {
        el.addEventListener('click', function () {
          title.innerHTML = el.innerHTML;
          target.setAttribute("data-select-value", el.getAttribute('data-value'));
          selectTag.value = el.getAttribute('data-value');
          dropdown.classList.toggle('-is-visible');
        });
      });
    }
    function liveSearch(target) {
      var search = target.querySelector('.js-search');
      var options = target.querySelectorAll('.js-options > *');
      search.addEventListener('input', function (event) {
        var searchTerm = event.target.value.toLowerCase();
        options.forEach(function (el) {
          el.classList.add('d-none');
          if (el.getAttribute('data-value').includes(searchTerm)) {
            el.classList.remove('d-none');
          }
        });
      });
    }
    function closeAlldropdowns() {
      var targets = document.querySelectorAll('.js-select, .js-multiple-select');
      if (!targets) return;
      targets.forEach(function (el) {
        if (el.querySelector('.-is-visible')) {
          el.querySelector('.-is-visible').classList.remove('-is-visible');
        }
      });
    }
    return {
      init: init
    };
  }();
  window.onclick = function (event) {
    if (!event.target.closest('.js-select')) {
      var targets = document.querySelectorAll('.js-select');
      if (!targets) return;
      targets.forEach(function (el) {
        if (el.querySelector('.-is-visible')) {
          el.querySelector('.-is-visible').classList.remove('-is-visible');
        }
      });
    }
    if (!event.target.closest('.js-multiple-select')) {
      var _targets = document.querySelectorAll('.js-multiple-select');
      if (!_targets) return;
      _targets.forEach(function (el) {
        if (el.querySelector('.-is-visible')) {
          el.querySelector('.-is-visible').classList.remove('-is-visible');
        }
      });
    }
    if (!event.target.classList.contains('dropdown__button') && !event.target.classList.contains('js-dropdown-title')) {
      var allDD = document.querySelectorAll('.js-click-dropdown.-is-el-visible');
      if (allDD) {
        allDD.forEach(function (el) {
          el.classList.remove('-is-el-visible');
        });
      }
      var allActiveDD = document.querySelectorAll('.-is-dd-active');
      if (allActiveDD) {
        allActiveDD.forEach(function (el) {
          return el.classList.remove('-is-dd-active');
        });
      }
    }
  };
  var Accordion = function () {
    function init() {
      var targets = document.querySelectorAll(".js-accordion");
      if (!targets) return;
      var _loop2 = function _loop2() {
        var items = targets[i].querySelectorAll('.accordion__item');
        var _loop3 = function _loop3(l) {
          var button = items[l].querySelector('.accordion__button');
          var content = items[l].querySelector('.accordion__content');
          if (items[l].classList.contains('js-accordion-item-active')) {
            items[l].classList.toggle('is-active');
            content.style.maxHeight = content.scrollHeight + "px";
          }
          button.addEventListener("click", function (e) {
            items[l].classList.toggle('is-active');
            if (content.style.maxHeight) {
              content.style.maxHeight = null;
            } else {
              content.style.maxHeight = content.scrollHeight + "px";
            }
          });
        };
        for (var l = 0; l < items.length; l++) {
          _loop3(l);
        }
      };
      for (var i = 0; i < targets.length; i++) {
        _loop2();
      }
    }
    return {
      init: init
    };
  }();
  var ShowMore = function () {
    function init() {
      var targets = document.querySelectorAll(".js-show-more");
      if (!targets) return;
      targets.forEach(function (el, i) {
        var button = el.querySelector('.show-more__button');
        var content = el.querySelector('.show-more__content');
        button.addEventListener("click", function (e) {
          el.classList.toggle('is-active');
          if (content.style.maxHeight) {
            content.style.maxHeight = null;
          } else {
            content.style.maxHeight = content.scrollHeight + "px";
          }
        });
      });
    }
    return {
      init: init
    };
  }();
  var Tabs = function () {
    function init() {
      var targets = document.querySelectorAll(".js-tabs");
      if (!targets) return;
      targets.forEach(function (el) {
        singleTab(el);
      });
    }
    function singleTab(target) {
      var controls = target.querySelector('.js-tabs-controls');
      var controlsItems = target.querySelectorAll('.js-tabs-controls .js-tabs-button');
      var content = target.querySelector('.js-tabs-content');
      var _loop4 = function _loop4() {
        var el = controlsItems[l];
        el.addEventListener("click", function (e) {
          var selector = el.getAttribute('data-tab-target');
          controls.querySelector('.is-active').classList.remove('is-active');
          content.querySelector('.is-active').classList.remove('is-active');
          el.classList.add('is-active');
          content.querySelector(selector).classList.add('is-active');
        });
      };
      for (var l = 0; l < controlsItems.length; l++) {
        _loop4();
      }
    }
    return {
      init: init
    };
  }();
  /*--------------------------------------------------
    11. Lazy loading
  ---------------------------------------------------*/

  function lazyLoading() {
    if (!document.querySelector('.js-lazy')) {
      return;
    }
    new LazyLoad({
      elements_selector: ".js-lazy"
    });
  }

  /*--------------------------------------------------
    08. Section sliders
  ---------------------------------------------------*/

  function SectionSlider() {
    var sectionSlider = document.querySelectorAll('.js-section-slider');
    if (!sectionSlider.length) return;
    var _loop5 = function _loop5() {
      var _Swiper;
      var el = sectionSlider[i];
      var prevNavElement = el.querySelector('.js-prev');
      var nextNavElement = el.querySelector('.js-next');
      if (el.getAttribute('data-nav-prev')) prevNavElement = document.querySelector(".".concat(el.getAttribute('data-nav-prev')));
      if (el.getAttribute('data-nav-next')) nextNavElement = document.querySelector(".".concat(el.getAttribute('data-nav-next')));
      var gap = 0;
      var loop = false;
      var centered = false;
      var pagination = false;
      var scrollbar = false;
      if (el.getAttribute('data-gap')) gap = el.getAttribute('data-gap');
      if (el.hasAttribute('data-loop')) loop = true;
      if (el.hasAttribute('data-center')) centered = true;
      if (el.hasAttribute('data-pagination')) {
        var paginationElement = el.querySelector('.js-pagination');
        if (el.getAttribute('data-pagination')) paginationElement = document.querySelector(".".concat(el.getAttribute('data-pagination')));
        pagination = {
          el: paginationElement,
          bulletClass: 'pagination__item',
          bulletActiveClass: 'is-active',
          bulletElement: 'div',
          clickable: true
        };
      }
      if (el.hasAttribute('data-scrollbar')) {
        scrollbar = {
          el: '.js-scrollbar',
          draggable: false
        };
      }
      var colsArray = el.getAttribute('data-slider-cols').split(' ');
      var cols_base = 1;
      var cols_xl = 1;
      var cols_lg = 1;
      var cols_md = 1;
      var cols_sm = 1;
      colsArray.forEach(function (el) {
        if (el.includes('base')) cols_base = el.slice(-1);
        if (el.includes('xl')) cols_xl = el.slice(-1);
        if (el.includes('lg')) cols_lg = el.slice(-1);
        if (el.includes('md')) cols_md = el.slice(-1);
        if (el.includes('sm')) cols_sm = el.slice(-1);
      });
      new Swiper(el, (_Swiper = {
        speed: 600,
        autoHeight: true,
        spaceBetween: parseInt(gap),
        centeredSlides: centered,
        parallax: true,
        watchSlidesVisibility: true,
        loop: loop,
        loopAdditionalSlides: 1,
        preloadImages: false,
        lazy: true,
        scrollbar: scrollbar,
        pagination: pagination,
        slidesPerView: parseInt(cols_base),
        breakpoints: {
          1199: {
            slidesPerView: parseInt(cols_xl)
          },
          991: {
            slidesPerView: parseInt(cols_lg)
          },
          767: {
            slidesPerView: parseInt(cols_md)
          },
          574: {
            slidesPerView: parseInt(cols_sm)
          }
        }
      }, _defineProperty(_Swiper, "lazy", {
        loadPrevNext: true
      }), _defineProperty(_Swiper, "navigation", {
        prevEl: prevNavElement,
        nextEl: nextNavElement
      }), _Swiper));
    };
    for (var i = 0; i < sectionSlider.length; i++) {
      _loop5();
    }
  }

  /*--------------------------------------------------
    01. Custom easings
  ---------------------------------------------------*/

  function customEasingsInit() {
    CustomEase.create("quart.out", "0.25, 1, 0.5, 1");
    CustomEase.create("quart.inOut", "0.76, 0, 0.24, 1");
  }

  /*--------------------------------------------------
    03. Header
  ---------------------------------------------------*/

  var Header = function () {
    var menu;
    var mobileBg;
    var navList;
    var mobileFooter;
    var navListLinks;
    var navBtnOpen;
    var navBtnClose;
    var navBtnListBack;
    var menuDeepLevel;
    var timeline = gsap.timeline();
    function updateVars() {
      // menu = document.querySelector('.js-menu');
      // mobileBg = menu.querySelector('.js-mobile-bg');
      // mobileFooter = menu.querySelector('.js-mobile-footer');
      navList = document.querySelector('.js-navList');
      navListLinks = document.querySelectorAll('.js-navList > li > a');

      // navBtnOpen = document.querySelector('.js-nav-open');
      // navBtnClose = document.querySelector('.js-nav-close');
      navBtnListBack = document.querySelectorAll('.js-nav-list-back');
      menuDeepLevel = 0;
    }
    function init() {
      // if (!document.querySelector('.js-menu')) return
      updateVars();
      menuListBindEvents();
      // menuAnimBindEvents()
    }

    function deepLevelCheck(level) {
      return level;
    }
    function menuListBindEvents() {
      var listItems = document.querySelectorAll('.js-navList .menu-item-has-children');
      if (!listItems.length) return;
      navBtnListBack.forEach(function (el) {
        el.addEventListener('click', function () {
          var visibleList = navList.querySelector('ul.-is-active');
          var parentList = visibleList.parentElement.parentElement;
          menuDeepLevel--;
          menuListStepAnimate(visibleList, parentList, menuDeepLevel, parentList.parentElement.querySelector('li > a').innerHTML);
        });
      });
      listItems.forEach(function (el) {
        var parentLink = el.querySelector('li > a');
        parentLink.removeAttribute('href');
        parentLink.addEventListener('click', function () {
          var parent = el.parentElement;
          var subnavList = el.lastElementChild;
          console.log(subnavList);
          menuDeepLevel++;
          menuListStepAnimate(parent, subnavList, menuDeepLevel, parentLink.innerHTML);
        });
      });
    }
    function menuListStepAnimate(hideList, showList, level) {
      var hideListItems = hideList.children;
      hideListItems = Array.from(hideListItems);
      var hideListLinks = hideListItems.map(function (item) {
        return item.querySelector('li > a');
      });
      var showListItems = showList.children;
      showListItems = Array.from(showListItems);
      var showListLinks = showListItems.map(function (item) {
        return item.querySelector('li > a');
      });
      var width = window.innerWidth > 0 ? window.innerWidth : screen.width;
      if (width < 1199) {
        timeline.clear();
        if (!deepLevelCheck(level)) {
          gsap.to(navBtnListBack, {
            ease: "quart.inOut",
            duration: 0.6,
            opacity: 0
          });
        }
        timeline.to(hideListLinks, {
          ease: 'quart.out',
          stagger: -0.04,
          duration: 0.8,
          y: '100%',
          onStart: function onStart() {
            showList.classList.add('-is-active');
          },
          onComplete: function onComplete() {
            hideList.classList.remove('-is-active');
          }
        });
        if (deepLevelCheck(level)) {
          timeline.to(navBtnListBack, {
            ease: "quart.inOut",
            duration: 0.6,
            y: '0px',
            opacity: 1
          }, '>-0.5');
        }
        timeline.to(showListLinks, {
          ease: 'quart.out',
          stagger: 0.08,
          duration: 0.9,
          y: '0%'
        }, '>-0.6');
      }
    }
    function headerSticky() {
      var header = document.querySelector('.js-header');
      if (!header) return;
      var classList = 'is-sticky';
      if (header.getAttribute('data-add-bg')) {
        classList = header.getAttribute('data-add-bg');
        classList = "".concat(classList, " is-sticky");
      }
      new ScrollMagic.Scene({
        offset: '6px'
      }).setClassToggle(header, classList).addTo(App.SMcontroller);
    }
    return {
      headerSticky: headerSticky,
      init: init
    };
  }();

  /*--------------------------------------------------
    04. Page reveals
  ---------------------------------------------------*/

  var PageReveal = function () {
    function base(tl) {
      tl.add(function () {
        RevealAnim.init();
      });
    }
    function init(tl) {
      base(tl);
      return tl;
    }
    return {
      init: init
    };
  }();
  function initialReveal(callback) {
    var tl = gsap.timeline();
    tl.preloaderInitial();
    tl = PageReveal.init(tl);
  }

  /*--------------------------------------------------
    06. Elements reveal
  ---------------------------------------------------*/

  var RevealAnim = function () {
    function single() {
      var animationTarget = document.querySelectorAll('[data-anim]');
      if (!animationTarget.length) return;
      var _loop6 = function _loop6() {
        var el = animationTarget[i];
        new ScrollMagic.Scene({
          offset: '350px',
          triggerElement: el,
          triggerHook: "onEnter",
          reverse: false
        }).on('enter', function (event) {
          animateElement(el);
        }).addTo(App.SMcontroller);
      };
      for (var i = 0; i < animationTarget.length; i++) {
        _loop6();
      }
    }
    function container() {
      var animationContainer = document.querySelectorAll('[data-anim-wrap]');
      if (!animationContainer.length) {
        return;
      }
      var _loop7 = function _loop7() {
        var el = animationContainer[i];
        new ScrollMagic.Scene({
          offset: '350px',
          triggerElement: el,
          triggerHook: "onEnter",
          reverse: false
        }).on('enter', function (event) {
          var animChilds = el.querySelectorAll('[data-anim-child]');
          el.classList.add('animated');
          animChilds.forEach(function (el) {
            return animateElement(el);
          });
        }).addTo(App.SMcontroller);
      };
      for (var i = 0; i < animationContainer.length; i++) {
        _loop7();
      }
    }
    function animateElement(target) {
      var attrVal;
      var animDelay;
      var attrDelayPart;
      if (target.getAttribute('data-anim')) {
        attrVal = target.getAttribute('data-anim');
      } else {
        attrVal = target.getAttribute('data-anim-child');
      }
      if (attrVal.includes('delay-')) {
        attrDelayPart = attrVal.split(' ').pop();
        animDelay = attrDelayPart.substr(attrDelayPart.indexOf('-') + 1) / 10;
      }
      if (attrVal.includes('counter')) {
        counter(target, animDelay);
      } else if (attrVal.includes('line-chart')) {
        lineChart(target, animDelay);
      } else if (attrVal.includes('pie-chart')) {
        pieChart(target, animDelay);
      } else if (attrVal.includes('split-lines')) {
        splitLines(target, animDelay);
      } else {
        target.classList.add('is-in-view');
      }
    }
    function pieChart(target) {
      var animDelay = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 0;
      var counterVal = target.getAttribute('data-percent');
      var chartBar = target.querySelector('.js-chart-bar');
      if (counterVal < 0) {
        0, _readOnlyError("counterVal");
      }
      if (counterVal > 100) {
        100, _readOnlyError("counterVal");
      }
      gsap.fromTo(chartBar, {
        drawSVG: "0%"
      }, {
        delay: 0.3 + animDelay,
        duration: 1.4,
        ease: 'power3.inOut',
        drawSVG: "".concat(counterVal, "%"),
        onStart: function onStart() {
          chartBar.classList.remove('bar-stroke-hidden');
        }
      });
      var object = {
        count: 0
      };
      var barPercent = target.querySelector('.js-chart-percent');
      gsap.to(object, {
        count: counterVal,
        delay: 0.45 + animDelay,
        duration: 1,
        ease: 'power3.inOut',
        onUpdate: function onUpdate() {
          barPercent.innerHTML = Math.round(object.count) + '%';
        }
      });
    }
    function lineChart(target) {
      var animDelay = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 0;
      var counterVal = target.getAttribute('data-percent');
      gsap.fromTo(target.querySelector('.js-bar'), {
        scaleX: 0
      }, {
        delay: 0.45 + animDelay,
        duration: 1,
        ease: 'power3.inOut',
        scaleX: counterVal / 100
      });
      var object = {
        count: 0
      };
      var barPercent = target.querySelector('.js-number');
      gsap.to(object, {
        count: counterVal,
        delay: 0.45 + animDelay,
        duration: 1,
        ease: 'power3.inOut',
        onUpdate: function onUpdate() {
          barPercent.innerHTML = Math.round(object.count);
        }
      });
    }
    function counter(target) {
      var animDelay = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 0;
      var counterVal = target.getAttribute('data-counter');
      var counterAdd = target.getAttribute('data-counter-add');
      var totalDelay = animDelay;
      var symbols = '';
      var object = {
        count: 0
      };
      var counterNum = target.querySelector('.js-counter-num');
      if (counterAdd) {
        symbols = counterAdd;
      }
      gsap.to(object, {
        count: counterVal,
        delay: totalDelay,
        duration: 1.8,
        ease: 'power3.inOut',
        onUpdate: function onUpdate() {
          counterNum.innerHTML = Math.round(object.count) + symbols;
        }
      });
    }
    function splitLines(target) {
      var animDelay = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 0;
      var lines = target.querySelectorAll('.split__line');
      gsap.to(lines, {
        delay: animDelay,
        stagger: 0.05,
        duration: 1.2,
        ease: 'power2.out',
        y: '0%'
      });
    }
    function init() {
      single();
      container();
    }
    return {
      init: init
    };
  }();
  function splitTextIntoLines() {
    var target;
    if (App.body.classList.contains('page-reveal-off')) {
      target = document.querySelectorAll("[data-split='lines']:not([data-split-page-reveal])");
    } else {
      target = document.querySelectorAll("[data-split='lines']");
    }
    if (!target.length) return;
    target.forEach(function (el) {
      var content;
      var test = el.querySelectorAll('* > *:not(br):not(span)');
      if (test.length > 0) {
        content = el.querySelectorAll('* > *:not(br):not(span)');
      }
      new SplitText(content, {
        type: 'lines',
        linesClass: 'overflow-hidden'
      });
      content.forEach(function (el) {
        var lines = el.querySelectorAll('.overflow-hidden');
        new SplitText(lines, {
          type: 'lines',
          linesClass: 'split__line'
        });
      });
      gsap.set(el.querySelectorAll('.split__line'), {
        y: '100%'
      });
    });
  }
  function splitIntoLines(target) {
    if (!target) return;
    var content;
    var test = target.querySelectorAll('* > *:not(br):not(span)');
    if (test.length > 0) {
      content = target.querySelectorAll('* > *:not(br):not(span)');
    }
    new SplitText(content, {
      type: 'lines',
      linesClass: 'overflow-hidden'
    });
    content.forEach(function (el) {
      var lines = el.querySelectorAll('.overflow-hidden');
      new SplitText(lines, {
        type: 'lines',
        linesClass: 'split__line'
      });
    });
    gsap.set(target.querySelectorAll('.split__line'), {
      y: '100%'
    });
  }

  /*--------------------------------------------------
    11. Lazy loading
  ---------------------------------------------------*/

  function lazyLoading() {
    if (!document.querySelector('.js-lazy')) {
      return;
    }
    new LazyLoad({
      elements_selector: ".js-lazy"
    });
  }

  /*--------------------------------------------------
    12. Parallax
  ---------------------------------------------------*/

  function parallaxInit() {
    if (!document.querySelector('[data-parallax]')) return;
    var target = document.querySelectorAll('[data-parallax]');
    target.forEach(function (el) {
      jarallax(el, {
        speed: el.getAttribute('data-parallax'),
        imgElement: '[data-parallax-target]'
      });
    });
  }

  /*--------------------------------------------------
    15. Video
  ---------------------------------------------------*/

  function videoBtn() {
    GLightbox({
      autoplayVideos: false,
      touchNavigation: false
    });
  }

  /*--------------------------------------------------
    16. Scroll to id
  ---------------------------------------------------*/

  function scrollToIdInit() {
    var targets = document.querySelectorAll('.js-scroll-to-id');
    if (!targets.length) return;
    targets.forEach(function (el) {
      el.addEventListener('click', function (e) {
        e.preventDefault();
        var id = el.getAttribute('href');
        var destination = document.querySelector("".concat(id));
        console.log(destination);
        // const destination = document.querySelector(`#${id.slice(1)}`);

        // if (document.querySelector('.is-pin-active')) {
        //   document.querySelector('.is-pin-active').classList.remove('is-pin-active')
        //   el.classList.add('is-pin-active')
        // }

        gsap.to(window, {
          duration: 0.6,
          ease: 'linear',
          // scrollTo: destination.offsetTop - 60,
          scrollTo: "".concat(id)
        });
      });
    });
  }

  /*--------------------------------------------------
    02. Preloader
  ---------------------------------------------------*/

  var Preloader = function () {
    var preloader = document.querySelector('.js-preloader');
    var bg = preloader.querySelector('.preloader__bg');
    function initial() {
      gsap.registerEffect({
        name: 'preloaderInitial',
        effect: function effect(target, config) {
          document.documentElement.classList.add('html-overflow-hidden');
          var tl = gsap.timeline();
          if (!document.body.classList.contains('preloader-visible')) {
            document.documentElement.classList.remove('html-overflow-hidden');
            return tl;
          }
          return tl.to(bg, {
            ease: 'quart.inOut',
            duration: 0.6,
            scaleY: 0,
            onComplete: function onComplete() {
              document.documentElement.classList.remove('html-overflow-hidden');
            }
          });
        },
        extendTimeline: true
      });
    }
    function show() {
      gsap.registerEffect({
        name: 'preloaderShow',
        effect: function effect(target, config) {
          var tl = gsap.timeline();
          if (!preloader) return tl;
          return tl.to(bg, {
            ease: 'quart.inOut',
            duration: 0.6,
            scaleY: 1,
            onStart: function onStart() {
              bg.classList.remove('origin-bottom');
              document.documentElement.classList.add('html-overflow-hidden');
            }
          });
        },
        extendTimeline: true
      });
    }
    function hide() {
      gsap.registerEffect({
        name: 'preloaderHide',
        effect: function effect(target, config) {
          var tl = gsap.timeline();
          return tl.to(bg, {
            ease: 'quart.inOut',
            duration: 0.6,
            delay: 0.1,
            scaleY: 0,
            onStart: function onStart() {
              bg.classList.add('origin-bottom');
            },
            onComplete: function onComplete() {
              document.documentElement.classList.remove('html-overflow-hidden');
              document.documentElement.classList.remove('overflow-hidden');
              document.body.classList.remove('overflow-hidden');
            }
          });
        },
        extendTimeline: true
      });
    }
    function init() {
      if (!preloader) return;
      initial();
      show();
      hide();
    }
    return {
      init: init
    };
  }();
})();
/******/ })()
;