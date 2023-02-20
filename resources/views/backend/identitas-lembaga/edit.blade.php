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
                            <form action="{{ route('lembaga.update', ['lembaga' => $lembaga]) }}" method="POST" class="user">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="exampleInputJenisLembaga" class="form-label">Jenis Lembaga</label>
                                    <input type="text" class="form-control" name="jenis_lembaga"
                                        value="{{ old('jenis_lembaga', $lembaga->jenis_lembaga) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputNoSL" class="form-label">Nomor Statistik Lembaga</label>
                                    <input type="text" class="form-control" name="nomor_statistik_lembaga" value="{{ old('nomor_statistik_lembaga', $lembaga->nomor_statistik_lembaga) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputNamaLembaga" class="form-label">Nama Lembaga</label>
                                    <input type="text" class="form-control" name="nama_lembaga" value="{{ old('nama_lembaga', $lembaga->nama_lembaga) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputNoSK" class="form-label">No. SK Ijin Operasional</label>
                                    <input type="text" class="form-control" name="no_sk" value="{{ old('no_sk', $lembaga->no_sk) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputTglSK" class="form-label">Tanggal SK Ijin Operasional</label>
                                    <input type="date" class="form-control" name="tgl_sk" value="{{ old('tgl_sk', $lembaga->tgl_sk) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputNoAP" class="form-label">No. Akta Pendirian</label>
                                    <input type="text" class="form-control" name="no_akta_pendirian" value="{{ old('no_akta_pendirian', $lembaga->no_akta_pendirian) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputTglAP" class="form-label">Tanggal Akta Pendirian</label>
                                    <input type="date" class="form-control" name="tgl_akta_pendirian" value="{{ old('tgl_akta_pendirian', $lembaga->tgl_akta_pendirian) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputAlamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="{{ old('alamat', $lembaga->alamat) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputKecamatan" class="form-label">Kecamatan</label>
                                    <input type="text" class="form-control" name="kecamatan" value="{{ old('kecamatan', $lembaga->kecamatan) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputKabupaten" class="form-label">Kabupaten/Kota</label>
                                    <input type="text" class="form-control" name="kabupaten" value="{{ old('kabupaten', $lembaga->kabupaten) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputProvinsi" class="form-label">Provinsi</label>
                                    <input type="text" class="form-control" name="provinsi" value="{{ old('provinsi', $lembaga->provinsi) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputKPos" class="form-label">Kode Pos</label>
                                    <input type="text" class="form-control" name="kode_pos" value="{{ old('kode_pos', $lembaga->kode_pos) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputNoTelp" class="form-label">Nomor Telpon</label>
                                    <input type="text" class="form-control" name="no_telp" value="{{ old('no_telp', $lembaga->no_telp) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputNoFax" class="form-label">Nomor Fax</label>
                                    <input type="text" class="form-control" name="no_fax" value="{{ old('no_fax', $lembaga->no_fax) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ old('email', $lembaga->email) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputWeb" class="form-label">Website</label>
                                    <input type="text" class="form-control" name="website" value="{{ old('website', $lembaga->website) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputTK" class="form-label">Titik Koordinat</label>
                                    <input type="text" class="form-control" name="titik_koordinat" value="{{ old('titik_koordinat', $lembaga->titik_koordinat) }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputA" class="form-label">Akreditasi</label>
                                    <input type="text" class="form-control" name="akreditasi" value="{{ old('akreditasi', $lembaga->akreditasi) }}">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ url('lembaga') }}" class="btn btn-warning">Cancel</a>
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