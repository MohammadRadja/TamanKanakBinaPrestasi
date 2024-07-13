@extends('ppdbtk.template')

@section('judul', 'TKIT BINA PRESTASI - Jadwal')

@section('content')
    <div class="container-fluid pt-5 pb-5 bg-light">
        <h2 class="text-center mb-4">Jadwal Sekolah</h2>
        
        <div class="card shadow-sm mb-4">
            <div class="card-header">
                <h3 class="font-weight-bold">Kegiatan Harian</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-sm">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Hari</th>
                                <th scope="col">Kegiatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kegiatanHarian as $kegiatan)
                            <tr>
                                <td>{{ $kegiatan->hari }}</td>
                                <td>{{ $kegiatan->kegiatan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-header">
                <h3 class="font-weight-bold">Detail Kegiatan Harian</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-sm">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Pukul</th>
                                <th scope="col">Kegiatan</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kegiatanHarianDetail as $detail)
                            <tr>
                                <td>{{ $detail->pukul }}</td>
                                <td>{{ $detail->kegiatan }}</td>
                                <td>{{ $detail->keterangan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-header">
                <h3 class="font-weight-bold">Ekstrakurikuler</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-sm">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Hari</th>
                                <th scope="col">Kegiatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ekstrakurikuler as $ekstra)
                            <tr>
                                <td>{{ $ekstra->hari }} Kamis Minggu ke-{{ $ekstra->minggu_ke }}</td>
                                <td>{{ $ekstra->kegiatan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-header">
                <h3 class="font-weight-bold">Menu Cooking Class</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-sm">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Hari</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($menuCookingClass as $menu)
                            <tr>
                                <td>{{ \Carbon\Carbon::parse($menu->tanggal)->translatedFormat('l') }}</td>
                                <td>{{ \Carbon\Carbon::parse($menu->tanggal)->isoFormat('D MMMM YYYY') }}</td>
                                <td>{{ $menu->menu }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-header">
                <h3 class="font-weight-bold">Menu Sehat POMG</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-sm">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Bulan</th>
                                <th scope="col">Hari dan Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Agustus</td>
                                <td>Jumat, 16 Agustus 2024</td>
                            </tr>
                            <tr>
                                <td>September</td>
                                <td>Kamis, 12 September 2024</td>
                            </tr>
                            <tr>
                                <td>Oktober</td>
                                <td>Kamis, 31 Oktober 2024</td>
                            </tr>
                            <tr>
                                <td>November</td>
                                <td>Kamis, 13 November 2024</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-header">
                <h3 class="font-weight-bold">Kegiatan Semester</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-sm">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Kegiatan</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kegiatanSemester as $kegiatan)
                            <tr>
                                <td>
                                    {{ \Carbon\Carbon::parse($kegiatan->tanggal)->translatedFormat('l') }},
                                    {{ \Carbon\Carbon::parse($kegiatan->tanggal)->isoFormat('D MMMM YYYY') }}
                                </td>
                                <td>{{ $kegiatan->kegiatan }}</td>
                                <td>{{ $kegiatan->keterangan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('styles')
    <style>
        .card {
            border-radius: 10px;
        }
        
        .card-header {
            background-color: #343a40;
            color: white;
        }
        
        .font-weight-bold {
            font-weight: bold !important;
        }
        
        .mb-4 {
            margin-bottom: 1.5rem !important;
        }
        
        .mb-3 {
            margin-bottom: 1rem !important;
        }
        
        .bg-light {
            background-color: #f8f9fa !important;
        }
        
        .table-dark {
            background-color: #343a40;
            color: #fff;
        }
        
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }
    </style>
@endsection
