<x-loginandregister.layout>
  <x-slot:title_page>{{ $title_head }}</x-slot>


  <section class="min-h-svh">
    <div class="flex flex-col lg:flex-row">
      <div class="flex-2 flex justify-center items-center min-h-svh relative">
        <div class="container">
          <div class="lg:px-24">
            <div class="flex justify-center items-center">
              <div class="w-full sm:w-full lg:w-1/2">
                <div class="flex justify-center items-center mb-6">
                  <h2 class="font-bold text-2xl lg:text-3xl text-center">
                    <span class="text-[#81ed39] text-shadow-sm text-shadow-black"
                      style="font-family:'Pacifico', cursive; font-weight: <weight>">Teras Joglo</span> Administrator
                  </h2>
                </div>
                @if (session('succes'))
                  <div class="ml-4 rounded-sm bg-green-300/90 px-4 py-2 w-fit">
                    <p class="italic">
                      {{ session('succes') }}
                    </p>
                  </div>
                @endif
                @if (session('loginError'))
                  <div class="ml-4 rounded-sm bg-red-300/90 px-4 py-2 w-fit">
                    <p class="italic">
                      {{ session('loginError') }}
                    </p>
                  </div>
                @endif
                @if (session('successUpdatePassword'))
                  <div class="ml-4 rounded-sm bg-green-300/90 px-4 py-2 w-fit">
                    <p class="italic">
                      {{ session('successUpdatePassword') }}
                    </p>
                  </div>
                @endif

                <div class="p-4 rounded-xl">
                  <form action="/login" method="POST" class="">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="font-semibold text-lg block w-fit mb-1">
                        Email :
                      </label>
                      <input type="email" id="email" name="email"
                        class="w-full rounded-sm bg-white text-lg fonta-semibold px-2 py-1 focus:ring-2 invalid:ring-red-500 valid:ring-blue-500 focus:outline-0"
                        required>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="font-semibold text-lg block w-fit mb-1">
                        Kata Sandi :
                      </label>
                      <div class="flex mb-2">
                        <input type="password" id="password" name="password"
                          class="input-password w-full rounded-sm bg-white text-lg fonta-semibold px-2 py-1 focus:ring-2 invalid:ring-red-500 valid:ring-blue-500 focus:outline-0"
                          required>
                        <div class="eye flex justify-center items-center block-abu px-1 rounded-sm">
                          <i data-feather="eye-off" class="i-eye-off hidden text-white h-6 w-6"></i>
                          <i data-feather="eye" class="i-eye inline text-white h-6 w-6"></i>
                        </div>
                      </div>
                      <a href="/verification" class="italic hover:underline">
                        Lupa Kata Sandi ?
                      </a>
                    </div>
                    <div class="flex justify-center items-center mt-4">
                      <button type="submit"
                        class="btn-masuk-daftar px-3 py-1 rounded linear-hijau text-xl text-white hover:pointer active:from-[#81ED39] active:to-[#5CAB27] active:text-black">
                        Masuk
                      </button>
                    </div>
                  </form>
                  <div class="mt-6">
                    <p class="text-lg font-600">
                      <a href="/register" class="hover:underline">
                        Belum punya akun ?
                      </a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="absolute bottom-0 right-0 p-4">
          <p class="text-base italic">
            <a href="/">Kembali ke Home</a>
          </p>
        </div>
      </div>
      <div
        class="w-full relative lg:w-72 xl:w-120 py-24 lg:py-0 flex justify-center items-center lg:rounded-tl-full lg:rounded-bl-full lg:rounded-tr-none"
        style="background-image:url('./img/login/bg-login.jpg'); background-size:cover; background-position:center;">
        <div
          class="w-36 h-36 lg:w-52 lg:h-52 rounded-full overflow-hidden absolute t-0 -translate-y-1/2 lg:translate-y-0 lg:left-0 lg:-translate-x-1/2">
          <img src="./img/logo/terasjoglologo.png" alt="">
        </div>
      </div>
    </div>
  </section>
</x-loginandregister.layout>

<script>
  // mata password
  const diveye = document.querySelector('.eye');
  const eyeOff = diveye.getElementsByClassName('i-eye-off')[0];
  const eye = diveye.getElementsByClassName('i-eye')[0];
  const inputPassword = document.querySelector('.input-password');
  diveye.addEventListener('click', () => {
    if (eyeOff.classList.contains('inline')) {
      eyeOff.classList.replace('inline', 'hidden');
      eye.classList.replace('hidden', 'inline');
      inputPassword.setAttribute('type', 'password');
    } else {
      eyeOff.classList.replace('hidden', 'inline');
      eye.classList.replace('inline', 'hidden');
      inputPassword.setAttribute('type', 'text');
    }
  });



  // 
</script>
