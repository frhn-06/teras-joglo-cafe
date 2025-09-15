 {{-- <?php
 use Illuminate\Support\Facades\Request;
 ?>
<x-front.layout>
<x-slot:title_page>{{$title_head}}</x-slot>


  <section id="hero" class="flex justify-center items-center  block-abu">
    <div class="container">
      <div class="px-4 lg:px-12 pt-36 py-12">
        <div class="flex flex-col items-center gap-6">
          <h1 class="text-4xl font-bold mb-4 text-white w-fit text-center lg:text-5xl" style="font-family: 'Bebas Neue', sans-serif;">
            MENU <span class="text-[#81ed39]">{{$title_hero}}</span>
          </h1>
          <div class="flex gap-4 justify-center items-center flex-wrap">
            <a href="/menu" class="py-2 px-4 rounded-lg ring-1 ring-white text-white hover:bg-white hover:text-[#81ed39] transition-all duration-300 ease-in-out text-lg {{Request::is('menu')? 'link-menu-active' : ''}}">
              Semua
            </a>
            @foreach ($categories as $c) 
            <a href="/menu/{{$c->slug}}" class="py-2 px-4 rounded-lg ring-1 ring-white text-white hover:bg-white hover:text-[#81ed39] transition-all duration-300 ease-in-out text-lg {{Request::is('menu/' . $c->slug .'')? 'link-menu-active' : ''}}">
              {{$c->name}}
            </a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="body" class="flex justify-center items-center">
    <div class="p-2 overflow-hidden w-full" style="background: linear-gradient(90deg,rgba(56, 56, 53, 1) 0%, rgba(10, 10, 10, 1) 50%, rgba(56, 56, 53, 1) 100%);">
      <div class="flex flex-wrap justify-center items-center">
        @if (Request::is('menu'))
        @forelse($menus as $menu)
        <div class="w-full sm:w-1/3 md:w-1/5 lg:w-1/7 p-4 rounded-xl overflow-hidden">
          <div class="aspect-square overflow-hidden ring-4 ring-white/70 rounded-xl"> 
            <img src="{{asset('storage/' . $menu->img )}}" alt="foto-{{$menu->slug}}" class="w-full h-full object-center object-cover">
          </div>
        </div>
        @empty
        <div class="flex justify-center items-center p-4">
          <h1 class="text-white font-bold text-2xl">
            Menu sedang kosong !  
          </h1>  
        </div>   
        @endforelse
        @else
        @forelse ($put_menu_in_here as $menu_in_here)
        <div class="w-full sm:w-1/3 md:w-1/5 lg:w-1/7 p-4 rounded-xl overflow-hidden">
          <div class="aspect-square overflow-hidden ring-4 ring-white/70 rounded-xl"> 
            <img src="{{asset('storage/' . $menu_in_here->img )}}" alt="foto-{{$menu_in_here->slug}}" class="w-full h-full object-center object-cover">
          </div>
        </div>
        @empty
        <div class="flex justify-center items-center p-4">
          <h1 class="text-white font-bold text-2xl">
            Menu sedang kosong !  
          </h1>  
        </div>   
        @endforelse
        @endif
      </div>
    </div>
  </section>


</x-front.layout> --}}



































 {{-- -------------------------- --}}

































 <?php
 use Illuminate\Support\Facades\Request;
 ?>
 <x-front.layout>
   <x-slot:title_page>{{ $title_head }}</x-slot>


   <section id="hero" class="flex justify-center items-center  block-abu">
     <div class="container">
       <div class="px-4 lg:px-12 pt-36 py-12">
         <div class="flex flex-col items-center gap-6">
           <h1 class="text-4xl font-bold mb-4 text-white w-fit text-center lg:text-5xl"
             style="font-family: 'Bebas Neue', sans-serif;" data-aos="zoom-in" data-aos-duration="2000">
             MENU <span class="text-[#81ed39]">{{ $title_hero }}</span>
           </h1>
           <div class="flex gap-4 justify-center items-center flex-wrap">
             <a href=""
               class="link-menu py-2 px-4 rounded-lg ring-1 ring-white text-white hover:bg-white hover:text-[#81ed39] transition-all duration-300 ease-in-out text-lg link-menu-active"
               data-aos="zoom-in" data-aos-duration="2000">
               Semua
             </a>
             @foreach ($categories as $c)
               <a href="" data="{{ $c->slug }}"
                 class="link-menu py-2 px-4 rounded-lg ring-1 ring-white text-white hover:bg-white hover:text-[#81ed39] transition-all duration-300 ease-in-out text-lg"
                 data-aos="zoom-in" data-aos-duration="2000">
                 {{ $c->name }}
               </a>
             @endforeach
             <a href="" data="diskon"
               class="link-menu py-2 px-4 rounded-lg ring-1 ring-white text-white hover:bg-white hover:text-[#81ed39] transition-all duration-300 ease-in-out text-lg"
               data-aos="zoom-in" data-aos-duration="2000">
               Diskon
             </a>
           </div>
         </div>
       </div>
     </div>
   </section>

   <section id="body" class="flex justify-center items-center">
     <div class="px-2 py-12 md:py-14 lg:py-18 overflow-hidden w-full"
       style="background: linear-gradient(90deg,rgba(56, 56, 53, 1) 0%, rgba(10, 10, 10, 1) 50%, rgba(56, 56, 53, 1) 100%);">
       <div class="menu-container flex flex-wrap justify-center items-center">
         @forelse($menus as $menu)
           <div class="w-full sm:w-1/3 md:w-1/5 lg:w-1/7 p-4 rounded-xl overflow-hidden">
             <div class="aspect-square overflow-hidden ring-4 ring-white/70 rounded-xl" data-aos="zoom-in"
               data-aos-duration="2000">
               <img src="{{ asset('storage/' . $menu->img) }}" alt="foto-{{ $menu->slug }}"
                 class="w-full h-full object-center object-cover hover:scale-110 transition-all duration-300">
             </div>
           </div>
         @empty
           <div class="flex justify-center items-center p-4">
             <h1 class="text-white font-bold text-2xl">
               Menu sedang kosong !
             </h1>
           </div>
         @endforelse
       </div>
     </div>
   </section>

   <div
     class="loading items-center justify-between hidden w-24 h-14 fixed top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%]">
     <div class="loading-item rounded-full h-3 w-3 bg-white"></div>
     <div class="loading-item rounded-full h-3 w-3 bg-white"></div>
     <div class="loading-item rounded-full h-3 w-3 bg-white"></div>
     <div class="loading-item rounded-full h-3 w-3 bg-white"></div>
     <div class="loading-item rounded-full h-3 w-3 bg-white"></div>
   </div>

 </x-front.layout>




 <script>
   const linkMenu = document.querySelectorAll('.link-menu');
   const menuContainer = document.getElementsByClassName('menu-container')[0];


   linkMenu.forEach(l => {

     l.addEventListener('click', (e) => {
       e.preventDefault();

       hapusBgLink();

       l.classList.add('link-menu-active');

       const data = l.getAttribute('data');
       if (data) {
         tampilLoading();
         fetch('/menu?category=' + encodeURIComponent(data), {
             headers: {
               "X-Requested-With": "XMLHttpRequest"
             }
           })
           .then(response => response.json())
           .then(data => tampilkanData(data))
           .finally(() => {
             hilangLoading();
           });
       } else {
         tampilLoading();
         fetch('/menu', {
             headers: {
               "X-Requested-With": "XMLHttpRequest"
             }
           })
           .then(response => response.json())
           .then(data => tampilkanData(data))
           .finally(() => {
             hilangLoading();
           });
       }
     });
   });



   // hapus background link

   function hapusBgLink() {
     linkMenu.forEach(l => {
       l.classList.remove('link-menu-active');
     });
   }


   // loading start
   let loadingInterval;

   function intervalLoading(loadingItem) {
     if (loadingInterval) {
       clearInterval(loadingInterval);
     }

     let jatah = 0;

     loadingInterval = setInterval(() => {


       loadingItem[jatah].classList.add('active');

       jatah++;
       if (jatah >= loadingItem.length) {
         jatah = 0;
       }

     }, 150);
   }

   function tampilLoading() {
     const loading = document.querySelector('.loading');
     const loadingItem = loading.querySelectorAll('.loading-item');

     loading.classList.add('muncul');

     intervalLoading(loadingItem);
   }

   function hilangLoading() {
     const loading = document.querySelector('.loading');
     const loadingItem = loading.querySelectorAll('.loading-item');
     loading.classList.remove('muncul');
     loadingItem.forEach(item => item.classList.remove('active'));

     clearInterval(loadingInterval);
   }

   // menampilkan data ketikadi fetch

   function tampilkanData(data) {
     const menus = data.hasil;
     menuContainer.innerHTML = ''; // kosongkan dulu
     if (menus.length === 0) {
       menuContainer.innerHTML = `
        <div class="flex justify-center items-center p-4">
          <h1 class="text-white font-bold text-2xl">
            Menu sedang kosong !  
          </h1>  
        </div>   
      `;
       return;
     }

     menus.forEach(menu => {
       menuContainer.innerHTML += `
        <div class="w-full sm:w-1/3 md:w-1/5 lg:w-1/7 p-4 rounded-xl overflow-hidden">
          <div class="aspect-square overflow-hidden ring-4 ring-white/70 rounded-xl"> 
            <img src="./storage/${menu.img}" alt="foto-${menu.slug}" class="w-full h-full object-center object-cover hover:scale-110 transition-all duration-300">
          </div>
        </div>
      `;
     });
   }
 </script>
