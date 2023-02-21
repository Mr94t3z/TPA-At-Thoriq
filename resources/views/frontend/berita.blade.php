<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend/static/header')
</head>

<body id="page-top">
    <!-- Navigation-->
    @include('frontend/static/navbar')
    <!-- Page Header-->
    <header class="masthead">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
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
    </header>


    <!-- Footer-->

    @include('frontend/static/footer')

    <!-- End Of Footer-->

</body>

</html>
