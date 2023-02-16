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
                        <h1 class="h3 mb-0 text-gray-800">Tambah Data Penggunaan Lahan</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Input Data</h6>
                        </div>

                        <!-- Error Message -->
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show mr-3 ml-3 mt-3" role="alert">
                            {{ $error }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
                        </div>
                        @endforeach
                        @endif
                        <!-- End Of Error Message -->

                        <div class="card-body">
                            <form action="{{ route('pl.action') }}" method="POST" class="user">
                                @csrf

                                <div class="mb-3">
                                    <label for="exampleInputKeterangan" class="form-label">Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan"
                                        value="{{ old('keterangan') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputMilik" class="form-label">Milik</label>
                                    <input type="text" class="form-control" name="milik" value="{{ old('milik') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPenggunaan" class="form-label">Penggunaan</label>
                                    <input type="text" class="form-control" name="penggunaan" value="{{ old('penggunaan') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputBersertifikat" class="form-label">Bersertifikat (Luas m<sup>2</sup>)</label>
                                    <input type="text" class="form-control" name="bersertifikat" value="{{ old('bersertifikat') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputBelumBersertifikat" class="form-label">Belum Bersertifikat (Luas m<sup>2</sup>)</label>
                                    <input type="text" class="form-control" name="belum_sertifikat" value="{{ old('belum_sertifikat') }}">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ url('penggunaan-lahan') }}" class="btn btn-warning">Cancel</a>
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
