@extends('layouts.DokterTemplate.sneat_dokter_template')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-12">
      <div class="card">
          <h5 class="card-header">Buat status poli</h5>
          <div class="card-body">
              <form action="{{route('simpan.poli', $idPendaftaran->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="html5-date-input">Tanggal</label>
                      <div class="col-sm-10">
                          <input class="form-control" name="tanggal" type="date" value="{{ date('Y-m-d') }}" id="html5-date-input" />
                          <span class="text-danger text-sm mt-1">{{$errors->first('tanggal')}}</span>
                      </div>
                  </div>
                  <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-name">Diagnosa Pasien</label>
                      <div class="col-sm-10">
                          <input type="text" name="diagnosa" class="form-control" id="basic-default-name" value="{{ old('diagnosa')}}"/>
                          <span class="text-danger text-sm mt-1">{{$errors->first('diagnosa')}}</span>
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