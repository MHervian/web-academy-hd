<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>{{ __('member.reset_title') }} - DreamPanel</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
  <style>
    * {
      font-family: 'Rubik', Arial, Helvetica, sans-serif;
    }

    .navigasi {
      font-family: Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif !important;
    }
  </style>
</head>

<body>
  <main class="flex min-h-screen">
    @include('navigation.navigation')

    <div class="flex-1 flex flex-col">
      @include('layouts.header')

      <div class="flex-1 p-3 bg-[#e7ecf6]">
        <div class="flex items-center gap-4">
          <h2 class="text-3xl font-bold text-center">{{ __('member.reset_title') }}</h2>
        </div>
        <span class="block py-2 text-[0.9rem]">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700 hover:opacity-60 transition">Dashboard</a> &#47;
          <a href="{{ route('member') }}" class="text-blue-700 hover:opacity-60 transition">{{ __('member.title') }}</a>
          &#47;
          <a href="#" class="hover:opacity-60 transition">{{ __('member.reset_breadcrumb') }}</a>
        </span>
        <p class="text-gray-700">{{ __('member.reset_desc') }}</p>

        <div class="py-3"></div>

        <div class="grid grid-cols-2 gap-x-4">
          <div class="col-span-1 bg-white p-4 rounded-lg shadow-sm">
            <form action="{{ route('member-update-password') }}" method="post">
              @csrf
              <input type="hidden" name="memberId" value="{{ $member->memberId }}" />

              <p class="py-2 px-3 border border-gray-200 bg-gray-50 rounded-lg text-sm">
                <i class="fa-solid fa-user text-gray-400 mr-2"></i>{{ __('member.th_username') }}:
                <span class="font-bold">{{ $member->username }}</span>
                (<span class="text-gray-500">{{ $member->email }}</span>)
              </p>

              <div class="py-3"></div>

              <label for="newPassword"
                class="block pb-1 text-sm font-medium text-gray-600">{{ __('member.label_new_password') }}</label>
              <div class="flex gap-3">
                <input id="newPassword" type="text" name="newPassword" required
                  class="w-[60%] py-2 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500 text-sm" />
                <button id="btnGeneratePassword" type="button"
                  class="py-2 px-4 text-xs font-medium bg-gray-200 rounded-lg cursor-pointer hover:bg-gray-300 transition">
                  <i class="fa-solid fa-key"></i> {{ __('member.btn_generate') }}
                </button>
              </div>

              <div class="py-3"></div>

              <label for="confirmPassword"
                class="block pb-1 text-sm font-medium text-gray-600">{{ __('member.label_confirm_password') }}</label>
              <input id="confirmPassword" type="password" name="confirmPassword" required
                class="w-[60%] py-2 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500 text-sm" />

              <div class="py-6 border-t border-gray-100 mt-6 flex justify-end gap-3">
                <button type="reset"
                  class="py-2 px-5 text-sm bg-gray-300 text-black rounded-lg cursor-pointer hover:opacity-90 transition">
                  {{ __('member.btn_reset_form') }}
                </button>
                <button type="submit"
                  class="py-2 px-5 text-sm bg-blue-600 text-white rounded-lg cursor-pointer hover:opacity-90 transition">
                  {{ __('member.btn_submit_password') }}
                </button>
              </div>
            </form>
          </div>
        </div>

        <div class="py-3"></div>
      </div>
      @include('layouts.footer')
    </div>
  </main>

  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/bttn-translate.js') }}"></script>

  <script>
    // Contoh sederhana logika generate password
    document.getElementById('btnGeneratePassword').addEventListener('click', function() {
      const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*";
      let retVal = "";
      for (let i = 0, n = charset.length; i < 12; ++i) {
        retVal += charset.charAt(Math.floor(Math.random() * n));
      }
      document.getElementById('newPassword').value = retVal;
      document.getElementById('confirmPassword').value = retVal;
      document.getElementById('confirmPassword').type = 'password';
    });
  </script>
</body>

</html>
