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
                        <h1 class="h3 mb-0 text-gray-800">Manajemen Berita</h1>
                        <a href="{{ route('create-berita') }}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Posting Berita </a>
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
                                            <th>Judul Berita</th>
                                            <th>Nama Creator</th>
                                            <th>Poster</th>
                                            <th>Dibuat Pada</th>
                                            <th>Terakhir Diperbaharui</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tbl_berita as $key => $berita)
                                        <tr>
                                            <td>{{ $tbl_berita->firstItem() + $key }}</td>
                                            <td>{{ $berita->title}}</td>
                                            <td>{{ $berita->creator}}</td>
                                            <td>
                                                @if ( $berita->poster != null)

                                                <div class="overflow-hidden bg-light img-thumbnail"
                                                style="width: 100px; height: 75px;">
                                                <img class="img-profile btn-sm mt-1"
                                                    src="{{ asset('storage/uploads/' . $berita->poster) }}" style="max-width:100%; max-height:100%; object-fit: cover; transform: scale(1.2);">
                                                </div>

                                                @else

                                                <div class="overflow-hidden bg-light img-thumbnail"
                                                style="width: 80px; height: 75px;">
                                                <img class="img-profile btn-sm mt-1"
                                                    src="https://via.placeholder.com/100x75" style="max-width:100%; max-height:100%; object-fit: cover; transform: scale(1.2);">
                                                </div>

                                                @endif

                                            </td>
                                            <td>{{ $berita->created_at}}</td>
                                            <td>{{ $berita->updated_at}}</td>
                                            <td>
                                                <a href="{{ route('edit-berita', ['berita' => $berita]) }}"
                                                    class="btn btn-warning btn-circle btn-sm mb-2">
                                                    <i class="fas fa-pen"></i>
                                                </a>

                                                <div class="modal fade" id="exampleModalToggle{{ $berita->id }}"
                                                    aria-hidden="true"
                                                    aria-labelledby="exampleModalToggleLabel{{ $berita->id }}"
                                                    tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title fs-5"
                                                                    id="exampleModalToggleLabel{{ $berita->id }}">Apakah
                                                                    anda yakin?</h5>
                                                                <button class="close" type="button" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>

                                                            </div>
                                                            <div class="modal-body text-justify">
                                                                Data berita dengan judul: <b> {{ $berita->title }} </b> akan
                                                                dihapus.
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form action="{{ route('berita.destroy', $berita->id) }}"
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
                                                    data-target="#exampleModalToggle{{ $berita->id }}"
                                                    data-toggle="modal">
                                                    <i class="fas fa-trash"></i>
                                                </button>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $tbl_berita->links() }}

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
