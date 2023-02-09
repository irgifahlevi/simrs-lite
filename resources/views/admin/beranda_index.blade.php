@extends('layouts.AdminTemplate.sneat_admin_template')

@section('content')
<div class="row justify-content-center mb-4">
    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="card text-center">
                <div class="card-body">
                <h5 class="card-title">Data pasien</h5>
                <h3 class="card-title text-nowrap mb-2">{{$jumlahDataPasien}} Pasien</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card text-center">
                <div class="card-body">
                <h5 class="card-title">Poli klinik</h5>
                <h3 class="card-title text-nowrap mb-2">40 Poli</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card text-center">
                <div class="card-body">
                <h5 class="card-title">Data dokter</h5>
                <h3 class="card-title text-nowrap mb-2">23 Dokter</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center mb-4">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Data poli klinik</h5>
            <div class="card-body">
                {{-- <a href="{{route('user.create')}}" class="btn btn-primary btn-sm mb-3">Tambah Data</a> --}}
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Poli Klinik</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataPoliKlinik as $poliklinik)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$poliklinik->nama_poli}}</td>
                                    <td>
                                        <a href="{{route('edit.poliklinik', $poliklinik->id)}}" class="btn btn-secondary btn-sm">
                                            Edit
                                        </a>
                                        <form action="{{route('hapus.poliklinik', $poliklinik->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $dataPoliKlinik->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center mb-4">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Data list pasien</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pasien</th>
                                <th>Umur</th>
                                <th>Jenis Kelamin</th>
                                <th>No Telpon</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataPasien as $pasien)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$pasien->nama}}</td>
                                    <td>{{$pasien->umur}}</td>
                                    <td>{{$pasien->jenis_kelamin}}</td>
                                    <td>{{$pasien->no_telpon}}</td>
                                    <td>{{$pasien->alamat}}</td>
                                    <td>
                                        <a href="{{route('edit.pasien', $pasien->id)}}" class="btn btn-secondary btn-sm">
                                            Edit
                                        </a>
                                        <form action="{{route('hapus.pasien', $pasien->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $dataPasien->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center mb-4">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Daftar list pendaftaran</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama pendaftar</th>
                                <th>Tanggal Pendaftaran</th>
                                <th>No Antrian</th>
                                <th>Diagnosa pasien</th>
                                <th>Dokter pemeriksa</th>
                                <th>Poliklinik</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                dd($pendaftaranDiperiksa)
                            @endphp --}}
                            @foreach ($pendaftaranDiperiksa as $diperiksa)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$diperiksa->pasien->nama}}</td>
                                    <td>{{$diperiksa->tanggal_pendaftaran}}</td>
                                    <td>{{$diperiksa->antrian}}</td>
                                    <td>{{$diperiksa->statusPoli->diagnosa}}</td>
                                    <td>
                                        {{-- <a class="btn btn-info btn-sm">{{$diperiksa->statusPoli->status_poli}}</a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $pendaftaranDiperiksa->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center mb-4">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Daftar list pendaftaran pasien yang sudah diperiksa</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Poliklinik</th>
                                <th>Nama pendaftar</th>
                                <th>Kategori</th>
                                <th>Tanggal Pendaftaran</th>
                                <th>No Antrian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendaftaranPasien as $pendaftar)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$pendaftar->poliklinik->nama_poli}}</td>
                                    <td>{{$pendaftar->pasien->nama}}</td>
                                    <td>{{$pendaftar->kategori}}</td>
                                    <td>{{$pendaftar->tanggal_pendaftaran}}</td>
                                    <td>{{$pendaftar->antrian}}</td>
                                    <td>
                                        {{-- <form action="{{route('hapus.pasien', $pendaftar->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                Hapus
                                            </button>
                                        </form> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $pendaftaranPasien->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
