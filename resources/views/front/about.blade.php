<x-front.layout>
  <x-slot:title_page>{{ $title_head }}</x-slot>

  <section id="hero" class="flex justify-center relative overflow-x-hidden"
    style="background-image: url('./img/hero/hero-about2.jpg'); background-size:cover; background-position:center;">
    <div class="container min-h-svh flex items-center">
      <div class=" px-4 lg:px-24 pt-46 pb-22">
        <div
          class="flex flex-col lg:flex-row gap-8 bg-black/50 backdrop-opacity-75 p-6 items-center justify-center rounded">
          <div class="flex-1 p-4 rounded-xl h-fit lg:flex-2" data-aos="fade-right" data-aos-duration="2000">
            <h2 class="text-4xl text-white font-bold font-judul-hero lg:text-5xl">
              TENTANG KAMI <span class="text-[#81ed39]">{{ $title_hero }}</span>
            </h2>
            <br>
            <P class="text-white text-lg/6 lg:text-xl/6">
              {{ $about_hero }}
            </P>
          </div>
          <div class="flex-1">
            <div class="flex justify-center items-center rounded overflow-hidden">
              <img src="./img/homeimg.png" alt="foto-about" class="w-full" data-aos="fade-left"
                data-aos-duration="2000">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="detail-about" class="flex justify-center">
    <div class="container">
      <div class="px-4 lg:px-12 py-24">
        <div class="p-6 rounded-xl border-1 border-[#81ed39]" data-aos="zoom-in" data-aos-duration="800">
          <div class="flex flex-col lg:flex-row gap-6">
            <div class="flex-1">
              <h2 class="font-bold font-judul-hero text-3xl text-[#81ed39]">
                TENTANG KAMI
              </h2>
              <p class="text-lg/6 lg:text-xl/6 text-justify">
                {{ $about_tentang }}
              </p>
            </div>
            <div class="flex-1">
              <h2 class="font-bold font-judul-hero text-3xl text-[#81ed39]">
                MENGAPA TERAS JOGLO ?
              </h2>
              <p class="text-lg/6 lg:text-xl/6 text-justify">
                {{ $about_mengapa }}
              </p>
            </div>
            <div class="flex-1">
              <h2 class="font-bold font-judul-hero text-3xl text-[#81ed39]">
                UNTUK APA ?
              </h2>
              <p class="text-lg/6 lg:text-xl/6 text-justify">
                {{ $about_tujuan }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</x-front.layout>
