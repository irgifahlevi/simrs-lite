@extends('layouts.DokterTemplate.sneat_dokter_template')

@section('content')
<div class="row justify-content-center mb-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Hai, Welcomeback dokter</div>

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
            <h5 class="card-header">Data poli klinik</h5>
            <div class="card-body">
                {{-- <a href="{{route('user.create')}}" class="btn btn-primary btn-sm mb-3">Tambah Data</a> --}}
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Poli Klinik</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataPoliKlinik as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->nama_poli}}</td>
                                    <td>
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash me-1"></i>Hapus
                                        </button>
                                        {{-- {!! Form::open([
                                            'route' => ['user.destroy', $item->id],
                                            'method' => 'delete',
                                            'onsubmit' => 'return confirm("Yakin igin menghapus data ini?")',
                                        ]) !!}
                                        <a href="{{route('user.edit', $item->id)}}" class="btn btn-secondary btn-sm">
                                            <i class="fa fa-edit me-1"></i>Edit</a>
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash me-1"></i>Hapus
                                            </button>
                                        {!! Form::close() !!} --}}
                                    </td>
                                </tr>
                            @endforeach
                            {{-- @empty
                            <tr>
                                <td colspan="4">Data tidak ada</td>
                            </tr>
                                
                            @endforelse --}}
                        </tbody>
                    </table>
                    {{-- {!! $users->links() !!} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
