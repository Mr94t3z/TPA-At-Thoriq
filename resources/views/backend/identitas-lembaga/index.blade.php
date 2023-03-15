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
                        <h1 class="h3 mb-0 text-gray-800">Informasi Identitas Lembaga</h1>
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

                            @foreach($tbl_identitas_lembaga as $lembaga)

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Jenis Lembaga :</label>
                                <input class="form-control" type="text" value="{{  $lembaga->jenis_lembaga }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Nomor Statistik Lembaga :</label>
                                <input class="form-control" type="text" value="{{  $lembaga->nomor_statistik_lembaga }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Nama Lembaga :</label>
                                <input class="form-control" type="text" value="{{  $lembaga->nama_lembaga }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">No. SK Ijin Operasional :</label>
                                <input class="form-control" type="text" value="{{  $lembaga->no_sk }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Tanggal SK Ijin Operasional :</label>
                                <input class="form-control" type="text" value="{{  $lembaga->tgl_sk }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">No. Akta Pendirian :</label>
                                <input class="form-control" type="text" value="{{  $lembaga->no_akta_pendirian }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Tanggal Akta Pendirian :</label>
                                <input class="form-control" type="text" value="{{  $lembaga->tgl_akta_pendirian }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Alamat :</label>
                                <input class="form-control" type="text" value="{{  $lembaga->alamat }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Kecamatan :</label>
                                <input class="form-control" type="text" value="{{  $lembaga->kecamatan }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Kabupaten/Kota :</label>
                                <input class="form-control" type="text" value="{{  $lembaga->kabupaten }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Provinsi :</label>
                                <input class="form-control" type="text" value="{{  $lembaga->provinsi }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Kode Pos :</label>
                                <input class="form-control" type="text" value="{{  $lembaga->kode_pos }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Nomor Telpon :</label>
                                <input class="form-control" type="text" value="{{  $lembaga->no_telp }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Nomor Fax :</label>
                                <input class="form-control" type="text" value="{{  $lembaga->no_fax }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Email :</label>
                                <input class="form-control" type="text" value="{{  $lembaga->email }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Website :</label>
                                <input class="form-control" type="text" value="{{  $lembaga->website }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Titik Koordinat :</label>
                                <input class="form-control" type="text" value="{{  $lembaga->titik_koordinat }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Akreditasi :</label>
                                <input class="form-control" type="text" value="{{  $lembaga->akreditasi }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Dibuat pada :</label>
                                <input class="form-control" type="text" value="{{ date('d F Y', strtotime($lembaga->created_at)) }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <div class="mb-3 mr-3 ml-3">
                                <label class="form-label">Terakhir diperbaharui :</label>
                                
                                <input class="form-control" type="text" value="{{ date('d F Y', strtotime($lembaga->updated_at)) }}"
                                    aria-label="Disabled input example" disabled readonly>
                            </div>

                            <a href="{{ route('edit-lembaga', ['lembaga' => $lembaga]) }}"
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
