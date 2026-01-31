<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Login - DreamPanel</title>

  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />
  <!-- Tailwind CSS -->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  {{-- <link rel="stylesheet" href="<?= asset('css/output.css') ?>" /> --}}
  <!-- Font Awesome 7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    * {
      font-family: 'Rubik', Arial, Helvetica, sans-serif;
    }
  </style>
</head>

<body>
  <div class="flex flex-col justify-center w-full min-h-screen bg-[#e7ecf6]">
    <div class="w-90 m-auto rounded-xl py-9 px-8 bg-white shadow-sm/15">
      <h1 class="text-2xl text-center mb-5 color-[#1c2b4a] font-bold">DreamPanel</h1>
      <form action="{{ route('login-post') }}" method="post">
        @csrf
        <label for="username" class="block pb-1.5 text-gray-600">Username</label>
        <div class="flex border-2 border-solid border-gray-300 focus-within:border-blue-500 rounded-sm">
          <span class="pt-2 px-3"><i class="fa-solid fa-user"></i></span>
          <input id="username" name="username" type="text" class="block w-full py-2 focus:outline-0" placeholder=""
            required />
        </div>
        <div class="py-2"></div>
        <label for="password" class="block pb-1.5 text-gray-600">Password</label>
        <div class="flex border-2 border-solid border-gray-300 focus-within:border-blue-500 rounded-sm">
          <span class="pt-2 px-3"><i class="fa-solid fa-key"></i></span>
          <input id="password" name="password" type="password" class="block w-full py-2 focus:outline-0" placeholder=""
            required />
        </div>
        <div class="py-3"></div>
        <button class="block w-full text-center py-3 bg-[#1c2b4a] text-white cursor-pointer rounded-sm">Login</button>
      </form>
      <p class="text-center pt-5"><a href="{{ route('login-coming-soon') }}">Lupa password?</a></p>
    </div>
  </div>
</body>

</html>
