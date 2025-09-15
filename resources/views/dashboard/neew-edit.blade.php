<x-dashboard.layout>
<x-slot:title_page>{{$title_head}}</x-slot:title_page>


<main class="min-h-svh bg-[#eee]">
  <div class="px-2 py-4 md:px-4 md:py-6">
    <div class="max-w-lg h-21 rounded-xl bg-white shadow-sm shadow-black/30 flex items-center px-4 mb-8">
      <h1 class="font-bold text-xl md:text-2xl">
        Edit Berita
      </h1>
    </div>
    <div class="max-w-2xl">
      <form action="/dashboard/news/{{$neew->slug}}" enctype="multipart/form-data" method="POST" class="w-full">
      @method('put')
      @csrf
        <div class="mb-4">
          <label for="title" class="block w-fit text-lg font-semibold mb-2">
            Judul :
          </label>
          <input type="text" id="title" name="title" required class="input-title text-lg w-full md:max-w-3xl px-2 py-1 rounded bg-white focus:ring-2 ring-green-400 focus:outline-none @error('title') ring-error @enderror" value="{{old('title') ? old('title') : $neew->title}}" >
          @error('title')
          <div>
            <span class="italic text-red-500">
              {{$message}}
            </span>
          </div>
          @enderror
        </div>
        {{-- <div class="mb-4">
          <label for="slug" class="block w-fit text-lg font-semibold mb-2">
            Slug :
          </label>
          <input type="text" id="slug" name="slug" required class="input-slug text-lg max-w-2xl px-2 py-1 rounded bg-white focus:ring-2 ring-green-400 focus:outline-none" value="{{old('slug')}}"">
        </div> --}}
        <div class="mb-4">
          <label for="img" class="block w-fit text-lg font-semibold mb-2">
            Foto :
          </label>
          <input type="hidden" name="old-img" value="{{$neew->img}}">
          <input type="file" id="img" name="img" class="input-img bg-slate-300 max-w-xl text-sm px-2 py-1 rounded" value="{{old('img')}}">
          @error('img')
          <div>
            <span class="italic text-red-500">
              {{$message}}
            </span>
          </div>
          @enderror
          <img src="/storage/{{$neew->img}}" alt="" class="preview-img w-24 h-24 mt-4 object-center object-cover">
        </div>
        <div class="mb-4">
          <label for="body" class="block w-fit text-lg font-semibold mb-2">
            Isi :
          </label>
          <input id="body" type="hidden" value="{{old('body') ? old('body') : $neew->body}}" name="body" required>
          <trix-editor input="body"  class="bg-white border-none"></trix-editor>
          @error('body')
          <div>
            <span class="italic text-red-500">
              {{$message}}
            </span>
          </div>
          @enderror
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
  const inputImg = document.querySelector('.input-img');
  const previewImg = document.querySelector('.preview-img');
  inputImg.addEventListener('change', () => {
    const pembaca = new FileReader();
    pembaca.readAsDataURL(inputImg.files[0]);

    pembaca.onload = function(hasil) {
      previewImg.setAttribute('src', hasil.target.result);
    }
  });
</script>