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
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-3 lh-1 mb-3">Selamat Datang!</h1>
                        <p class="lead fw-normal text-muted mb-5">Lembaga pendidikan Taman Pendidikan Al-Qur'an
                            At-Thoriq adalah institusi yang memprioritaskan pengajaran Al-Qur'an dan Pendidikan Agama
                            Islam. Melalui implementasi Al-Qur'an dan sunnah dalam proses belajar dan kegiatan
                            sehari-hari, hal ini akan menghasilkan generasi yang memahami Al-Qur'an dan memiliki akhlak
                            yang baik.</p>
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <a href="{{ url('profile') }}" class="btn bg-gradient-primary-to-secondary rounded-pill px-3 mb-2 mb-lg-0">
                                <span class="d-flex align-items-center">
                                    <i class="bi bi-arrow-down-right-circle me-2 text-white"></i>
                                    <span class="small text-white">Selengkapnya</span>
                                </span>
                            </a>
                        </div>
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
    <!-- Quote/testimonial aside-->
    <aside class="text-center bg-gradient-primary-to-secondary">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    <div class="h2 fs-1 text-white mb-4">"Tahapan pertama dalam mencari ilmu adalah mendengarkan,
                        kemudian diam dan menyimak dengan penuh perhatian, lalu menjaganya, lalu mengamalkannya dan
                        kemudian menyebarkannya"</div>
                    <p class="lead fw-normal text-white mb-5">– Sufyan bin Uyainah
                    </p>
                </div>
            </div>
        </div>
    </aside>
    <!-- App features section-->
    <section id="features">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <iframe src="https://maps.google.com/maps?q=-6.878794,107.828998&z=15&output=embed" width="600"
                            height="450" frameborder="0" style="border:0;" allowfullscreen="">Lokasi</iframe>
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
    <!-- Basic features section-->
    {{-- <section class="bg-light">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-12 col-lg-5">
                    <h2 class="display-4 lh-1 mb-4">Enter a new age of web design</h2>
                    <p class="lead fw-normal text-muted mb-5 mb-lg-0">This section is perfect for featuring some
                        information about your application, why it was built, the problem it solves, or anything else!
                        There's plenty of space for text here, so don't worry about writing too much.</p>
                </div>
                <div class="col-sm-8 col-md-6">
                    <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle"
                            src="{{ asset('assets/img/room.jpg') }}" alt="..." /></div>
    </div>
    </div>
    </div>
    </section> --}}
    {{-- <!-- Call to action section-->
    <section class="cta">
        <div class="cta-content">
            <div class="container px-5">
                <h2 class="text-white display-1 lh-1 mb-4">
                    Stop waiting.
                    <br />
                    Start building.
                </h2>
                <a class="btn btn-outline-light py-3 px-4 rounded-pill" href=""
                    target="">Download for free</a>
            </div>
        </div>
    </section> --}}

    <!-- Footer-->

    @include('frontend/static/footer')

    <!-- End Of Footer-->

</body>

</html>
