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
                        <h1 class="h3 mb-0 text-gray-800">Informasi Users</h1>
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
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Roles</th>
                                            <th>Dibuat Pada</th>
                                            <th>Terakhir Diperbaharui</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tbl_users as $key => $user)
                                        <tr>
                                            <td>{{ $tbl_users->firstItem() + $key }}</td>
                                            <td>{{ $user->nama}}</td>
                                            <td>{{ $user->email}}</td>
                                            <td>
                                                <button
                                                    class="{{ $user->roles == 1 ? 'btn btn-primary btn-sm' : 'btn btn-success btn-sm' }}">
                                                    {{ $user->roles == 1 ? 'Administrator' : 'Pengguna' }}
                                                </button>
                                            </td>
                                            <td>{{ date('d F Y', strtotime($user->created_at)) }}</td>
                                            <td>{{ date('d F Y', strtotime($user->updated_at)) }}</td>
                                            <td>
                                                <a href="{{ route('edit-user', ['user' => $user]) }}"
                                                    class="btn btn-warning btn-circle btn-sm">
                                                    <i class="fas fa-pen"></i>
                                                </a>

                                                <div class="modal fade" id="exampleModalToggle{{ $user->id }}"
                                                    aria-hidden="true"
                                                    aria-labelledby="exampleModalToggleLabel{{ $user->id }}"
                                                    tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title fs-5"
                                                                    id="exampleModalToggleLabel{{ $user->id }}">Apakah
                                                                    anda yakin?</h5>
                                                                <button class="close" type="button" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>

                                                            </div>
                                                            <div class="modal-body text-justify">
                                                                Data user dengan email: <b> {{ $user->email }} </b> akan
                                                                dihapus.
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form action="{{ route('users.destroy', $user->id) }}"
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
                                                    data-target="#exampleModalToggle{{ $user->id }}"
                                                    data-toggle="modal">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $tbl_users->links() }}

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
