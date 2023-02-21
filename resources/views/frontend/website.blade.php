<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend/static/header')
</head>
<style>
    @media (max-width: 767px) {
        #map-container iframe {
            width: 100%;
        }
    }

</style>

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
                        <p class="lead fw-normal text-muted mb-5">
                            {{ strip_tags($websiteData->welcome_message) }}
                        </p>
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <a href="{{ url('profile') }}"
                                class="btn bg-gradient-primary-to-secondary rounded-pill px-3 mb-2 mb-lg-0">
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

                                        @if($websiteData->welcome_video !== null)

                                        <source src="{{ asset('storage/uploads/' . $websiteData->welcome_video) }}" type="video/mp4" />

                                        @else

                                        <source src="{{ asset('assets/img/male-kid.mp4') }}" type="video/mp4" />
                                        
                                        @endif

                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Quote aside-->
    <aside class="text-center bg-gradient-primary-to-secondary">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    <div class="h2 fs-1 text-white mb-4">
                        "{{ strip_tags($websiteData->quote_message) }}"</div>
                    <p class="lead fw-normal text-white mb-5">– {{ strip_tags($websiteData->quote_by) }}
                    </p>
                </div>
            </div>
        </div>
    </aside>

    <!-- IF tbl_berita null hiden this -->
    <section id="features">
        <div class="container px-5">
            <div class="row">
                <h2 class="display-4 lh-1 mb-5 text-center">Berita Terbaru</h2>
                <div class="col-md-6 mb-4">
                    <div class="col-md-10 card p-3">
                        <!-- Feature item-->
                        <div class="text-center mb-3">
                            <img src="{{ asset('assets/img/room.jpg') }}" class="icon-feature img-fluid mb-3 mt-4"
                                style="width: 316px; height: 211px; object-fit: cover; transform: scale(1.2); margin: 10px;">
                            <p class="text-muted mb-0 align-left text-start mb-2 mt-3">23 Februari 2023</p>
                            <h3 class="font-alt" style="text-align: justify">Ready to use HTML/CSS device mockups, no
                                Photoshop required!</h3>
                            <p class="align-left text-start mt-3"><a href="#" class="text-gradient"
                                    style="text-decoration:none;">Baca Selengkapnya</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="col-md-10 card p-3">
                        <!-- Feature item-->
                        <div class="text-center mb-3">
                            <img src="{{ asset('assets/img/room.jpg') }}" class="icon-feature img-fluid mb-3 mt-4"
                                style="width: 316px; height: 211px; object-fit: cover; transform: scale(1.2); margin: 10px;">
                            <p class="text-muted mb-0 align-left text-start mb-2 mt-3">23 Februari 2023</p>
                            <h3 class="font-alt" style="text-align: justify">Put an image, video, animation, or anything
                                else in the screen!</h3>
                            <p class="align-left text-start mt-3"><a href="#" class="text-gradient"
                                    style="text-decoration:none;">Baca Selengkapnya</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <a href="{{ url('berita') }}" class="btn bg-gradient-primary-to-secondary rounded-pill px-3 mb-lg-0">
                <span class="d-flex align-items-center">
                    <i class="bi bi-newspaper me-2 text-white"></i>
                    <span class="small text-white">Berita Selengkapnya</span>
                </span>
            </a>
        </div>
    </section>

    <!-- App features section-->
    <section id="features">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <h2 class="display-4 lh-1 mb-5 text-center">Lokasi</h2>
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid d-flex justify-content-center">

                        @if($websiteData->maps_latitude !== null && $websiteData->maps_longitude !== null)

                        <iframe src="https://maps.google.com/maps?q={{ $websiteData->maps_latitude }},{{ $websiteData->maps_longitude }}&z=15&output=embed" width="100%"
                            height="450" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>

                        @else

                        <iframe src="https://maps.google.com/maps?q=-6.914744,107.609810&z=15&output=embed" width="100%"
                            height="450" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>

                        @endif

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

</body>

</html>
