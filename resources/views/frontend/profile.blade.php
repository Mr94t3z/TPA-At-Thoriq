<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend/static/header')
</head>

<body id="page-top">
    <!-- Navigation-->
    @include('frontend/static/navbar')

    <!-- Mashead header-->
    <header class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-12 col-lg-5">
                    <h2 class="display-10 lh-1 mb-4">Kepala TPQ At-Thoriq</h2>
                    {{-- <div class="mb-3 row">
                        <label class="form-label display-10 lh-1">Nama Lengkap :</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control" nama="nama"
                                value="{{ $profileKepalaPendidikan->nama }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label class="form-label">Status Kepegawaian :</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control" id="staticEmail"
                        value="{{ $profileKepalaPendidikan->status_kepegawaian }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label class="form-label">Pendidikan Terakhir :</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control" id="staticEmail"
                        value="{{ $profileKepalaPendidikan->pendidikan_terakhir }}">
                </div>
            </div> --}}

            <p class="lead fw-normal text-muted mb-5 mb-lg-0">
                Kepala Taman Pendidikan Al-Qur'an At-Thoriq yang saat ini menjabat adalah
                {{ $profileKepalaPendidikan->nama }}. Beliau merupakan seorang pegawai yang berstatus
                {{ $profileKepalaPendidikan->status_kepegawaian }} dan memiliki latar belakang pendidikan terakhir
                {{$profileKepalaPendidikan->pendidikan_terakhir}} di Taman Pendidikan Al-Qur'an At-Thoriq.
            </p>

        </div>
        <div class="col-sm-8 col-md-6">
            <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle"
                    src="{{ asset('assets/img/kepala-pendidikan.jpg') }}" alt="..." /></div>
        </div>
        </div>
        </div>
    </header>

    <section class="bg-light">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">

                <!-- Area Chart -->
                <div class="col-xl-6 col-lg-12">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-12 d-flex flex-row align-items-center justify-content-center">
                            <h6 class="m-0 font-weight-bold text-primary">Statistik Siswa Aktif</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myAreaChartStatistikSiswa"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-5">
                    <h2 class="display-10 lh-1 mb-4">Siswa/Santri Aktif</h2>
                    <p class="lead fw-normal text-muted mb-5 mb-lg-0">Statistik chart siswa/santri aktif adalah
                        informasi mengenai jumlah siswa/santri yang sedang aktif belajar di Taman Pendidikan Al-Qur'an
                        At-Thoriq. Informasi ini penting untuk memantau perkembangan dan menentukan strategi untuk
                        meningkatkan kualitas pembelajaran.</p>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Mashead header-->
    <header class="masthead" id='visi'>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Visi -->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-10 lh-1 mb-3">Visi TPQ At-Thoriq</h1>
                        <p class="lead fw-normal text-muted mb-5">Menjadi lembaga pendidikan Islam yang unggul dan
                            berkualitas dalam membentuk generasi Qur'ani dan Berakhlakul Karimah.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Masthead device mockup feature-->
                    <div class="masthead-device-mockup">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                <div class="screen bg-black">
                                    <!-- PUT CONTENTS HERE:-->
                                    <!-- * * This can be a video, image, or just about anything else.-->
                                    <!-- * * Set the max width of your media to 100% and the height to-->
                                    <!-- * * 100% like the demo example below.-->
                                    <video muted="muted" autoplay="" loop=""
                                        style="width: 100%; height: 100%; object-fit: cover">
                                        <source src="{{ asset('assets/img/male-kid.mp4') }}" type="video/mp4" /></video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Misi -->
    <section id="misi">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-10 lh-1 mb-3">Misi TPQ At-Thoriq</h1>
                            <p class="lead fw-normal text-muted mb-5">
                                1. Menyediakan program pembelajaran Al-Qur'an dan Pendidikan Agama Islam yang
                                berkualitas dan inovatif.
                                <br>
                                2. Menanamkan nilai-nilai Al-Qur'an dan sunnah dalam kehidupan sehari-hari.
                                <br>
                                3. Mengembangkan potensi siswa secara holistik, baik dalam bidang akademik maupun
                                non-akademik.
                                <br>
                                4. Memberikan pemahaman yang benar dan mendalam tentang Al-Qur'an dan ajaran Islam.<br>
                                5. Menciptakan lingkungan belajar yang kondusif dan menyenangkan bagi siswa.
                                <br>
                                6. Menghasilkan siswa yang memiliki akhlak yang baik dan memahami pentingnya Al-Qur'an
                                dalam hidup.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-0">
                    <!-- Features section device mockup-->
                    <div class="features-device-mockup">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                                transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                <div class="screen bg-black">
                                    <!-- PUT CONTENTS HERE:-->
                                    <!-- * * This can be a video, image, or just about anything else.-->
                                    <!-- * * Set the max width of your media to 100% and the height to-->
                                    <!-- * * 100% like the demo example below.-->
                                    <video muted="muted" autoplay="" loop=""
                                        style="width: 100%; height: 100%; object-fit: cover">
                                        <source src="{{ asset('assets/img/female-kid.mp4') }}" type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->

    @include('frontend/static/footer')

    <!-- End Of Footer-->

    <!-- myAreaChartStatistikSiswa -->

    @include('backend/dashboard/chart')

    <!-- End Of myAreaChartStatistikSiswa -->

</body>

</html>
