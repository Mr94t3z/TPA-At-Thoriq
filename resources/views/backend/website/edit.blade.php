<!DOCTYPE html>
<html lang="en">

<head>

    @include('backend/static/header')

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>

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
                        <h1 class="h3 mb-0 text-gray-800">Edit Sarpras Listrik dan Internet</h1>
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
                            <form action="{{ route('website.update', ['website' => $website]) }}" method="POST" enctype="multipart/form-data" class="user">
                                @csrf
                                @method('PUT')

                                <div class="mb-3 mr-3 ml-3">
                                    <label class="form-label">Logo :</label>
                                    <input class="form-control" name="logo" type="file">
                                </div>
    
                                <div class="mb-3 mr-3 ml-3">
                                    <label class="form-label">Welcome Message :</label>
                                    <input id="welcome_message" type="hidden" name="welcome_message" value="{{  $website->welcome_message }}">
                                    <trix-editor input="welcome_message"></trix-editor>
                                </div>
    
                                <div class="mb-3 mr-3 ml-3">
                                    <label class="form-label">Welcome Video :</label>
                                    <input class="form-control" name="welcome_video" type="file">
                                </div>
    
                                <div class="mb-3 mr-3 ml-3">
                                    <label class="form-label">Quote Message :</label>
                                    <input id="quote_message" type="hidden" name="quote_message" value="{{  $website->quote_message }}">
                                    <trix-editor input="quote_message"></trix-editor>
                                </div>
    
                                <div class="mb-3 mr-3 ml-3">
                                    <label class="form-label">Quote By :</label>
                                    <input class="form-control" name="quote_by" type="text" value="{{  $website->quote_by }}">
                                </div>
    
                                <div class="mb-3 mr-3 ml-3">
                                    <label class="form-label">Maps Latitude :</label>
                                    <input class="form-control" name="maps_latitude" type="text" value="{{  $website->maps_latitude }}">
                                </div>
    
                                <div class="mb-3 mr-3 ml-3">
                                    <label class="form-label">Maps Longitude :</label>
                                    <input class="form-control" name="maps_longitude" type="text" value="{{  $website->maps_longitude }}">
                                </div>
    
                                <div class="mb-3 mr-3 ml-3">
                                    <label class="form-label">Maps Video :</label>
                                    <input class="form-control" name="maps_video" type="file">
                                </div>

                                <div class="mb-3 mr-3 ml-3">
                                    <label class="form-label">Visi :</label>
                                    <input id="visi" type="hidden" name="visi" value="{{  $website->visi }}">
                                    <trix-editor input="visi"></trix-editor>
                                </div>
    
                                <div class="mb-3 mr-3 ml-3">
                                    <label class="form-label">Visi Video :</label>
                                    <input class="form-control" name="visi_video" type="file">
                                </div>
    
                                <div class="mb-3 mr-3 ml-3">
                                    <label class="form-label">Misi :</label>
                                    <input id="misi" type="hidden" name="misi" value="{{  $website->misi }}">
                                    <trix-editor input="misi"></trix-editor>
                                </div>
    
                                <div class="mb-3 mr-3 ml-3">
                                    <label class="form-label">Misi Video :</label>
                                    <input class="form-control" name="misi_video" type="file">
                                </div>
    
                                <div class="mb-3 mr-3 ml-3">
                                    <label class="form-label">Fasilitas Image :</label>
                                    <input class="form-control" name="fasilitas_image" type="file">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ url('website') }}" class="btn btn-warning">Cancel</a>
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

            <script>
                document.addEventListener('trix-file-accept', function(e) {
                    e.preventDefault();
                });

            </script>

</body>

</html>