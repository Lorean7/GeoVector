<x-admin-layout>
  <div class="dashboard__content bg-light-4" id="app">
    <div class="row y-gap-20 justify-between pt-15">
      <div class="col-auto">
        {{-- <button class="button -md -outline-purple-1 text-purple-1">Prev</button> --}}
      </div>

      <div class="col-auto">
        <a href="{{ route('product.create') }}" class="button -md -purple-1 text-white">Добавить новый продукт</a>
      </div>
    </div>
    <div class="mt-40">
      <div class="px-30 py-20 bg-light-7 rounded-8">
        <div class="row x-gap-10">
          <div class="col-lg-1">
            <div class="text-purple-1">id </div>
          </div>
          <div class="col-lg-4">
            <div class="text-purple-1">Короткое название</div>
          </div>
          <div class="col-lg-3">
            <div class="text-purple-1">Дата создания</div>
          </div>
          <div class="col-lg-3">
            <div class="text-purple-1">Дата редактирования</div>
          </div>
          <div class="col-lg-1">
            <div class="text-purple-1">Опубликовано</div>
          </div>
        </div>
      </div>
      @foreach ($products as $product)
      <div class="px-30 border-bottom-light">
        <div class="row x-gap-10 items-center py-25">
          <div class="col-lg-1">
            {{ $product->id }}
          </div>
          <div class="col-lg-4">
            <div class="text-purple-1"><a href="{{ route('product.edit',$product->id) }}">{{ $product->shot_name }}</a></div>
          </div>

          <div class="col-lg-3">
            <div class="text-14 lh-12 mt-5">{{ $product->created_at }}</div>
          </div>

          <div class="col-lg-3">
            <div class="text-14 lh-12 mt-5">{{ $product->updated_at }}</div>
          </div>



          <div class="col-lg-1">
            <div class="d-flex items-center">
              <div><v-publish :check="{{ $product->publish }}" :id="{{ $product->id }}"></div>
                {{-- <div class="icon-bin"></div> --}}
            </div>
          </div>
        </div>
      </div>
      @endforeach



    </div>
  </div>
</x-admin-layout>