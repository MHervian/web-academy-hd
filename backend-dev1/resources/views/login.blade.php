<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Login Page - DreamPanel</title>

    <meta charset="UTF-8" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
    <!-- Themify Icons -->
    <link rel="stylesheet" href="/css/themify-icons.css" />

    <!-- Admin Login CSS -->
    <link rel="stylesheet" href="/css/admin-login.css" />
</head>

<body>
    <div class="login-box">
        <h2>DreamPanel</h2>
        <form>
            <input type="text" placeholder="Username" required>
            <input type="password" placeholder="Password" required>
            <a href="{{ route('admin-dashboard') }}" class="login-btn"
                style="display: block; margin-top: 10px; text-decoration: none; text-align: center;"
                type="submit">Login</a>
        </form>
        <p><a href="{{ route('login-coming-soon') }}">Lupa password?</a></p>
    </div>
</body>

</html>
