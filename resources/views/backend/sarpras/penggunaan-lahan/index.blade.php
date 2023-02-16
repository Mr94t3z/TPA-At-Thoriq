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
                        <h1 class="h3 mb-0 text-gray-800">Informasi Penggunaan Lahan</h1>
                        <a href="{{ route('create-pl') }}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Tambah Data </a>
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

                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Keterangan</th>
                                            <th>Milik</th>
                                            <th>Penggunaan</th>
                                            <th>Bersertifikat</th>
                                            <th>Belum Bersertifikat</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1 ?>
                                        @foreach ($tbl_sarpras_penggunaan_lahan as $pl)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $pl->keterangan}}</td>
                                            <td>{{ $pl->milik}}</td>
                                            <td>{{ $pl->penggunaan}}</td>
                                            <td>{{ $pl->bersertifikat}} m<sup>2</sup></td>
                                            <td>{{ $pl->belum_sertifikat}} m<sup>2</sup></td>
                                            <td>{{ $pl->created_at}}</td>
                                            <td>{{ $pl->updated_at}}</td>
                                            <td>
                                                <a href="{{ route('edit-pl', ['pl' => $pl]) }}"
                                                    class="btn btn-warning btn-circle btn-sm mb-2">
                                                    <i class="fas fa-pen"></i>
                                                </a>

                                                <!-- create a unique modal for each penggunaan lahan using the penggunaan lahan's id as the modal's id -->
                                                <div class="modal fade" id="exampleModalToggle{{ $pl->id }}"
                                                    aria-hidden="true"
                                                    aria-labelledby="exampleModalToggleLabel{{ $pl->id }}"
                                                    tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title fs-5"
                                                                    id="exampleModalToggleLabel{{ $pl->id }}">Apakah
                                                                    anda yakin?</h1>
                                                                    <button class="close" type="button"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                            </div>
                                                            <div class="modal-body text-justify">
                                                                Data luas tanah dengan keterangan:
                                                                <b>{{ $pl->keterangan }}</b> akan
                                                                dihapus.
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form action="{{ route('pl.destroy', $pl->id) }}"
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
                                                    data-target="#exampleModalToggle{{ $pl->id }}" data-toggle="modal">
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
