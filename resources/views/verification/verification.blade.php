<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title_head }}</title>

  @vite('resources/css/app.css')
  @vite('resources/js/app.js')

  {{-- font --}}
  <link
    href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Bebas+Neue&family=Dancing+Script:wght@400..700&family=Pacifico&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

  {{-- icon --}}
  <script src="https://unpkg.com/feather-icons"></script>

  {{-- aos --}}
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    .block-abu {
      background: linear-gradient(0deg, rgba(60, 66, 57, 1) 0%, rgba(103, 115, 99, 1) 100%);
    }
  </style>
</head>

<body class="bg-[#eee]">
  <div class="container" class="">
    <div class="px-4">
      <div class="min-h-svh flex justify-center items-center">
        <div class="w-full md:w-1/2 lg:w-1/3">
          <form action="/verification" method="POST" class="w-full">
            @csrf
            <div class="mb-4">
              <label for="email" class="block w-fit mb-2 font-bold text-base lg:text-xl">
                Silahkan masukkan email :
              </label>
              <input type="email" id="email" name="email" autofocus required value="{{ old('email') }}"
                class="w-full text-base lg:text-xl font-semibold px-2 py-1 rounded-lg @error('email') ring-red-500 @enderror focus:outline-0 focus:ring-2 invalid:ring-red-500 valid:ring-blue-500 bg-white">
              @error('email')
                <p class="text-red-500 text-lg italic mt-2">
                  {{ $message }}
                </p>
              @enderror
              @if (session('errorEmail'))
                <p class="text-red-500 text-lg italic mt-2">
                  {{ session('errorEmail') }}
                </p>
              @endif
            </div>
            <div class="mb-4">
              <label for="password" class="block w-fit mb-2 font-bold text-base lg:text-xl">
                Password baru :
              </label>
              <div class="flex mb-2">
                <input type="password" id="password" name="password" autofocus
                  class="input-password w-full text-base lg:text-xl font-semibold px-2 py-1 rounded-lg @error('password') ring-red-500 @enderror focus:outline-0 focus:ring-2 invalid:ring-red-500 valid:ring-blue-500 bg-white"
                  required>
                <div class="eye flex justify-center items-center block-abu px-1 rounded-sm">
                  <i data-feather="eye-off" class="i-eye-off hidden text-white h-6 w-6"></i>
                  <i data-feather="eye" class="i-eye inline text-white h-6 w-6"></i>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <label for="password_confirmation" class="block w-fit mb-2 font-bold text-base lg:text-xl">
                Konfirmasi Password baru :
              </label>
              <div class="flex mb-2">
                <input type="password" id="password_confirmation" name="password_confirmation" autofocus
                  class="input-konfirmasi-password w-full text-base lg:text-xl font-semibold px-2 py-1 rounded-lg @error('password') ring-red-500 @enderror focus:outline-0 focus:ring-2 invalid:ring-red-500 valid:ring-blue-500 bg-white"
                  required>
                <div class="eye flex justify-center items-center block-abu px-1 rounded-sm">
                  <i data-feather="eye-off" class="i-eye-off hidden text-white h-6 w-6"></i>
                  <i data-feather="eye" class="i-eye inline text-white h-6 w-6"></i>
                </div>
              </div>
              @error('password')
                <p class="text-red-500 text-lg italic mt-2">
                  {{ $message }}
                </p>
              @enderror
            </div>
            <div>
              <button type="submit"
                class="rounded-lg px-2 py-1 bg-sky-600 text-base lg:text-xl font-semibold text-white hover:bg-sky-500 transition active:text-black">
                Kirim Verifikasi
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>


<script>
  feather.replace();

  // mata password
  const diveye = document.querySelectorAll('.eye');
  const eyeOff = document.getElementsByClassName('i-eye-off');
  const eye = document.getElementsByClassName('i-eye');
  const inputPassword = document.querySelector('.input-password');
  const inputKonfirmasiPassword = document.querySelector('.input-konfirmasi-password');
  diveye[0].addEventListener('click', () => {
    if (eyeOff[0].classList.contains('inline')) {
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
    if (eyeOff[1].classList.contains('inline')) {
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
