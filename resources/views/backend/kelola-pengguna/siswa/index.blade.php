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
                        <h1 class="h3 mb-0 text-gray-800">Informasi Siswa/Santri Aktif</h1>
                        <a href="{{ route('create-siswa') }}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Tambah Data </a>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Keterangan Data</h6>
                        </div>

                        <div class="card-body">

                            <!-- Search Siswa -->
                            <form>
                                <div class="mb-3 row justify-content-md-end">
                                    <label class="col-sm-1 col-form-label">Search:</label>
                                    <div class="col-sm-3 text-right">
                                        <input type="text" name="q" value="{{ $q }}"
                                            class="form-control form-control-sm" placeholder=""
                                            aria-controls="dataTable">
                                    </div>
                                </div>
                            </form>


                            @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
                            </div>
                            @endif



                            <div class="table-responsive">

                                <table class="table table-bordered text-center" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NISN</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Kelas</th>
                                            <th>Dibuat Pada</th>
                                            <th>Terakhir Diperbaharui</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1 ?>
                                        @foreach ($tbl_siswa_aktif as $siswa)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $siswa->nisn}}</td>
                                            <td>{{ $siswa->nama}}</td>
                                            <td>{{ $siswa->jenis_kelamin}}</td>
                                            <td>{{ $siswa->kelas == 0 ? 'Tidak ada kelas' : 'Kelas '.$siswa->kelas }}
                                            </td>
                                            <td>{{ $siswa->created_at}}</td>
                                            <td>{{ $siswa->updated_at}}</td>
                                            <td>
                                                <a href="{{ route('edit-siswa', ['siswa' => $siswa]) }}"
                                                    class="btn btn-warning btn-circle btn-sm mb-3">
                                                    <i class="fas fa-pen"></i>
                                                </a>


                                                <!-- create a unique modal for each siswa using the siswa's id as the modal's id -->
                                                <div class="modal fade" id="exampleModalToggle{{ $siswa->id }}"
                                                    aria-hidden="true"
                                                    aria-labelledby="exampleModalToggleLabel{{ $siswa->id }}"
                                                    tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title fs-5"
                                                                    id="exampleModalToggleLabel{{ $siswa->id }}">Apakah
                                                                    anda yakin?</h1>
                                                                    <button class="close" type="button"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                            </div>
                                                            <div class="modal-body text-justify">
                                                                Data siswa dengan nama: <b>{{ $siswa->nama }}</b> akan
                                                                dihapus.
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form action="{{ route('siswa.destroy', $siswa->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Submit</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end of unique modal -->

                                                <button type="submit" class="btn btn-danger btn-circle btn-sm"
                                                    data-target="#exampleModalToggle{{ $siswa->id }}"
                                                    data-toggle="modal">
                                                    <i class="fas fa-trash"></i>
                                                </button>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $tbl_siswa_aktif->links() }}

                            </div>
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
