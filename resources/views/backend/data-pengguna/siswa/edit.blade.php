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
                        <h1 class="h3 mb-0 text-gray-800">Edit Siswa/Santri Aktif</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Keterangan Data</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('siswa.update', ['siswa' => $siswa]) }}" method="POST" class="user">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="exampleInputNama" class="form-label">NISN</label>
                                    <input type="text" class="form-control" name="nisn"
                                        value="{{ old('nisn', $siswa->nisn) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputNama" class="form-label">Nama lengkap</label>
                                    <input type="text" class="form-control" name="nama"
                                        value="{{ old('nama', $siswa->nama) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleSelectJK" class="form-label">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin" aria-label="Default select example">
                                        <option value="">Pilih jenis kelamin</option>
                                        <option value="L" @if(old('jenis_kelamin', $siswa->jenis_kelamin) == 'L') selected
                                            @endif>Laki-laki</option>
                                        <option value="P" @if(old('jenis_kelamin', $siswa->jenis_kelamin) == 'P') selected @endif>Perempuan
                                        </option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleSelectKelas" class="form-label">Kelas</label>
                                    <select class="form-control" name="kelas" aria-label="Default select example">
                                        <option value="">Pilih kelas</option>
                                        @for ($i = 0; $i <= 7; $i++) <option value="{{ $i }}" @if(old('kelas', $siswa->
                                            kelas) == $i) selected @endif>
                                            @if($i == 0)
                                            Tidak ada kelas
                                            @else
                                            Kelas {{ $i }}
                                            @endif
                                            </option>
                                            @endfor
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ url('siswa') }}" class="btn btn-warning">Cancel</a>
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
