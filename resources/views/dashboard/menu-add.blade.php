<x-dashboard.layout>
<x-slot:title_page>{{$title_head}}</x-slot:title_page>

<main class="min-h-svh bg-[#eee]">
  <div class="px-2 py-4 md:px-4 md:py-6">
    <div class="max-w-lg h-21 rounded-xl bg-white shadow-sm shadow-black/30 flex items-center px-4 mb-8">
      <h1 class="font-bold text-xl md:text-2xl">
        Tambah Menu
      </h1>
    </div>
    <div class="max-w-2xl">
      <form action="/dashboard/menu" enctype="multipart/form-data" method="POST" class="w-full">
      @csrf
        <div class="mb-4">
          <label for="name" class="block w-fit text-lg font-semibold mb-2">
            Nama :
          </label>
          <input type="text" id="name" name="name" required class="inputName text-lg max-w-2xl px-2 py-1 rounded bg-white focus:ring-2 ring-green-400 focus:outline-none @error('name') ring-error @enderror " value="{{old('name')}}">
          @error('name')
          <div>
            <span class="italic text-red-500">
              {{$message}}
            </span>
          </div>
          @enderror
        </div>
        {{-- <div class="mb-4">
          <label for="name" class="block w-fit text-lg font-semibold mb-2">
            Slug :
          </label>
          <input type="text" id="slug" name="slug" required class="slugMenu text-lg max-w-2xl px-2 py-1 rounded bg-white focus:ring-2 ring-green-400 focus:outline-none">
        </div> --}}
        <div class="mb-4">
          <label for="category" class="block w-fit text-lg font-semibold mb-2">
            Kategori:
          </label>
          <select id="category" name="category_id" required class="text-lg px-2 py-1 rounded bg-white focus:outline-none">
            @foreach ($categories as $c)
            @if(old('category_id')== $c->id)
            <option value="{{$c->id}}" class="border-0" selected>{{$c->name}}</option> 
            @else
            <option value="{{$c->id}}" class="border-0">{{$c->name}}</option> 
            @endif
            @endforeach
          </select>
        </div>
        <div class="mb-4">
          <label for="discount" class="block w-fit text-lg font-semibold mb-2">
            Diskon:
          </label>
          <select id="discount" name="is_diskon" required class="text-lg px-2 py-1 rounded bg-white focus:outline-none">
            @if(old('is_diskon') == '0')
            <option value="0" class="border-0" selected>No Discount</option> 
            <option value="1" class="border-0">Discount</option> 
            @elseif(old('is_diskon') == '1')
            <option value="0" class="border-0">No Discount</option> 
            <option value="1" class="border-0" selected>Discount</option> 
            @else
            <option value="0" class="border-0">No Discount</option> 
            <option value="1" class="border-0">Discount</option> 
            @endif
          </select>
        </div>
        <div class="mb-4">
          <label for="img" class="block w-fit text-lg font-semibold mb-2">
            Foto :
          </label>
          <input type="file" id="img" name="img" required class="input-img bg-slate-300 max-w-xl text-sm px-2 py-1 rounded">
         @error('img')
          <div>
            <span class="italic text-red-500">
              {{$message}}
            </span>
          </div>
          @enderror
          <img alt="" class="preview-img w-24 h-24 mt-4 object-center object-cover hidden">
        </div>
        <button type="submit" class="text-white text-lg font-semibold bg-green-500 rounded px-2 py-1 active:from-[#81ED39] active:to-[#5CAB27] active:text-black">
          Simpan
        </button>
      </form>
    </div>
  </div>
</main>

</x-dashboard.layout>
<script>
  // const name = document.querySelector('.inputName');
  // const slug = document.querySelector('.slugMenu');
  // name.addEventListener('change', () => {
  //   fetch('/dashboard/menu/checkSlug?name=' + name.value)
  //   .then(res => res.json())
  //   .then(data => slug.value = data.slug)
  // });

  const inputImg = document.querySelector('.input-img');
  const previewImg = document.querySelector('.preview-img');
  inputImg.addEventListener('change', () => {
    previewImg.style.display = 'block';

    const ofReader = new FileReader();
    ofReader.readAsDataURL(inputImg.files[0]);

    ofReader.onload = function(ofEvent) {
      previewImg.setAttribute('src', ofEvent.target.result);
    }
});
</script>
