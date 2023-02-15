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
                        <h1 class="h3 mb-0 text-gray-800">Identitas Lembaga</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Keterangan Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Jenis Lembaga</th>
                                            <th>Nomor Statistik Lembaga</th>
                                            <th>Nama Lembaga</th>
                                            <th>No. SK Ijin Operasional</th>
                                            <th>Tanggal SK Ijin Operasional</th>
                                            <th>No. Akta Pendirian</th>
                                            <th>Tanggal Akta Pendirian</th>
                                            <th>Alamat</th>
                                            <th>Kecamatan</th>
                                            <th>Kabupaten/Kota</th>
                                            <th>Provinsi</th>
                                            <th>Kode Pos</th>
                                            <th>Nomor Telp</th>
                                            <th>Nomor Fax</th>
                                            <th>Email</th>
                                            <th>Website</th>
                                            <th>Titik Koordinat</th>
                                            <th>Akreditasi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    {{-- <tfoot>
                                        <tr>
                                            <th>Jenis Lembaga</th>
                                            <th>Nomor Statistik Lembaga</th>
                                            <th>Nama Lembaga</th>
                                            <th>No. SK Ijin Operasional</th>
                                            <th>Tanggal SK Ijin Operasional</th>
                                            <th>No. Akta Pendirian</th>
                                            <th>Tanggal Akta Pendirian</th>
                                            <th>Alamat</th>
                                            <th>Kecamatan</th>
                                            <th>Kabupaten/Kota</th>
                                            <th>Provinsi</th>
                                            <th>Kode Pos</th>
                                            <th>Nomor Telp</th>
                                            <th>Nomor Fax</th>
                                            <th>Email</th>
                                            <th>Website</th>
                                            <th>Titik Koordinat</th>
                                            <th>Akreditasi</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>   --}}
                                    <tbody>
                                    @foreach($tbl_identitas_lembaga as $lembaga)
                                        <tr>
                                            <td>{{ $lembaga-> jenis_lembaga }}</td>
                                            <td>{{ $lembaga-> nomor_statistik_lembaga }}</td>
                                            <td>{{ $lembaga-> nama_lembaga }}</td>
                                            <td>{{ $lembaga-> no_sk }}</td>
                                            <td>{{ $lembaga-> tgl_sk }}</td>
                                            <td>{{ $lembaga-> no_akta_pendirian }}</td>
                                            <td>{{ $lembaga-> tgl_akta_pendirian }}</td>
                                            <td>{{ $lembaga-> alamat }}</td>
                                            <td>{{ $lembaga-> kecamatan }}</td>
                                            <td>{{ $lembaga-> kabupaten }}</td>
                                            <td>{{ $lembaga-> provinsi }}</td>
                                            <td>{{ $lembaga-> kode_pos }}</td>

                                            <td>{{ $lembaga-> no_telp }}</td>
                                            <td>{{ $lembaga-> no_fax }}</td>
                                            <td>{{ $lembaga-> email }}</td>
                                            <td>{{ $lembaga-> website }}</td>
                                            <td>{{ $lembaga-> titik_koordinat }}</td>
                                            <td>{{ $lembaga-> akreditasi }}</td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-circle btn-sm">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                {{-- <a href="#" class="btn btn-danger btn-circle" style="margin-top: 10px;">
                                                    <i class="fas fa-trash"></i>
                                                </a> --}}
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
