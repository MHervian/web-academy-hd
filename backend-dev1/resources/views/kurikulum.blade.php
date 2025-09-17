<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Kurikulum - DreamPanel</title>

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
                <h2>Data Kurikulum</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Kurikulum</th>
                            <th>Tanggal Approval</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kurikulum 1</td>
                            <td>2025-01-01</td>
                            <td><a href="{{ route('kurikulum-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kurikulum 2</td>
                            <td>2025-02-01</td>
                            <td><a href="{{ route('kurikulum-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kurikulum 3</td>
                            <td>2025-03-15</td>
                            <td><a href="{{ route('kurikulum-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kurikulum 4</td>
                            <td>2025-04-01</td>
                            <td><a href="{{ route('kurikulum-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kurikulum 5</td>
                            <td>2025-05-01</td>
                            <td><a href="{{ route('kurikulum-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kurikulum 6</td>
                            <td>2025-06-10</td>
                            <td><a href="{{ route('kurikulum-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kurikulum 7</td>
                            <td>2025-07-01</td>
                            <td><a href="{{ route('kurikulum-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kurikulum 8</td>
                            <td>2025-08-01</td>
                            <td><a href="{{ route('kurikulum-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kurikulum 9</td>
                            <td>2025-09-01</td>
                            <td><a href="{{ route('kurikulum-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kurikulum 10</td>
                            <td>2025-10-01</td>
                            <td><a href="{{ route('kurikulum-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kurikulum 11</td>
                            <td>2025-11-01</td>
                            <td><a href="{{ route('kurikulum-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kurikulum 12</td>
                            <td>2025-12-01</td>
                            <td><a href="{{ route('kurikulum-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kurikulum 13</td>
                            <td>2026-01-15</td>
                            <td><a href="{{ route('kurikulum-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kurikulum 14</td>
                            <td>2026-02-01</td>
                            <td><a href="{{ route('kurikulum-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kurikulum 15</td>
                            <td>2026-03-01</td>
                            <td><a href="{{ route('kurikulum-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
