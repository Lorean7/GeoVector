<x-admin-layout>
    <div class="dashboard__content bg-light-4">
        <div class="dashboard__content bg-light-4">
            <div class="row pb-50 mb-10">
                <div class="col-auto">
                    <h1 class="text-30 lh-12 fw-700">Добавить новый продукт</h1>
                </div>
                {{-- @json($errors->all()) --}}
                {{-- {{$old??''}} --}}
                @if ($errors->has('alias'))
                <div class="alert alert-danger">{{ $errors->first('alias') }}</div>
                @endif
            </div>
            <div class="row y-gap-60">
                <form method="POST" class="contact-form row y-gap-30" action="{{route('product.store')}}">
                    <div class="col-12">
                        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
                            <div class="d-flex items-center py-20 px-30 border-bottom-light">
                                <h2 class="text-17 lh-1 fw-500">Базовая информация</h2>
                            </div>
                            <div class="py-30 px-30 row y-gap-30">
                                @csrf
                                <div class="col-6">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Короткое название*</label>
                                    <input name="shot_name" type="text"
                                        placeholder="Используется в меню и в каталоге на главной странице"
                                        value="{{ old('shot_name') }}">
                                </div>
                                <div class="col-6">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Алиас*</label>
                                    <input name="alias" type="text"
                                        placeholder="Используется в формировании адресной строки"
                                        value="{{ old('alias') }}">
                                </div>
                                <div class="col-12">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Полное название</label>
                                    <input name="full_name" type="text"
                                        placeholder="Используется в заголовке на странице продукта"
                                        value="{{ old('full_name') }}">
                                </div>
                                <div class="col-12">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Короткое описание</label>
                                    <textarea name="shot_desc" id="editor"
                                        placeholder="Используется сразу после заголовка"
                                        rows="7">{{ old('full_name') }}</textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Материал корпуса</label>
                                    <input name="material" type="text" placeholder="Материал"
                                        value="{{ old('material') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Напряжение питания</label>
                                    <input name="voltag" type="text" placeholder="Напряжение"
                                        value="{{ old('voltag') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Потребляемая мощность</label>
                                    <input name="power" type="text" placeholder="Питание" value="{{ old('power') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Интерфейс сопряжения</label>
                                    <input name="interface" type="text" placeholder="Интрефейс"
                                        value="{{ old('interface') }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Протокол сопряжения</label>
                                    <input name="protokol" type="text" placeholder="Протокол"
                                        value="{{ old('protokol') }}">
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
                                    <input name="title" type="text" placeholder="Используется в теге title"
                                        value="{{ old('title') }}">
                                </div>
                                <div class="col-12">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Description</label>
                                    <input name="desc" type="text" placeholder="Используется в теге.... description"
                                        value="{{ old('desc') }}">
                                </div>
                                <div class="col-12">
                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Keywords</label>
                                    <input name="keywords" type="text" placeholder="Используется в теге.... keywords"
                                        value="{{ old('keywords') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
                            <div class="d-flex items-center py-20 px-30 border-bottom-light">
                                <h2 class="text-17 lh-1 fw-500">Media</h2>
                            </div>
                            <div class="py-30 px-30">
                                <div class="row y-gap-50">
                                    <div class="col-12">
                                        {{-- <form class="contact-form d-flex lg:flex-column">
                                            <div class="relative shrink-0">
                                                <img class="w-1/1" src="img/dashboard/media/1.png" alt="image">
                                                <div class="absolute-full-center d-flex justify-end py-20 px-20">
                                                    <a href="#"
                                                        class="d-flex justify-center items-center bg-white size-40 rounded-8 shadow-1">
                                                        <i class="icon-bin text-16"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="w-1/1 ml-30 lg:ml-0 lg:mt-20">
                                                <div class="form-upload col-12">
                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Course
                                                        thumbnail*</label>
                                                    <div class="form-upload__wrap">
                                                        <input type="text" name="name" placeholder="Cover-1.png">
                                                        <button class="button -dark-3 text-white">Upload Files</button>
                                                    </div>
                                                </div>
                                                <p class="mt-10">Upload your course image here. It must meet our course
                                                    image quality standards to be accepted. Important guidelines:
                                                    750x440 pixels; .jpg, .jpeg,. gif, or .png. no text on the image.
                                                </p>
                                            </div>
                                        </form> --}}
                                    </div>
                                    <div class="col-12">
                                        {{-- <form class="contact-form d-flex lg:flex-column">
                                            <div class="relative shrink-0">
                                                <img class="w-1/1" src="img/dashboard/media/2.png" alt="image">
                                                <div class="absolute-full-center d-flex justify-end py-20 px-20">
                                                    <a href="#"
                                                        class="d-flex justify-center items-center bg-white size-40 rounded-8 shadow-1">
                                                        <i class="icon-bin text-16"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="w-1/1 ml-30 lg:ml-0 lg:mt-20">
                                                <div class="form-upload col-12">
                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Video
                                                        URL*</label>
                                                    <div class="form-upload__wrap">
                                                        <input type="text" name="name" placeholder="Video-1.mp3">
                                                        <button class="button -dark-3 text-white">Upload Files</button>
                                                    </div>
                                                </div>
                                                <p class="mt-10">Enter a valid video URL. Students who watch a well-made
                                                    promo video are 5X more likely to enroll in your course.</p>
                                            </div>
                                        </form> --}}
                                    </div>
                                </div>
                                <div class="row y-gap-20 justify-between pt-30">
                                    <div class="col-auto">
                                        <button class="button -md -outline-purple-1 text-purple-1">Отмена</button>
                                    </div>
                                    <div class="col-auto">
                                        <button class="button -md -purple-1 text-white">Создать</button>
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
        </script>
        <style>
            .ck-editor__editable {
                height: 300px;
            }
        </style>
</x-admin-layout>