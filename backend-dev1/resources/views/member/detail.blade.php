<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>{{ __('member.detail_title') }} - DreamPanel</title>
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
          <h2 class="text-4xl font-bold text-center">{{ __('member.detail_title') }}</h2>
          <a href="{{ route('coming-soon') }}"
            class="inline-flex items-center gap-2 rounded-md bg-blue-600 px-4 py-1 text-[0.85rem] text-white hover:opacity-90 transition">
            <i class="fa-solid fa-file-pen"></i> {{ __('member.btn_edit') }}
          </a>
          <form action="{{ route('delete-member') }}" method="post">
            @csrf
            <input type="hidden" name="memberId" value="{{ $member->memberId }}" />
            <button type="submit"
              class="inline-flex h-7 items-center justify-center rounded-sm bg-red-700 px-4 py-1 text-[0.85rem] text-white hover:opacity-90 transition cursor-pointer">
              <i class="fa-solid fa-trash-can"></i> {{ __('member.btn_delete') }}
            </button>
          </form>
        </div>
        <span class="block py-2">
          <a href="{{ route('admin-dashboard') }}" class="text-blue-700">Dashboard</a> &#47;
          <a href="{{ route('member') }}" class="text-blue-700">{{ __('member.title') }}</a> &#47;
          <a href="#" class="">{{ __('member.breadcrumb_detail') }}</a>
        </span>
        <p class="text-gray-700">{{ __('member.detail_desc') }}</p>

        <div class="py-3"></div>

        <div class="grid grid-cols-2 gap-4">
          <div class="col-span-1 p-3 rounded-md bg-white shadow-md">
            <table class="w-full border-collapse">
              <tbody>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 w-[140px] font-medium">{{ __('member.label_id') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $member->memberId }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 font-medium">{{ __('member.th_username') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $member->username }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 font-medium">{{ __('member.th_email') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $member->email }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 font-medium">{{ __('member.label_method') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $member->metode }}</td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 font-medium">{{ __('member.label_password') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">******** <a
                      href="{{ route('member-reset-password', ['memberId' => $member->memberId]) }}"
                      class="ml-1.5 text-blue-700">{{ __('member.btn_reset_password') }}</a>
                  </td>
                </tr>
                <tr class="border-b border-b-gray-200">
                  <td class="py-2 px-2 font-medium">{{ __('member.label_reg_date') }}</td>
                  <td class="py-2 px-2">:</td>
                  <td class="py-2 px-2">{{ $member->date_registration }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="py-3"></div>

        <div class="grid grid-cols-2 gap-4">
          <div class="col-span-1 py-5 px-4.5 rounded-lg bg-white shadow-sm">
            <h3 class="font-bold mb-3">{{ __('member.section_class') }}</h3>
            @if (count($kelas) > 0)
              <form class="flex flex-wrap items-center gap-3">
                <div class="relative">
                  <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-gray-400">
                    <i class="fa-solid fa-magnifying-glass text-sm"></i>
                  </span>
                  <input type="text" placeholder="{{ __('member.placeholder_search') }}"
                    class="h-9 w-56 rounded-md border border-gray-300 pl-9 pr-3 text-sm focus:border-blue-500 focus:outline-none" />
                </div>
                <select
                  class="h-9 rounded-md border border-gray-300 px-3 text-sm text-gray-600 focus:border-blue-500 focus:outline-none">
                  <option>{{ __('member.filter_pass') }}</option>
                  <option>{{ __('member.filter_fail') }}</option>
                </select>
              </form>
              <div class="pb-3"></div>
              <table class="w-full border-collapse text-sm">
                <thead>
                  <tr class="bg-gray-200">
                    <th class="py-2 px-1 font-medium">{{ __('member.th_no') }}</th>
                    <th class="py-2 px-1 font-medium">{{ __('member.th_class') }}</th>
                    <th class="py-2 px-1 font-medium">{{ __('member.th_program') }}</th>
                    <th class="py-2 px-1 font-medium">{{ __('member.th_action') }}</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($kelas as $k)
                    <tr class="border-b border-b-gray-200 text-center">
                      <td class="py-2 border-r">{{ $loop->iteration }}</td>
                      <td class="py-2">{{ $k->nama_kelas }}</td>
                      <td class="py-2">{{ $k->nama_program }}</td>
                      <td class="py-2">
                        <a href="{{ route('kelas-detail', ['id' => $k->kelasId]) }}"
                          class="bg-blue-950 text-white px-2 py-1 rounded text-xs">
                          <i class="fa-solid fa-circle-info"></i> {{ __('member.btn_detail') }}
                        </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            @else
              <p class="text-center py-4">{{ __('member.empty_class') }}</p>
            @endif
          </div>

          <div class="col-span-1 py-5 px-4.5 rounded-lg bg-white shadow-sm">
            <h3 class="font-bold mb-3">{{ __('member.section_certificate') }}</h3>
            @if (count($sertifikats) > 0)
              <form class="flex flex-col gap-3">
                <div class="relative">
                  <span class="pointer-events-none absolute inset-y-0 left-3 flex items-center text-gray-400">
                    <i class="fa-solid fa-magnifying-glass text-sm"></i>
                  </span>
                  <input type="text" placeholder="{{ __('member.placeholder_search') }}"
                    class="h-9 w-56 rounded-md border border-gray-300 pl-9 pr-3 text-sm focus:border-blue-500 focus:outline-none" />
                </div>
                <div class="text-sm">
                  <span class="block pb-1 font-medium">{{ __('member.filter_date') }}</span>
                  <div class="flex gap-2 items-center">
                    <span>{{ __('member.start') }}</span>
                    <input type="date" class="h-8 border border-gray-300 rounded px-2" />
                    <span>{{ __('member.end') }}</span>
                    <input type="date" class="h-8 border border-gray-300 rounded px-2" />
                  </div>
                </div>
              </form>
              <div class="pb-3"></div>
              <table class="w-full border-collapse text-sm">
                <thead>
                  <tr class="bg-gray-200">
                    <th class="py-2 px-1 font-medium">{{ __('member.th_no') }}</th>
                    <th class="py-2 px-1 font-medium">{{ __('member.th_cert_no') }}</th>
                    <th class="py-2 px-1 font-medium">{{ __('member.th_file_link') }}</th>
                    <th class="py-2 px-1 font-medium">{{ __('member.th_action') }}</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($sertifikats as $s)
                    <tr class="border-b border-b-gray-200 text-center">
                      <td class="py-2 border-r">{{ $loop->iteration }}</td>
                      <td class="py-2">{{ $s->noSertifikat }}</td>
                      <td class="py-2">
                        <a href="{{ route('view-sertifikat', ['filename' => $s->filename]) }}" target="_blank"
                          class="text-blue-500">
                          <i class="fa-solid fa-link"></i> Link
                        </a>
                      </td>
                      <td class="py-2">
                        <a href="{{ route('sertifikat-detail', ['noSertifikat' => $s->noSertifikat]) }}"
                          class="bg-blue-950 text-white px-2 py-1 rounded text-xs">
                          {{ __('member.btn_detail') }}
                        </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            @else
              <p class="text-center py-4">{{ __('member.empty_cert') }}</p>
            @endif
          </div>
        </div>
      </div>
      @include('layouts.footer')
    </div>
  </main>
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/bttn-translate.js') }}"></script>
</body>

</html>
