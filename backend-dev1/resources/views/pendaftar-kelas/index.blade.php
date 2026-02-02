<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>{{ __('pendaftar.title') }} - DreamPanel</title>
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
          <h2 class="text-4xl font-bold text-center">{{ __('pendaftar.title') }}</h2>
        </div>
        <span class="block py-2">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700">Dashboard</a> /
          <a href="#" class="">{{ __('pendaftar.breadcrumb') }}</a>
        </span>
        <p class="text-gray-700">{{ __('pendaftar.description') }}</p>

        <div class="py-3"></div>

        <div class="grid grid-cols-4 gap-4">
          <div class="col-span-1 py-5 px-4 rounded-lg bg-white shadow-sm">
            <span class="flex justify-between items-center">
              <span class="font-medium text-[1rem]">{{ __('pendaftar.stat_new_today') }}</span>
              <span class="relative flex h-5 w-5">
                <span class="animate-ping absolute h-full w-full rounded-full bg-green-400 opacity-75"></span>
                <span class="relative rounded-full h-5 w-5 bg-green-500"></span>
              </span>
            </span>
            <p class="pt-2 text-2xl font-bold">41</p>
          </div>
          <div class="col-span-1 py-5 px-4 rounded-lg bg-white shadow-sm">
            <span class="flex justify-between items-center">
              <span class="font-medium text-[1rem]">{{ __('pendaftar.stat_almost_full') }}</span>
              <span class="relative flex h-5 w-5">
                <span class="animate-ping absolute h-full w-full rounded-full bg-red-400 opacity-75"></span>
                <span class="relative rounded-full h-5 w-5 bg-red-500"></span>
              </span>
            </span>
            <p class="pt-2 text-2xl font-bold">3</p>
          </div>
        </div>

        <div class="py-3"></div>

        @if (count($kelas) > 0)
          <div class="col-span-1 py-5 px-4 rounded-lg bg-white shadow-sm">
            <form action="" method="GET">
              <div class="flex items-start gap-4">
                <div class="relative">
                  <i
                    class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-sm text-gray-400 pointer-events-none"></i>
                  <input type="text" placeholder="{{ __('pendaftar.search_placeholder') }}"
                    class="h-9 w-56 rounded-md border border-gray-300 pl-9 pr-3 text-sm focus:border-blue-500 focus:outline-none" />
                </div>

                <select
                  class="h-9 rounded-md border border-gray-300 px-3 text-sm text-gray-600 focus:border-blue-500 focus:outline-none">
                  <option>{{ __('pendaftar.filter_all_status') }}</option>
                  <option>{{ __('pendaftar.filter_newly_opened') }}</option>
                  <option>{{ __('pendaftar.filter_closing_soon') }}</option>
                  <option>{{ __('pendaftar.filter_almost_full') }}</option>
                </select>

                <div class="flex items-center gap-3 py-1.5 px-4 bg-white rounded-md border border-gray-300 w-fit">
                  <label class="relative inline-flex items-center cursor-pointer group">
                    <input type="checkbox" class="sr-only peer">
                    <div
                      class="w-11 h-6 bg-slate-200 peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:bg-blue-600 after:content-[''] after:absolute after:top-0.5 after:start-0.5 after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all">
                    </div>
                    <span class="ms-3 text-sm font-medium text-slate-700 group-hover:text-blue-600 transition-colors">
                      {{ __('pendaftar.filter_today_registrant') }}
                    </span>
                  </label>
                </div>
              </div>

              <div class="py-1.5"></div>

              <div class="flex gap-3 items-center">
                <span class="text-sm">{{ __('pendaftar.label_open_date') }}</span>
                <div class="relative">
                  <i
                    class="fa-regular fa-calendar absolute left-3 top-1/2 -translate-y-1/2 text-sm text-gray-400 pointer-events-none"></i>
                  <input type="date"
                    class="h-9 rounded-md border border-gray-300 pl-9 pr-3 text-sm text-gray-600 focus:border-blue-500 focus:outline-none" />
                </div>

                <span class="text-sm">{{ __('pendaftar.label_close_date') }}</span>
                <div class="relative">
                  <i
                    class="fa-regular fa-calendar absolute left-3 top-1/2 -translate-y-1/2 text-sm text-gray-400 pointer-events-none"></i>
                  <input type="date"
                    class="h-9 rounded-md border border-gray-300 pl-9 pr-3 text-sm text-gray-600 focus:border-blue-500 focus:outline-none" />
                </div>

                <button class="h-9 px-4 rounded-md bg-blue-600 text-sm text-white hover:opacity-80 transition">
                  <i class="fa-solid fa-magnifying-glass"></i> {{ __('pendaftar.btn_search') }}
                </button>
              </div>
            </form>

            <div class="pb-3"></div>

            <table class="w-full border-collapse">
              <thead>
                <tr class="bg-gray-200">
                  <th class="py-2 font-medium text-sm">{{ __('pendaftar.th_no') }}</th>
                  <th class="py-2 font-medium text-sm">{{ __('pendaftar.th_class_name') }}</th>
                  <th class="py-2 font-medium text-sm">{{ __('pendaftar.th_remaining_days') }}</th>
                  <th class="py-2 font-medium text-sm">{{ __('pendaftar.th_quota') }}</th>
                  <th class="py-2 font-medium text-sm">{{ __('pendaftar.th_update_today') }}</th>
                  <th class="py-2 font-medium text-sm">{{ __('pendaftar.th_action') }}</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($kelas as $k)
                  <tr class="border-b border-b-gray-200 hover:bg-gray-50">
                    <td class="py-3 px-2 text-[0.9rem] border-r border-r-gray-100 text-center">{{ $loop->iteration }}
                    </td>
                    <td class="py-3 px-2 text-[0.9rem] font-medium">{{ $k->nama_kelas }}</td>
                    <td class="py-3 px-2 text-[0.9rem] text-center">
                      <span class="px-3 py-0.5 rounded-lg bg-green-600 text-white text-xs">
                        {{ __('pendaftar.remaining') }} 14 {{ __('pendaftar.days') }}
                      </span>
                    </td>
                    <td class="py-3 px-2 text-[0.9rem] text-center">
                      <div class="flex flex-col gap-1">
                        <span>({{ $k->terisi }}/{{ $k->kapasitas }})</span>
                        <div class="w-full bg-slate-200 rounded-full h-1.5">
                          <div class="bg-yellow-600 h-1.5 rounded-full" style="width: 70%"></div>
                        </div>
                      </div>
                    </td>
                    <td class="py-3 px-2 text-center font-bold">
                      <span class="text-green-600">+2</span>
                    </td>
                    <td class="py-3 px-2">
                      <div class="flex items-center gap-2 justify-center">
                        <a href="{{ route('kelas-registrasi-detail', ['kelasId' => $k->kelasId]) }}"
                          class="inline-flex h-7 items-center justify-center rounded-sm bg-blue-950 px-3 text-[0.8rem] text-white hover:opacity-90 transition">
                          <i class="fa-solid fa-circle-info mr-1"></i> {{ __('pendaftar.btn_detail') }}
                        </a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>

            <nav class="flex items-center justify-center gap-1 mt-6">
            </nav>
          </div>
        @else
          <div class="bg-white p-10 rounded-lg shadow-sm text-center">
            <p class="font-bold text-gray-500">{{ __('pendaftar.empty_data') }}</p>
          </div>
        @endif
      </div>
      @include('layouts.footer')
    </div>
  </main>

  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/bttn-translate.js') }}"></script>
</body>

</html>
