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
                        <h1 class="h3 mb-0 text-gray-800">Edit User</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Keterangan Data</h6>
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
                            <form action="{{ route('user.update', ['user' => $user]) }}" method="POST" class="user">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="exampleInputNama" class="form-label">Nama lengkap</label>
                                    <input type="text" class="form-control" name="nama"
                                        value="{{ old('nama', $user->nama) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail" class="form-label">Email address</label>
                                    <input type="text" class="form-control" name="email"
                                        value="{{ old('email', $user->email) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password"
                                        value="">
                                        <p class="text-danger">Note: Ketika semua data pengguna ini diperbaharui, password juga wajib diperbaharui.</p>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleSelectRoles" class="form-label">Roles</label>
                                    <select class="form-control" name="roles" aria-label="Default select example">
                                        <option value="">Pilih role</option>
                                        <option value="1" @if(old('roles', $user->roles) == 1) selected
                                            @endif>Administrator</option>
                                        <option value="0" @if(old('roles', $user->roles) == 0) selected @endif>Pengguna
                                        </option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ url('users') }}" class="btn btn-warning">Cancel</a>
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
