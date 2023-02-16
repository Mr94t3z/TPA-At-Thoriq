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
                        <h1 class="h3 mb-0 text-gray-800">Edit Kepala Pendidikan</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Keterangan Data</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('kp.update', ['kp' => $kp]) }}" method="POST" class="user">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="exampleInputNama" class="form-label">Nama lengkap</label>
                                    <input type="text" class="form-control" name="nama"
                                        value="{{ old('nama', $kp->nama) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputSK" class="form-label">Status Kepegawaian</label>
                                    <input type="text" class="form-control" name="status_kepegawaian"
                                        value="{{ old('status_kepegawaian', $kp->status_kepegawaian) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPT" class="form-label">Pendidikan Terakhir	</label>
                                    <input type="text" class="form-control" name="pendidikan_terakhir"
                                        value="{{ old('pendidikan_terakhir', $kp->pendidikan_terakhir) }}">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ url('kepala-pendidikan') }}" class="btn btn-warning">Cancel</a>
                            </form>

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
