<?php 
    $page = 'help';
    $page_title = 'Bantuan Dokodemo-Kerja | Remote Work Tracking Tool for HR';

    $meta_description = 'LOGIQUE Digital Indonesia provides digital solutions for human resources through remote working software, Dokodemo-Kerja, designed for reducing costs.';
    $meta_keyword = 'LOGIQUE Digital Indonesia, Dokodemo-Kerja, digital solutions, human resources, remote working software, remote working, remote work, reducing costs, reduce costs, Nicholas Bloom, Working from home';

    $og_title = 'Bantuan Dokodemo-Kerja | Remote Work Tracking Tool for HR';
    $og_image = 'https://dokodemo-kerja.com/img/og-img/about.jpg';
    $og_desription = 'Dokodemo-Kerja is a Human Resource tool developed by PT. LOGIQUE Digital Indonesia, a company providing Digital Solutions, based in Jakarta, Indonesia. Dokodemo-Kerja was designed to promote healthier and more productive work cultures in a way that benefits both the Company and Employees alike.';

    $canonical_link = 'https://dokodemo-kerja.com/ind/help';

    $add_css = '<link rel="stylesheet" href="/css/style-help.css" />';

    include($_SERVER['DOCUMENT_ROOT'].'/ind/component/header.php');
?>

