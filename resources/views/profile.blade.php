<!DOCTYPE html>
<html lang="en">

<head>
    @include('header')
</head>

<body id="page-top">
    <!-- Navigation-->
    @include('navbar')
    <!-- Mashead header-->
    <header class="masthead" id='visi'>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Visi -->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-10 lh-1 mb-3">Visi TPA At-Thoriq:</h1>
                        <p class="lead fw-normal text-muted mb-5">Menjadi lembaga pendidikan Islam yang unggul dan berkualitas dalam membentuk generasi Qur'ani dan Berakhlakul Karimah.</p>
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
                                    <video muted="muted" autoplay="" loop="" style="width: 100%; height: 100%; object-fit: cover">
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
                            <h1 class="display-10 lh-1 mb-3">Misi TPA At-Thoriq:</h1>
                            <p class="lead fw-normal text-muted mb-5">
                                1. Menyediakan program pembelajaran Al-Qur'an dan Pendidikan Agama Islam yang berkualitas dan inovatif.
                                <br>
                                2. Menanamkan nilai-nilai Al-Qur'an dan sunnah dalam kehidupan sehari-hari.
                                <br>
                                3. Mengembangkan potensi siswa secara holistik, baik dalam bidang akademik maupun non-akademik.
                                <br>
                                4. Memberikan pemahaman yang benar dan mendalam tentang Al-Qur'an dan ajaran Islam.<br>
                                5. Menciptakan lingkungan belajar yang kondusif dan menyenangkan bagi siswa.
                                <br>
                                6. Menghasilkan siswa yang memiliki akhlak yang baik dan memahami pentingnya Al-Qur'an dalam hidup.</p>
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
                                    <video muted="muted" autoplay="" loop="" style="width: 100%; height: 100%; object-fit: cover">
                                        <source src="{{ asset('assets/img/female-kid.mp4') }}" type="video/mp4" /></video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    @include('footer')
</body>

</html>
