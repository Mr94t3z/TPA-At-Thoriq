<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
    <div class="container px-5">
        <img src="{{ asset('assets/img/logo.png') }}" alt="" style="margin-right: 7px; margin-bottom: 7px; width: min(50vw, 90px);">
        <a class="navbar-brand fw-bold" href="#page-top">
            <span style="font-size: 12px;">Taman Pendidikan Al-Quran</span>
            <br>
            <span style="font-size: 32px;">At-Thoriq</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                <li class="nav-item"><a class="nav-link me-lg-3" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="{{ url('profile') }}">Profile</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="{{ url('berita') }}">Berita</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="{{ url('fasilitas') }}">Fasilitas</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="{{ url('login') }}">Login</a></li>
            </ul>
            <a
                href="https://wa.me/6281223626127?text=Assalamu'alaikum%20Wr.%20Wb.%20Saya%20mempunyai%20feedback%20untuk%20website%20Anda:">
                <button class="btn btn-success rounded-pill px-3 mb-2 mb-lg-0">
                    <span class="d-flex align-items-center">
                        <i class="bi bi-whatsapp me-2"></i>
                        <span class="small">Send Feedback</span>
                    </span>
                </button>
            </a>
        </div>
    </div>
</nav>
