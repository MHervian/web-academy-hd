<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Kurikulum Detail - DreamPanel</title>

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

</head>

<body>
    <div class="layout">
        <div class="sidebar">
            <h2>Admin Menu</h2>
            <div class="nav">
                <ul>
                    <li><a href="{{ route('admin-dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('member') }}">Member</a></li>
                    <li><a href="{{ route('kurikulum') }}">Kurikulum</a></li>
                    <li><a href="{{ route('coming-soon') }}">Program</a></li>
                    <li><a href="{{ route('kelas') }}">Kelas</a></li>
                    <li><a href="{{ route('kelas-registrasi') }}">Pendaftar Kelas</a></li>
                    <li><a href="{{ route('upload-sertifikat') }}">Upload Sertifikat</a></li>
                    <li><a href="{{ route('upload-kurikulum') }}">Upload Kurikulum</a></li>
                    <li><a href="{{ route('coming-soon') }}">Notifikasi</a></li>
                    <li><a href="{{ route('coming-soon') }}">Create User</a></li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="header">
                <div class="logo"><a href="{{ route('admin-dashboard') }}">DreamPanel</a></div>
                <ul class="menu">
                    <li><a href="{{ route('coming-soon') }}">Inbox</a></li>
                    <li><a href="{{ route('coming-soon') }}">Settings</a></li>
                    <li><a href="{{ route('login') }}">Logout</a></li>
                </ul>
            </div>
            <div class="content">
                <h2>Detail Kurikulum : <span style="color: gray;">Kurikulum 1</span></h2>
                <table>
                    <tr>
                        <td>Author</td>
                        <td>:</td>
                        <td>John Doe</td>
                    </tr>
                    <tr>
                        <td>Level</td>
                        <td>:</td>
                        <td>Intermediate</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>Ongoing Approval</td>
                    </tr>
                    <tr>
                        <td>Tanggal Upload</td>
                        <td>:</td>
                        <td>02-07-2025</td>
                    </tr>
                    <tr>
                        <td>Tanggal Approval</td>
                        <td>:</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>File</td>
                        <td>:</td>
                        <td><a href="../data-dummy/course_curriculum.pdf">Link File</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
