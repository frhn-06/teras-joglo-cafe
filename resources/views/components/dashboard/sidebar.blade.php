{{-- <section id="sidebar" class="w-64 block-abu min-h-svh">
  <div class="">
    <div class="flex py-6">
      <div class="w-full">
        <a href="" class="title">
          <span class="block text-base/4 text-white/80">
            {{auth()->user()->name}}
          </span>
          <span class="text-lg text-white font-bold">
            TERAS JOGLO
          </span>
        </a>
        <div class="logo h-24 w-24 mx-auto rounded-full overflow-hidden mt-2">
          <img src="./img/logo/terasjoglologo.png" alt="" class="h-full">
        </div>
      </div>
    </div>
    <div class="border-t-1 border-t-white/50">
      <div>
        <a href="" class="flex items-center rounded-lg py-2 px-6 hover:bg-green-600/20">
          <i data-feather="clipboard" class="h-5 w-5 text-white mr-2"></i>
          <span class="link-nav-tulisan text-white text-base font-[400]">
            Dashboard
          </span>
        </a>
        <a href="" class="flex items-center rounded-lg py-2 px-6 hover:bg-green-600/20">
          <i data-feather="archive" class="h-5 w-5 text-white mr-2"></i>
          <span class="link-nav-tulisan text-white text-base font-[400]">
            Menu
          </span>
        </a>
        <a href="" class="flex items-center rounded-lg py-2 px-6 hover:bg-green-600/20">
          <i data-feather="book-open" class="h-5 w-5 text-white mr-2"></i>
          <span class="link-nav-tulisan text-white text-base font-[400]">
            News
          </span>
        </a>
        <a href="" class="flex items-center rounded-lg py-2 px-6 hover:bg-green-600/20">
          <i data-feather="settings" class="h-5 w-5 text-white mr-2"></i>
          <span class="link-nav-tulisan text-white text-base font-[400]">
            Settings
          </span>
        </a>
      </div>
    </div>
  </div>
</section> --}}





<section id="sidebar" class="sidebar min-h-svh block-abu overflow-hidden md:w-58 w-0 transition-all">
  <div class="sidebar-up md:h-36 p-2 md:p-0 flex items-center justify-center overflow-hidden transition-all">
    <div class="flex items-center flex-wrap">
      <div class="logo w-full rounded-full overflow-hidden md:w-18 mx-auto md:mx-0">
        <img src="/img/logo/terasjoglologo.png" alt="logo-teras-joglo" class="w-full">
      </div>
      <div class="sidebar-title hidden md:block w-full mt-2">
        <span class="text-white ">
          {{auth()->user()->name}}
        </span>
        <h1 class="text-white/70 text-sm font-bold">
          TERAS JOGLO
        </h1>
      </div>  
    </div>
  </div>
  <div class="border-t-1 border-t-white">
    <div class="">
      <a href="/dashboard" class="list-link w-full flex items-center justify-center md:justify-start gap-2 p-2 md:p-4 relative">
        <div class="el_hover_list absolute top-0 right-0 left-0 bottom-0 bg-green-700/50 w-[0%]"></div>
        <div class="{{request()->is('dashboard') ? 'link-active' : ''}} absolute top-0 right-0 left-0 bottom-0 w-[2px] bg-white/70 hidden"></div>
        <i data-feather="clipboard" class="sidebar-iconLink text-white w-6 h-6 md:w-5 md:h-5 z-5"></i>
        <span class="sidebar-spanLink hidden md:inline text-white z-5">
          Dashboard
        </span>
      </a>
      <a href="/dashboard/menu" class="list-link w-full flex items-center justify-center md:justify-start gap-2 p-2 md:p-4 relative">
        <div class="el_hover_list absolute top-0 right-0 left-0 bottom-0 bg-green-700/50 w-[0%]"></div>
        <div class="{{request()->is('dashboard/menu*') ? 'link-active' : ''}} absolute top-0 right-0 left-0 bottom-0 w-[2px] bg-white/70 hidden"></div>
        <i data-feather="coffee" class="sidebar-iconLink text-white w-6 h-6 md:w-5 md:h-5 z-5"></i>
        <span class="sidebar-spanLink hidden md:inline text-white z-5">
          Menu
        </span>
      </a>
      <a href="/dashboard/news" class="list-link w-full flex items-center justify-center md:justify-start gap-2 p-2 md:p-4 relative">
        <div class="el_hover_list absolute top-0 right-0 left-0 bottom-0 bg-green-700/50 w-[0%]"></div>
        <div class="{{request()->is('dashboard/news*') ? 'link-active' : ''}} absolute top-0 right-0 left-0 bottom-0 w-[2px] bg-white/70 hidden"></div>
        <i data-feather="book-open" class="sidebar-iconLink text-white w-6 h-6 md:w-5 md:h-5 z-5"></i>
        <span class="sidebar-spanLink hidden md:inline text-white z-5">
          News
        </span>
      </a>
      <a href="/dashboard/settings" class="list-link w-full flex items-center justify-center md:justify-start gap-2 p-2 md:p-4 relative">
        <div class="el_hover_list absolute top-0 right-0 left-0 bottom-0 bg-green-700/50 w-[0%]"></div>
        <div class="{{request()->is('dashboard/settings*') ? 'link-active' : ''}} absolute top-0 right-0 left-0 bottom-0 w-[2px] bg-white/70 hidden"></div>
        <i data-feather="settings" class="sidebar-iconLink text-white w-6 h-6 md:w-5 md:h-5 z-5"></i>
        <span class="sidebar-spanLink hidden md:inline text-white z-5">
          Settings
        </span>
      </a>
    </div>
  </div>
</section>