@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3>Tambah Data </h3>
                </div>
                <form role="form" action="{{ url('admin/user/create') }}" method="POST">
                    {{-- <div class="w-full h-96 relative flex bg-gray-400" id="maps"></div> --}}
                    @csrf
                    <div class="box-body">

                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Username </label>
                            <input id="name" type="text" name="name" class="form-control" value="" placeholder=""
                                autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email </label>
                            <input id="email" type="text" name="email" class="form-control" value="" placeholder=""
                                autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password </label>
                            <input id="password" type="text" name="password" class="form-control" value="" placeholder=""
                                autofocus>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('role') ? ' has-error' : '' }}">
                            <label for="role">Hak Akses </label>
                            <select name="role" id="role">
                                <option value="">--Pilih Role---</option>
                                @foreach ($role as $roles)
                                    {
                                    <option value="{{ $roles->id }}">{{ $roles->name }}</option>
                                    }
                                @endforeach
                            </select>
                            @if ($errors->has('role'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('role') }}</strong>
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
