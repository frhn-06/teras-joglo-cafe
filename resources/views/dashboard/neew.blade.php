<x-dashboard.layout>
<x-slot:title_page>{{$title_head}}</x-slot:title_page>


<main class="min-h-svh bg-[#eee]">
  <div class="px-2 py-4 md:px-4 md:py-6">
    <div class="max-w-lg h-21 rounded-xl bg-white shadow-sm shadow-black/30 flex items-center px-4 mb-8">
      <h1 class="font-bold text-xl md:text-2xl">
        Teras Joglo News
      </h1>
    </div>


    @if(session('successAdd'))
    <div class="max-w-xl h-12 rounded-md bg-green-300 px-4 flex items-center mb-4">
      <span class="text-slate-800">
        {{session('successAdd')}}
      </span>
    </div>
    @endif
    @if(session('successDelete'))
    <div class="max-w-xl h-12 rounded-md bg-green-300 px-4 flex items-center mb-4">
      <span class="text-slate-800">
        {{session('successDelete')}}
      </span>
    </div>
    @endif
    @if(session('successEdit'))
    <div class="max-w-xl h-12 rounded-md bg-green-300 px-4 flex items-center mb-4">
      <span class="text-slate-800">
        {{session('successEdit')}}
      </span>
    </div>
    @endif

    <a href="/dashboard/news/create" class="px-3 py-2 text-lg md:text-xl rounded-lg text-white linear-hijau active:from-[#81ED39] active:to-[#5CAB27] active:text-black">
			Tambah Artikel
		</a>



    @if($neews->count() < 1)
    <div class="max-w-xl rounded-md bg-red-300 h-12 flex items-center px-2 md:px-4 mt-6">
      <span class="italic text-slate-800">
        Data News Kosong !
      </span>
    </div>
    @else
    <div class="w-full bg-white mt-6">
      <table class="w-full md:text-lg">
        <thead>
          <tr class="border-b-1">
            <th class="border-r-1 px-1 py-[4px]">
              No
            </th>
            <th class="px-1 py-[4px]">
              Judul
            </th>
            <th class="px-1 py-[4px]">
              Aksi
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach($neews as $n)
          <tr class="border-t-1 border-t-black/30">
            <td class="text-center border-r-1 px-1 py-[4px]">
              {{$loop->iteration}}
            </td>
            <td class="px-1 py-[4px]">
              {{$n->title}}
            </td>
            <td class="flex flex-col md:flex-row items-center gap-1 text-white  justify-center px-1 py-[4px]">
              <a href="/dashboard/news/{{$n->slug}}" class="p-1 rounded bg-green-500">
                <i data-feather="eye"></i>
              </a>
              <a href="/dashboard/news/{{$n->slug}}/edit" class="p-1 rounded bg-sky-500">
                <i data-feather="edit"></i>
              </a>
              <form action="/dashboard/news/{{$n->slug}}" method="POST" onsubmit="return confirm('anda yakin ingin menghapus ini ?');">
                @method('delete')
                @csrf
                <button type="submit" class="p-1 rounded bg-red-500">
                  <i data-feather="trash"></i>
                </button>
              </form>
            </td>
          </tr>   
          @endforeach       
        </tbody>
      </table>
    </div>
    @endif
  </div>
</main>

</x-dashboard.layout>