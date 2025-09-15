<x-front.layout>
  <x-slot:title_page>{{ $title_head }}</x-slot>


  <section id="hero" class="flex justify-center items-center  block-abu">
    <div class="container">
      <div class="px-4 lg:px-12 pt-36 py-12">
        <div class="flex flex-col items-center gap-6">
          <h1 class="text-4xl font-bold text-white w-fit text-center lg:text-5xl"
            style="font-family: 'Bebas Neue', sans-serif;" data-aos="zoom-in" data-aos-duration="2000">
            {{ $title_hero }}
          </h1>
          <h3 class="text-xl font-semibold mb-4 text-white w-fit text-center lg:text-2xl" data-aos="zoom-in"
            data-aos-duration="2000">
            DAPATKAN BERITA TERBARU DARI TERAS JOGLO
          </h3>
        </div>
      </div>
    </div>
  </section>



  <section id="body" class="flex justify-center items-center relative overflow-x-hidden">
    <div class="container">
      <div class="px-12 lg:px-8 py-14 lg:py-16">
        {{ $neews->links() }}
        <div class="p-4 rounded-xl mt-4"
          style="background: linear-gradient(90deg,rgba(56, 56, 53, 1) 0%, rgba(10, 10, 10, 1) 50%, rgba(56, 56, 53, 1) 100%);">
          <div class="flex flex-wrap items-stretch">
            @forelse($neews as $n)
              <div class="w-full md:w-1/2 lg:w-1/4 p-4 md:p-4 lg:p-6">
                <div class="flex flex-col h-full items-center rounded-lg overflow-hidden ring-2 ring-slate-400 bg-white"
                  data-aos="zoom-out" data-aos-duration="1000">
                  <div class="w-full overflow-hidden">
                    <img src="./storage/{{ $n->img }}" alt="{{ $n->img }}"
                      class="object-cover object-center h-full w-full">
                  </div>
                  <div class="p-4">
                    <p class="text-sm/4 text-slate-800">
                      By {{ $n->author->name }} |
                      {{ $n->created_at->lt(now()->subMonth()) ? $n->created_at->isoFormat('D MMM') : $n->created_at->diffForHumans() }}
                    </p>
                    <h3 class="text-xl lg:text-2xl mb-1 font-extrabold text-black">
                      {{ $n->title }}
                    </h3>
                    <div class="text-base/5 font-semibold text-slate-900 text-justify line-clamp-3">
                      {!! $n->body !!}
                    </div>
                  </div>
                  <div class="p-4 w-full mt-auto">
                    <a href="/news/{{ $n->slug }}"
                      class="flex justify-center items-center text-[1rem] font-semibold text-white py-2 rounded-lg bg-linear-to-t from-[#5CAB27] to-[#81ED39] active:from-[#81ED39] active:to-[#5CAB27] active:text-black">
                      Read more
                    </a>
                  </div>
                </div>
              </div>
            @empty
              <div class="flex justify-center items-center p-4">
                <h1 class="text-white font-bold text-2xl">
                  Saat ini sedang tidak ada Berita !
                </h1>
              </div>
            @endforelse
          </div>
        </div>
      </div>
    </div>
  </section>
</x-front.layout>
