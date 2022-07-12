@extends('layouts.dashboard2')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3>Manage Data Riwayat</h3>
                </div>

                <div class="box-body table-responsive no-padding">
                    {{-- <a href="{{ url('/teknisi/riwayat/store') }}" class="btn btn-success btn-tambah"><i
                            class="fa fa-pluss"></i>Tambah Data</a><br><br> --}}
                    <table class="table table-bordered" id="users-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Customer</th>
                                <th>Alamat</th>
                                <th>No Hp</th>
                                <th>Tanggal</th>
                                <th>Trouble</th>
                                <th>Penanganan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($history as $index => $his)
                                <tr>


                                    <td>{{ $index + 1 }}</td>

                                    <td>{{ $his->customer->nama }}</td>
                                    <td>{{ $his->customer->no_hp }}</td>
                                    <td>{{ $his->customer->alamat }}</td>
                                    <td>{{ $his->tanggal }}</td>
                                    <td>{{ $his->trouble }}</td>
                                    <td>{{ $his->action }}</td>
                                    <td>
                                        @if ($his->status == 'Belum Dikerjakan')
                                            <span class="label label-danger">{{ $his->status }}</span>
                                        @endif
                                        @if ($his->status == 'On Progress')
                                            <span class="label label-warning">{{ $his->status }}</span>
                                        @endif
                                        @if ($his->status == 'Selesai')
                                            <span class="label label-success">{{ $his->status }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('teknisi/riwayat/' . $his->id) }}" class="btn btn-warning"><i
                                                class="fa fa-pencil"></i></a>
                                        {{-- <a href="{{ url('teknisi/riwayat/delete/' . $his->id) }}"
                                            class="btn btn-danger btn-hapus"><i class="fa fa-trash"></i></a> --}}

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Customer</th>
                                <th>No HP</th>
                                <th>Alamat</th>
                                <th>Tanggal</th>
                                <th>Trouble</th>
                                <th>Penanganan</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
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
@endsection

@push('style')
    <link type="text/css" rel="stylesheet"
        href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
    <link type="text/css" rel="stylesheet"
        href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
@endpush

@push('scripts')
    <script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

    <script type="text/javascript">
        var table = $('#users-table').DataTable({
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        });
    </script>
@endpush
