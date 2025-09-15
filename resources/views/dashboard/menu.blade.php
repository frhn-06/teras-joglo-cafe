<x-dashboard.layout>
<x-slot:title_page>{{$title_head}}</x-slot:title_page>

<main class="min-h-svh bg-[#eee]">
  <div class="px-2 py-4 md:px-4 md:py-6">
    <div class="max-w-lg h-21 rounded-xl bg-white shadow-sm shadow-black/30 flex items-center px-4 mb-8">
      <h1 class="font-bold text-xl md:text-2xl">
        Menu Teras Joglo
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
		
		<a href="/dashboard/menu/create" class="px-3 py-2 text-lg md:text-xl rounded-lg text-white linear-hijau active:from-[#81ED39] active:to-[#5CAB27] active:text-black">
			Tambah menu
		</a>


		<div class="flex flex-wrap mt-6">
			@forelse ($menus as $menu)
			<div class="p-2 w-full lg:w-1/2 xl:w-1/3">
				<div class="rounded-md shadow-sm overflow-hidden shadow-black/20 min-h-32 flex bg-white">
					<img src="{{asset('storage/'.$menu->img)}}" alt="" class="h-32 w-32 object-center object-cover">
					<div class="p-2 h-full flex-1 flex flex-col justify-between">
						<ul>
							<li class="text-sm font-semibold text-slate-700">
								Nama : {{$menu->name}}	
							</li>
							<li class="text-sm font-semibold text-slate-700">
								Kategori : {{$menu->category->name}}
							</li>
              @if($menu->is_diskon)
							<li class="text-sm font-semibold text-slate-700">
								Diskon : Iya
							</li>
              @else
              <li class="text-sm font-semibold text-slate-700">
								Diskon : Tidak
							</li>
              @endif
						</ul>
						<div class="flex w-full gap-2">
							<a href="/dashboard/menu/{{$menu->slug}}/edit" class="rounded-sm flex-1 text-sm text-white text-center px-2 py-1 bg-sky-500">
								Edit	
							</a>
              <form action="/dashboard/menu/{{$menu->slug}}" method="POST" class="flex-1" onsubmit="return confirm('Anda yakin ingin menghapus {{$menu->name}} ?')">
                @method('delete')
                @csrf
                <button type="submit" class="rounded-sm flex-1 text-sm text-white text-center px-2 py-1 bg-red-500 w-full">
                  Hapus
                </button>
              </form>
						</div>
					</div>
				</div>
			</div>
			@empty
			<div class="rounded-xl flex-1 max-w-xl bg-red-300 h-18 flex items-center px-4">
				<span class="text-lg font-semibold text-slate-800">
					Menu Kosong !
				</span>
			</div>
			@endforelse
		</div>
  </div>
</main>


</x-dashboard.layout>