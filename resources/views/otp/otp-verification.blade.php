<x-otp.layout>
  <div class="container min-h-svh flex justify-center items-center bg-[#eee]">
    <div class="w-full md:w-1/2 lg:w-1/3">
      <form method="POST" action="/otp-validation/{{$user->id}}" class="form w-full">
        @csrf
        
        <div>
          <label for="otp" class="block w-fit font-bold mb-2">
           OTP CODE :
          </label>
          <input type="text" id="otp" name="otp_code" required autofocus class="input_code w-full rounded-lg text-xl px-2 py-1 focus:ring-2 focus:ring-blue-500 focus:outline-none bg-white">
          @if(session('error_code'))
          <div class="mt-2">
            <span class="text-red-600 italic">
              {{session('error_code')}}
            </span>
          </div>
          @endif
          @if(session('error_kadaluarsa'))
          <div class="mt-2">
            <span class="text-red-600 italic">
              {{session('error_kadaluarsa')}}
            </span>
          </div>
          @endif
          <div>
            <span class="angkamundur font-bold text-2xl">

            </span>
          </div>
          {{-- <x-input-label for="otp" :value="__('OTP CODE')" />
          <x-text-input id="otp" class="block mt-1 w-full" type="text" name="otp_code" required autofocus />
          <x-input-error :messages="$errors->get('otp_code')" class="mt-2" /> --}}
        </div>
        <div class="flex items-center justify-center mt-4">
          <button type="submit" class="btn-verifikasi font-semibold text-white bg-slate-700 rounded-sm px-3 py-1 active:text-black">
            verifikasi
          </button>
          {{-- <x-primary-button>
            {{ __('Validate OTP CODE') }}
          </x-primary-button> --}}
        </div>
      </form>
    </div>
  </div>
</x-otp.layout>


<script>
  // waktu mundur
  function startCountdown(durationInSeconds) {
  const display = document.getElementsByClassName('angkamundur')[0];
  let timeLeft = durationInSeconds;

  const interval = setInterval(() => {
    // hitung menit & detik
    const minutes = Math.floor(timeLeft / 60);
    const seconds = timeLeft % 60;

    // tampilkan ke elemen, format 2 digit
    display.textContent =
      String(minutes).padStart(2, '0') + ":" + String(seconds).padStart(2, '0');

    timeLeft--;

    // kalau sudah habis
    if (timeLeft < 0) {
      clearInterval(interval);
      display.textContent = "Waktu habis !"; // hapus angka
      document.getElementsByClassName('btn-verifikasi')[0].textContent = 'Kirim OTP Ulang';
      document.getElementsByClassName('form')[0].setAttribute('action', '/otp-verification_ulang/{{$user->id}}');
      document.getElementsByClassName('input_code')[0].removeAttribute('required');
    }
  }, 1000);
}

// jalankan countdown 5 menit (300 detik)
startCountdown(300);




</script>