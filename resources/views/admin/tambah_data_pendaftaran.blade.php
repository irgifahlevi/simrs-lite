@extends('layouts.AdminTemplate.sneat_admin_template')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Tambah data pendaftaran pasien</h5>
                <div class="card-body">
                    <form action="{{route('simpan.pendaftaran')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                          <label for="defaultSelect" class="col-sm-2 col-form-label">Poli Klinik</label>
                          <div class="col-sm-10">
                              <select id="defaultSelect" class="form-select" name="poliklinik_id">
                                  <option value="">Masukan Poli Klinik</option>
                                      @foreach ($dataPoliKlinik as $poliKlinik)
                                          <option value="{{ $poliKlinik->id }}">{{ $poliKlinik->nama_poli }}</option>
                                      @endforeach
                              </select>
                              <span class="text-danger text-sm mt-1">{{$errors->first('poliklinik_id')}}</span>    
                          </div>    
                        </div>
                        <div id="form-identitas-pasien-lama">
                          <div class="row mb-3">
                            <label for="defaultSelect" class="col-sm-2 col-form-label">Nama pasien lama</label>
                            <div class="col-sm-10">
                                <select id="defaultSelect" class="form-select" name="pasien_id">
                                    <option value="">Masukan Nama Pasien Lama</option>
                                        @foreach ($dataPasienLama as $pasien)
                                            <option value="{{ $pasien->id }}">{{ $pasien->nama }}</option>
                                        @endforeach
                                </select>
                                <span class="text-danger text-sm mt-1">{{$errors->first('pasien_id')}}</span>    
                            </div>    
                          </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Kategori</label>
                            <div class="col-md">
                              <div class="form-check form-check-inline mt-2">
                                <input class="form-check-input" type="radio" name="kategori" value="Lama" onclick="hideForm()" {{ old('kategori') == 'Lama' ? 'checked' : '' }} />
                                <label class="form-check-label" for="inlineRadio1">Pasien lama</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kategori" value="Baru" onclick="showForm()" {{ old('kategori') == 'Baru' ? 'checked' : '' }}/>
                                <label class="form-check-label" for="inlineRadio2">Pasien baru</label>
                              </div>
                              <span class="text-danger text-sm mt-1">{{$errors->first('kategori')}}</span>
                            </div>
                        </div>
                        <div  id="form-identitas-pasien-baru">
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama pasien Baru</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_pasien_baru" class="form-control" id="basic-default-name" value="{{ old('nama_pasien_baru')}}"/>
                                <span class="text-danger text-sm mt-1">{{$errors->first('nama_pasien_baru')}}</span>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Umur pasien Baru</label>
                            <div class="col-sm-10">
                                <input type="number" name="umur_pasien_baru" class="form-control" id="basic-default-name" value="{{ old('umur_pasien_baru')}}"/>
                                <span class="text-danger text-sm mt-1">{{$errors->first('umur_pasien_baru')}}</span>
                            </div>
                          </div>
                          <div class="row mb-3">
                              <label for="defaultSelect" class="col-sm-2 col-form-label">Jenis kelamin pasien baru</label>
                              <div class="col-sm-10">
                                  <select id="defaultSelect" class="form-select" name="jk_pasien_baru">
                                      <option value="">Masukan jenis kelamin</option>
                                      <option value="Laki-laki">Laki-laki</option>
                                      <option value="Perempuan">Perempuan</option>
                                  </select>
                                  <span class="text-danger text-sm mt-1">{{$errors->first('jk_pasien_baru')}}</span>    
                              </div>    
                          </div>
                          <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="basic-default-name">Alamat pasien baru</label>
                              <div class="col-sm-10">
                                  <input type="text" name="alamat_pasien_baru" class="form-control" id="basic-default-name" value="{{ old('alamat_pasien_baru')}}"/>
                                  <span class="text-danger text-sm mt-1">{{$errors->first('alamat_pasien_baru')}}</span>
                              </div>
                          </div>
                          <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="basic-default-name">No telpon pasien baru</label>
                              <div class="col-sm-10">
                                  <input type="number" name="telpon_pasien_baru" class="form-control" id="basic-default-name" value="{{ old('telpon_pasien_baru')}}"/>
                                  <span class="text-danger text-sm mt-1">{{$errors->first('telpon_pasien_baru')}}</span>
                              </div>
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

    <script>
      function showForm() {
        document.getElementById("form-identitas-pasien-baru").style.display = "block";
        document.getElementById("form-identitas-pasien-lama").style.display = "none";
      }
    
      function hideForm() {
        document.getElementById("form-identitas-pasien-baru").style.display = "none";
        document.getElementById("form-identitas-pasien-lama").style.display = "block";
      }
    </script>
@endsection