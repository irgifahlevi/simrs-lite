@extends('layouts.AdminTemplate.sneat_admin_template')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Edit data pasien</h5>
                <div class="card-body">
                    <form action="{{route('update.pasien', $dataPasien->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Pasien</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" id="basic-default-name" value="{{ $dataPasien->nama }}"/>
                                <span class="text-danger text-sm mt-1">{{$errors->first('nama')}}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Umur</label>
                            <div class="col-sm-10">
                                <input type="number" name="umur" class="form-control" id="basic-default-name" value="{{ $dataPasien->umur }}"/>
                                <span class="text-danger text-sm mt-1">{{$errors->first('umur')}}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                          <label for="defaultSelect" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                          <div class="col-sm-10">
                              <select id="defaultSelect" class="form-select" name="jenis_kelamin">
                                  <option>Masukan jenis kelamin</option>
                                  <option value="Laki-laki" {{ $dataPasien->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                  <option value="Perempuan" {{ $dataPasien->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                              </select>
                              <span class="text-danger text-sm mt-1">{{$errors->first('jenis_kelamin')}}</span>    
                          </div>    
                      </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" name="alamat" class="form-control" id="basic-default-name" value="{{ $dataPasien->alamat }}"/>
                                <span class="text-danger text-sm mt-1">{{$errors->first('alamat')}}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">No Telpon</label>
                            <div class="col-sm-10">
                                <input type="number" name="no_telpon" class="form-control" id="basic-default-name" value="{{ $dataPasien->no_telpon }}"/>
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