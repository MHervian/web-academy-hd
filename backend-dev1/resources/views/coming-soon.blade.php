<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Admin Dashboard - DreamPanel</title>

    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
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
        .content-404 {
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .back {
            display: inline-block;
            padding: 0 1rem;
            margin-top: 1rem;
            color: black;
            font-size: 1.2rem;
        }

        .back:hover {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="logo"><a href="{{ route('admin-dashboard') }}">DreamPanel</a></div>
    </div>
    <a href="{{ route('admin-dashboard') }}" class="back">&larr; Kembali ke Dashboard</a>
    <div class="container" style="height: 80vh;">
        <div class="content-404" style="height: 100%; text-align: center;">
            <h1>Coming Soon</h1>
        </div>
    </div>
</body>

</html>
