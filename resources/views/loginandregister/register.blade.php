<x-loginandregister.layout>
<x-slot:title_page>{{$title_head}}</x-slot:title_page>


  <section class="flex justify-center items-center min-h-svh bg-[#eee]">
    <div class="container">
      <div class="lg:px-24">
        <div class="flex justify-center items-center">
          <div class="w-full sm:w-full lg:w-1/2">
            <div class="flex justify-center items-center mb-6">
              <h2 class="font-bold text-2xl lg:text-3xl text-center">
                Daftar Teras Joglo Administrator
              </h2>
            </div>
    
            <div class="p-4 rounded-xl">
              <form action="/register" method="POST" class="">
                @csrf
                <div class="mb-3">
                  <label for="name" class="font-semibold text-lg block w-fit mb-1">
                    Nama :
                  </label>
                  <input type="text" id="name" name="name" autofocus class="w-full rounded-sm bg-white text-lg fonta-semibold px-2 py-1 focus:ring-2 focus:ring-[#81ed39] @error('name') ring-error @enderror focus:outline-0" required value="{{old('name')}}">
                  @error('name')
                    <div class="rounded-sm bg-red-300 px-4 py-2 italic w-fit mt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="email" class="font-semibold text-lg block w-fit mb-1">
                    Email :
                  </label>
                  <input type="email" id="email" name="email" class="w-full rounded-sm bg-white text-lg fonta-semibold px-2 py-1 focus:ring-2 focus:ring-[#81ed39] @error('email') ring-error @enderror focus:outline-0" required value={{old('email')}}>
                  @error('email')
                    <div class="rounded-sm bg-red-300 px-4 py-2 italic w-fit mt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="password" class="font-semibold text-lg block w-fit mb-1">
                    Kata Sandi :
                  </label>
                  <div class="flex">
                    <input type="password" id="password" name="password" class="input-password w-full rounded-sm bg-white text-lg fonta-semibold px-2 py-1 focus:ring-2 focus:ring-[#81ed39] @error('password') ring-error @enderror focus:outline-0" required>
                    <div class="eye flex justify-center items-center block-abu px-1 rounded-sm">
                      <i data-feather="eye-off" class="i-eye-off hidden text-white h-6 w-6"></i>
                      <i data-feather="eye" class="i-eye inline text-white h-6 w-6"></i>
                    </div>
                  </div>
                  @error('password')
                    <div class="rounded-sm bg-red-300 px-4 py-2 italic w-fit mt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="password2" class="font-semibold text-lg block w-fit mb-1">
                    Konfirmasi Kata Sandi :
                  </label>
                  <div class="flex">
                    <input type="password" id="password2" name="password_confirmation" class="input-konfirmasi-password w-full rounded-sm bg-white text-lg fonta-semibold px-2 py-1 focus:ring-2 focus:ring-[#81ed39] @error('password_confirmation') ring-error @enderror focus:outline-0" required>
                    <div class="eye flex justify-center items-center block-abu px-1 rounded-sm">
                      <i data-feather="eye-off" class="i-eye-off hidden text-white h-6 w-6"></i>
                      <i data-feather="eye" class="i-eye inline text-white h-6 w-6"></i>
                    </div>
                  </div>
                  @error('password2')
                    <div class="rounded-sm bg-red-300 px-4 py-2 italic w-fit mt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="flex justify-center items-center mt-4">
                  <button type="submit" class="btn-masuk-daftar px-3 py-1 rounded linear-hijau text-xl text-white hover:pointer active:from-[#81ED39] active:to-[#5CAB27] active:text-black">
                    Daftar
                  </button>
                </div>
              </form>
              <div class="mt-6">
                <p class="text-lg font-600">
                  <a href="/login" class="hover:underline">
                    Sudah punya akun ?
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</x-loginandregister.layout>


<script>
  // mata password
  const diveye = document.querySelectorAll('.eye');
  const eyeOff = document.getElementsByClassName('i-eye-off');
  const eye = document.getElementsByClassName('i-eye');
  const inputPassword = document.querySelector('.input-password');
  const inputKonfirmasiPassword = document.querySelector('.input-konfirmasi-password');
  diveye[0].addEventListener('click', () => {
    if(eyeOff[0].classList.contains('inline')) {
      eyeOff[0].classList.replace('inline', 'hidden');
      eye[0].classList.replace('hidden', 'inline');
      inputPassword.setAttribute('type', 'password');
    } else {
      eyeOff[0].classList.replace('hidden', 'inline');
      eye[0].classList.replace('inline', 'hidden');
      inputPassword.setAttribute('type', 'text');
    }
  });
  diveye[1].addEventListener('click', () => {
    if(eyeOff[1].classList.contains('inline')) {
      eyeOff[1].classList.replace('inline', 'hidden');
      eye[1].classList.replace('hidden', 'inline');
      inputKonfirmasiPassword.setAttribute('type', 'password');
    } else {
      eyeOff[1].classList.replace('hidden', 'inline');
      eye[1].classList.replace('inline', 'hidden');
      inputKonfirmasiPassword.setAttribute('type', 'text');
    }
  });
</script>