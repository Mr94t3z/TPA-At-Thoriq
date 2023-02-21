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

                <!-- Pie Chart -->
                <div class="col-xl-6 col-lg-12">
                    <div class="card shadow mt-5">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Statistik Sarana dan Prasarana</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myPieChartSarpras"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <i class="fas fa-circle text-primary"></i> Luas Tanah
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> Lahan
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-info"></i> Pendukung
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-5 mt-5">
                    <h2 class="display-10 lh-1 mb-4">Sarana dan Prasarana</h2>
                    <p class="lead fw-normal text-muted mb-5 mb-lg-0">Statistik pie chart sarana dan prasarana di Taman Pendidikan Al-Qur'an At-Thoriq adalah sebuah diagram yang menunjukkan proporsi penggunaan sumber daya dan fasilitas yang tersedia di lembaga tersebut. Diagram ini membagi sumber daya ke dalam beberapa kategori seperti luas tanah, penggunaan lahan dan sarpras pendukung, untuk menganalisis persentase penggunaannya.</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Statistik Siswa/Santri Aktif -->
    <section class="bg-light">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-12 col-lg-5">

                    <h2 class="display-10 lh-1 mb-4">Fasilitas TPA At-Thoriq</h2>
                    @foreach ($fasilitasData as $total => $keterangan)
                    <p class="lead fw-normal text-muted mb-lg-0">{{ $no++ }}. Memiliki {{ $keterangan }} dengan
                        luas {{ $total }} m<sup>2</sup>.</p>
                    @endforeach

                </div>
                <div class="col-sm-8 col-md-6 mt-5">
                    <div class="px-5 px-sm-0">

                        @if($websiteData->fasilitas_image !== null)

                        <img class="img-fluid rounded-circle"
                            src="{{ asset('storage/uploads/' . $websiteData->fasilitas_image) }}" alt="..." />

                        @else

                        <img class="img-fluid rounded-circle"
                            src="{{ asset('assets/img/room.jpg') }}" alt="..." />

                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->

    @include('frontend/static/footer')

    <!-- End Of Footer-->

    <!-- myPieChartSarpras -->

    @include('backend/dashboard/piechart')

    <!-- End Of myPieChartSarpras -->

</body>

</html>
