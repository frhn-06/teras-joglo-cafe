<x-front.layout>
  <x-slot:title_page>{{ $title_head }}</x-slot>


  <section id="hero" class="flex justify-center"
    style="background-image: url('./img/hero/hero-home2.png'); background-size:cover; background-position:center;">
    <div class="container min-h-svh flex items-center">
      <div class=" px-4 lg:px-24">
        <h1 class="text-5xl font-bold mb-4 text-white lg:text-7xl" style="font-family: 'Bebas Neue', sans-serif;"
          data-aos="zoom-in" data-aos-duration="2000">
          WELCOME TO<br><span class="text-[#81ed39]">{{ $title_hero }}</span> CAFE'
        </h1>
        <p class="text-white font-semibold text-lg/6 lg:text-xl/6 lg:max-w-2/3"
          style="font-family: 'Raleway', sans-serif;" data-aos="zoom-in" data-aos-duration="2000">
          {{ $body_hero }}
        </p>
        <br>
        <a href="/contact"
          class="text-lg text-white font-semibold inset-shadow-sm inset-shadow-slate-500 lg:text-xl py-2 px-4 rounded-lg bg-linear-to-t from-[#5CAB27] to-[#81ED39] hover:bg-linear-to-t hover:from-[#81ED39] hover:to-[#5CAB27] hover:ransition-color hover:duration-300 active:from-[#81ED39] active:to-[#5CAB27] active:text-black"
          style="" data-aos="zoom-in" data-aos-duration="2000">
          Hubungi Kami
        </a>
      </div>
    </div>
  </section>

  <section id="promotion" class="flex flex-col items-center justify-center overflow-x-hidden">
    <div class="carausel-container relative h-18 overflow-x-hidden w-full"
      style="background: linear-gradient(270deg,rgba(129, 237, 57, 1) 0%, rgba(108, 196, 49, 1) 50%, rgba(85, 153, 40, 1) 100%); white-space:nowrap;">
      <div class="carausel-content flex justify-start items-center h-full">
        {{-- <span class="h-16">
          <img src="./img/promotion/pngtree-man-jawa-surjan-blangkon-dringking-coffee-thumb-up-png-image_4228128-removebg-preview.png" alt="" class="h-full">
        </span> --}}
        <p class="text-2xl font-semibold text-white">
          SETIAP MALAM MINGGU: LIVE AKUSTIK DI TERAS JOGLO. YUK DATANG DAN NIKMATI SUASANA HANGAT KALIAN! ~ PROMO
          SPESIAL: BELI 2 KOPI TRADISIONAL GRATIS 1 PISANG GORENG LEGIT! ~ TERSEDIA RUANG LESEHAN, JOGLO KLASIK, DAN
          TAMAN TERBUKA UNTUK ACARA SPESIAL ANDA.
        </p>
      </div>
    </div>
    <div class="container">
      <div class="p-4">

      </div>
    </div>
  </section>

  <section id="about-in-home" class="flex justify-center relative overflow-x-hidden">
    <div class="container">
      <div class="px-4 lg:px-12 py-24">
        <div class="flex flex-col-reverse gap-8 rounded-xl px-10 py-8 lg:flex-row"
          style="background: linear-gradient(0deg,rgba(60, 66, 57, 1) 0%, rgba(103, 115, 99, 1) 100%);"
          data-aos="zoom-out" data-aos-duration="800">
          <div class="flex-1 flex items-center">
            <div class="">
              <h2 class="text-2xl lg:text-3xl text-white font-bold">
                TENTANG KAMI
              </h2>
              <br>
              <P class="text-lg/6 lg:text-xl/6 text-white ">
                {{ $about_in_home }}
              </P>
              <br>
              <a href="/about"
                class="text-lg text-white font-semibold inset-shadow-sm inset-shadow-slate-500 lg:text-xl py-2 px-4 rounded-lg bg-linear-to-t from-[#5CAB27] to-[#81ED39] hover:bg-linear-to-t hover:from-[#81ED39] hover:to-[#5CAB27] hover:ransition-color hover:duration-300 active:from-[#81ED39] active:to-[#5CAB27] active:text-black"
                style="">
                Selengkapnya
              </a>
            </div>
          </div>
          <div class="flex-1">
            <div class="rounded-xl overflow-hidden">
              <img src="./img/homeimg.png" alt="foto-about" class="w-full">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section id="news-in-home" class="flex justify-center relative overflow-x-hidden">
    <div class="container">
      <div class="px-4 lg:px-12 py-24">
        <div class="h-18 lg:h-24 w-full linear-hijau rounded-2xl flex justify-center items-center mb-4 lg:mb-6"
          data-aos="flip-down" data-aos-duration="800">
          <h1 class="font-bold text-2xl lg:text-2xl text-white">
            JOGLO NEWS
          </h1>
        </div>
        <div
          class="scrollbar-wadah-news hilang-chrome hilang-firefox w-full overflow-x-auto snap-x snap-mandatory scroll-smooth relative">
          <div class="flex track-scroll transition-all duration-500 ease-in-out -z-10">
            @forelse($neews_in_home as $n)
              <div class="item-news p-4 flex-shrink-0 snap-start w-full md:w-1/2 lg:w-1/3">
                <div class="rounded-2xl overflow-hidden ring-2 ring-slate-400" data-aos="zoom-out"
                  data-aos-duration="800">
                  <div class="flex flex-col">
                    <div class="w-full">
                      <img src="./storage/{{ $n->img }}" alt="{{ $n->img }}" class="w-full">
                    </div>
                    <div class="p-4">
                      <p class="text-sm/5 text-slate-600">
                        By {{ $n->author->name }} | {{ $n->created_at }}
                      </p>
                      <h3 class="text-xl/6 font-bold mb-2">
                        {{ $n->title }}
                      </h3>
                      <p>
                      <div class="text-lg/5 text-justify mb-6 line-clamp-3">
                        {!! $n->body !!}
                      </div>
                      <a href="/news/{{ $n->slug }}"
                        class="py-2 flex justify-center items-center rounded-xl linear-hijau text-lg lg:text-xl text-white active:from-[#81ED39] active:to-[#5CAB27] active:text-black">
                        Read more >
                      </a>
                    </div>
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
        <div class="wadah-btn-scroll hidden lg:flex justify-center items-center py-4 gap-4">
          <button class="btn-scroll-left py-1 px-3 rounded-xl linear-hijau">
            <i data-feather="arrow-left" class="text-white h-8 w-8"></i>
          </button>
          <button class="btn-scroll-right py-1 px-3 rounded-xl linear-hijau">
            <i data-feather="arrow-right" class="text-white h-8 w-8"></i>
          </button>
        </div>
      </div>
    </div>
  </section>
