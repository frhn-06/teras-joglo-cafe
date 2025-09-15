  <section id="navbar" class="absolute top-0 left-0 right-0 flex justify-center z-40" data-aos="fade-down"
    data-aos-duration="2000">
    <div class="container lg:px-4">
      <div class="relative flex justify-between items-center">
        <h1 class="py-4 pl-4">
          <a href="/"
            class="logo-head text-[#81ed39] text-2xl text-shadow-lg shadow-black/20 font-bold md:text-4xl lg:text-5xl"
            style="font-family:'Pacifico', cursive; font-weight: <weight>">
            Teras Joglo
          </a>
        </h1>
        <nav
          class="nav-atas py-0 absolute top-full shadow-xl shadow-black/30 right-0 bg-[#85837d] min-w-2/3 lg:shadow-none lg:bg-transparent lg:min-w-0 lg:static lg:pr-18 transition-all duration-500 rotate-x-[90deg] lg:rotate-x-[0deg]"
          style="transform-origin: top center; transform-style: preserve-3d; backface-visibility: hidden;">
          <ul class="flex flex-col lg:p-0 lg:flex-row lg:gap-6">
            <li class="navItems flex flex-col items-start lg:items-center lg:m-0 lg:py-4 relative">
              <div class="hidden h-6 w-3 rounded-full bg-white absolute -top-full transition-all duration-500 lg:block">

              </div>
              <a href="/"
                class="group flex flex-col p-2 gap-1 relative w-full navLink font-semibold text-xl text-white text-shadow-lg shadow-black/20 lg:text-xl hover:text-white/70 transition-all duration-300 active:bg-black/20 active:text-white lg:p-0 {{ Request::is('/') ? 'text-link-navbar-active' : '' }}">
                HOME
                <div
                  class="hidden lg:block absolute scale-x-0 group-hover:scale-x-100 duration-300 bottom-[20%] h-[2px] rounded-xl w-full bg-white">
                </div>
              </a>

            </li>
            <li class="navItems flex flex-col items-start lg:items-center lg:m-0 lg:py-4 relative">
              <div class="hidden h-6 w-3 rounded-full bg-white absolute -top-full transition-all duration-500 lg:block">

              </div>
              <a href="/about"
                class="group flex flex-col p-2 gap-1 relative w-full navLink font-semibold text-xl text-white text-shadow-lg shadow-black/20 lg:text-xl hover:text-white/70 transition-all duration-300 active:bg-black/20 active:text-white lg:p-0 {{ Request::is('about*') ? 'text-link-navbar-active' : '' }}">
                ABOUT
                <div
                  class="hidden lg:block absolute scale-x-0 group-hover:scale-x-100 duration-300 bottom-[20%] h-[2px] rounded-xl w-full bg-white">
                </div>
              </a>

            </li>
            <li class="navItems flex flex-col items-start lg:items-center lg:m-0 lg:py-4 relative">
              <div class="hidden h-6 w-3 rounded-full bg-white absolute -top-full transition-all duration-500 lg:block">

              </div>
              <a href="#"
                class="group flex flex-col p-2 gap-1 relative w-full navLink navService font-semibold text-xl text-white text-shadow-lg shadow-black/20 lg:text-xl hover:text-white/70 transition-all duration-300 active:bg-black/20 active:text-white lg:p-0 {{ Request::is('menu*') || Request::is('fasilities*') ? 'text-link-navbar-active' : '' }}">
                <span>SERVICES <i data-feather="chevron-down" class="inline h-6 w-6 mb-1"></i></span>
                <div
                  class="hidden lg:block absolute scale-x-0 group-hover:scale-x-100 duration-300 bottom-[20%] h-[2px] rounded-xl w-full bg-white">
                </div>
              </a>
              <div
                class="serviceItems hidden bg-slate-50 rounded-sm min-w-full mt-2 flex-col justify-center items-start lg:absolute lg:top-full">
                <a href="/menu"
                  class="block w-full py-1 px-2 font-semibold text-lg lg:text-xl active:bg-black/20 active:text-white">
                  MENUS
                </a>
                <a href="/fasilities"
                  class="block w-full py-1 px-2 font-semibold text-lg lg:text-xl active:bg-black/20 active:text-white">
                  FACILITIES
                </a>
              </div>

            </li>
            <li class="navItems flex flex-col items-start lg:items-center lg:m-0 lg:py-4 relative">
              <div class="hidden h-6 w-3 rounded-full bg-white absolute -top-full transition-all duration-500 lg:block">

              </div>
              <a href="/news"
                class="group flex flex-col p-2 gap-1 relative w-full navLink font-semibold text-xl text-white text-shadow-lg shadow-black/20 lg:text-xl hover:text-white/70 transition-all duration-300 active:bg-black/20 active:text-white lg:p-0 {{ Request::is('news*') ? 'text-link-navbar-active' : '' }}">
                NEWS
                <div
                  class="hidden lg:block absolute scale-x-0 group-hover:scale-x-100 duration-300 bottom-[20%] h-[2px] rounded-xl w-full bg-white">
                </div>
              </a>

            </li>
            <li class="navItems flex flex-col items-start lg:items-center lg:m-0 lg:py-4 relative">
              <div class="hidden h-6 w-3 rounded-full bg-white absolute -top-full transition-all duration-500 lg:block">

              </div>
              <a href="/contact"
                class="group flex flex-col p-2 gap-1 relative w-full navLink font-semibold text-xl text-white text-shadow-lg shadow-black/20 lg:text-xl hover:text-white/70 transition-all duration-300 active:bg-black/20 active:text-white lg:p-0 {{ Request::is('contact*') ? 'text-link-navbar-active' : '' }}">
                CONTACT
                <div
                  class="hidden lg:block absolute scale-x-0 group-hover:scale-x-100 duration-300 bottom-[20%] h-[2px] rounded-xl w-full bg-white">
                </div>
              </a>

            </li>
          </ul>
        </nav>

        <div class="lg:hidden mr-4 flex flex-col h-8 w-8 justify-between burger">
          <span class="block bg-white h-1 burgerItems transition-all duration-300"></span>
          <span class="block bg-white h-1 burgerItems transition-all duration-300"></span>
          <span class="block bg-white h-1 burgerItems transition-all duration-300"></span>
        </div>
      </div>
    </div>
  </section>
