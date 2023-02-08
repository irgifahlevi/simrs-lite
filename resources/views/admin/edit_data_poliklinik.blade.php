@extends('layouts.AdminTemplate.sneat_admin_template')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Tambah data poliklinik</h5>
                <div class="card-body">
                    <form action="{{route('update.poliklinik', $dataPoliKlinik->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Poliklinik</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_poli" class="form-control" id="basic-default-name" value="{{ $dataPoliKlinik->nama_poli }}"/>
                                <span class="text-danger text-sm mt-1">{{$errors->first('nama_poli')}}</span>
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