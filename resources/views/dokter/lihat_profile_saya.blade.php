@extends('layouts.DokterTemplate.sneat_dokter_template')

@section('content')
    <div class="row justify-content-center">
      <div class="">
        <div class="card mb-4">
          <h5 class="card-header">Profile Details</h5>
          <!-- Account -->

          <hr class="my-0" />
          <div class="card-body">
            <form>
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Nama Lengkap</label>
                  <input class="form-control" value="{{ old('nama') ?? $dataDokter->nama }}" disabled />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">Email</label>
                  <input class="form-control" value="{{ old('email') ?? $dataDokter->user->email }}" disabled />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="email" class="form-label">Umur</label>
                  <input class="form-control" value="{{ old('umur') ?? $dataDokter->umur }}" disabled />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="organization" class="form-label">Jenis Kelamin</label>
                  <input class="form-control" value="{{ old('jenis_kelamin') ?? $dataDokter->jenis_kelamin }}" disabled />
                </div>
                <div class="mb-3 col-md-6">
                  <label class="form-label" for="phoneNumber">No Telpon</label>
                  <input class="form-control" value="{{ old('no_telpon') ?? $dataDokter->no_telpon }}" disabled />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="address" class="form-label">Alamat</label>
                  <input class="form-control" value="{{ old('alamat') ?? $dataDokter->alamat }}" disabled />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="state" class="form-label">Role ID</label>
                  <input class="form-control" value="{{ old('role') ?? $dataDokter->user->role }}" disabled />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="state" class="form-label">Poli Klinik</label>
                  <input class="form-control" value="{{ old('updated_at') ?? $dataDokter->poliklinik->nama_poli }}" disabled />
                </div>
              </div>
              <div class="mt-2">
                <a href={{route('dokter.beranda')}} class="btn btn-primary me-2">Kembali</a>
              </div>
            </form>
          </div>
          <!-- /Account -->
        </div>
      </div>
    </div>
@endsection

