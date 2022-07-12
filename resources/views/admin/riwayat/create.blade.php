@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3>Tambah Data </h3>
                </div>
                <form role="form" action="{{ url('admin/riwayat/create') }}" method="POST">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label>Nama Customer</label>
                            <select class="form-control" name="customer_id">
                                <option>--pilih--</option>
                                @foreach ($customer as $cus)
                                    <option value="{{ $cus->id }}">{{ $cus->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('tanggal') ? ' has-error' : '' }}">
                        <label for="tanggal">Tanggal </label>
                        <input id="tanggal" type="date" name="tanggal" class="form-control" value="" placeholder=""
                            autofocus>
                        @if ($errors->has('tanggal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('trouble') ? ' has-error' : '' }}">
                        <label for="trouble">Trouble </label>
                        <input id="trouble" type="text" name="trouble" class="form-control" value="" placeholder=""
                            autofocus>
                        @if ($errors->has('trouble'))
                            <span class="help-block">
                                <strong>{{ $errors->first('trouble') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('action') ? ' has-error' : '' }}">
                        <label for="action">Action </label>
                        <input id="action" type="text" name="action" class="form-control" value="" placeholder=""
                            autofocus>
                        @if ($errors->has('action'))
                            <span class="help-block">
                                <strong>{{ $errors->first('action') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
                        <label for="status">Status </label>
                        <select class="form-control" name="status">
                            <option>Belum Dikerjakan</option>
                            <option>On Progress</option>
                            <option>Selesai</option>

                        </select>
                        @if ($errors->has('status'))
                            <span class="help-block">
                                <strong>{{ $errors->first('status') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection


@push('style')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endpush

{{-- @section('scripts')

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

@endsection --}}
