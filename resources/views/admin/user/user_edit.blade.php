@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3>Edit Wilayah</h3>
                </div>
                <div class="box-body">
                    <form role="form" action="{{ url('admin/user/' . $user->id) }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="form-group">
                                    <label for="name">Username</label>
                                    <input id="name" type="text" name="name" class="form-control"
                                        value="{{ $user->name }}" autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="text" name="email" class="form-control"
                                            value="{{ $user->email }}" autofocus>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input id="password" type="text" name="password" class="form-control"
                                                value="{{ $user->password }}" autofocus>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('role') ? ' has-error' : '' }}">
                                            <div class="form-group">
                                                <label for="role">Hak Akses</label>
                                                <select name="role" id="role">
                                                    <option value="">--Pilih Hak Akses--</option>
                                                    @foreach ($role as $role)
                                                        <option value="{{ $role->id }}"
                                                            {{ $role->id == $user->roles[0]->id ? 'selected' : '' }}>
                                                            {{ $role->name }}</option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->has('role'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('role') }}</strong>
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
