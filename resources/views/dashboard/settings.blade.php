<x-dashboard.layout>
<x-slot:title_page>{{$title_head}}</x-slot:title_page>


<main class="min-h-svh bg-[#eee]">
  <div class="px-2 py-4 md:px-4 md:py-6">
    <div class="max-w-lg h-21 rounded-xl bg-white shadow-sm shadow-black/30 flex items-center px-4 mb-8">
      <h1 class="font-bold text-xl md:text-2xl">
        Pengaturan
      </h1>
    </div>
    <div class="mt-12  max-w-lg">
      <div class="p-2 rounded-lg bg-white">
        <table>
          <tbody>
            <tr>
              <td class="w-24 p-1 lg:text-lg">
                <b>Nama</b>
              </td>
              <td class="p-1 lg:text-lg font-semibold">
                {{auth()->user()->name}}
              </td>
            </tr>
            <tr>
              <td class="w-24 p-1 lg:text-lg">
                <b>Email</b>
              </td>
              <td class="p-1 lg:text-lg font-semibold">
                {{auth()->user()->email}}
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="mt-6 flex justify-between">
        <a href="/settings/edit" class="px-2 py-1 rounded-md bg-sky-500 w-36 lg:w-38 text-center lg:text-lg font-semibold text-white">
          Edit
        </a>
        <a href="/settings/ubah-password" class="px-2 py-1 rounded-md bg-red-500 w-36 lg:w-38 text-center lg:text-lg font-semibold text-white">
          Ubah Password
        </a>
      </div>
      <div>
        <form action="setting"></form>
      </div>
    </div>
  </div>
</main>





</x-dashboard.layout>