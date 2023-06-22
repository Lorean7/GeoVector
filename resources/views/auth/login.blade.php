<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />

    <!-- Stylesheets -->
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ mix('css/vendors.css') }}">
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">



    <title>@yield('title') | Аквазонд</title>
</head>

<body class="preloader-visible" data-barba="wrapper">
    <!-- preloader start -->
    <div class="preloader js-preloader">
        <div class="preloader__bg"></div>
    </div>
    <!-- preloader end -->

    <main class="main-content bg-beige-1">
  
      <header data-anim="fade" data-add-bg="" class="header -base js-header">
  
  
        <div class="header__container py-10">
          <div class="row justify-between items-center">
  
            <div class="col-auto">
              <div class="header-left">
  
                <div class="header__logo mt-12">
                  <a data-barba href="index.html">
                    <img src="img/general/logo.svg" alt="logo" class="mt-12">
                  </a>
                </div>
   
              </div>
            </div>
  
  
            
  
          </div>
        </div>
      </header>
  
  
      <div class="content-wrapper  js-content-wrapper">
  
        <section class="form-page js-mouse-move-container">
          <div class="form-page__img bg-dark-1">
            <div class="form-page-composition">
              <div class="-bg"><img data-move="30" class="js-mouse-move" src="img/login/bg.png" alt="bg"></div>
              {{-- <div class="-el-1"><img data-move="20" class="js-mouse-move" src="img/home-9/hero/bg.png" alt="image"></div> --}}
              {{-- <div class="-el-2"><img data-move="40" class="js-mouse-move" src="img/home-9/hero/1.png" alt="icon"></div> --}}
              {{-- <div class="-el-3"><img data-move="40" class="js-mouse-move" src="img/home-9/hero/2.png" alt="icon"></div> --}}
              {{-- <div class="-el-4"><img data-move="40" class="js-mouse-move" src="img/home-9/hero/3.png" alt="icon"></div> --}}
            </div>
          </div>
  
          <div class="form-page__content lg:py-50">
            <div class="container">
              <div class="row justify-center items-center">
                <div class="col-xl-6 col-lg-8">
                  <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
                    <h3 class="text-30 lh-13">Войдите</h3>
                    @if ($errors->any())
                        <div class="alert alert-danger">  
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" class="contact-form respondForm__form row y-gap-20 pt-30" action="{{ route('login') }}">
                      @csrf
                      <div class="col-12">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email</label>
                        <input id="email"  type="email" name="email" placeholder="Введите вашу почту">
                      </div>
                      <div class="col-12">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Пароль</label>
                        <input id="password" type="password" name="password" placeholder="Пароль" required autocomplete="current-password" placeholder="И пароль">
                      </div>
                      <div class="col-12">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Запомнить меня?</label>
                        <input id="remember-me" type="checkbox" class="form-check-input border mr-2" >
                      </div>
                     
                      <div class="col-12">
                        <button type="submit" name="submit" id="submit" class="button -md -green-1 text-dark-1 fw-500 w-1/1">
                          Войти
                        </button>
                      </div>
                    </form>
  
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
  
  
      </div>
    </main>
    

    <!-- JavaScript -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
    {{-- <script src="{{ mix('js/vendors.js') }}" defer></script> --}}
    {{-- <script src="{{ mix('js/main.js') }}" defer></script> --}}

    <script src="{{asset('js/vendors2.js')}}"></script>
    <script src="{{asset('js/main2.js')}}"></script>
   
</body>

</html>