</x-front.layout>


<script>
  // promotion 

  const carauselContainer = document.getElementsByClassName('carausel-container')[0];
  const carauselContent = document.getElementsByClassName('carausel-content')[0];
  let widthCarauselContainer = carauselContainer.offsetWidth;
  let widthCarauselContent = carauselContent.offsetWidth;

  function scrollPromotion() {
    const style = document.createElement('style');
    style.innerHTML =
      `
  @keyframes jalan {
   0% {
    transform: translateX(${widthCarauselContainer}px);
   } 100% {
    transform: translateX(-${widthCarauselContent}px);
    }
  }

  .carausel-content {
  animation: jalan 35s linear infinite;
  }
  `;
    document.head.appendChild(style);
  }

  scrollPromotion();


  // news 
  const container = document.getElementsByClassName('scrollbar-wadah-news')[0];
  let isDown = false;
  let startX;
  let scrollLeft;

  container.addEventListener('mousedown', (e) => {
    isDown = true;
    container.classList.add('active');
    startX = e.pageX - container.offsetLeft;
    scrollLeft = container.scrollLeft;
  });

  container.addEventListener('mouseleave', () => {
    isDown = false;
    container.classList.remove('active');
  });

  container.addEventListener('mouseup', () => {
    isDown = false;
    container.classList.remove('active');
  });

  container.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - container.offsetLeft;
    const walk = (x - startX) * 1; // faktor kecepatan scroll
    container.scrollLeft = scrollLeft - walk;
  });






  const track = document.getElementsByClassName('track-scroll')[0];
  const itemNews = document.getElementsByClassName('item-news');
  const jumlahItem = itemNews.length;
  const itemTerlihat = 3;
  let itemKiri = 0;

  const btnLeft = document.querySelector('.btn-scroll-left');
  const btnRight = document.querySelector('.btn-scroll-right');


  function updateSliderNews() {
    const lebarItem = itemNews[0].offsetWidth;
    track.style.transform = `translateX(-${itemKiri * lebarItem}px)`;

    btnLeft.disabled = itemKiri == 0;
    btnRight.disabled = itemKiri >= jumlahItem - itemTerlihat;
  }

  btnLeft.addEventListener('click', () => {
    itemKiri--;
    updateSliderNews();
  });

  btnRight.addEventListener('click', () => {
    itemKiri++;
    updateSliderNews();
  });


  updateSliderNews();
</script>
