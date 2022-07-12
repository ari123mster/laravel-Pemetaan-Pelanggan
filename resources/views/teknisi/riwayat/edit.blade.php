@extends('layouts.dashboard2')

@section('content')
    <!-- <div class="card">
                <div class="card-body" id="mapid"></div>
            </div> -->
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3>Edit Riwayat</h3>
                </div>
                <!-- <div class="w-full h-96 relative flex bg-gray-400" id="mapid"></div> -->
                <div class="box-body">
                    <form role="form" action="{{ url('teknisi/riwayat/' . $history->id) }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                                <div class="form-group">
                                    <label>Nama Customer</label>
                                    <select class="form-control" name="customer_id">
                                        <option>--pilih--</option>
                                        @foreach ($customer as $item)
                                            <option value="{{ $item->id }}"
                                                @if ($history->customer_id == $item->id) selected @endif>{{ $item->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group {{ $errors->has('tanggal') ? ' has-error' : '' }}">
                                    <div class="form-group">
                                        <label for="tanggal">tanggal</label>
                                        <input id="tanggal" type="text" name="tanggal" class="form-control"
                                            value="{{ $history->tanggal }}" autofocus>
                                        @if ($errors->has('tanggal'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('tanggal') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('trouble') ? ' has-error' : '' }}">
                                    <div class="form-group">
                                        <label for="trouble">trouble</label>
                                        <input id="trouble" type="text" name="trouble" class="form-control"
                                            value="{{ $history->trouble }}" autofocus>
                                        @if ($errors->has('trouble'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('trouble') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('action') ? ' has-error' : '' }}">
                                    <div class="form-group">
                                        <label for="action">Penanganan</label>
                                        <input id="action" type="text" name="action" class="form-control"
                                            value="{{ $history->action }}" autofocus>
                                        @if ($errors->has('action'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('action') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('status') ? ' has-error' : '' }}">
                                    <label for="status">status </label>
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
                                <button type="submit" class="btn btn-success btn-block">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endpush
