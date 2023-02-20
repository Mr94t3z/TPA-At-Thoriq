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
                        <h1 class="h3 mb-0 text-gray-800">Informasi Sarpras Pendukung</h1>
                        <a href="{{ route('create-pendukung') }}"
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
                                            <th>Keterangan</th>
                                            <th>Milik</th>
                                            <th>Penggunaan</th>
                                            <th>Baik</th>
                                            <th>Rusak</th>
                                            <th>Jumlah</th>
                                            <th>Dibuat Pada</th>
                                            <th>Terakhir Diperbaharui</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tbl_sarpras_pendukung as $key => $pendukung)
                                        <tr>
                                            <td>{{ $tbl_sarpras_pendukung->firstItem() + $key }}</td>
                                            <td>{{ $pendukung->keterangan}}</td>
                                            <td>{{ $pendukung->milik}}</td>
                                            <td>{{ $pendukung->penggunaan}}</td>
                                            <td>{{ $pendukung->baik}}</td>
                                            <td>{{ $pendukung->rusak}}</td>
                                            <td>{{ $pendukung->baik + $pendukung->rusak}}</td>
                                            <td>{{ $pendukung->created_at}}</td>
                                            <td>{{ $pendukung->updated_at}}</td>
                                            <td>
                                                <a href="{{ route('edit-pendukung', ['pendukung' => $pendukung]) }}"
                                                    class="btn btn-warning btn-circle btn-sm">
                                                    <i class="fas fa-pen"></i>
                                                </a>

                                                <!-- create a unique modal for each sarpras pendukung using the sarpras pendukung's id as the modal's id -->
                                                <div class="modal fade" id="exampleModalToggle{{ $pendukung->id }}"
                                                    aria-hidden="true"
                                                    aria-labelledby="exampleModalToggleLabel{{ $pendukung->id }}"
                                                    tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title fs-5"
                                                                    id="exampleModalToggleLabel{{ $pendukung->id }}">Apakah
                                                                    anda yakin?</h1>
                                                                    <button class="close" type="button"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                            </div>
                                                            <div class="modal-body text-justify">
                                                                Data luas tanah dengan keterangan:
                                                                <b>{{ $pendukung->keterangan }}</b> akan
                                                                dihapus.
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form action="{{ route('pendukung.destroy', $pendukung->id) }}"
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
                                                    data-target="#exampleModalToggle{{ $pendukung->id }}" data-toggle="modal">
                                                    <i class="fas fa-trash"></i>
                                                </button>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
