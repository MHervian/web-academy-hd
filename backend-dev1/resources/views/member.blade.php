<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Membership - DreamPanel</title>

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
                <h2>Membership Students</h2>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Tanggal Daftar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- 30 rows dummy -->
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                            <td>081234567890</td>
                            <td>Aktif</td>
                            <td>2025-01-01</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>jane@example.com</td>
                            <td>081234567891</td>
                            <td>Aktif</td>
                            <td>2025-01-02</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Michael Lee</td>
                            <td>michael@example.com</td>
                            <td>081234567892</td>
                            <td>Nonaktif</td>
                            <td>2025-01-03</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Amanda White</td>
                            <td>amanda@example.com</td>
                            <td>081234567893</td>
                            <td>Aktif</td>
                            <td>2025-01-04</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>David Brown</td>
                            <td>david@example.com</td>
                            <td>081234567894</td>
                            <td>Nonaktif</td>
                            <td>2025-01-05</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Emily Green</td>
                            <td>emily@example.com</td>
                            <td>081234567895</td>
                            <td>Aktif</td>
                            <td>2025-01-06</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Chris Johnson</td>
                            <td>chris@example.com</td>
                            <td>081234567896</td>
                            <td>Aktif</td>
                            <td>2025-01-07</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Susan Miller</td>
                            <td>susan@example.com</td>
                            <td>081234567897</td>
                            <td>Nonaktif</td>
                            <td>2025-01-08</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Robert Wilson</td>
                            <td>robert@example.com</td>
                            <td>081234567898</td>
                            <td>Aktif</td>
                            <td>2025-01-09</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Linda Martinez</td>
                            <td>linda@example.com</td>
                            <td>081234567899</td>
                            <td>Aktif</td>
                            <td>2025-01-10</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Paul Anderson</td>
                            <td>paul@example.com</td>
                            <td>081234567900</td>
                            <td>Nonaktif</td>
                            <td>2025-01-11</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Sarah Taylor</td>
                            <td>sarah@example.com</td>
                            <td>081234567901</td>
                            <td>Aktif</td>
                            <td>2025-01-12</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Daniel Thomas</td>
                            <td>daniel@example.com</td>
                            <td>081234567902</td>
                            <td>Aktif</td>
                            <td>2025-01-13</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Olivia Harris</td>
                            <td>olivia@example.com</td>
                            <td>081234567903</td>
                            <td>Nonaktif</td>
                            <td>2025-01-14</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>James Clark</td>
                            <td>james@example.com</td>
                            <td>081234567904</td>
                            <td>Aktif</td>
                            <td>2025-01-15</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Emma Lewis</td>
                            <td>emma@example.com</td>
                            <td>081234567905</td>
                            <td>Aktif</td>
                            <td>2025-01-16</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Brian Walker</td>
                            <td>brian@example.com</td>
                            <td>081234567906</td>
                            <td>Nonaktif</td>
                            <td>2025-01-17</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Alice Hall</td>
                            <td>alice@example.com</td>
                            <td>081234567907</td>
                            <td>Aktif</td>
                            <td>2025-01-18</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Steven Allen</td>
                            <td>steven@example.com</td>
                            <td>081234567908</td>
                            <td>Aktif</td>
                            <td>2025-01-19</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Karen Young</td>
                            <td>karen@example.com</td>
                            <td>081234567909</td>
                            <td>Nonaktif</td>
                            <td>2025-01-20</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Mark King</td>
                            <td>mark@example.com</td>
                            <td>081234567910</td>
                            <td>Aktif</td>
                            <td>2025-01-21</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Patricia Wright</td>
                            <td>patricia@example.com</td>
                            <td>081234567911</td>
                            <td>Aktif</td>
                            <td>2025-01-22</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>Kevin Lopez</td>
                            <td>kevin@example.com</td>
                            <td>081234567912</td>
                            <td>Nonaktif</td>
                            <td>2025-01-23</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>Laura Hill</td>
                            <td>laura@example.com</td>
                            <td>081234567913</td>
                            <td>Aktif</td>
                            <td>2025-01-24</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Andrew Scott</td>
                            <td>andrew@example.com</td>
                            <td>081234567914</td>
                            <td>Aktif</td>
                            <td>2025-01-25</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>Michelle Green</td>
                            <td>michelle@example.com</td>
                            <td>081234567915</td>
                            <td>Nonaktif</td>
                            <td>2025-01-26</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>George Adams</td>
                            <td>george@example.com</td>
                            <td>081234567916</td>
                            <td>Aktif</td>
                            <td>2025-01-27</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td>Barbara Baker</td>
                            <td>barbara@example.com</td>
                            <td>081234567917</td>
                            <td>Aktif</td>
                            <td>2025-01-28</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>Edward Nelson</td>
                            <td>edward@example.com</td>
                            <td>081234567918</td>
                            <td>Nonaktif</td>
                            <td>2025-01-29</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>Lisa Carter</td>
                            <td>lisa@example.com</td>
                            <td>081234567919</td>
                            <td>Aktif</td>
                            <td>2025-01-30</td>
                            <td><a href="{{ route('member-detail') }}" class="bttn-detail">Detail</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
