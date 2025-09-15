<div class="block-cek-admin hidden fixed top-0 bottom-0 right-0 left-0  bg-black/50 z-[99]">
  <div class="flex justify-center items-center h-full">
    <div class="w-full md:w-1/2 lg:w-1/3 px-2">
      <form action="/cekadmin" method="POST">
        @csrf
        <input type="hidden" name="page" id="page" value="{{request()->path()}}">
        <div class="flex relative opacity-0 input-password-admin">
          <input type="password" id="password" name="password_admin" class="input-password w-full rounded-sm bg-white text-lg fonta-semibold px-2 py-1 focus:ring-2 invalid:ring-red-500 valid:ring-blue-500 focus:outline-0" required placeholder="password-to-admin" autofocus>
          <div class="eye flex justify-center items-center block-abu px-1 rounded-sm">
            <i data-feather="eye-off" class="i-eye-off hidden text-white h-6 w-6"></i>
            <i data-feather="eye" class="i-eye inline text-white h-6 w-6"></i>
          </div>
        </div>
        <div class="flex justify-center items-center mt-4 relative opacity-0 btn-admin">
          <button type="submit" class="btn-masuk-daftar px-3 py-1 rounded linear-hijau text-xl text-white hover:pointer active:from-[#81ED39] active:to-[#5CAB27] active:text-black">
            Masuk
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
    // mata password
  const diveye = document.querySelector('.eye');
  const eyeOff = diveye.getElementsByClassName('i-eye-off')[0];
  const eye = diveye.getElementsByClassName('i-eye')[0];
  // const inputPassword = document.querySelector('.input-password');
  diveye.addEventListener('click', () => {
    if(eyeOff.classList.contains('inline')) {
      eyeOff.classList.replace('inline', 'hidden');
      eye.classList.replace('hidden', 'inline');
      inputPassword.setAttribute('type', 'password');
    } else {
      eyeOff.classList.replace('hidden', 'inline');
      eye.classList.replace('inline', 'hidden');
      inputPassword.setAttribute('type', 'text');
    }
  });

  
  
</script>