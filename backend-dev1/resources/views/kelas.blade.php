<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Kelas - DreamPanel</title>

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
                <h2>Data Kelas</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Kelas</th>
                            <th>Level</th>
                            <th>Jam Kelas</th>
                            <th>Durasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kelas 1</td>
                            <td>Novice</td>
                            <td>08:00</td>
                            <td>01-01-2025 - 31-01-2025</td>
                            <td><a href="{{ route('kelas-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kelas 2</td>
                            <td>Beginner</td>
                            <td>09:00</td>
                            <td>02-01-2025 - 01-02-2025</td>
                            <td><a href="{{ route('kelas-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kelas 3</td>
                            <td>Intermediate</td>
                            <td>10:00</td>
                            <td>03-01-2025 - 02-02-2025</td>
                            <td><a href="{{ route('kelas-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kelas 4</td>
                            <td>Expert</td>
                            <td>11:00</td>
                            <td>04-01-2025 - 03-02-2025</td>
                            <td><a href="{{ route('kelas-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kelas 5</td>
                            <td>Professional</td>
                            <td>13:00</td>
                            <td>05-01-2025 - 04-02-2025</td>
                            <td><a href="{{ route('kelas-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kelas 6</td>
                            <td>Novice</td>
                            <td>14:00</td>
                            <td>06-01-2025 - 05-02-2025</td>
                            <td><a href="{{ route('kelas-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kelas 7</td>
                            <td>Beginner</td>
                            <td>15:00</td>
                            <td>07-01-2025 - 06-02-2025</td>
                            <td><a href="{{ route('kelas-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kelas 8</td>
                            <td>Intermediate</td>
                            <td>16:00</td>
                            <td>08-01-2025 - 07-02-2025</td>
                            <td><a href="{{ route('kelas-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kelas 9</td>
                            <td>Expert</td>
                            <td>08:00</td>
                            <td>09-01-2025 - 08-02-2025</td>
                            <td><a href="{{ route('kelas-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kelas 10</td>
                            <td>Professional</td>
                            <td>09:00</td>
                            <td>10-01-2025 - 09-02-2025</td>
                            <td><a href="{{ route('kelas-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kelas 11</td>
                            <td>Novice</td>
                            <td>10:00</td>
                            <td>11-01-2025 - 10-02-2025</td>
                            <td><a href="{{ route('kelas-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kelas 12</td>
                            <td>Beginner</td>
                            <td>11:00</td>
                            <td>12-01-2025 - 11-02-2025</td>
                            <td><a href="{{ route('kelas-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kelas 13</td>
                            <td>Intermediate</td>
                            <td>13:00</td>
                            <td>13-01-2025 - 12-02-2025</td>
                            <td><a href="{{ route('kelas-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kelas 14</td>
                            <td>Expert</td>
                            <td>14:00</td>
                            <td>14-01-2025 - 13-02-2025</td>
                            <td><a href="{{ route('kelas-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kelas 15</td>
                            <td>Professional</td>
                            <td>15:00</td>
                            <td>15-01-2025 - 14-02-2025</td>
                            <td><a href="{{ route('kelas-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kelas 16</td>
                            <td>Novice</td>
                            <td>16:00</td>
                            <td>16-01-2025 - 15-02-2025</td>
                            <td><a href="{{ route('kelas-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kelas 17</td>
                            <td>Beginner</td>
                            <td>08:00</td>
                            <td>17-01-2025 - 16-02-2025</td>
                            <td><a href="{{ route('kelas-detail') }}" class="bttn-detail">Detail</button></td>
                        </tr>
                        <tr>
                            <td>Kelas 18</td>
                            <td>Intermediate</td>
                            <td>09:00</td>
                            <td>18-01-2025 - 17-02-2025</td>
                            <td><a href="{{ route('kelas-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kelas 19</td>
                            <td>Expert</td>
                            <td>10:00</td>
                            <td>19-01-2025 - 18-02-2025</td>
                            <td><a href="{{ route('kelas-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Kelas 20</td>
                            <td>Professional</td>
                            <td>11:00</td>
                            <td>20-01-2025 - 19-02-2025</td>
                            <td><a href="{{ route('kelas-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
