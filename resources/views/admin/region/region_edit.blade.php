@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3>Edit Wilayah</h3>
                </div>
                <div class="box-body">
                    <form role="form" action="{{ url('admin/region/' . $region->id) }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group {{ $errors->has('kode_wilayah') ? ' has-error' : '' }}">
                                <div class="form-group">
                                    <label for="kode_wilayah">Kode Wilayah</label>
                                    <input id="kode_wilayah" type="text" name="kode_wilayah" class="form-control"
                                        value="{{ $region->kode_wilayah }}" autofocus>
                                    @if ($errors->has('kode_wilayah'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('kode_wilayah') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('nama_wilayah') ? ' has-error' : '' }}">
                                    <div class="form-group">
                                        <label for="nama_wilayah">Nama Wilayah</label>
                                        <input id="nama_wilayah" type="text" name="nama_wilayah" class="form-control"
                                            value="{{ $region->nama_wilayah }}" autofocus>
                                        @if ($errors->has('nama_wilayah'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('nama_wilayah') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <button type="submit" class="btn btn-success btn-block">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script type="text/javascript">
        $(document).ready(function() {
            var flash = "{{ Session::has('pesan') }}";
            if (flash) {
                var pesan = "{{ Session::get('pesan') }}";
                alert(pesan);
            }
        })
        $(document).ready(function() {
            $('#status').select2();
        });
    </script>

@endsection
