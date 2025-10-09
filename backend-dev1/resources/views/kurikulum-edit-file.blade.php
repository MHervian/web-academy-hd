<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Upload File Kurikulum - DreamPanel</title>

  <meta charset="UTF-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Font -->
  <link rel="dns-prefetch" href="//fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/css/bootstrap.min.css" />
  <!-- Themify Icons -->
  <link rel="stylesheet" href="/css/themify-icons.css" />
  <!-- Admin CSS -->
  <link rel="stylesheet" href="/css/admin.css" />

  <style>
    .card-form {
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      margin: auto;
    }

    .card-form h2 {
      margin-bottom: 20px;
      font-size: 20px;
      color: #1e3a5f;
    }

    form label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
      font-size: 14px;
    }

    form select,
    form input[type="file"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }

    form button {
      background: #1e3a5f;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      font-size: 14px;
      cursor: pointer;
    }

    form button:hover {
      background: #16324a;
    }
  </style>

</head>

<body>
  <div class="layout">
    <!-- Sidebar -->
    <div class="sidebar">
      @include('navigation.navigation')
    </div>

    <!-- Main -->
    <div class="main">
      <!-- Header -->
      <div class="header">
        <div class="logo"><a href="{{ route('admin-dashboard') }}">DreamPanel</a></div>
        <ul class="menu">
          <li><a href="{{ route('coming-soon') }}">Inbox</a></li>
          <li><a href="{{ route('coming-soon') }}">Settings</a></li>
          <li><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
      </div>

      <!-- Content -->
      <div class="content">
        <div class="card-form">
          <h2>Upload File Kurikulum Baru</h2>
          <form action="{{ route('store-file-kurikulum') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="kurikulumId" value="{{ $kurikulumId }}" />
            <input type="hidden" name="seqno" value="{{ $seqno }}" />

            <label for="file">Upload File Kurikulum Baru (PDF)</label>
            <input type="file" id="file" name="fileKurikulum" accept="application/pdf">

            {{-- <button type="button" data-toggle="modal" data-target="#successUploadModal">Upload</button> --}}
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit">Upload</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <!-- Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</body>

</html>
