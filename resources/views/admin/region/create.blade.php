@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3>Tambah Data </h3>
                </div>
                <form role="form" action="{{ url('admin/region/create') }}" method="POST">
                    {{-- <div class="w-full h-96 relative flex bg-gray-400" id="maps"></div> --}}
                    @csrf
                    <div class="box-body">

                        <div class="form-group {{ $errors->has('kode_wilayah') ? ' has-error' : '' }}">
                            <label for="kode_wilayah">Kode Wilayah </label>
                            <input id="kode_wilayah" type="text" name="kode_wilayah" class="form-control" value=""
                                placeholder="" autofocus>
                            @if ($errors->has('kode_wilayah'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('kode_wilayah') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('nama_wilayah') ? ' has-error' : '' }}">
                            <label for="nama_wilayah">Nama Wilayah </label>
                            <input id="nama_wilayah" type="text" name="nama_wilayah" class="form-control" value=""
                                placeholder="" autofocus>
                            @if ($errors->has('nama_wilayah'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama_wilayah') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
                {{-- <input type="hidden" value="{{ $a ?? '' }}" id="index"> --}}
            </div>
        </div>
    </div>
    </div>
@endsection
