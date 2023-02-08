@extends('layouts.DokterTemplate.sneat_dokter_template')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Lengkapi data anda</h5>
                <div class="card-body">
                    <form action="{{route('dokter.simpan')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" id="basic-default-name"/>
                                <span class="text-danger text-sm mt-1">{{$errors->first('nama')}}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="defaultSelect" class="col-sm-2 col-form-label">Poli Klinik</label>
                            <div class="col-sm-10">
                                <select id="defaultSelect" class="form-select" name="poliklinik_id">
                                    <option>Masukan Poli Klinik</option>
                                        @foreach ($dataPoliKlinik as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama_poli }}</option>
                                        @endforeach
                                </select>
                                <span class="text-danger text-sm mt-1">{{$errors->first('poliklinik_id')}}</span>    
                            </div>    
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-nohp">Umur</label>
                            <div class="col-sm-10">
                                <input type="number" name="umur" class="form-control" id="basic-default-nohp"/>
                                <span class="text-danger text-sm mt-1">{{$errors->first('umur')}}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="defaultSelect" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select id="defaultSelect" class="form-select" name="jenis_kelamin">
                                    <option>Masukan jenis kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <span class="text-danger text-sm mt-1">{{$errors->first('jenis_kelamin')}}</span>    
                            </div>    
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="exampleFormControlTextarea1">Alamat</label>
                            <div class="col-sm-10">
                                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <span class="text-danger text-sm mt-1">{{$errors->first('alamat')}}</span>
                            </div>
                        </div>
                            <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-nohp">No. Telpon</label>
                            <div class="col-sm-10">
                                <input type="number" name="no_telpon" class="form-control" id="basic-default-nohp"/>
                                <span class="text-danger text-sm mt-1">{{$errors->first('no_telpon')}}</span>
                            </div>
                            </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection