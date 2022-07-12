@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3>Manage User</h3>
                </div>


                <div class="box-body table-responsive no-padding">
                    <a href="{{ url('admin/user/store') }}" class="btn btn-success btn-tambah"><i
                            class="fa fa-pluss"></i>Tambah Data</a>
                    <table class="table table-bordered" id="users-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $index => $user)
                                <tr>

                                    <td>{{ $index + 1 }}</td>

                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->password }}</td>
                                    <td>
                                        {{-- <a href="{{ url('admin/user/cetak/'.$user->id) }}" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i></a> --}}
                                        <a href="{{ url('admin/user/' . $user->id) }}" class="btn btn-warning"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="{{ url('admin/user/delete/' . $user->id) }}"
                                            class="btn btn-danger btn-hapus"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- {{ $user->links() }} --}}
        </div>
    </div>


    <!-- Modal Hapus -->
    <div class="modal modal-danger fade" id="modal-danger">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Danger Modal</h4>
                </div>
                <div class="modal-body">
                    <p><b><i>Yakin ingin menghapus data ini?</i></b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <a href="#" class="btn btn-outline btn-submit-hapus">Yakin</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Quick Example</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                    </div>


                </div>
            </div>
        </div>
    </div>



@endsection

@section('scripts')


    <script type="text/javascript">
        $(document).ready(function() {
            $('#users-table').DataTable();
        });
        $(document).ready(function() {
            var flash = "{{ Session::has('pesan') }}";
            if (flash) {
                var pesan = "{{ Session::get('pesan') }}";
                alert(pesan);
            }
            $('.btn-tambah').click(function(e) {
                e.preventDefault();
                $('#modal-tambah').modal();
            });
            $('body').on('click', '.btn-hapus', function(e) {
                e.preventDefault();
                var id = $(this).attr('id');
                var url = $(this).attr('href');
                $('.btn-submit-hapus').attr('href', url);

                $('#modal-danger').modal();
            })
        })
        $(document).ready(function() {
            $('#status').select2();
        });
    </script>



@endsection
