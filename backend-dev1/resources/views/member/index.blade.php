<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>{{ __('member.title') }} - DreamPanel</title>
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
          <h2 class="text-4xl font-bold text-center">{{ __('member.title') }}</h2>
          <a href="{{ route('create-member') }}"
            class="inline-flex items-center gap-2 rounded-md bg-blue-700 px-4 py-1 text-[0.85rem] text-white hover:opacity-90 transition">
            <i class="fa-solid fa-plus"></i> {{ __('member.btn_add') }}
          </a>
        </div>
        <span class="block py-2">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700">Dashboard</a> &#47;
          <a href="#" class="">{{ __('member.title') }}</a>
        </span>
        <p class="text-gray-700">{{ __('member.description') }}</p>

        @if (session('success'))
          <div
            class="flex items-center justify-between gap-4 rounded-xl bg-green-50 border border-green-300 mt-2.5 px-5 py-2 text-green-800 shadow-sm">
            <div class="flex items-center gap-2">
              <span class="text-lg">✅</span>
              <span><strong class="font-semibold">{{ __('member.success') }}</strong> {{ session('success') }}</span>
            </div>
            <button onclick="this.closest('div').remove()"
              class="rounded-md px-2 py-1 text-green-600 hover:bg-green-200 hover:text-green-900 transition cursor-pointer">✕</button>
          </div>
        @endif

        @if (session('error'))
          <div
            class="flex items-center justify-between gap-4 rounded-xl bg-red-50 border border-red-300 mt-2.5 px-5 py-2 text-red-800 shadow-sm">
            <div class="flex items-center gap-2">
              <span class="text-lg">❌</span>
              <span><strong class="font-semibold">{{ __('member.failed') }}</strong> {{ session('error') }}</span>
            </div>
            <button onclick="this.closest('div').remove()"
              class="rounded-md px-2 py-1 text-red-600 hover:bg-red-200 hover:text-red-900 transition cursor-pointer">✕</button>
          </div>
        @endif

        <div class="py-3"></div>

        <div class="col-span-1 py-5 px-4.5 rounded-lg bg-white shadow-sm">
          <form action="{{ route('search-member') }}" method="get" class="flex flex-wrap items-center gap-3">
            @csrf
            <div class="relative">
              <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-gray-400">
                <i class="fa-solid fa-magnifying-glass text-sm"></i>
              </span>
              <input type="text" placeholder="{{ __('member.placeholder_search') }}" name="keyword"
                value="{{ request('keyword') }}"
                class="h-9 w-56 rounded-md border border-gray-300 pl-9 pr-3 text-sm focus:border-blue-500 focus:outline-none" />
            </div>

            <select name="metode"
              class="h-9 rounded-md border border-gray-300 px-3 text-sm text-gray-600 focus:border-blue-500 focus:outline-none">
              <option value="all">{{ __('member.filter_all') }}</option>
              <option value="email" {{ request('metode') == 'email' ? 'selected' : '' }}>
                {{ __('member.filter_email') }}</option>
              <option value="google" {{ request('metode') == 'google' ? 'selected' : '' }}>
                {{ __('member.filter_google') }}</option>
            </select>

            <button type="submit"
              class="py-2 px-4 rounded-md bg-blue-600 text-sm text-white cursor-pointer hover:opacity-80 transition">
              <i class="fa-solid fa-magnifying-glass"></i> {{ __('member.btn_search') }}
            </button>
          </form>

          @if (count($members) > 0)
            <div class="pb-3"></div>
            <table class="w-full border-collapse">
              <thead>
                <tr class="bg-gray-200">
                  <th class="py-2 font-medium">{{ __('member.th_no') }}</th>
                  <th class="py-2 font-medium" colspan="2">{{ __('member.th_username') }}</th>
                  <th class="py-2 font-medium">{{ __('member.th_email') }}</th>
                  <th class="py-2 font-medium">{{ __('member.th_method') }}</th>
                  <th class="py-2 font-medium">{{ __('member.th_reg_date') }}</th>
                  <th class="py-2 font-medium">{{ __('member.th_action') }}</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($members as $member)
                  <tr class="border-b border-b-gray-200">
                    <td class="py-2 px-2 text-[0.9rem] border-r border-r-gray-400 text-center">{{ $loop->iteration }}
                    </td>
                    <td class="pl-2"><span class="inline-block rounded-[100%] h-8 w-8 bg-gray-200"></span></td>
                    <td class="py-2 px-2 text-[0.9rem]">{{ $member->username }}</td>
                    <td class="py-2 px-2 text-[0.9rem]">{{ $member->email }}</td>
                    <td class="py-2 px-2 text-[0.9rem] text-center">{{ $member->metode }}</td>
                    <td class="py-2 px-2 text-[0.9rem] text-center">{{ $member->date_registration }}</td>
                    <td class="py-2 px-2">
                      <div class="flex items-center gap-2 justify-center">
                        <a href="{{ route('member-detail', ['id' => $member->memberId]) }}"
                          class="inline-flex h-7 items-center justify-center rounded-sm bg-blue-950 px-2 text-[0.8rem] text-white hover:opacity-90 transition">
                          <i class="fa-solid fa-circle-info"></i> {{ __('member.btn_detail') }}
                        </a>
                        <a href="{{ route('edit-member', ['memberId' => $member->memberId]) }}"
                          class="inline-flex h-7 items-center justify-center rounded-sm bg-blue-600 px-2 text-[0.8rem] text-white hover:opacity-90 transition">
                          <i class="fa-solid fa-file-pen"></i> {{ __('member.btn_edit') }}
                        </a>
                        <form action="{{ route('delete-member') }}" method="post">
                          @csrf
                          <input type="hidden" name="memberId" value="{{ $member->memberId }}" />
                          <button type="submit"
                            class="inline-flex h-7 items-center justify-center rounded-sm bg-red-700 px-2 text-[0.8rem] text-white hover:opacity-90 transition cursor-pointer">
                            <i class="fa-solid fa-trash-can"></i> {{ __('member.btn_delete') }}
                          </button>
                        </form>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>

            @if ($members->lastPage() > 1)
              <nav class="flex items-center justify-center gap-1 mt-6">
                <a href="{{ $members->previousPageUrl() ?? '#' }}"
                  class="flex h-9 w-9 items-center justify-center rounded-md border border-gray-300 text-gray-600 hover:bg-gray-100 {{ $members->onFirstPage() ? 'pointer-events-none opacity-50' : '' }}">
                  <i class="fa-solid fa-chevron-left text-sm"></i>
                </a>
                @foreach ($members->getUrlRange(1, $members->lastPage()) as $page => $url)
                  @if ($page == $members->currentPage())
                    <span
                      class="h-9 w-9 rounded-md bg-blue-600 text-sm text-white flex items-center justify-center">{{ $page }}</span>
                  @else
                    <a href="{{ $url }}"
                      class="h-9 w-9 rounded-md border border-gray-300 text-sm text-gray-700 hover:bg-gray-100 flex items-center justify-center">{{ $page }}</a>
                  @endif
                @endforeach
                <a href="{{ $members->nextPageUrl() ?? '#' }}"
                  class="flex h-9 w-9 items-center justify-center rounded-md border border-gray-300 text-gray-600 hover:bg-gray-100 {{ !$members->hasMorePages() ? 'pointer-events-none opacity-50' : '' }}">
                  <i class="fa-solid fa-chevron-right text-sm"></i>
                </a>
              </nav>
            @endif
          @else
            <div class="pb-3"></div>
            <p class="text-center font-bold">{{ __('member.empty_data') }}</p>
          @endif
        </div>
      </div>
      @include('layouts.footer')
    </div>
  </main>
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/bttn-translate.js') }}"></script>
</body>

</html>
