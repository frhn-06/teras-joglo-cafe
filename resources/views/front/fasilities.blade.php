<x-front.layout>
  <x-slot:title_page>{{ $title_head }}</x-slot>

  <section id="hero" class="flex justify-center items-center  block-abu">
    <div class="container">
      <div class="px-4 lg:px-12 pt-36 py-12">
        <div class="flex flex-col items-center gap-6">
          <h1 class="text-4xl font-bold mb-4 text-white w-fit text-center lg:text-5xl"
            style="font-family: 'Bebas Neue', sans-serif;" data-aos="zoom-in" data-aos-duration="2000">
            FASILITAS <span class="text-[#81ed39]">{{ $title_hero }}</span>
          </h1>
        </div>
      </div>
    </div>
  </section>


  <section id="body" class="flex justify-center items-center relative overflow-x-hidden overflow-y-hidden">
    <div class="p-2 overflow-hidden w-full"
      style="background: linear-gradient(90deg,rgba(56, 56, 53, 1) 0%, rgba(10, 10, 10, 1) 50%, rgba(56, 56, 53, 1) 100%);">
      <div class="flex flex-wrap">
        <div class="flex flex-col items-center justify-center w-full md:w-1/2 lg:w-1/3 p-8">
          <img src="./img/fasilities/outdor.jpg" alt="foto-fasilitas-1" class="w-full" data-aos="zoom-out"
            data-aos-duration="1200">
          <div class="flex justify-center items-center mt-4">
            <h2 class="text-xl text-white lg:text-2xl font-semibold" data-aos="zoom-in" data-aos-duration="1000">
              Outdoor Set
            </h2>
          </div>
        </div>
        <div class="flex flex-col items-center justify-center w-full md:w-1/2 lg:w-1/3 p-8">
          <img src="./img/fasilities/indor.jpg" alt="foto-fasilitas-2" class="w-full" data-aos="zoom-out"
            data-aos-duration="1200">
          <div class="flex justify-center items-center mt-4">
            <h2 class="text-xl text-white lg:text-2xl font-semibold" data-aos="zoom-in" data-aos-duration="1000">
              Indoor Set
            </h2>
          </div>
        </div>
        <div class="flex flex-col items-center justify-center w-full md:w-1/2 lg:w-1/3 p-8">
          <img src="./img/fasilities/tamancafe.jpg" alt="foto-fasilitas-3" class="w-full" data-aos="zoom-out"
            data-aos-duration="1200">
          <div class="flex justify-center items-center mt-4">
            <h2 class="text-xl text-white lg:text-2xl font-semibold" data-aos="zoom-in" data-aos-duration="1000">
              Park
            </h2>
          </div>
        </div>
        <div class="flex flex-col items-center justify-center w-full md:w-1/2 lg:w-1/3 p-8">
          <img src="./img/fasilities/mushola.jpg" alt="foto-fasilitas-4" class="w-full" data-aos="zoom-out"
            data-aos-duration="1200">
          <div class="flex justify-center items-center mt-4">
            <h2 class="text-xl text-white lg:text-2xl font-semibold" data-aos="zoom-in" data-aos-duration="1000">
              Mushola
            </h2>
          </div>
        </div>
        <div class="flex flex-col items-center justify-center w-full md:w-1/2 lg:w-1/3 p-8">
          <img src="./img/fasilities/toilet.jpg" alt="foto-fasilitas-5" class="w-full" data-aos="zoom-out"
            data-aos-duration="1200">
          <div class="flex justify-center items-center mt-4">
            <h2 class="text-xl text-white lg:text-2xl font-semibold" data-aos="zoom-in" data-aos-duration="1000">
              Toilet
            </h2>
          </div>
        </div>
        <div class="flex flex-col items-center justify-center w-full md:w-1/2 lg:w-1/3 p-8">
          <img src="./img/fasilities/lifemusiccafe.jpg" alt="foto-fasilitas-6" class="w-full" data-aos="zoom-out"
            data-aos-duration="1200">
          <div class="flex justify-center items-center mt-4">
            <h2 class="text-xl text-white lg:text-2xl font-semibold" data-aos="zoom-in" data-aos-duration="1000">
              Life Music
            </h2>
          </div>
        </div>
        <div class="flex flex-col items-center justify-center w-full md:w-1/2 lg:w-1/3 p-8">
          <img src="./img/fasilities/meetingroom.jpg" alt="foto-fasilitas-7" class="w-full" data-aos="zoom-out"
            data-aos-duration="1200">
          <div class="flex justify-center items-center mt-4">
            <h2 class="text-xl text-white lg:text-2xl font-semibold" data-aos="zoom-in" data-aos-duration="1000">
              Meeting / Family Room
            </h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-front.layout>
