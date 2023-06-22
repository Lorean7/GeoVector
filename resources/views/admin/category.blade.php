<x-admin-layout>
    <div class="dashboard__content bg-light-4">
        <div class="dashboard__content bg-light-4">
            <div class="row pb-50 mb-10">
                <div class="col-auto">
                    <h1 class="text-30 lh-12 fw-700">Редактировать категорию</h1>
                </div>
                {{-- @json($errors->all()) --}}
                {{-- {{$old??''}} --}}
                @if ($errors->has('alias'))
                    <div class="d-flex items-center justify-between bg-error-1 pl-30 pr-20 py-30 rounded-8">
                        <div class="text-error-2 lh-1 fw-500">{{ $errors->first('alias') }}</div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-x text-error-2 size-20">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </div>
                @endif

            </div>
            <div class="row y-gap-60">
                {{count($phpArray)}}
                {{-- @json($phpArray['shop']['categories']) --}}
                @foreach ($phpArray as $category)
                <li>{{count($category['pictures'])}}</li>
                @endforeach 
            </div>
        </div>
        <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create(document.querySelector('#editor'), {
                    height: '400px'
                })
                .catch(error => {
                    console.error(error);
                });
            ClassicEditor
                .create(document.querySelector('#editor2'), {
                    height: '400px'
                })
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
