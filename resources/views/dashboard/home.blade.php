<?php
use App\Models\User;
?>

<x-dashboard.layout>
  <x-slot:title_page>{{ $title_head }}</x-slot:title_page>





  <main class="min-h-svh bg-[#eee]">
    <div class="px-2 py-4 md:px-4 md:py-6">
      <div class="max-w-lg h-21 rounded-xl bg-white shadow-sm shadow-black/30 flex items-center px-4">
        <h1 class="font-bold text-xl md:text-2xl">
          Selamat Datang {{ auth()->user()->name }}
        </h1>
      </div>
      <div class="flex flex-col lg:flex-row mt-12">
        <div class="p-2 w-full lg:min-h-42">
          <div class="bg-white shadow-xl shadow-black/30 rounded-xl w-full h-full">
            <div class="flex p-4 h-full">
              <div class="flex flex-1 items-center justify-center linear-hijau rounded-lg">
                <i data-feather="coffee" class="w-1/2 h-1/2 text-white"></i>
              </div>
              <div class="flex flex-3 flex-col items-center w-full">
                <h1 class="font-bold text-xl md:text-2xl text-slate-800">
                  Menu
                </h1>
                <span class="font-bold text-4xl md:text-8xl text-slate-800">
                  {{ $menus }}
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="p-2 w-full lg:min-h-42">
          <div class="bg-white shadow-xl shadow-black/30 rounded-xl w-full h-full">
            <div class="flex p-4 h-full">
              <div class="flex flex-1 items-center justify-center linear-hijau rounded-lg">
                <i data-feather="book-open" class="w-1/2 h-1/2 text-white"></i>
              </div>
              <div class="flex flex-3 flex-col items-center w-full">
                <h1 class="font-bold text-xl md:text-2xl text-slate-800">
                  News
                </h1>
                <span class="font-bold text-4xl md:text-8xl text-slate-800">
                  {{ $neews }}
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>



</x-dashboard.layout>
