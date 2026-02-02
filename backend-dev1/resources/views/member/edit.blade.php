<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>{{ __('member.edit_title') }} - DreamPanel</title>
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
          <h2 class="text-3xl font-bold text-center">{{ __('member.edit_title') }}</h2>
        </div>
        <span class="block py-2 text-[0.9rem]">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700 hover:opacity-60 transition">Dashboard</a> &#47;
          <a href="{{ route('member') }}" class="text-blue-700 hover:opacity-60 transition">{{ __('member.title') }}</a>
          &#47;
          <a href="#" class="hover:opacity-60 transition">{{ __('member.edit_breadcrumb') }}</a>
        </span>
        <p class="text-gray-700">{{ __('member.edit_desc') }}</p>

        <div class="py-3"></div>

        <div class="grid grid-cols-2 bg-white rounded-lg shadow-sm">
          <div class="col-span-1 p-4">
            <p class="italic text-[0.85rem] pb-4 text-orange-600">{{ __('member.note_readonly_method') }}</p>

            <form action="{{ route('update-member') }}" method="post">
              @csrf
              <input type="hidden" name="memberId" value="{{ $member->memberId }}" />

              <label for="username"
                class="block pb-1 text-sm font-medium text-gray-600">{{ __('member.label_username') }}</label>
              <input id="username" type="text" name="username" value="{{ $member->username }}" required
                class="w-full py-2 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500 text-sm" />

              <div class="py-2"></div>

              <label for="email"
                class="block pb-1 text-sm font-medium text-gray-600">{{ __('member.label_email') }}</label>
              <input id="email" type="email" name="email" value="{{ $member->email }}" required
                class="w-full py-2 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500 text-sm" />

              <div class="py-2"></div>

              <label for="newPassword"
                class="block pb-1 text-sm font-medium text-gray-600">{{ __('member.label_new_password') }}</label>
              <div class="flex gap-3">
                <input id="newPassword" type="text" name="newPassword"
                  class="grow py-2 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500 text-sm" />
                <button id="btnGeneratePassword" type="button"
                  class="w-62 py-2 px-4 text-xs font-medium bg-gray-200 rounded-lg cursor-pointer hover:bg-gray-300 transition">
                  <i class="fa-solid fa-key"></i> {{ __('member.btn_generate') }}
                </button>
              </div>

              <div class="py-2"></div>

              <label for="confirmPassword"
                class="block pb-1 text-sm font-medium text-gray-600">{{ __('member.label_confirm_password') }}</label>
              <div class="flex gap-3">
                <input id="confirmPassword" type="password" name="confirmPassword"
                  class="grow py-2 px-3 border-2 rounded-md border-[#d9d9d9] focus:outline-0 focus:border-blue-500 text-sm" />
                <div class="w-62"></div>
              </div>

              <div class="py-2"></div>

              <label for="metode"
                class="block pb-1 text-sm font-medium text-gray-600">{{ __('member.label_method') }}</label>
              <input id="metode" type="text" value="{{ $member->metode }}" readonly
                class="w-full py-2 px-3 border-2 rounded-md border-[#d9d9d9] bg-slate-100 text-gray-500 text-sm outline-none" />

              <div class="py-6 mt-4 border-t border-gray-100 flex justify-end gap-3">
                <button type="reset"
                  class="py-2 px-6 text-sm bg-gray-300 text-black rounded-lg cursor-pointer hover:bg-gray-400 transition">
                  {{ __('member.btn_reset_form') }}
                </button>
                <button type="submit"
                  class="py-2 px-6 text-sm bg-blue-600 text-white rounded-lg cursor-pointer hover:bg-blue-700 transition shadow-md">
                  {{ __('member.btn_submit_edit') }}
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
    document.getElementById('btnGeneratePassword').addEventListener('click', function() {
      const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*";
      let retVal = "";
      for (let i = 0; i < 12; ++i) {
        retVal += charset.charAt(Math.floor(Math.random() * charset.length));
      }
      document.getElementById('newPassword').value = retVal;
      document.getElementById('confirmPassword').value = retVal;
      document.getElementById('confirmPassword').type = 'password';
    });
  </script>

</body>

</html>
