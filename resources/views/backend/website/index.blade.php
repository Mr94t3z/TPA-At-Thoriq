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
                        <h1 class="h3 mb-0 text-gray-800">Manajemen Website</h1>
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

                            @foreach($tbl_website as $website)

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Logo :</label>
                                <input class="form-control" type="text" value="{{ $website->logo }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Welcome Message :</label>
                                <input class="form-control" type="text" value="{{ $website->welcome_message }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Welcome Video :</label>
                                <input class="form-control" type="text" value="{{ $website->welcome_video }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Quote Message :</label>
                                <input class="form-control" type="text" value="{{ $website->quote_message }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Quote By :</label>
                                <input class="form-control" type="text" value="{{ $website->quote_by }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Maps Latitude :</label>
                                <input class="form-control" type="text" value="{{ $website->maps_latitude }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Maps Longitude :</label>
                                <input class="form-control" type="text" value="{{ $website->maps_longitude }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Maps Video :</label>
                                <input class="form-control" type="text" value="{{ $website->maps_video }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Visi :</label>
                                <input class="form-control" type="text" value="{{ $website->visi }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Visi Video :</label>
                                <input class="form-control" type="text" value="{{ $website->visi_video }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Misi :</label>
                                <input class="form-control" type="text" value="{{ $website->misi }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Misi Video :</label>
                                <input class="form-control" type="text" value="{{ $website->misi_video }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Fasilitas Image :</label>
                                <input class="form-control" type="text" value="{{ $website->fasilitas_image }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Dibuat pada :</label>
                                <input class="form-control" type="text" value="{{  $website->created_at }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Terakhir diperbaharui :</label>
                                <input class="form-control" type="text" value="{{  $website->updated_at }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <a href="{{ route('edit-website', ['website' => $website]) }}"
                                class="btn btn-success mb-3 mt-3 mr-3 ml-3">Update</a>

                            @endforeach
                            
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