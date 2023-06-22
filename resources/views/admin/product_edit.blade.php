<x-admin-layout>
  <div class="dashboard__content bg-light-4">
    <div class="dashboard__content bg-light-4">
      <div class="row pb-50 mb-10">
        <div class="col-auto">
          <h1 class="text-30 lh-12 fw-700">Редактировать продукт "{{ $product->shot_name }}"</h1>
        </div>
        {{-- @json($errors->all()) --}}
        {{-- {{$old??''}} --}}
        @if ($errors->has('alias'))
        <div class="d-flex items-center justify-between bg-error-1 pl-30 pr-20 py-30 rounded-8">
          <div class="text-error-2 lh-1 fw-500">{{ $errors->first('alias') }}</div>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-x text-error-2 size-20">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
        </div>
        @endif

      </div>
      <div class="row y-gap-60">
        <form method="POST" enctype="multipart/form-data" class="contact-form row y-gap-30"
          action="{{route('product.update', $product->id)}}">
          <div class="col-12">
            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
              <div class="d-flex items-center py-20 px-30 border-bottom-light">
                <h2 class="text-17 lh-1 fw-500">Базовая информация</h2>
              </div>
              <div class="py-30 px-30 row y-gap-30">
                @csrf
                @method('PUT')
                <div class="col-6">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Короткое название*</label>
                  <input name="shot_name" type="text" placeholder="Используется в меню и в каталоге на главной странице"
                    value="{{ $product->shot_name }}">
                </div>
                <div class="col-6">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Алиас*</label>
                  <input name="alias" type="text" placeholder="Используется в формировании адресной строки"
                    value="{{ $product->alias }}">
                </div>
                <div class="col-12">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Полное название</label>
                  <input name="full_name" type="text" placeholder="Используется в заголовке на странице продукта"
                    value="{{ $product->full_name }}">
                </div>
                <div class="col-12">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Короткое описание</label>
                  <textarea name="shot_desc" id="editor" placeholder="Используется сразу после заголовка"
                    rows="7">{{ $product->shot_desc }}</textarea>
                </div>
                <div class="col-md-12">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Материал корпуса</label>
                  <input name="material" type="text" placeholder="Материал" value="{{ $product->material }}">
                </div>
                <div class="col-md-6">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Напряжение питания</label>
                  <input name="voltag" type="text" placeholder="Напряжение" value="{{ $product->voltag }}">
                </div>
                <div class="col-md-6">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Потребляемая мощность</label>
                  <input name="power" type="text" placeholder="Питание" value="{{ $product->power }}">
                </div>
                <div class="col-md-6">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Интерфейс сопряжения</label>
                  <input name="interface" type="text" placeholder="Интрефейс" value="{{ $product->interface }}">
                </div>
                <div class="col-md-6">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Протокол сопряжения</label>
                  <input name="protokol" type="text" placeholder="Протокол" value="{{ $product->protokol }}">
                </div>



              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
              <div class="d-flex items-center py-20 px-30 border-bottom-light">
                <h2 class="text-17 lh-1 fw-500">Мета-информация</h2>
              </div>
              <div class="py-30 px-30 row y-gap-30">
                <div class="row">
                  <div class="col-12">
                    <h4 class="text-16 lh-1 fw-500">Данные для мета-тегов</h4>
                  </div>
                </div>
                <div class="col-12">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Title</label>
                  <input name="title" type="text" placeholder="Используется в теге title" value="{{ $product->title }}">
                </div>
                <div class="col-12">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Description</label>
                  <input name="desc" type="text" placeholder="Используется в теге.... description"
                    value="{{ $product->desc }}">
                </div>
                <div class="col-12">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Keywords</label>
                  <input name="keywords" type="text" placeholder="Используется в теге.... keywords"
                    value="{{ $product->keywords }}">
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
              <div class="d-flex items-center py-20 px-30 border-bottom-light">
                <h2 class="text-17 lh-1 fw-500">Технические характеристики</h2>
              </div>
              <div class="py-30 px-30">
                <div class="row y-gap-50">
                  <div class="col-12">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">ТТХ</label>
                    <textarea name="tth" id="editor2" placeholder="Используется сразу после заголовка"
                      rows="7">{{ $product->tth }}</textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="app" class="y-gap-30">
          <div class="col-12" >
            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
              <div class="d-flex items-center py-20 px-30 border-bottom-light">
                <h2 class="text-17 lh-1 fw-500">Функции</h2>
              </div>
              <div class="py-30 px-30">
                <div class="row y-gap-50">
                  <v-functions :databd="{{ $product->functions}}">
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
              <div class="d-flex items-center py-20 px-30 border-bottom-light">
                <h2 class="text-17 lh-1 fw-500">Галерея</h2>
              </div>
              <div class="py-30 px-30">
                <div class="row y-gap-50">
                  <v-gallery :databd="{{ $product->dop1}}">
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="col-12">
            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
              <div class="d-flex items-center py-20 px-30 border-bottom-light">
                <h2 class="text-17 lh-1 fw-500">Фотографии </h2>
              </div>
              <div class="py-30 px-30">
                <div class="row y-gap-50">
                  <div class="col-12">
                    <div class="contact-form d-flex lg:flex-column">
                      <div class="relative shrink-0">
                        <img class="" style="width:300px" src="{{ asset('/storage/'.($product->main_img != null ? $product->main_img : 'uploads/no-image.png')) }}" alt="image">

                        {{-- <div class="absolute-full-center d-flex justify-end py-20 px-20">
                          <a href="#" class="d-flex justify-center items-center bg-white size-40 rounded-8 shadow-1">
                            <i class="icon-bin text-16"></i>
                          </a>
                        </div> --}}
                      </div>

                      <div class="w-1/1 ml-30 lg:ml-0 lg:mt-20">

                        <div class="form-upload col-12">
                          <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Большое изображение</label>
                          <div class="form-upload__wrap">
                            <input type="file" name="main_img" placeholder="" value="{{ $product->main_img }}">
                            {{-- <button type="button" class="button -dark-3 text-white">Загрузить файл</button> --}}
                          </div>
                        </div>

                        <p class="mt-10">Изображение в шапке товара. Необходимое разрешение: 520x419 пикселей; .jpg или
                          .png.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="contact-form d-flex lg:flex-column">
                      <div class="relative shrink-0">
                        <img class="" style="width:300px"
                          src="{{ asset('/storage/'.($product->small_img != null ? $product->small_img : 'uploads/no-image.png')) }}"
                          alt="image">

                        {{-- <div class="absolute-full-center d-flex justify-end py-20 px-20">
                          <a href="#" class="d-flex justify-center items-center bg-white size-40 rounded-8 shadow-1">
                            <i class="icon-bin text-16"></i>
                          </a>
                        </div> --}}
                      </div>

                      <div class="w-1/1 ml-30 lg:ml-0 lg:mt-20">

                        <div class="form-upload col-12">
                          <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Маленькое изображение</label>
                          <div class="form-upload__wrap">
                            <input type="file" name="small_img" placeholder="" value="{{ $product->small_img }}">
                            {{-- <button type="button" class="button -dark-3 text-white">Загрузить файл</button> --}}
                          </div>
                        </div>

                        <p class="mt-10">Изображение в списке товаров. Необходимое разрешение: 300x241 пикселей; .jpg
                          или
                          .png.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="contact-form d-flex lg:flex-column">
                      <div class="relative shrink-0">
                        <img class="" style="width:300px"
                          src="{{ asset('/storage/'.($product->gabarit_big_img != null ? $product->gabarit_big_img : 'uploads/no-image.png')) }}"
                          alt="image">

                        {{-- <div class="absolute-full-center d-flex justify-end py-20 px-20">
                          <a href="#" class="d-flex justify-center items-center bg-white size-40 rounded-8 shadow-1">
                            <i class="icon-bin text-16"></i>
                          </a>
                        </div> --}}
                      </div>

                      <div class="w-1/1 ml-30 lg:ml-0 lg:mt-20">

                        <div class="form-upload col-12">
                          <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Габаритный чертеж</label>
                          <div class="form-upload__wrap">
                            <input type="file" name="gabarit_big_img" placeholder=""
                              value="{{ $product->gabarit_big_img }}">
                            {{-- <button type="button" class="button -dark-3 text-white">Загрузить файл</button> --}}
                          </div>
                        </div>

                        <p class="mt-10">Габаритный чертеж. Необходимое разрешение: 1040x1200 пикселей; .jpg или
                          .png.</p>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="row y-gap-20 justify-between pt-30">
                  <div class="col-auto">
                    <a href="{{ route('product.index') }}" class="button -md -outline-purple-1 text-purple-1">Отмена</a>
                  </div>
                  <div class="col-auto">
                    <button class="button -md -purple-1 text-white">Сохранить</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
    <script>
      ClassicEditor
            .create(document.querySelector('#editor'), {height:'400px'})
            .catch(error => {
                console.error(error);
            });
            ClassicEditor
            .create(document.querySelector('#editor2'), {height:'400px'})
            .catch(error => {
                console.error(error);
            });
    </script>
    <style>
      .ck-editor__editable {
        height: 300px;
      }
    </style>
</x-admin-layout>