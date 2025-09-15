<section id="header" class="">
  <div class="h-12 flex w-full items-center ">
    <div class="w-full flex items-center justify-between pl-3">
      <div class="btn-burger relative h-7 w-7 ">
        <span class="span transition-all duration-300 block h-[5px] absolute w-full bg-black top-0"></span>
        <span class="span transition-all duration-300 block h-[5px] absolute w-full bg-black top-1/2 -translate-y-1/2"></span>
        <span class="span transition-all duration-300 block h-[5px] absolute w-full bg-black bottom-0"></span>
        <span class="span-menu opacity-0 absolute text-center font-bold text-[10px]">
          MENU
        </span>
      </div>
      <div>
        <form action="/logout" method="POST">
          @csrf
          <button class="text-base font-[500] px-3 active:bg-black/20 active:text-white" onclick="confirm('anda yakin ingin keluar?')">
            <i data-feather="log-out" class="inline mr-1"></i>Logout            
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
