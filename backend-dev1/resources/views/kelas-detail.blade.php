<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Detail Kelas - DreamPanel</title>

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
            <h2>Admin Panel</h2>
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
                <h2>Detail Kelas : <span style="color: gray;">Kelas 1</span></h2>
                <table class="mb-5">
                    <tr>
                        <td>Pengajar</td>
                        <td>:</td>
                        <td>Jane Doe</td>
                    </tr>
                    <tr>
                        <td>Level</td>
                        <td>:</td>
                        <td>Intermediate</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>Ongoing</td>
                    </tr>
                    <tr>
                        <td>Jumlah Peserta</td>
                        <td>:</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>Tanggal Mulai</td>
                        <td>:</td>
                        <td>02-07-2025</td>
                    </tr>
                    <tr>
                        <td>Tanggal Akhir</td>
                        <td>:</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Kurikulum</td>
                        <td>:</td>
                        <td><a href="../data-dummy/course_curriculum.pdf">Link File</a></td>
                    </tr>
                </table>
                <h2>Data Peserta</h2>
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Peserta</th>
                            <th>Email</th>
                            <th>Kontak</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                            <td>081234567890</td>
                            <td>Aktif</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>jane@example.com</td>
                            <td>081234567891</td>
                            <td>Aktif</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Michael Lee</td>
                            <td>michael@example.com</td>
                            <td>081234567892</td>
                            <td>Nonaktif</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Amanda White</td>
                            <td>amanda@example.com</td>
                            <td>081234567893</td>
                            <td>Aktif</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>David Brown</td>
                            <td>david@example.com</td>
                            <td>081234567894</td>
                            <td>Nonaktif</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Emily Green</td>
                            <td>emily@example.com</td>
                            <td>081234567895</td>
                            <td>Aktif</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Chris Johnson</td>
                            <td>chris@example.com</td>
                            <td>081234567896</td>
                            <td>Aktif</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Susan Miller</td>
                            <td>susan@example.com</td>
                            <td>081234567897</td>
                            <td>Nonaktif</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Robert Wilson</td>
                            <td>robert@example.com</td>
                            <td>081234567898</td>
                            <td>Aktif</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Linda Martinez</td>
                            <td>linda@example.com</td>
                            <td>081234567899</td>
                            <td>Aktif</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Paul Anderson</td>
                            <td>paul@example.com</td>
                            <td>081234567900</td>
                            <td>Nonaktif</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Sarah Taylor</td>
                            <td>sarah@example.com</td>
                            <td>081234567901</td>
                            <td>Aktif</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
