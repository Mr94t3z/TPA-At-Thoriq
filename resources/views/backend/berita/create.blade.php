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
                        <h1 class="h3 mb-0 text-gray-800">Posting Berita</h1>
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
                            <form action="{{ route('berita.action') }}" method="POST" enctype="multipart/form-data"
                                class="user">
                                @csrf

                                <div class="mb-3 mr-3 ml-3">
                                    <label class="form-label">Judul Berita</label>
                                    <input class="form-control" name="title" type="text" id="title" value="{{ old('title') }}">
                                </div>

                                <div class="mb-3 mr-3 ml-3">
                                    <label class="form-label">Slug</label>
                                    <input class="form-control" name="slug" type="text" id="slug" value="{{ old('slug') }}">
                                    <p class="text-danger">Note: Jangan mengubah Slug ini dan biarkan ini berubah otomatis mengikuti Judul Berita.</p>
                                </div>

                                <div class="mb-3 mr-3 ml-3">
                                    <label class="form-label">Nama Creator</label>
                                    <input class="form-control" name="creator" type="text" value="{{ old('creator') }}">
                                </div>

                                <div class="mb-3 mr-3 ml-3">
                                    <label class="form-label">Poster Berita</label>
                                    <input class="form-control" name="poster" type="file">
                                    <p class="text-danger">Note: Ukuran gambar maksimal 5 MB dengan format jpeg, png,
                                        jpg, gif, dan svg.</p>
                                </div>

                                <div class="mb-3 mr-3 ml-3">
                                    <label class="form-label">Isi Berita</label>
                                    <input id="body" type="hidden" name="content" value="{{ old('content') }}">
                                    <trix-editor input="body"></trix-editor>
                                </div>

                                <button type="submit" class="btn btn-primary">Posting</button>
                                <a href="{{ url('berita') }}" class="btn btn-warning">Cancel</a>
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
                const title = document.querySelector('#title');
                const slug = document.querySelector('#slug');

                title.addEventListener('change', function () {
                    fetch('/post-berita/create/checkSlug?title=' + title.value)
                        .then(response => response.json())
                        .then(data => slug.value = data.slug)
                });

                document.addEventListener('trix-file-accept', function (e) {
                    e.preventDefault();
                });

            </script>

</body>

</html>
