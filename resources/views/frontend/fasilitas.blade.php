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

                    <h2 class="display-10 lh-1 mb-4">Fasilitas TPQ At-Thoriq</h2>
                    @foreach ($fasilitasData as $total => $keterangan)
                    <p class="lead fw-normal text-muted mb-5 mb-lg-0">{{ $no++ }}. Memiliki {{ $keterangan }} dengan luas {{ $total }} m<sup>2</sup>.</p>
                    @endforeach
                    
                </div>
                <div class="col-sm-8 col-md-6">
                    <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle"
                            src="{{ asset('assets/img/room.jpg') }}" alt="..." /></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Footer-->

    @include('frontend/static/footer')

    <!-- End Of Footer-->
   
</body>

</html>
