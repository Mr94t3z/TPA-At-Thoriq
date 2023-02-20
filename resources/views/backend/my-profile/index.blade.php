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
                        <h1 class="h3 mb-0 text-gray-800">Settings</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">My Profile</h6>
                        </div>
                        <div class="card-body">

                            @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
                            </div>
                            @endif

                            <div class="card mb-3 bg-primary text-light" style="max-width:auto">
                                <div class="row g-0">
                                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                                        <div class="rounded-circle overflow-hidden bg-white p-2 img-thumbnail mt-4 mb-4" style="width: 250px; height: 250px;">
                                            
                                            @if ($tbl_users->photo != null)
                                                <img src="{{ asset('storage/uploads/' . $tbl_users->photo) }}" style="max-width:100%; max-height:100%; object-fit: cover; transform: scale(1.2);" alt="...">
                                            
                                            @else
                                                <img src="{{ asset('backend/img/user.png') }}" style="max-width:100%; max-height:100%; object-fit: cover; transform: scale(1.2);" alt="...">
                                            @endif
                                            
                                        </div>
                                    </div>
                                                                   
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h3 class="card-title"><strong>Your Profile</strong></h3>
                            
                                            <div class="mb-3 mr-3">
                                                <label class="form-label">Nama</label>
                                                <input class="form-control" type="text" value="{{ $tbl_users->nama }}"
                                                    aria-label="Disabled input example" disabled readonly>
                                            </div>
                            
                                            <div class="mb-3 mr-3">
                                                <label class="form-label">Email</label>
                                                <input class="form-control" type="text" value="{{ $tbl_users->email }}"
                                                    aria-label="Disabled input example" disabled readonly>
                                            </div>
                            
                                            <p class="card-text">
                                                @php
                                                $elapsed = Auth::user()->updated_at->diffInMinutes();
                                                if ($elapsed >= 60) {
                                                $elapsed = round($elapsed / 60);
                                                if ($elapsed >= 24) {
                                                $elapsed = round($elapsed / 24) . ' days';
                                                } else {
                                                $elapsed .= ' hours';
                                                }
                                                } else {
                                                $elapsed .= ' minutes';
                                                }
                                                @endphp
                                                <small class="text-light">
                                                    Last updated {{$elapsed}} ago.
                                                </small>
                            
                                            </p>
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mr-3">
                                                <a href="{{ route('edit-my-profile') }}" class="btn btn-success ">Update</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
