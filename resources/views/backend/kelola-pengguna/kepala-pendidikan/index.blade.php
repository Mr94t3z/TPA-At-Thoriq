<!DOCTYPE html>
<html lang="en">

<head>

    @include('backend/static/header')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        @include('backend/static/sidebar')

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                @include('backend/static/navbar')

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Informasi Kepala Pendidikan</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Keterangan Data</h6>
                        </div>
                        <div class="card-body">

                            @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
                            </div>
                            @endif

                            @foreach ($tbl_kepala_pendidikan as $kp)

                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Nama Lengkap :</label>
                                <div class="col-sm-5">
                                    <input type="text" readonly class="form-control" value="{{ $kp->nama }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Status Kepegawaian :</label>
                                <div class="col-sm-5">
                                    <input type="text" readonly class="form-control"
                                        value="{{ $kp->status_kepegawaian }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Pendidikan Terakhir :</label>
                                <div class="col-sm-5">
                                    <input type="text" readonly class="form-control"
                                        value="{{ $kp->pendidikan_terakhir }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Dibuat Pada :</label>
                                <div class="col-sm-5">
                                    <input type="text" readonly class="form-control" value="{{ $kp->created_at }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label">Terakhir Diperbaharui :</label>
                                <div class="col-sm-5">
                                    <input type="text" readonly class="form-control" value="{{ $kp->updated_at }}">
                                </div>
                            </div>

                            <a href="{{ route('edit-kp', ['kp' => $kp]) }}" class="btn btn-success">Update</a>

                            @endforeach

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

            @include('backend/static/footer')

            <!-- End of Footer -->

</body>

</html>