<div class="color--blue my-5 help">

    <section class="help__explain">
        <div class="container">
            <h1 class="mb--20px color--blue fs-30 font-weight-bold">Bantuan</h1>
            <div class="btn__nav-menu"></div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="border border--gray rounded-lg explain__topic hide-mobile">
                        <div class="btn__close-sidebar">&#10006;</div>
                        <ul class="d-flex flex-column nav" role="tablist" id="accordion">
                            <li class="nav-item" data-toggle="collapse" href="#login_list">
                                <a class="nav-link active" id="" data-toggle="tab" href="#help_login" role="tab" aria-controls="login" aria-selected="true">Login
                                </a> 
                            </li>
                            <li class="nav-item">  
                                <ul class="list-unstyled collapse show" id="login_list" data-parent="#accordion">
                                    <li><a href="#login_1">Login</a></li>
                                    <li><a href="#login_2">Remember Me</a></li>
                                    <li><a href="#login_3">Forgot Your Password</a></li>
                                </ul> 
                            </li>
                            <li class="nav-item" data-toggle="collapse" href="#homepage_list">
                                <a class="nav-link" id="" data-toggle="tab" href="#help_homepage" role="tab" aria-controls="homepage" aria-selected="false">Homepage - Admin
                                </a>    
                            </li>
                            <li class="nav-item">
                                <ul class="list-unstyled collapse" id="homepage_list" data-parent="#accordion">
                                    <li><a href="#homepage_1">Filter by Team</a></li>
                                    <li><a href="#homepage_2">Filter by Staff Name</a></li>
                                    <li><a href="#homepage_3">Filter by Date</a></li>
                                    <li><a href="#homepage_4">Daily</a></li>
                                    <li><a href="#homepage_5">Weekly</a></li>
                                    <li><a href="#homepage_6">Monthly</a></li>
                                    <li><a href="#homepage_7">Edit Time Tracking</a></li>
                                    <li><a href="#homepage_8">Show Data</a></li>
                                    <li><a href="#homepage_9">Pagination</a></li>
                                    <li><a href="#homepage_10">Staff Detail</a></li>
                                    <li><a href="#homepage_11">Notification</a></li>
                                </ul>
                            </li>
                            <li class="nav-item" data-toggle="collapse" href="#profile_list">
                                <a class="nav-link" id="" data-toggle="tab" href="#help_profile" role="tab" aria-controls="profile" aria-selected="false">Profile
                                </a>    
                            </li>
                            <li class="nav-item">
                                <ul class="list-unstyled collapse" id="profile_list" data-parent="#accordion">
                                    <li><a href="#profile_1">My Profile</a></li>
                                    <li><a href="#profile_2">Bills</a></li>
                                    <li><a href="#profile_3">Settings</a></li>
                                    <li><a href="#profile_4">Change Password</a></li>
                                    <li><a href="#profile_5">Logout</a></li>
                                </ul>
                            </li>
                            <li class="nav-item" data-toggle="collapse" href="#setting_staff_list">
                                <a class="nav-link" id="" data-toggle="tab" href="#help_setting_staff" role="tab" aria-controls="introduction" aria-selected="true">Setting - Staff</a>
                            </li>
                            <li class="nav-item">
                                <ul class="list-unstyled collapse" id="setting_staff_list" data-parent="#accordion">
                                    <li><a href="#setting_staff_1">Add Staff</a></li>
                                    <li><a href="#setting_staff_2">Edit Staff</a></li>
                                    <li><a href="#setting_staff_3">Reset Password</a></li>
                                    <li><a href="#setting_staff_4">Change Status</a></li>
                                    <li><a href="#setting_staff_5">Filter By atau Search Data</a></li>
                                    <li><a href="#setting_staff_6">Pagination</a></li>
                                </ul>
                            </li>
                            <li class="nav-item" data-toggle="collapse" href="#setting_task_list">
                                <a class="nav-link" id="" data-toggle="tab" href="#help_setting_task" role="tab" aria-controls="task setting" aria-selected="true">Setting - Task</a>
                            </li>
                            <li class="nav-item">
                                <ul class="list-unstyled collapse" id="setting_task_list" data-parent="#accordion">
                                    <li><a href="#setting_task_1">Add New Task</a></li>
                                    <li><a href="#setting_task_2">Edit Task</a></li>
                                    <li><a href="#setting_task_3">Change Status</a></li>
                                    <li><a href="#setting_task_4">Delete Task</a></li>
                                    <li><a href="#setting_task_5">Filter By atau Search Data</a></li>
                                    <li><a href="#setting_task_6">Pagination</a></li>
                                </ul>
                            </li>
                            <li class="nav-item" data-toggle="collapse" href="#setting_team_list">
                                <a class="nav-link" id="" data-toggle="tab" href="#help_setting_team" role="tab" aria-controls="team setting" aria-selected="true">Setting - Team</a>
                            </li>
                            <li class="nav-item">
                                <ul class="list-unstyled collapse" id="setting_team_list" data-parent="#accordion">
                                    <li><a href="#setting_team_1">Add Team</a></li>
                                    <li><a href="#setting_team_2">Edit Team</a></li>
                                    <li><a href="#setting_team_3">Change Status</a></li>
                                    <li><a href="#setting_team_4">Filter By atau Search Data</a></li>
                                    <li><a href="#setting_team_5">Pagination</a></li>
                                </ul>
                            </li>
                            <li class="nav-item" data-toggle="collapse" href="#setting_day_off_list">
                                <a class="nav-link" id="" data-toggle="tab" href="#help_setting_day_off" role="tab" aria-controls="day off setting" aria-selected="true">Setting - Day Off</a>
                            </li>
                            <li class="nav-item">
                                <ul class="list-unstyled collapse" id="setting_day_off_list" data-parent="#accordion">
                                    <li><a href="#setting_day_off_1">Update Leave</a></li>
                                    <li><a href="#setting_day_off_2">Custom Day Off</a></li>
                                    <li><a href="#setting_day_off_3">Working Days / Holidays</a></li>
                                    <li><a href="#setting_day_off_4">Attendance</a></li>
                                    <li><a href="#setting_day_off_5">Day Off Notification</a></li>
                                </ul>
                            </li>
                            <li class="nav-item" data-toggle="collapse" href="#attendance_list">
                                <a class="nav-link" id="" data-toggle="tab" href="#help_attendance" role="tab" aria-controls="introduction" aria-selected="true">Attendance Admin</a>
                            </li>
                            <li class="nav-item">
                                <ul class="list-unstyled collapse" id="attendance_list" data-parent="#accordion">
                                    <li><a href="#attendance_1">Day Off/Leave</a></li>
                                    <li><a href="#attendance_2">Attendance History</a></li>
                                    <li><a href="#attendance_3">Late</a></li>
                                </ul>
                            </li>
                            <li class="nav-item" data-toggle="collapse" href="#">
                                <a class="nav-link" id="" data-toggle="tab" href="#help_desktop" role="tab" aria-controls="introduction" aria-selected="true">Desktop App</a>
                            </li>
                            <li class="nav-item" data-toggle="collapse" href="#dashboard_list">
                                <a class="nav-link" id="" data-toggle="tab" href="#help_dashboard" role="tab" aria-controls="introduction" aria-selected="true">Dashboard - Staff</a>
                            </li>
                            <li class="nav-item">
                                <ul class="list-unstyled collapse" id="dashboard_list" data-parent="#accordion">
                                    <li><a href="#dashboard_1">Homepage Staff</a></li>
                                    <li><a href="#dashboard_2">Attendance Staff</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content explain__content">
                        <div class="tab-pane fade show active" id="help_login" role="tabpanel" aria-labelledby="">
                            <div class="title--bg title--bg-border title--bg-border-left" data-title-bg="Login">
                                <h2 class="font-weight-bold fs-30">Login</h2>
                            </div>
                            <ol class="list--multi-level list--bold" style="--start: '1'">
                                <li class="mb-3" id="login_1">
                                    <h5 class="font-weight-bold">Login</h5>
                                    <p>Masukan email dan password yang sudah terdaftar lalu centang box captcha.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/login-1-1.webp" type="image/webp">
                                            <img src="/img/help/jpg/login-1-1.jpg" alt="login page dokodemo" class="img-fluid">
                                        </picture>                              
                                    </div>
                                </li>
                                <li class="mb-3" id="login_2">
                                    <h5 class="font-weight-bold">Remember Me</h5>
                                    <p>Fitur ini berfungsi untuk menyimpan data email dan password.</p>
                                </li>
                                <li class="mb-3" id="login_3">
                                    <h5 class="font-weight-bold">Forgot your Password</h5>
                                    <p>Fitur ini digunakan untuk mendapatkan password kembali jika user lupa dengan passwordnya. Cara untuk mendapatkan password kembali:</p>
                                    <ul class="mb-4">
                                        <li class="mb-2">Klik forgot your password pada halaman login.</li>
                                        <li class="mb-2">Masukan email address.</li>
                                        <li class="mb-2">Link reset password akan dikirimkan ke email user.</li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                                <picture>
                                                    <source srcset="/img/help/webp/login-1-2.webp" type="image/webp">
                                                    <img src="/img/help/jpg/login-1-2.jpg" alt="forgot password dokodemo" class="img-fluid">
                                                </picture>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="tab-pane fade" id="help_homepage" role="tabpanel" aria-labelledby="">
                            <div class="title--bg title--bg-border title--bg-border-left" data-title-bg="Homepage - Admin">
                                <h2 class="font-weight-bold fs-30">Homepage - Admin</h2>
                            </div>
                            <p>Merupakan halaman utama admin Dokodemo-Kerja. Halaman ini tidak bisa diakses oleh staff biasa, dan berisi fitur-fitur berikut.</p>
                            <div class="mb-3">
                                <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                    <picture>
                                        <source srcset="/img/help/webp/homepage-2-1.webp" type="image/webp">
                                        <img src="/img/help/jpg/homepage-2-1.jpg" alt="homepage admin page" class="img-fluid">
                                    </picture>
                                </div>
                            </div>
                            <ol class="pl-3 mb-5">
                                <li class="mb-2"><b>Filter by Team</b>: Fitur ini digunakan untuk menyortir tabel berdasarkan Team.</li>
                                <li class="mb-2"><b>Filter by Staff Name</b>: Fitur ini digunakan untuk menyortir tabel berdasarkan Nama Staff.</li>
                                <li class="mb-2"><b>Filter by Date</b>: Fitur ini digunakan untuk menyortir tabel berdasarkan Tanggal.</li>
                                <li class="mb-2"><b>Daily</b>: Tombol ini digunakan untuk menampilkan pembagian jam kerja karyawan-karyawan dalam 1 hari.</li>
                                <li class="mb-2"><b>Weekly</b>: Tombol ini digunakan untuk menampilkan total jam kerja karyawan-karyawan selama 7 hari / 1 minggu.</li>
                                <li class="mb-2"><b>Monthly</b>: Tombol ini digunakan untuk menampilkan pembagian jam kerja karyawan-karyawan selama 1 bulan.</li>
                                <li class="mb-2"><b>Edit Time Tracking</b>: Fitur ini berfungsi untuk mengganti / merubah waktu yang telah tersimpan di menu time tracking.</li>
                                <li class="mb-2"><b>Show Data</b>: Fitur ini berfungsi untuk menampilkan banyaknya data karyawan yang ditampilkan pada tiap halaman.</li>
                                <li class="mb-2"><b>Pagination</b>: Fitur ini berfungsi untuk pindah ke halaman selanjutnya untuk melihat data yang melebihi batas angka yang dipilih di Show.</li>
                                <li class="mb-2"><b>Detail Staff</b>: Dengan menekan nama karyawan, admin dapat melihat penjabaran time tracking, notes, edited time, screenshot, location, dan session detail staff yang dipilih.</li>
                            </ol>

                            <ol class="list--multi-level list--bold" style="--start:'2'">

                                <li class="mb-3" id="homepage_1">
                                    <h5 class="font-weight-bold">Filter by Team</h5>
                                    <p>Admin dapat melakukan filter time tracking berdasarkan Team melalui fitur ini. Setelah memilih nama Team, website akan menampilkan time tracking seluruh karyawan yang termasuk di dalam Team tersebut.</p>
                                    <div class="row col-md-11">
                                        <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                            <picture>
                                                <source srcset="/img/help/webp/homepage-2-2.webp" type="image/webp">
                                                <img src="/img/help/jpg/homepage-2-2.jpg" alt="fiter by team" class="img-fluid">
                                            </picture>
                                        </div>
                                    </div>
                                </li>

                                <li class="mb-3" id="homepage_2">
                                    <h5 class="font-weight-bold">Filter by Staff Name</h5>
                                    <p>Admin dapat melakukan filter time tracking berdasarkan nama karyawan melalui fitur ini. Setelah memilih nama karyawan, website akan menampilkan data time tracking karyawan yang dipilih.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/homepage-2-3.webp" type="image/webp">
                                            <img src="/img/help/jpg/homepage-2-3.jpg" alt="Filter by Staff Name" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>                                

                                <li class="mb-3" id="homepage_3">
                                    <h5 class="font-weight-bold">Filter by Date</h5>
                                    <p>Admin dapat melakukan filter time tracking berdasarkan tanggal melalui fitur ini. Setelah meng-klik tanggal yang dipilih, website akan menampilkan time tracking seluruh karyawan pada tanggal yang telah dipilih.</p>
                                    <p>Warna biru menunjukkan tanggal yang dipilih, sedangkan warna kuning menunjukkan tanggal hari ini.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/homepage-2-4.webp" type="image/webp">
                                            <img src="/img/help/jpg/homepage-2-4.jpg" alt="Filter by Date" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>

                                <li class="mb-3" id="homepage_4">
                                    <h5 class="font-weight-bold">Daily</h5>
                                    <p>Halaman ini digunakan untuk menampilkan jam kerja karyawan per hari. Dengan fitur ini admin dapat melihat data time tracking harian karyawan. Pada halaman ini terdapat kolom nama staff, time worked, dan tanggal per harinya.</p>
                                    <ul class="mb-3">
                                        <li><b>Staff Name</b>: Kolom ini berisikan nama-nama staff yang mengaktifkan Dokodemo-Kerja.</li>
                                        <li><b>Time Worked</b>: Jumlah jam kerja per hari.</li>
                                        <li><b>Tanggal</b>: Menampilkan total jam kerja setiap hari selama 1 hari.</li>
                                        <li><div class="bg--blue d-inline-flex justify-content-center w-25px py-1"><img src="/img/icon/chevron-white-left.svg" alt=""></div> : Untuk pindah halaman ke hari sebelumnya.</li>
                                        <li><div class="bg--blue d-inline-flex justify-content-center w-25px py-1"><img src="/img/icon/chevron-white-right.svg" alt=""></div> : Untuk pindah halaman ke hari berikutnya.</li>
                                    </ul>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/homepage-2-5.webp" type="image/webp">
                                            <img src="/img/help/jpg/homepage-2-5.jpg" alt="Daily Work Hour" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>

                                <li class="mb-3" id="homepage_5">
                                    <h5 class="font-weight-bold">Weekly</h5>
                                    <p>Halaman yang digunakan untuk menampilkan jam kerja karyawan selama 7 hari / 1 minggu. Dengan fitur ini admin dapat melihat data time tracking mingguan karyawan. Pada halaman ini terdapat kolom nama staff, time worked, dan tanggal selama 1 minggu.</p>
                                    <ul class="mb-3">
                                        <li><b>Staff Name</b>: Kolom yang berisikan nama-nama staff yang mengaktifkan Dokodemo-Kerja.</li>
                                        <li><b>Time Worked</b>: Jumlah jam kerja selama 1 minggu.</li>
                                        <li><b>Tanggal</b>: Menampilkan total jam kerja setiap hari selama 1 minggu.</li>
                                        <li><div class="bg--blue d-inline-flex justify-content-center w-25px py-1"><img src="/img/icon/chevron-white-left.svg" alt=""></div> : Untuk pindah halaman ke minggu sebelumnya.</li>
                                        <li><div class="bg--blue d-inline-flex justify-content-center w-25px py-1"><img src="/img/icon/chevron-white-right.svg" alt=""></div> : Untuk pindah halaman ke minggu berikutnya.</li>
                                    </ul>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/homepage-2-6.webp" type="image/webp">
                                            <img src="/img/help/jpg/homepage-2-6.jpg" alt="Weekly Work Hour" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>

                                <li class="mb-3" id="homepage_6">
                                    <h5 class="font-weight-bold">Monthly</h5>
                                    <p>Halaman yang digunakan untuk menampilkan jam kerja karyawan selama 1 bulan. Dengan fitur ini admin dapat melihat time tracking bulanan karyawan. Pada halaman ini terdapat kolom nama staff, time worked, dan tanggal selama 1 bulan.</p>
                                    <ul class="mb-3">
                                        <li><b>Staff Name</b>: Kolom yang berisikan nama-nama staff yang mengaktifkan Dokodemo-Kerja.</li>
                                        <li><b>Time Worked</b>: Jumlah jam kerja selama 1 bulan.</li>
                                        <li><b>Tanggal</b>: Menampilkan total jam kerja setiap hari selama 1 bulan.</li>
                                        <li><div class="bg--blue d-inline-flex justify-content-center w-25px py-1"><img src="/img/icon/chevron-white-left.svg" alt=""></div> : Untuk pindah halaman ke bulan sebelumnya.</li>
                                        <li><div class="bg--blue d-inline-flex justify-content-center w-25px py-1"><img src="/img/icon/chevron-white-right.svg" alt=""></div> : Untuk pindah halaman ke bulan berikutnya.</li>
                                    </ul>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/homepage-2-7.webp" type="image/webp">
                                            <img src="/img/help/jpg/homepage-2-7.jpg" alt="Monthly Work Hour" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>

                                <li class="mb-3" id="homepage_7">
                                    <h5 class="font-weight-bold">Edit Time Tracking</h5>
                                    <p>Fitur ini berfungsi untuk mengganti / merubah waktu yang telah tersimpan di menu time tracking. Pada fitur ini terdapat bagian start time, end time, dan reason.</p>
                                    <ul class="mb-3">
                                        <li>Start time: Waktu ketika mulai mengaktifkan Dokodemo-Kerja.</li>
                                        <li>End time: Waktu ketika mengakhiri Dokodemo-Kerja.</li>
                                        <li>Reason: Kolom alasan yang wajib diisi agar dapat mengedit waktu.</li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                                <picture>
                                                    <source srcset="/img/help/webp/homepage-2-8.webp" type="image/webp">
                                                    <img src="/img/help/jpg/homepage-2-8.jpg" alt="Edit Time Tracking button" class="img-fluid">
                                                </picture>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/homepage-2-9.webp" type="image/webp">
                                            <img src="/img/help/jpg/homepage-2-9.jpg" alt="Edit Time Tracking" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>

                                <li class="mb-3" id="homepage_8">
                                    <h5 class="font-weight-bold">Show Data</h5>
                                    <p>Fitur ini berfungsi untuk menampilkan banyaknya data karyawan yang ditampilkan di tiap halamannya. Admin dapat memilih untuk menampilkan 10, 15, 25, 50, atau semuanya.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/homepage-2-10.webp" type="image/webp">
                                            <img src="/img/help/jpg/homepage-2-10.jpg" alt="Data Show" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>

                                <li class="mb-3" id="homepage_9">
                                    <h5 class="font-weight-bold">Pagination</h5>
                                    <p>Fitur ini berfungsi untuk pindah ke halaman selanjutnya untuk melihat data yang melebihi batas angka yang dipilih di Show Data.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/homepage-2-11.webp" type="image/webp">
                                            <img src="/img/help/jpg/homepage-2-11.jpg" alt="pagination" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>

                                <li class="mb-3" id="homepage_10">
                                    <h5 class="font-weight-bold">Staff Detail</h5>
                                    <p>Fitur ini berfungsi untuk melihat detail time tracking dan screenshot time tracking staff yang bersangkutan. Pada halaman ini admin dapat melihat total jam kerja karyawan, memberikan komentar, melihat sesi kerja, screenshot layar computer, serta lokasi karyawan pada waktu – waktu tertentu, dan juga untuk melihat history pengeditan time tracking yang dilakukan oleh karyawan bersangkutan.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/homepage-2-12.webp" type="image/webp">
                                            <img src="/img/help/jpg/homepage-2-12.jpg" alt="Staff Detail" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>

                                <li class="mb-3" id="homepage_11">
                                    <h5 class="font-weight-bold">Notification</h5>
                                    <p>Fitur ini digunakan untuk melihat notifikasi yang masuk, seperti penambahan user baru, screenshot yang duplikat, perubahan status, dll.</p>
                                    <div class="mb-3">
                                        <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                            <picture>
                                                <source srcset="/img/help/webp/homepage-2-13.webp" type="image/webp">
                                                <img src="/img/help/jpg/homepage-2-13.jpg" alt="Notifikasi Admin" class="img-fluid">
                                            </picture>
                                        </div>
                                    </div>
                                    <p>Tombol “View All” akan membawa user ke halaman baru untuk menampilkan riwayat notifikasi yang telah dikategorikan menurut tipenya. Kata ‘Mark as read’ bisa ditekan untuk menandakan bahwa notifikasi sudah terbaca.</p>
                                    <div class="mb-3">
                                        <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                            <picture>
                                                <source srcset="/img/help/webp/homepage-2-14.webp" type="image/webp">
                                                <img src="/img/help/jpg/homepage-2-14.jpg" alt="Staff Detail" class="img-fluid">
                                            </picture>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><b>All</b>: Riwayat semua notifikasi yang muncul</li>
                                        <li><b>Similar Screenshot</b>: Menunjukkan karyawan yang layarnya terdeteksi sebagai tidak aktif.</li>
                                        <li><b>Comment</b>: Menunjukkan komentar-komentar yang ditambahkan oleh karyawan di riwayat work hour mereka.</li>
                                        <li><b>Comment Reply</b>: Menunjukkan balasan dari komentar yang ditambahkan</li>
                                        <li><b>Edit Work Session</b>: Menunjukkan nama karyawan yang mengganti jam kerja mereka.</li>
                                        <li><b>Staff’s Day Off</b>: Menunjukkan karyawan yang mengajukan day off.</li>
                                        <li><b>Your Day Off</b>: Menunjukkan status pengajuan day off akun sendiri.</li>
                                    </ul>
                                </li>

                            </ol>

                        </div>
                        <div class="tab-pane fade" id="help_profile" role="tabpanel" aria-labelledby="">     
                            <div class="title--bg title--bg-border title--bg-border-left" data-title-bg="Profile">
                                <h2 class="font-weight-bold fs-30">Profile</h2>
                            </div>                        
                            <p>Menu Profile dapat diakses melalui icon yang ada di ujung kanan atas website. Berikut adalah beberapa fitur yang bisa diakses dari menu ini.</p>
                            <ol class="mb-3">
                                <li class="mb-2"><b>My profile</b>: Halaman ini berisikan keterangan profil user.</li>
                                <li class="mb-2"><b>Settings</b>: Halaman ini digunakan untuk mengubah pengaturan Staff, Task, Team, dan Absensi.</li>
                                <li class="mb-2"><b>Billing</b>: Halaman ini digunakan untuk melihat riwayat berlangganan dan transaksi-transaksi yang pernah dilakukan.</li>
                                <li class="mb-2"><b>Change Password</b>: Halaman ini digunakan untuk mengganti password user.</li>
                                <li class="mb-2"><b>Logout</b>: Fitur ini digunakan untuk keluar dari website Dokodemo-Kerja.</li>
                            </ol>
                            <div class="mb-5">
                                <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                    <picture>
                                        <source srcset="/img/help/webp/profile-3-1.webp" type="image/webp">
                                        <img src="/img/help/jpg/profile-3-1.jpg" alt="dokodemo profile icon dropdown" class="img-fluid">
                                    </picture>
                                </div>
                            </div>

                            <ol class="list--multi-level list--bold" style="--start: '3'">
                                <li class="mb-3" id="profile_1">
                                    <h5 class="font-weight-bold">My Profile</h5>
                                    <p>Menu ini digunakan untuk melihat keterangan profil user.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/profile-3-2.webp" type="image/webp">
                                            <img src="/img/help/jpg/profile-3-2.jpg" alt="dokodemo profile popup" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>

                                <li class="mb-3" id="profile_2">
                                    <h5 class="font-weight-bold">Bills</h5>
                                    <p>Halaman ini dapat digunakan untuk melihat riwayat berlangganan dan transaksi-transaksi yang pernah dilakukan. Halaman ini juga dapat digunakan untuk mengunggah bukti transaksi serta melihat berkas invoice dan pajak.</p>
                                    <ol class="mb-3 pl-3">
                                        <li class="mb-2"><b>Select Year</b>: Filter ini dapat digunakan untuk melihat tagihan dalam rentan waktu satu tahun.</li>
                                        <li class="mb-2"><b>UNPAID</b>: Tabel ini menunjukkan tagihan-tagihan yang belum dibayar, sedang diproses (Pending), dan yang terlambat (Overdue).</li>
                                        <li class="mb-2"><b>PAID</b>: Tabel ini menunjukkan tagihan-tagihan yang telah dibayar dan sudah terkonfirmasi.</li>
                                        <li class="mb-2"><b>Invoice & Tax</b>: Kedua tombol ini hanya muncul saat pembayaran sudah terkonfirmasi. Berkas Invoice & Tax dapat diunduh, dan tetap akan tersimpan di system. Jika tombol tidak muncul, berarti pembayaran pada bulan tersebut gratis.</li>
                                    </ol>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/profile-3-3.webp" type="image/webp">
                                            <img src="/img/help/jpg/profile-3-3.jpg" alt="dokodemo bill page" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>

                                <li class="mb-3" id="profile_3">
                                    <h5 class="font-weight-bold">Settings</h5>
                                    <p>Menu ini digunakan untuk mengakses setting Staff, Task, Team, dan Day Off Settings. Detail penggunaan setiap halaman dapat dilihat di bab selanjutnya.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/profile-3-4.webp" type="image/webp">
                                            <img src="/img/help/jpg/profile-3-4.jpg" alt="dokodemo profile settings popup" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>

                                <li class="mb-3" id="profile_4">
                                    <h5 class="font-weight-bold">Change Password</h5>
                                    <p>Menu ini digunakan untuk merubah password user.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/profile-3-5.webp" type="image/webp">
                                            <img src="/img/help/jpg/profile-3-5.jpg" alt="dokodemo profile popup" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>

                                <li class="mb-3" id="profile_5">
                                    <h5 class="font-weight-bold">Logout</h5>
                                    <p>Fitur ini digunakan untuk keluar dari Dokodemo-Kerja.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/profile-3-5.webp" type="image/webp">
                                            <img src="/img/help/jpg/profile-3-5.jpg" alt="dokodemo logout" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <div class="tab-pane fade" id="help_setting_staff" role="tabpanel" aria-labelledby="">
                            <div class="title--bg title--bg-border title--bg-border-left" data-title-bg="Settings - Staff">
                                <h2 class="font-weight-bold fs-30">Settings - Staff</h2>
                            </div>
                            <p>Halaman staff dapat diakses melalui menu navigasi, yang berisikan informasi tentang staff yang terdaftar pada Dokodemo-Kerja. Halaman ini memiliki beberapa fitur seperti yang terjabar dibawah ini.</p>
                            <ol class="pl-3">
                                <li class="mb-2"><b>Add Staff</b>: Fitur untuk menambah data staff baru.</li>
                                <li class="mb-2"><b>Name</b>: Berisikan nama staff yang terdaftar.</li>
                                <li class="mb-2"><b>Team</b>: Berisikan informasi team staff.</li>
                                <li class="mb-2"><b>Email</b>: Berisikan email staff yang terdaftar pada Dokodemo-Kerja.</li>
                                <li class="mb-2"><b>Set time</b>: Berisikan set time staff.</li>
                                <li class="mb-2"><b>Status</b>: Menampilkan informasi status staff, antara aktif atau tidak aktif.</li>
                                <li class="mb-2"><b>Action</b>: Berisikan tombol edit untuk merubah data staff, tombol reset password untuk mengubah password user, tombol active untuk mengaktifkan atau menonaktifkan staff, dan tombol delete untuk menghapus staff.</li>
                                <li class="mb-2"><b>Filter by</b>: Fitur pencarian untuk menemukan kata yang dicari.</li>
                                <li class="mb-2"><b>Active/Inactive</b>: Tab yang menunjukkan perbedaan antara akun karyawan yang masih aktif dan yang tidak aktif.</li>
                            </ol>
                            <div class="mb-5">
                                <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                    <picture>
                                        <source srcset="/img/help/webp/setting-staff-4-1.webp" type="image/webp">
                                        <img src="/img/help/jpg/setting-staff-4-1.jpg" alt="dokodemo staff management" class="img-fluid">
                                    </picture>
                                </div>
                            </div>

                            <ol class="list--multi-level list--bold" style="--start: '4'">

                                <li class="mb-3" id="setting_staff_1">
                                    <h5 class="font-weight-bold">Add Staff</h5>
                                    <p>Fitur ini digunakan untuk menambahkan user staff pada Dokodemo-Kerja. Fitur ini berisikan field email, full name, access level, team, <i>set time</i> (jam mulai kerja), dan <i>join date</i> (tanggal mulai kerja).</p>
                                    <p>Access Level terbagi menjadi 4:</p>
                                    <ol class="pl-3 mb-3">
                                        <li class="mb-2">Super Admin: Memiliki otoritas untuk mengelola Billing, Staff, Task, Team, dan melihat jam kerja serta tangkapan layar semua karyawan.</li>
                                        <li class="mb-2">Admin: Memiliki otoritas untuk mengelola Staff, Task, Team, dan melihat jam kerja serta tangkapan layar semua karyawan.</li>
                                        <li class="mb-2">Team Leader: Memiliki otoritas untuk dan melihat jam kerja serta tangkapan layar karyawan-karyawan yang ada di Team-nya.</li>
                                        <li class="mb-2">Staff: Hanya bisa melihat jam kerja serta tangkapan layar mereka sendiri.</li>
                                    </ol>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/setting-staff-4-2.webp" type="image/webp">
                                            <img src="/img/help/jpg/setting-staff-4-2.jpg" alt="dokodemo form add staff" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>
                            
                                <li class="mb-3" id="setting_staff_2">
                                    <h5 class="font-weight-bold">Edit Staff</h5>
                                    <p>Tombol untuk mengubah informasi staff yang telah terdaftar. Fitur ini berisikan field email, full name, access level, team, set time, join date, device info, dan leave quota.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/setting-staff-4-3.webp" type="image/webp">
                                            <img src="/img/help/jpg/setting-staff-4-3.jpg" alt="dokodemo edit staff" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>
                            
                                <li class="mb-3" id="setting_staff_3">
                                    <h5 class="font-weight-bold">Reset Password</h5>
                                    <p>Tombol untuk mengubah password user. Password baru akan dikirim ke email staff yang dipilih setelah menekan tombol Reset.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/setting-staff-4-4.webp" type="image/webp">
                                            <img src="/img/help/jpg/setting-staff-4-4.jpg" alt="dokodemo reset password" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>
                            
                                <li class="mb-3" id="setting_staff_4">
                                    <h5 class="font-weight-bold">Change Status</h5>
                                    <p>Tombol untuk mengubah status staff menjadi aktif atau non-aktif.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/setting-staff-4-5.webp" type="image/webp">
                                            <img src="/img/help/jpg/setting-staff-4-5.jpg" alt="dokodemo staff status" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>
                            
                                <li class="mb-3" id="setting_staff_5">
                                    <h5 class="font-weight-bold">Filter By atau Search Data</h5>
                                    <p>Filter ini digunakan untuk mencari informasi staff berdasarkan alamat email.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/setting-staff-4-6.webp" type="image/webp">
                                            <img src="/img/help/jpg/setting-staff-4-6.jpg" alt="dokodemo profile popup" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>
                            
                                <li class="mb-3" id="setting_staff_6">
                                    <h5 class="font-weight-bold">Pagination</h5>
                                    <p>Fitur ini berfungsi untuk pindah ke halaman sebelumnya, atau selanjutnya.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/setting-staff-4-7.webp" type="image/webp">
                                            <img src="/img/help/jpg/setting-staff-4-7.jpg" alt="dokodemo profile popup" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>

                            </ol>
                        </div>
                        <div class="tab-pane fade" id="help_setting_task" role="tabpanel" aria-labelledby="">
                            <div class="title--bg title--bg-border title--bg-border-left" data-title-bg="Settings - Task">
                                <h2 class="font-weight-bold fs-30">Settings - Task</h2>
                            </div>
                            <p>Halaman project berisikan informasi task yang tersedia pada Dokodemo-Kerja. Halaman ini berisikan beberapa fitur seperti dibawah ini.</p>
                            <ol class="pl-3 mb-3">
                                <li class="mb-2"><b>Add New</b>: Tombol untuk menambahkan task baru.</li>
                                <li class="mb-2"><b>Task Name</b>: Berisikan nama task yang terdaftar pada task yang bersangkutan.</li>
                                <li class="mb-2"><b>Team Name</b>: Berisikan nama team member yang terdaftar pada task yang bersangkutan.</li>
                                <li class="mb-2"><b>Color Tag</b>: Warna task yang akan terlihat di halaman daily work hour.</li>
                                <li class="mb-2"><b>Action</b>: Berisikan tombol <span class="font-weight-bold text-success">edit</span> untuk mengedit task yang telah didaftarkan, tombol <span class="font-weight-bold text-info">active</span> untuk mengaktifkan atau menonaktifkan task, dan tombol <span class="font-weight-bold text-danger">delete</span> untuk menghapus task.</li>
                            </ol>
                            <div class="mb-5">
                                <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                    <picture>
                                        <source srcset="/img/help/webp/setting-task-5-1.webp" type="image/webp">
                                        <img src="/img/help/jpg/setting-task-5-1.jpg" alt="dokodemo task management page" class="img-fluid">
                                    </picture>
                                </div>
                            </div>

                            <ol class="list--multi-level list--bold" style="--start: '5'">
                            
                                <li class="mb-3" id="setting_task_1">
                                    <h5 class="font-weight-bold">Add New Task</h5>
                                    <p>Fitur ini digunakan untuk menambahkan task baru pada Dokodemo-Kerja. Admin hrus mengisi task name, team, dan color tag untuk menambahkan task.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/setting-task-5-2.webp" type="image/webp">
                                            <img src="/img/help/jpg/setting-task-5-2.jpg" alt="dokodemo add new task" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>
                            
                                <li class="mb-3" id="setting_task_2">
                                    <h5 class="font-weight-bold">Edit Task</h5>
                                    <p>Fitur ini digunakan untuk mengubah detail task pada Dokodemo-Kerja. Admin informasi yang dapat diubah adalah task name, team, dan color tag.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/setting-task-5-3.webp" type="image/webp">
                                            <img src="/img/help/jpg/setting-task-5-3.jpg" alt="dokodemo edit task" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>
                            
                                <li class="mb-3" id="setting_task_3">
                                    <h5 class="font-weight-bold">Change Status</h5>
                                    <p>Fitur untuk mengubah status staff menjadi aktif atau non-aktif.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/setting-task-5-4.webp" type="image/webp">
                                            <img src="/img/help/jpg/setting-task-5-4.jpg" alt="dokodemo change task's status" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>
                            
                                <li class="mb-3" id="setting_task_4">
                                    <h5 class="font-weight-bold">Delete Task</h5>
                                    <p>Fitur ini digunakan untuk menghapus task.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/setting-task-5-5.webp" type="image/webp">
                                            <img src="/img/help/jpg/setting-task-5-5.jpg" alt="dokodemo delete task" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>
                            
                                <li class="mb-3" id="setting_task_5">
                                    <h5 class="font-weight-bold">Filter By atau Search Data</h5>
                                    <p>Fitur ini digunakan untuk mencari data task yang dapat disortir berdasarkan nama task di pada halaman task management.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/setting-task-5-6.webp" type="image/webp">
                                            <img src="/img/help/jpg/setting-task-5-6.jpg" alt="dokodemo filter task" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>
                            
                                <li class="mb-3" id="setting_task_6">
                                    <h5 class="font-weight-bold">Pagination</h5>
                                    <p>Fitur ini digunakan untuk berpindah ke halaman berikutnya atau ke halaman yang dituju.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/setting-task-5-7.webp" type="image/webp">
                                            <img src="/img/help/jpg/setting-task-5-7.jpg" alt="dokodemo profile popup" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>

                            </ol>
                        </div>   
                        <div class="tab-pane fade" id="help_setting_team" role="tabpanel" aria-labelledby="">
                            <div class="title--bg title--bg-border title--bg-border-left" data-title-bg="Settings - Team">
                                <h2 class="font-weight-bold fs-30">Settings - Team</h2>
                            </div>
                            <p>Halaman team berisi informasi tentang team yang ada di Dokodemo-Kerja. Berikut adalah fitur-fitur yang ada di halaman ini.</p>
                            <ol class="pl-3 mb-3">
                                <li class="mb-2"><b>Add New Team</b>: Fitur ini digunakan untuk menambahkan team baru pada bagian team management.</li>
                                <li class="mb-2"><b>Filter by</b>: Fitur ini digunakan untuk mencari nama.</li>
                                <li class="mb-2"><b>Paging</b>: Fitur ini digunakan untuk pindah ke halaman yang ingin dituju.</li>
                                <li class="mb-2"><b>Nama</b>: Merupakan kolom yang berisi nama team.</li>
                                <li class="mb-2"><b>Leader</b>: Berisikan nama leader team.</li>
                                <li class="mb-2"><b>Email</b>: Berisikan email leader team yang bersangkutan.</li>
                                <li class="mb-2"><b>Action</b>: Kolom yang berisikan tombol <span class="font-weight-bold text-success">edit</span> untuk merubah data team yang telah terdaftar, tombol <span class="font-weight-bold text-info">active</span> untuk mengaktifkan dan nonaktifkan team yang telah terdaftar, dan tombol <span class="font-weight-bold text-danger">delete</span> untuk menghapus team.</li>
                            </ol>
                            <div class="mb-5">
                                <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                    <picture>
                                        <source srcset="/img/help/webp/setting-team-6-1.webp" type="image/webp">
                                        <img src="/img/help/jpg/setting-team-6-1.jpg" alt="dokodemo settings team" class="img-fluid">
                                    </picture>
                                </div>
                            </div>

                            <ol class="list--multi-level list--bold" style="--start: '6'">
                            
                                <li class="mb-3" id="setting_team_1">
                                    <h5 class="font-weight-bold">Add Team</h5>
                                    <p>Fitur ini digunakan untuk menambahkan team kedalam Dokodemo-Kerja. Admin harus menambahkan team name dan leader name untuk menambahkan team baru.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/setting-team-6-2.webp" type="image/webp">
                                            <img src="/img/help/jpg/setting-team-6-2.jpg" alt="dokodemo add team" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>
                            
                                <li class="mb-3" id="setting_team_2">
                                    <h5 class="font-weight-bold">Edit Team</h5>
                                    <p>Fitur ini digunakan untuk mengedit team yang telah terdaftar.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/setting-team-6-3.webp" type="image/webp">
                                            <img src="/img/help/jpg/setting-team-6-3.jpg" alt="dokodemo edite team" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>
                            
                                <li class="mb-3" id="setting_team_3">
                                    <h5 class="font-weight-bold">Change Status</h5>
                                    <p>Fitur untuk mengubah status staff menjadi aktif atau non-aktif.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/setting-team-6-4.webp" type="image/webp">
                                            <img src="/img/help/jpg/setting-team-6-4.jpg" alt="dokodemo camge team's status" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>
                            
                                <li class="mb-3" id="setting_team_4">
                                    <h5 class="font-weight-bold">Filter By atau Search Data</h5>
                                    <p>Filter ini digunakan untuk menemukan nama yang ingin dicari pada bagian team.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/setting-team-6-5.webp" type="image/webp">
                                            <img src="/img/help/jpg/setting-team-6-5.jpg" alt="dokodemo filter team" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>
                            
                                <li class="mb-3" id="setting_team_5">
                                    <h5 class="font-weight-bold">Pagination</h5>
                                    <p>Fitur ini digunakan untuk berpindah ke halaman berikutnya atau ke halaman yang ingin dituju.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/setting-team-6-6.webp" type="image/webp">
                                            <img src="/img/help/jpg/setting-team-6-6.jpg" alt="dokodemo team pagination" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>

                            </ol>
                        </div>                        
                        <div class="tab-pane fade" id="help_setting_day_off" role="tabpanel" aria-labelledby="">
                            <div class="title--bg title--bg-border title--bg-border-left" data-title-bg="Settings - Day Off">
                                <h2 class="font-weight-bold fs-30">Settings - Day Off</h2>
                            </div>
                            <p>Menu-menu yang terdapat pada halaman ini digunakan untuk mengatur data yang ada di halaman Attendance.</p>

                            <ol class="list--multi-level list--bold" style="--start: '7'">
                            
                                <li class="mb-3" id="setting_day_off_1">
                                    <h5 class="font-weight-bold">Update Leave</h5>
                                    <p>Menu yang di sebelah kiri digunakan untuk mengupdate kuota cuti per team ataupun semuanya sekaligus. Sedangkan yang di sebelah kanan adalah untuk mengupdate quota individual yang telah dijabarkan dalam bentuk csv.</p>
                                    <div class="mb-4">
                                        <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                            <picture>
                                                <source srcset="/img/help/webp/setting-day-off-7-1.webp" type="image/webp">
                                                <img src="/img/help/jpg/setting-day-off-7-1.jpg" alt="dokodemo leave settings" class="img-fluid">
                                            </picture>
                                        </div>
                                    </div>

                                    <ol class="pl-3 list--bold">
                                        <li class="mb-2">
                                            <h6 class="font-weight-bold">Mass Adjust Leave Quota</h6>
                                            <p>Fitur ini digunakan untuk memperbarui kuota cuti per tim ataupun semuanya sekaligus. Penambahan kuota cuti berlaku selama 1 tahun.</p>
                                            <ul class="pl-3">
                                                <li class="mb-2"><b>Team</b>: Jika perbaruan tidak dibatasi oleh tim, pilih All pada dropdown</li>
                                                <li class="mb-2"><b>Staff</b>: Opsi ini hanya akan muncul setelah sebuah tim dipilih. Jika tidak, opsi ini tidak akan terlihat.</li>
                                                <li class="mb-2"><b>Leave Quota</b>: Penambahan kuota cuti tidak ada batasnya, dan hanya dapat diisi dengan angka. Jumlah cuti yang ditambah akan hangus di tahun berikutnya.</li>
                                                <li class="mb-2"><b>Add/Reset</b>: Add adalah untuk menambah kuota cuti, sedangkan Reset adalah untuk mengganti kuota cuti.</li>
                                            </ul>
                                        </li>
                                        <li class="mb-2">
                                            <h6 class="font-weight-bold">Import Day Off Data</h6>
                                            <p>Fitur ini digunakan untuk memperbarui kuota cuti berdasarkan berkas csv yang diunggah. Unduh contoh/format data dari <a href="http://dokodemo-kerja.l72.logique.co.id/template/dayoff/import_leave_quota_template.csv">link ini</a>.</p>
                                            <ul class="pl-3">
                                                <li class="mb-2"><b>Add/Reset</b>: Add adalah untuk menambah kuota cuti, dan reset adalah untuk mengganti kuota cuti</li>
                                                <li class="mb-2"><b>Import</b>: Setelah mengunduh dan melengkapi format kuota cuti yang ada di atas, unggah berkas yang tepat dengan menekan tombol Choose File, lalu tekan tombol Import.</li>
                                            </ul>
                                        </li>
                                    </ol>
                                </li>
                            
                                <li class="mb-3" id="setting_day_off_2">
                                    <h5 class="font-weight-bold">Custom Day Off</h5>
                                    <p>Halaman ini digunakan untuk menambahkan tipe day off dan cuti. Terdapat beberapa tombol di halaman ini, yaitu; Add New, Edit, dan Delete.</p>
                                    <ol class="pl-3 mb-4 list--bold">
                                        <li class="mb-2"><b>Edit</b>: befungsi untuk mengubah detail day off yang telah terdaftar</li>
                                        <li class="mb-2"><b>Delete</b>: berfungsi untuk menghapus day off yang telah terdaftar</li>
                                        <li class="mb-2"><b>Add New</b>: berfungsi untuk menambahkan 1 tipe day off yang baru.</li>
                                    </ol>
                                    <div class="mb-5">
                                        <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                            <picture>
                                                <source srcset="/img/help/webp/setting-day-off-7-2.webp" type="image/webp">
                                                <img src="/img/help/jpg/setting-day-off-7-2.jpg" alt="dokodemo custom day off" class="img-fluid">
                                            </picture>                                          
                                        </div>
                                    </div>
                                    <p>Berikut adalah detail pengaturan day off.</p>
                                    <ol class="mb-4 list--bold">
                                        <li class="mb-2"><b>Day Off Name</b>: Nama day off</li>
                                        <li class="mb-2"><b>Assign Color</b>: Warna day off yang akan terlihat di halaman attendance history</li>
                                        <li class="mb-2"><b>Assign Code</b>: Kode day off yang akan terlihat di halaman attendance history</li>
                                        <li class="mb-2"><b>Day Off Value</b>:
                                            <ol type="a">
                                                <li class="mb-2">1 Day: Nilai day off adalah 1 hari</li>
                                                <li class="mb-2">½ Day: Nilai day off adalah ½ hari</li>
                                            </ol>
                                        </li>
                                        <li class="mb-2"><b>Reduce Leave Quota</b>:
                                            <ol type="a">
                                                <li class="mb-2">Yes: Day off akan mengurangi kuota cuti</li>
                                                <li class="mb-2">No: Day off tidak mengurangi kuota cuti</li>
                                            </ol>
                                        </li>
                                        <li class="mb-2"><b>Minimum Date Offset</b>: Hari minimum pengajuan dayoff. Angka yang diisi bisa saja minus jika karyawan diperbolehkan untuk me-request day off pada tanggal yang sudah lewat (backdate). Misalnya:
                                            <ol type="a">
                                                <li class="mb-2">10 hari: Staff hanya bisa memilih tanggal day off 10 hari dari sekarang</li>
                                                <li class="mb-2">-14 hari: Staff bisa memilih tanggal day off dari 14 hari yang lalu</li>
                                            </ol>
                                        </li>
                                    </ol>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/setting-day-off-7-3.webp" type="image/webp">
                                            <img src="/img/help/jpg/setting-day-off-7-3.jpg" alt="dokodemo custom day off" class="img-fluid">
                                        </picture>        
                                    </div>
                                </li>
                            
                                <li class="mb-3" id="setting_day_off_3">
                                    <h5 class="font-weight-bold">Working Days / Holidays</h5>
                                    <p>Halaman ini digunakan untuk mengatur hari kerja dan hari libur.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/setting-day-off-7-4.webp" type="image/webp">
                                            <img src="/img/help/jpg/setting-day-off-7-4.jpg" alt="dokodemo set working and holiday" class="img-fluid">
                                        </picture>
                                    </div>

                                    <ol class="list--bold pl-3 mb-3">
                                        <li class="mb-2">
                                            <h6 class="font-weight-bold">Working Days</h6>
                                            <p>Menu ini digunakan untuk menentukan hari kerja per minggu. Tekan panah biru yang ada di kolom Action, pilih Yes untuk hari kerja, dan No untuk hari libur.</p>
                                        </li>
                                        <li class="mb-2">
                                            <h6 class="font-weight-bold">2. Holidays</h6>
                                            <p>Menu ini digunakan untuk menambah, mengubah, dan menghapus hari libur yang lebih spesifik. Berikut adalah detail pengaturan Holidays.</p>
                                            <ul>
                                                <li class="mb-2"><b>Holiday Name</b>: nama liburan</li>
                                                <li class="mb-2"><b>Holiday Start</b>: tanggal mulai liburan</li>
                                                <li class="mb-2"><b>Holiday End</b>: tanggal akhir liburan</li>
                                                <li class="mb-2"><b>Annual Occurrence</b>: Apakah hari libur muncul pada tanggal yang sama setiap tahunnya?</li>
                                            </ul>
                                        </li>
                                    </ol>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/setting-day-off-7-5.webp" type="image/webp">
                                            <img src="/img/help/jpg/setting-day-off-7-5.jpg" alt="dokodemo form working and holiday" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>
                            
                                <li class="mb-3" id="setting_day_off_4">
                                    <h5 class="font-weight-bold">Attendance</h5>
                                    <p>Menu ini digunakan untuk menentukan toleransi keterlambatan dan untuk mengatur notifikasi jam kerja yang langsung dikirim ke email.</p>
                                    <div class="mb-5">
                                        <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                            <picture>
                                                <source srcset="/img/help/webp/setting-day-off-7-6.webp" type="image/webp">
                                                <img src="/img/help/jpg/setting-day-off-7-6.jpg" alt="dokodemo attendance settings" class="img-fluid">
                                            </picture>
                                        </div>
                                    </div>
                                    
                                    <ol class="pl-3 list--bold">
                                        <li class="mb-2">
                                            <h6 class="font-weight-bold">Late Tolerance</h6>
                                            <p>Tekan dropdown Late Tolerance, pilih waktu, dan klik tombol Save Changes. <u>Contoh</u>: Jika dropdown yang dipilih adalah 15 menit, dan karyawan Start program 16 menit melebihi Starting Time yang telah diterapkan, maka Late yang tehitung adalah 16 menit, dan bukan 1 menit.</p>
                                        </li>
                                        <li class="mb-2">
                                            <h6 class="font-weight-bold">Workhour notification schedule</h6>
                                            <p>Fitur ini adalah untuk memilih apakah super admin / admin akan menerima email notifikasi yang berisikan daftar nama karyawan yang belum memenuhi jam kerja minimum, yaitu 40 jam. Dropdown digunakan untuk memilih hari, atau untuk tidak menerima email sama sekali.</p>
                                        </li>
                                        <li class="mb-2">
                                            <h6 class="font-weight-bold">Workhour notification time</h6>
                                            <p>Fitur ini digunakan untuk menentukan jam berapa email dikirimkan.</p>
                                        </li>
                                        <li class="mb-2">
                                            <h6 class="font-weight-bold">Set Staff weekly workhour email notification receiver</h6>
                                            <p>Tabel ini menunjukkan daftar admin dan super admin yang dapat menerima email notifikasi jam kerja. Tekan checkbox untuk menentukan siapa saja yang akan menerima email.</p>
                                        </li>
                                    </ol>
                                </li>
                            
                                <li class="mb-3" id="setting_day_off_5">
                                    <h5 class="font-weight-bold">Day Off Notification</h5>
                                    <p>Menu ini digunakan untuk menentukan super admin / admin yang akan menerima email notifikasi pengajuan day off semua staff.</p>
                                    <p>Walaupun nama team leader tidak terdaftar di tabel, mereka tetap akan menerima email, namun hanya saat mereka terpilih sebagai person informed di formulir pengajuan.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/setting-day-off-7-7.webp" type="image/webp">
                                            <img src="/img/help/jpg/setting-day-off-7-7.jpg" alt="dokodemo attendace page" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>

                            </ol>
                        </div>                        
                        <div class="tab-pane fade" id="help_attendance" role="tabpanel" aria-labelledby="">
                            <div class="title--bg title--bg-border title--bg-border-left" data-title-bg="Attendance Admin">
                                <h2 class="font-weight-bold fs-30">Attendance Admin</h2>
                            </div>
                            <p>Fitur Attendance dapat diakses melalui menu navigasi yang ada di atas. Fitur ini dibagi menjadi 3 halaman.</p>
                            <div class="mb-5">
                                <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                    <picture>
                                        <source srcset="/img/help/webp/attendance-8-1.webp" type="image/webp">
                                        <img src="/img/help/jpg/attendance-8-1.jpg" alt="dokodemo attendance admin" class="img-fluid">
                                    </picture>
                                </div>
                            </div>

                            <ol class="list--multi-level list--bold" style="--start: '8'">
                            
                                <li class="mb-3" id="attendance_1">
                                    <h5 class="font-weight-bold">Day Off / Leave</h5>
                                    <p>Halaman Day off dibagi menjadi 2 bagian; My Day Off Request dan Day Off Request. Hal-hal yang berhubungan dengan pengelolaaan cuti dan izin dapat dilakukan di halaman ini.</p>

                                    <ol class="pl-3 list--bold">
                                        <li class="mb-2">
                                                <h6 class="font-weight-bold">My Day Off Request</h6>
                                                <p>Tabel pertama adalah untuk mengelola pengajuan day off sendiri. Menu ini terdiri dari 2 tab; Active dan Closed.</p>

                                                <ul class="pl-3">
                                                    <li class="mb-2">Tab <b>Active</b> menyimpan pengajuan-pengajuan yang masih menunggu persetujuan (<b class="text-info">Pending</b>), dan yang sudah disetujui (<b class="text-success">Approved</b>).</li>
                                                    <li class="mb-2">Tab <b>Closed</b> menyimpan pengajuan-pengajuan yang telah ditolak (<b class="text-danger">Rejected</b>) dan yang sudah lewat.
                                                        <div class="my-3">
                                                            <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                                                <picture>
                                                                    <source srcset="/img/help/webp/attendance-8-2.webp" type="image/webp">
                                                                    <img src="/img/help/jpg/attendance-8-2.jpg" alt="dokodemo day off request" class="img-fluid">
                                                                </picture>
                                                            </div>
                                                        </div>  
                                                        <p>Untuk mengajukan day off, tekan tombol Request Day Off. Sebuah formulir akan muncul.</p>         
                                                        <div>
                                                            <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                                                <picture>
                                                                    <source srcset="/img/help/webp/attendance-8-3.webp" type="image/webp">
                                                                    <img src="/img/help/jpg/attendance-8-3.jpg" alt="dokodemo form day off request" class="img-fluid">
                                                                </picture>
                                                            </div>
                                                        </div>              
                                                    </li>
                                                    <li class="mb-2"><b>Remaining Active Leave Quota</b>: Sisa kuota cuti. Jika tanggal day off yang diajukan melebihi kuota cuti yang tertera, dengan catatan tipe day off yang dipilih akan mengurangi kuota cuti, maka pengajuan akan ditolak secara otomatis.</li>
                                                    <li class="mb-2"><b>Day Off Type</b>Day Off Type: Pilihan tipe day off yang diterapkan oleh Admin.</li>
                                                    <li class="mb-2"><b>Date Range</b>Date Range: Pemilihan tanggal penagajuan day off. Tanggal yang dipilih boleh lebih dari satu hari, namun tidak boleh pada hari libur.</li>
                                                    <li class="mb-2"><b>Person Informed</b>Person Informed: Supervisor/Team Leader yang akan mendapatkan pengajuan day off di dashboard mereka.</li>
                                                    <li class="mb-2"><b>Attachment</b>Attachment: Fitur untuk melampirkan berkas day off dalam bentuk pdf ataupun image. Bisa digunakan untuk melampirkan surat dokter ataupun berkas-berkas lainnnya.</li>
                                                    <li class="mb-2"><b>Description</b>Description: Kolom penjelasan day off yang bisa dilihat oleh Team Leader dan Admin sebagai bahan pertimbangan pengajuan day off.</li>
                                                </ul>
                                        </li>
                                        <li class="mb-2">
                                            <h6 class="font-weight-bold">Day Off Request</h6>
                                            <p>Day Off Request (Team’s Day Off Request untuk team leader) pada table kedua berisikan pengajuan day off dari staff. Berikut adalah penjelasan dari kolom-kolom yang bisa dilihat pada Gambar di bawah.</p>
                                            <ul class="pl-3 mb-4">
                                                <li class="mb-2"><b>Date</b>: Tanggal day off yang diajukan</li>
                                                <li class="mb-2"><b>Leave Type</b>: Tipe day off yang dipilih</li>
                                                <li class="mb-2"><b>Request From</b>: Nama staff yang mengajukan day off</li>
                                                <li class="mb-2"><b>Supervisor Name</b>: Nama supervisor pengaju day off</li>
                                                <li class="mb-2"><b>Supervisor Status</b>: Keputusan Team Leader mengenai pengajuan day off. Status ini hanya sebagai pertimbangan, dan bukan penentu</li>
                                                <li class="mb-2"><b>Delegated To</b>: Pemindahan tanggung jawab. Hanya bisa dipilih oleh Team Leader.</li>
                                                <li class="mb-2"><b>Final Status</b>: Keputusan Admin mengenai pengajuan day off. Status ini adalah penentu diterima atau ditolaknya pengajuan day off.</li>
                                                <li class="mb-2"><b>Action</b>: Tombol View menampilkan detail pengajuan day off untuk menerima/menolak pengajuan day off.</li>
                                            </ul>
                                            <div class="mb-3">
                                                <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                                    <picture>
                                                        <source srcset="/img/help/webp/attendance-8-4.webp" type="image/webp">
                                                        <img src="/img/help/jpg/attendance-8-4.jpg" alt="dokodemo table request day off" class="img-fluid">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                                <picture>
                                                    <source srcset="/img/help/webp/attendance-8-5.webp" type="image/webp">
                                                    <img src="/img/help/jpg/attendance-8-5.jpg" alt="dokodemo view day off" class="img-fluid">
                                                </picture>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                            
                                <li class="mb-3" id="attendance_2">
                                    <h5 class="font-weight-bold">Attendance History</h5>
                                    <p>Halaman Attendance History menunjukkan absensi karyawan yang berisikan hari libur, cuti, sakit, ataupun day off lainnya yang sudah diterapkan di halaman settings.</p>

                                    <ol class="pl-3 list--bold">
                                        <li class="mb-2">
                                            <h6 class="font-weight-bold">Monthly</h6>
                                            <p>Gambar di bawah menunjukkan absensi karyawan selama 1 bulan. Nama Staff bisa di klik untuk memunculkan riwayat absensi.</p>
                                            <div class="mb-3">
                                                <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                                    <picture>
                                                        <source srcset="/img/help/webp/attendance-8-6.webp" type="image/webp">
                                                        <img src="/img/help/jpg/attendance-8-6.jpg" alt="dokodemo profile popup" class="img-fluid">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                                    <picture>
                                                        <source srcset="/img/help/webp/attendance-8-7.webp" type="image/webp">
                                                        <img src="/img/help/jpg/attendance-8-7.jpg" alt="dokodemo profile popup" class="img-fluid">
                                                    </picture>
                                                </div>
                                            </div>
                                            <p>Di sebelah kiri table, bisa dilihat kesimpulan absensi karyawan yang berisikan riwayat cuti dan riwayat keterlambatan selama 1 bulan.</p>
                                            <p>Terdapat 2 tabel di detail absensi. Day off menunjukkan semua day off yang sudah lewat, dan Late menunjukkan pada hari apa saja karyawan tersebut terlambat.</p>

                                            <ul class="pl-3">
                                                <li class="mb-2">
                                                    <h6>Day Off</h6>
                                                    <p>Day off yang tidak diajukan oleh staff bisa ditambahkan sendiri oleh Admin dengan menekan tombol Add New. Saat tombol Add New ditekan, akan muncul formulir yang sama dengan Day Off Request.</p>
                                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                                        <picture>
                                                            <source srcset="/img/help/webp/attendance-8-8.webp" type="image/webp">
                                                            <img src="/img/help/jpg/attendance-8-8.jpg" alt="dokodemo monthly attendance" class="img-fluid">
                                                        </picture>
                                                    </div>
                                                </li>
                                                <li class="mb-2">
                                                    <h6>Late</h6>
                                                    <p>Tabel Late menunjukkan berapa kali karyawan tersebut terlambat dalam 1 bulan. Data akan ditambahkan secara otomatis, sehingga tidak ada tombol Add New di table ini. Jika tombol edit ditekan, maka muncul sebuah formulir untuk mengubah detail keterlambatan>
                                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                                        <picture>
                                                            <source srcset="/img/help/webp/attendance-8-9.webp" type="image/webp">
                                                            <img src="/img/help/jpg/attendance-8-9.jpg" alt="dokodemo monthly attendance" class="img-fluid">
                                                        </picture>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mb-2">
                                            <h6 class="font-weight-bold">Yearly</h6>
                                            <p>Admin harus memilih team dan nama staff dulu untuk menampilkan riwayat absesnsi karyawan tersebut. Tabel Pertama menunjukkan sejarah kehadiran, keterlambatan, day off, cuti, serta hari-hari libur selama 1 tahun.</p>
                                            <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                                <picture>
                                                    <source srcset="/img/help/webp/attendance-8-9.webp" type="image/webp">
                                                    <img src="/img/help/jpg/attendance-8-9.jpg" alt="dokodemo yearly attendance" class="img-fluid">
                                                </picture>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                            
                                <li class="mb-3" id="attendance_3">
                                    <h5 class="font-weight-bold">Late</h5>
                                    <p>Halaman Late menunjukkan karyawan yang terlambat dan yang belum memulai aplikasi Dokodemo-Kerja pada hari itu. Detail keterlambatan dapat diedit oleh HR jika perlu. Tabel riwayat keterlambatan dibagi menjadi 2.</p>

                                    <ol class="pl-3">
                                        <li class="mb-2">
                                            <h6 class="font-weight-bold">Started</h6>
                                            <p>Berisikan nama-nama orang yang terlambat, namun sudah memulai aplikasi. Tombol Edit digunakan untuk menambahkan alasan keterlambatan.</p>
                                            <div class="mb-4">
                                                <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                                    <picture>
                                                        <source srcset="/img/help/webp/attendance-8-10.webp" type="image/webp">
                                                        <img src="/img/help/jpg/attendance-8-10.jpg" alt="dokodemo late history" class="img-fluid">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                                    <picture>
                                                        <source srcset="/img/help/webp/attendance-8-11.webp" type="image/webp">
                                                        <img src="/img/help/jpg/attendance-8-11.jpg" alt="dokodemo late detail" class="img-fluid">
                                                    </picture>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-2">
                                            <h6 class="font-weight-bold">Started</h6>
                                            <p>Berisikan nama-nama orang yang sudah terlambat, dan belum memulai aplikasi.</p>
                                            <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                                <picture>
                                                    <source srcset="/img/help/webp/attendance-8-12.webp" type="image/webp">
                                                    <img src="/img/help/jpg/attendance-8-12.jpg" alt="dokodemo profile popup" class="img-fluid">
                                                </picture>
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                            </ol>
                        </div>                        
                        <div class="tab-pane fade" id="help_desktop" role="tabpanel" aria-labelledby="">
                            <div class="title--bg title--bg-border title--bg-border-left" data-title-bg="Desktop App">
                                <h2 class="font-weight-bold fs-30">Desktop App</h2>
                            </div>
                            <p>Desktop App Dokodemo-Kerja bisa diunduh melalui menu navigasi, seperti yang tertera pada Gambar di bawah. Dokodemo-kerja Desktop App tersedia dalam 3 platform, yaitu Linux, Mac, dan Windows. Sedangkan untuk Mobile App, Dokodemo-Kerja tersedia dalam Android dan iOS, yang dapat diunduh dari Play Store, App Store, ataupun website.</p>
                            <div class="mb-3">
                                <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                    <picture>
                                        <source srcset="/img/help/webp/desktop-9-1.webp" type="image/webp">
                                        <img src="/img/help/jpg/desktop-9-1.jpg" alt="dokodemo download links" class="img-fluid">
                                    </picture>
                                </div>
                            </div>
                            <p>Desktop application dapat digunakan oleh semua staff yang telah terdaftar di sistem Dokodemo-Kerja. Berikut adalah fitur-fiturnya.</p>

                            <ol class="pl-3 list--bold">
                                <li class="mb-2">
                                    <h6 class="font-weight-bold">Login</h6>
                                    <p>Login dengan menggunakan email dan password yang benar. Koneksi internet dibutuhkan untuk tahap ini.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/desktop-9-2.webp" type="image/webp">
                                            <img src="/img/help/jpg/desktop-9-2.jpg" alt="dokodemo desktop login" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>
                                <li class="mb-2">
                                    <h6 class="font-weight-bold">Start / Stop Task</h6>
                                    <p>Untuk memulai perhitungan waktu, tekan tombol “Play”.</p>
                                    <div class="mb-3">
                                        <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                            <picture>
                                                <source srcset="/img/help/webp/desktop-9-3.webp" type="image/webp">
                                                <img src="/img/help/jpg/desktop-9-3.jpg" alt="dokodemo desktop app play" class="img-fluid">
                                            </picture>
                                        </div>
                                    </div>
                                    <p>Untuk menghentikan perhitungan waktu, tekan tombol Stop.</p>
                                    <div>
                                        <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                            <picture>
                                                <source srcset="/img/help/webp/desktop-9-4.webp" type="image/webp">
                                                <img src="/img/help/jpg/desktop-9-4.jpg" alt="dokodemo desktop app stop" class="img-fluid">
                                            </picture>
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-2">
                                    <h6 class="font-weight-bold">Fitur-fitur lain</h6>
                                    <ul class="pl-3 mb-3">
                                        <li class="mb-2"><b>Today</b>: menunjukkan total jam kerja hari ini.</li>
                                        <li class="mb-2"><b>Weekly</b>: menunjukkan total jam kerja dalam minggu ini</li>
                                        <li class="mb-2"><b>Tombol Biru</b>: untuk memperkecil tampilan</li>
                                        <li class="mb-2"><b>Tombol Kuning</b>: untuk mengakses halaman dasbor utama</li>
                                        <li class="mb-2"><b>Tombol Merah</b>: untuk Logout</li>
                                    </ul>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/desktop-9-4.webp" type="image/webp">
                                            <img src="/img/help/jpg/desktop-9-4.jpg" alt="dokodemo desktop app features" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>
                            </ol>
                        </div>                        
                        <div class="tab-pane fade" id="help_dashboard" role="tabpanel" aria-labelledby="">
                            <div class="title--bg title--bg-border title--bg-border-left" data-title-bg="Dashboard - Staff">
                                <h2 class="font-weight-bold fs-30">Dashboard - Staff</h2>
                            </div>
                            <p>Merupakan halaman pengaturan web untuk staff Dokodemo-Kerja.</p>

                            <ol class="list--multi-level list--bold" style="--start: '10'">
                            
                                <li class="mb-2" id="dashboard_1">
                                    <h5 class="font-weight-bold">Homepage Staff</h5>
                                    <p>Halaman utama staff dapat digunakan untuk melihat sesi, screenshot, dan lokasi yang direkam oleh Dokodemo-Kerja. Berikut adalah fitur-fitur yang ada di halaman ini.</p>
                                    <div class="mb-5">
                                        <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                            <picture>
                                                <source srcset="/img/help/webp/dashboard-10-1.webp" type="image/webp">
                                                <img src="/img/help/jpg/dashboard-10-1.jpg" alt="dokodemo staff web dashboard" class="img-fluid">
                                            </picture>
                                        </div>
                                    </div>

                                    <ol class="pl-3 list--bold">
                                        <li class="mb-2"><b>Filter by Date</b>: staff dapat melihat time tracking pada tanggal-tanggal sebelumnya. Klik panah berwarna biru, atau pilih tanggal yang diinginkan untuk memuncul time tracking tanggal yang berbeda.</li>
                                        <li class="mb-2"><b>Daily</b>: Tombol ini digunakan untuk melihat time tracking per hari.</li>
                                        <li class="mb-2"><b>Weekly</b>: Tombol ini digunakan untuk melihat time tracking selama 1 minggu.</li>
                                        <li class="mb-2"><b>Monthly</b>: Tombol ini digunakan untuk melihat time tracking selama 1 bulan.</li>
                                        <li class="mb-2"><b>Time Tracker</b>: Tabel pertama pada halaman dashboard yang menunjukkan jam kerja staff hari ini.
                                            <ul class="pl-3 mb-3">
                                                <li class="mb-2"><b>Show</b>: Staff dapat memilih jumlah baris task untuk ditampilkan</li>
                                                <li class="mb-2"><b>Task</b>: Staff dapat melihat nama task yang sudah dikerjakan.</li>
                                                <li class="mb-2"><b>Time Worked</b>: Staff dapat melihat total jam kerja pada task yang bersangkutan.</li>
                                                <li class="mb-2"><b>Kolom Jam</b>: Staff dapat melihat detail menit dan jam kerja.</li>
                                                <li class="mb-2"><b>Pagination</b>: Digunakan jika jumlah baris task lebih dari angka yang dipilih di Show.</li>
                                            </ul>
                                            <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                                <picture>
                                                    <source srcset="/img/help/webp/dashboard-10-2.webp" type="image/webp">
                                                    <img src="/img/help/jpg/dashboard-10-2.jpg" alt="dokodemo staff time tracker" class="img-fluid">
                                                </picture>
                                            </div>
                                        </li>
                                        <li class="mb-2"><b>Total Time / Set Time</b>: Total jam kerja 1 hari dan jam mulai kerja karyawan</li>
                                        <li class="mb-2"><b>Comment</b>: Staff dapat menerima dan membalas komentar yang didapatkan dari team leader atau admin dari menu ini.</li>
                                        <li class="mb-2">
                                            <b>History Edited Time</b>: Sejarah pergantian waktu kerja.
                                        </li>
                                        <li class="mb-2">
                                            <b>Session Details</b>: Fitur ini dugunakan sebagai catatan kerja per hari. Satu sesi akan muncul saat staff menekan tombol Start dan Stop. Walaupun task yang dipilih sama, sesi akan dipisah. Tombol Edit digunakan untuk mengisi penjelasan sesi.
                                            <div class="mt-3">
                                                <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                                    <picture>
                                                        <source srcset="/img/help/webp/dashboard-10-3.webp" type="image/webp">
                                                        <img src="/img/help/jpg/dashboard-10-3.jpg" alt="dokodemo profile popup" class="img-fluid">
                                                    </picture>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-2">
                                            <b>Screen Record</b>: Semua riwayat screenshot selama satu hari. Waktu pengambilan screenshot diambil secara acak antara 3-10 menit. Resolusi gambar yang diambil sangat rendah, sehingga privasi staff tetap terjaga.
                                            <div class="mt-3">
                                                <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                                    <picture>
                                                        <source srcset="/img/help/webp/dashboard-10-4.webp" type="image/webp">
                                                        <img src="/img/help/jpg/dashboard-10-4.jpg" alt="dokodemo profile popup" class="img-fluid">
                                                    </picture>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-2">
                                            <b>Location Track</b>: Fitur ini dapat digunakan untuk melacak lokasi staff jika mereka memulai Dokodemo-Kerja dengan menggunakan versi mobile.
                                            <ul class="pl-3 mb-3">
                                                <li class="mb-2">Pinpoint merah dapat di klik untuk menunjukkan tanggal dan waktu seorang karyawan berada pada lokasi tertentu.</li>
                                                <li class="mb-2">Icon bulatan hijau bisa bergerak dari titik mulai sampai ke titik akhir untuk menunjukkan rute yang diambil staff.</li>
                                            </ul>
                                            <div>
                                                <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                                    <picture>
                                                        <source srcset="/img/help/webp/dashboard-10-5.webp" type="image/webp">
                                                        <img src="/img/help/jpg/dashboard-10-5.jpg" alt="dokodemo track location" class="img-fluid">
                                                    </picture>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                                <li class="mb-2" id="dashboard_2">
                                    <h5 class="font-weight-bold">Attendance Staff</h5>
                                    <p>Staff tidak bisa melihat absensi mereka sendiri, namun mereka bisa mengajukan day off seperti halnya admin dan supervisor melalui menu navigasi di atas. Jika tombol request ditekan, akan keluar formulir.</p>
                                    <div class="p-2 border border--blue bg--l-blue rounded-lg">
                                        <picture>
                                            <source srcset="/img/help/webp/dashboard-10-6.webp" type="image/webp">
                                            <img src="/img/help/jpg/dashboard-10-6.jpg" alt="dokodemo day off / leave staff request" class="img-fluid">
                                        </picture>
                                    </div>
                                </li>
                            </ol>
                        </div>                        
                    </div>
                    <div>
                        <hr class="mb-3 mt-5">
                        Do you need more help? Contact Us through these links: <br>
                        WA: <a target="_blank" href="https://api.whatsapp.com/send?phone=62811870321">0811870321</a> <br>    
                        Email: <a href="mailto:sales@dokodemo-kerja.com">sales@dokodemo-kerja.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sidebar-overlay hide-mobile"></div>
</div>
   
<?php include($_SERVER['DOCUMENT_ROOT'].'/ind/component/demo-banner.php'); ?> 
<?php include($_SERVER['DOCUMENT_ROOT'].'/ind/component/footer.php'); ?>
<script>
    // sidebar open
    $(".btn__nav-menu").on('click', function(){
        $(".explain__topic").removeClass('hide-mobile')
        $(".sidebar-overlay").removeClass('hide-mobile')
    })
    // sidebar close
    $(".btn__close-sidebar, .sidebar-overlay").on('click', function(){
        $(".explain__topic").addClass('hide-mobile')
        $(".sidebar-overlay").addClass('hide-mobile')
    })
    
    $(".help__explain .explain__topic .nav-item[href='#']").click(function(){
        $(".collapse").collapse('hide')
    })

    var url = document.location.toString();
    if(url.includes("#attendance")){
        $("a[href='#help_attendance']").tab('show');
    }
</script>
<?php include($_SERVER['DOCUMENT_ROOT'].'/component/footer-end.php') ?>
    