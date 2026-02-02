<!doctype html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>{{ __('kursus.title') }} - DreamPanel</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
          <h2 class="text-4xl font-bold text-center">{{ __('kursus.title') }}</h2>
          <a href="{{ route('create-program') }}"
            class="inline-flex items-center gap-2 rounded-md bg-blue-700 px-4 py-1 text-[0.85rem] text-white hover:opacity-90 transition">
            <i class="fa-solid fa-plus"></i>
            {{ __('kursus.add_button') }}
          </a>
        </div>
        <span class="block py-2">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700">{{ __('kursus.dashboard') }}</a> /
          <a href="#" class="">{{ __('kursus.title') }}</a>
        </span>
        <p class="text-gray-700">{{ __('kursus.description') }}</p>

        @if (session('success'))
          <div
            class="flex items-center justify-between gap-4 rounded-xl bg-green-50 border border-green-300 mt-2.5 px-5 py-2 text-green-800 shadow-sm">
            <div class="flex items-center gap-2">
              <span class="text-lg">✅</span>
              <span><strong class="font-semibold">{{ __('kursus.success') }}</strong> {{ session('success') }}</span>
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
              <span><strong class="font-semibold">{{ __('kursus.failed') }}</strong> {{ session('error') }}</span>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            <button onclick="this.closest('div').remove()"
              class="rounded-md px-2 py-1 text-red-600 hover:bg-red-200 hover:text-red-900 transition cursor-pointer">✕</button>
          </div>
        @endif

        <div class="py-3"></div>

        <div class="col-span-1 py-5 px-4.5 rounded-lg bg-white shadow-sm">
          <form action="{{ route('search-program') }}" method="get" class="flex flex-wrap gap-3">
            @csrf
            <div class="relative">
              <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-gray-400">
                <i class="fa-solid fa-magnifying-glass text-sm"></i>
              </span>
              <input type="text" placeholder="{{ __('kursus.search_placeholder') }}" name="keyword"
                value="{{ request('keyword') }}"
                class="h-9 w-56 rounded-md border border-gray-300 pl-9 pr-3 text-sm focus:border-blue-500 focus:outline-none" />
            </div>

            <select name="status"
              class="h-9 rounded-md border border-gray-300 px-3 text-sm text-gray-600 focus:border-blue-500 focus:outline-none">
              <option value="">{{ __('kursus.all_status') }}</option>
              <option value="1" {{ request('status') === '1' ? 'selected' : '' }}>
                {{ __('kursus.status_active') }}</option>
              <option value="0" {{ request('status') === '0' ? 'selected' : '' }}>
                {{ __('kursus.status_inactive') }}</option>
            </select>

            <button type="submit"
              class="py-2 px-4 rounded-md bg-blue-600 text-sm text-white cursor-pointer hover:opacity-80 transition">
              <i class="fa-solid fa-magnifying-glass"></i> {{ __('kursus.search_button') }}
            </button>
          </form>

          @if (count($programs) > 0)
            <div class="pb-3"></div>
            <table class="w-full border-collapse">
              <thead>
                <tr class="bg-gray-200">
                  <th class="py-2 font-medium">{{ __('kursus.no') }}</th>
                  <th class="py-2 font-medium">{{ __('kursus.name') }}</th>
                  <th class="py-2 font-medium">{{ __('kursus.price') }}</th>
                  <th class="py-2 font-medium">{{ __('kursus.status') }}</th>
                  <th class="py-2 font-medium">{{ __('kursus.action') }}</th>
                </tr>
              </thead>
              @php
                $formatter = new NumberFormatter('id_ID', NumberFormatter::CURRENCY);
                $formatter->setAttribute(NumberFormatter::MAX_FRACTION_DIGITS, 0);
              @endphp
              <tbody>
                @foreach ($programs as $program)
                  <tr class="border-b border-b-gray-200">
                    <td class="py-2 px-2 text-[0.9rem] border-r border-r-gray-400 text-center">{{ $loop->iteration }}
                    </td>
                    <td class="py-2 px-2 text-[0.9rem]">{{ $program->nama }}</td>
                    <td class="py-2 px-2 text-[0.9rem]">{{ $formatter->format($program->harga) }}</td>
                    <td class="py-2 px-2 text-[0.9rem] text-center">
                      @if ($program->isOpen == '1')
                        <span class="bg-green-600 py-1 px-3 text-white rounded-lg">{{ __('kursus.active') }}</span>
                      @else
                        <span class="bg-red-600 py-1 px-3 text-white rounded-lg">{{ __('kursus.inactive') }}</span>
                      @endif
                    </td>
                    <td class="py-2 px-2">
                      <div class="flex items-center gap-2 justify-center">
                        <a href="{{ route('program-detail', ['programId' => $program->programId]) }}"
                          class="inline-flex h-7 items-center justify-center rounded-sm bg-blue-950 px-2 text-[0.8rem] text-white hover:opacity-90 transition">
                          <i class="fa-solid fa-circle-info"></i> {{ __('kursus.detail') }}
                        </a>
                        <a href="{{ route('edit-program', ['programId' => $program->programId]) }}"
                          class="inline-flex h-7 items-center justify-center rounded-sm bg-blue-600 px-2 text-[0.8rem] text-white hover:opacity-90 transition">
                          <i class="fa-solid fa-file-pen"></i> {{ __('kursus.edit') }}
                        </a>
                        <form action="{{ route('delete-program') }}" method="post">
                          @csrf
                          <input type="hidden" name="programId" value="{{ $program->programId }}" />
                          <button type="submit"
                            class="inline-flex h-7 items-center justify-center rounded-sm bg-red-700 px-2 text-[0.8rem] text-white hover:opacity-90 transition cursor-pointer">
                            <i class="fa-solid fa-trash-can"></i> {{ __('kursus.delete') }}
                          </button>
                        </form>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>

            @if ($programs->lastPage() > 1)
              <nav class="flex items-center justify-center gap-1 mt-6" aria-label="Pagination">
                <a href="{{ $programs->previousPageUrl() ?? '#' }}"
                  class="flex h-9 w-9 items-center justify-center rounded-md border border-gray-300 text-gray-600 hover:bg-gray-100 {{ $programs->onFirstPage() ? 'pointer-events-none opacity-50' : '' }}">
                  <i class="fa-solid fa-chevron-left text-sm"></i>
                </a>
                @foreach ($programs->getUrlRange(1, $programs->lastPage()) as $page => $url)
                  @if ($page == $programs->currentPage())
                    <span
                      class="h-9 w-9 rounded-md bg-blue-600 text-sm text-white flex items-center justify-center">{{ $page }}</span>
                  @else
                    <a href="{{ $url }}"
                      class="h-9 w-9 rounded-md border border-gray-300 text-sm text-gray-700 hover:bg-gray-100 flex items-center justify-center">{{ $page }}</a>
                  @endif
                @endforeach
                <a href="{{ $programs->nextPageUrl() ?? '#' }}"
                  class="flex h-9 w-9 items-center justify-center rounded-md border border-gray-300 text-gray-600 hover:bg-gray-100 {{ !$programs->hasMorePages() ? 'pointer-events-none opacity-50' : '' }}">
                  <i class="fa-solid fa-chevron-right text-sm"></i>
                </a>
              </nav>
            @endif
          @else
            <div class="pb-3"></div>
            <p class="text-center font-bold">{{ __('kursus.empty') }}</p>
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
