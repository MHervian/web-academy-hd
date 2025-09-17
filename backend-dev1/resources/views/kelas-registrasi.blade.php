<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Pendaftar Kelas - DreamPanel</title>

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
                <h2>Data Pendaftar Kelas</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Kelas</th>
                            <th>Start Pendaftaran</th>
                            <th>End Pendaftaran</th>
                            <th>Total Daftar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>English Novice</td>
                            <td>2025-09-01</td>
                            <td>2025-09-15</td>
                            <td>12/30</td>
                            <td><a href="{{ route('kelas-registrasi-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>English Beginner</td>
                            <td>2025-09-01</td>
                            <td>2025-09-20</td>
                            <td>20/30</td>
                            <td><a href="{{ route('kelas-registrasi-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>English Intermediate</td>
                            <td>2025-09-05</td>
                            <td>2025-09-25</td>
                            <td>15/30</td>
                            <td><a href="{{ route('kelas-registrasi-detail') }}" class="bttn-detail">Detail</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Business English</td>
                            <td>2025-09-10</td>
                            <td>2025-09-30</td>
                            <td>25/30</td>
                            <td><a href="{{ route('kelas-registrasi-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Academic English</td>
                            <td>2025-09-15</td>
                            <td>2025-10-05</td>
                            <td>18/30</td>
                            <td><a href="{{ route('kelas-registrasi-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>English for Kids</td>
                            <td>2025-09-20</td>
                            <td>2025-10-10</td>
                            <td>10/30</td>
                            <td><a href="{{ route('kelas-registrasi-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>IELTS Prep</td>
                            <td>2025-09-25</td>
                            <td>2025-10-15</td>
                            <td>22/30</td>
                            <td><a href="{{ route('kelas-registrasi-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>TOEFL Prep</td>
                            <td>2025-10-01</td>
                            <td>2025-10-20</td>
                            <td>16/30</td>
                            <td><a href="{{ route('kelas-registrasi-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Conversation Club</td>
                            <td>2025-10-05</td>
                            <td>2025-10-25</td>
                            <td>27/30</td>
                            <td><a href="{{ route('kelas-registrasi-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>English Professional</td>
                            <td>2025-10-10</td>
                            <td>2025-10-30</td>
                            <td>19/30</td>
                            <td><a href="{{ route('kelas-registrasi-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
