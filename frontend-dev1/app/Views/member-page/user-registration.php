<!doctype html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex, nofollow">
  <title>Pendaftaran - HangulDream</title>
  <!-- favicon -->
  <link rel="icon" href="image_samples/favicon/favicon.ico" type="image/x-icon">

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <!-- Font Awesome 7 -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <style>
    * {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
  </style>
</head>

<body>
  <div class="px-3 md:py-5 md:px-6 flex flex-col justify-center w-full min-h-screen 
    bg-[radial-gradient(circle_at_30%_200%,#6D2A3A_0%,#30283F_40%,#1B2740_96%)]">
    <div class="flex-1 md:grid md:grid-cols-2 lg:w-250 lg:mx-auto bg-white md:rounded-xl shadow-lg">

      <!-- Header section -->
      <div class="relative hidden md:flex md:flex-col md:justify-center-safe col-span-1 pt-10 pb-18 px-5 md:rounded-tl-xl md:rounded-bl-xl
        bg-[url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')]
        bg-no-repeat bg-cover"></div>
      <!-- /Header section -->

      <!-- Form -->
      <div class="col-span-1 pt-5 md:pt-15 px-5 md:px-5 lg:px-20">
        <a href="<?= base_url('/') ?>" class="text-blue-600">
          <i class="fa-solid fa-house-chimney"></i> Ke Beranda
        </a>
        <div class="py-3.5"></div>
        <h2 class="text-2xl font-bold">Registrasi Akun</h2>
        <div class="py-3"></div>
        <?php if (session()->getFlashdata('errors')) : ?>
          <div class="mb-4 rounded-md border border-[#f87171] bg-[#fce7f3] px-4 py-3 text-[#b91c1c]">
            <ul class="pl-5">
              <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                <li><?= esc($error) ?></li>
              <?php endforeach ?>
            </ul>
          </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url('user/store') ?>">
          <?= csrf_field() ?>
          <label for="username" class="block pb-1">USERNAME</label>
          <div class="flex border border-solid border-gray-300 focus-within:border-blue-500 rounded-md">
            <span class="pt-3 px-3"><i class="fa-solid fa-user text-gray-500"></i></span>
            <input id="username" type="text" class="block w-full py-3 focus:outline-0" placeholder="Username" name="username" required />
          </div>
          <div class="py-2"></div>
          <label for="email" class="block pb-1">EMAIL</label>
          <div class="flex border border-solid border-gray-300 focus-within:border-blue-500 rounded-md">
            <span class="pt-3 px-3"><i class="fa-solid fa-envelope text-gray-500"></i></span>
            <input id="email" type="text" class="block w-full py-3 focus:outline-0" placeholder="Email" name="email" required />
          </div>
          <div class="py-2"></div>
          <label class="block pb-1">PASSWORD</label>
          <div class="flex border border-solid border-gray-300 focus-within:border-blue-500 rounded-md">
            <span class="pt-3 px-3"><i class="fa-solid fa-key text-gray-500"></i></span>
            <input
              id="password"
              type="password"
              class="block w-full py-3 focus:outline-0"
              placeholder="Password"
              name="password">
          </div>

          <p id="password-error" class="text-sm text-red-500 mt-1 hidden">
            Password minimal 8 karakter
          </p>

          <div class="py-2"></div>

          <label class="block pb-1">KONFIRMASI PASSWORD</label>
          <div class="flex border border-solid border-gray-300 focus-within:border-blue-500 rounded-md">
            <span class="pt-3 px-3"><i class="fa-solid fa-key text-gray-500"></i></span>
            <input
              id="confirm_password"
              type="password"
              class="block w-full py-3 focus:outline-0"
              placeholder="Konfirmasi password"
              name="confirm_password">
          </div>

          <p id="confirm-error" class="text-sm text-red-500 mt-1 hidden">
            Password tidak sama
          </p>

          <div class="py-3"></div>
          <button id="submitBtn" type="submit" class="w-full py-3 md:py-2 border-2 border-solid 
          border-[#e54595] bg-[#e54595] text-white text-center rounded-md
            cursor-pointer">
            Daftar
          </button>
          <div class="py-2.5 md:py-1.5"></div>
          <a href="<?= $login_url ?>" type="button" class="flex items-center justify-center gap-3 bg-white border border-gray-300 text-gray-700 font-medium py-3 md:py-2 px-4 rounded-lg 
              hover:bg-gray-50 hover:shadow-md transition-all duration-200 ease-in-out w-full cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 48 48">
              <path fill="#FFC107" d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C12.955 4 4 12.955 4 24s8.955 20 20 20s20-8.955 20-20c0-1.341-.138-2.65-.389-3.917z" />
              <path fill="#FF3D00" d="m6.306 14.691l6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C16.318 4 9.656 8.337 6.306 14.691z" />
              <path fill="#4CAF50" d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238A11.91 11.91 0 0 1 24 36c-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025C9.505 39.556 16.276 44 24 44z" />
              <path fill="#1976D2" d="M43.611 20.083H42V20H24v8h11.303a12.04 12.04 0 0 1-4.087 5.571l.003-.002l6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917z" />
            </svg>
            <span>Daftar dengan Google</span>
          </a>
          <div class="py-4 md:py-2.5"></div>
          <hr class="border-gray-300" />
          <div class="py-3 md:py-2"></div>
          <p class="pb-2">Punya akun?</p>
          <a href="<?= base_url('auth/login') ?>" class="block w-full py-3 md:py-2 border border-gray-300 text-center rounded-md">Login Disini</a>
          <div class="py-6"></div>
        </form>
      </div>
      <!--/ Form -->

    </div>
  </div>
</body>
<script>
  const password = document.getElementById('password');
  const confirm = document.getElementById('confirm_password');

  const passwordError = document.getElementById('password-error');
  const confirmError = document.getElementById('confirm-error');

  function validatePassword() {
    if (password.value.length < 8) {
      password.classList.add('border-red-500');
      password.classList.remove('border-gray-300');
      passwordError.classList.remove('hidden');
      return false;
    } else {
      password.classList.remove('border-red-500');
      password.classList.add('border-green-500');
      passwordError.classList.add('hidden');
      return true;
    }
  }

  function validateConfirm() {
    if (confirm.value !== password.value || confirm.value === '') {
      confirm.classList.add('border-red-500');
      confirm.classList.remove('border-gray-300');
      confirmError.classList.remove('hidden');
      return false;
    } else {
      confirm.classList.remove('border-red-500');
      confirm.classList.add('border-green-500');
      confirmError.classList.add('hidden');
      return true;
    }
  }

  password.addEventListener('input', () => {
    validatePassword();
    validateConfirm();
  });

  confirm.addEventListener('input', validateConfirm);

  const submitBtn = document.getElementById('submitBtn');

  function toggleSubmit() {
    submitBtn.disabled = !(validatePassword() && validateConfirm());
    submitBtn.classList.toggle('opacity-50', submitBtn.disabled);
    submitBtn.classList.toggle('cursor-not-allowed', submitBtn.disabled);
  }

  password.addEventListener('input', toggleSubmit);
  confirm.addEventListener('input', toggleSubmit);
</script>


</html>