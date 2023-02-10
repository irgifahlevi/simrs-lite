@extends('layouts.DokterTemplate.sneat_dokter_template')

@section('content')
<div class="row justify-content-center mb-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Hai, Welcomeback dokter</div>
            <h1 class="card-body">Mohon lengkapi data anda dahulu</h1>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('You are logged in!') }}
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Daftar list pendaftaran pasien</h5>
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
                            @foreach ($dataPendaftaran as $pendaftar)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$pendaftar->poliklinik->nama_poli}}</td>
                                    <td>{{$pendaftar->pasien->nama}}</td>
                                    <td>{{$pendaftar->kategori}}</td>
                                    <td>{{$pendaftar->tanggal_pendaftaran}}</td>
                                    <td>{{$pendaftar->antrian}}</td>
                                    <td>
                                        <a href="{{route('poli.pasien', $pendaftar->id)}}" class="btn btn-success btn-sm">Periksa</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $dataPendaftaran->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
