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
                        <h1 class="h3 mb-0 text-gray-800">Informasi Guru/Ustadz</h1>
                        <a href="{{ url('create-guru') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
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
                            </div>
                            @endif

                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jenjang Pendidikan</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1 ?>
                                        @foreach ($tbl_guru as $guru)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $guru->nama}}</td>
                                            <td>{{ $guru->jenjang_pendidikan}}</td>
                                            <td>{{ $guru->created_at}}</td>
                                            <td>{{ $guru->updated_at}}</td>
                                            <td>
                                                <a href="{{ route('edit-guru', ['guru' => $guru]) }}"
                                                    class="btn btn-warning btn-circle btn-sm">
                                                    <i class="fas fa-pen"></i>
                                                </a>

                                                <div class="modal fade" id="exampleModalToggle{{ $guru->id }}" aria-hidden="true"
                                                    aria-labelledby="exampleModalToggleLabel{{ $guru->id }}" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title fs-5"
                                                                    id="exampleModalToggleLabel{{ $guru->id }}">Apakah anda yakin?</h5>
                                                                    <button class="close" type="button"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>

                                                            </div>
                                                            <div class="modal-body text-justify">
                                                                Data guru dengan nama: <b> {{ $guru->nama }} </b> akan
                                                                dihapus.
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form action="{{ route('guru.destroy', $guru->id) }}"
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

                                                <button type="submit" class="btn btn-danger btn-circle btn-sm"
                                                    data-target="#exampleModalToggle{{ $guru->id }}" data-toggle="modal">
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
