@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3>Manage Data Komplain</h3>
                </div>
                <div class="w-full h-96 relative flex bg-gray-400" id="mapid"></div>
                <div class="box-body table-responsive no-padding">
                    <a href="{{ url('/admin/riwayat/store') }}" class="btn btn-success btn-tambah"><i
                            class="fa fa-pluss"></i>Tambah Data</a><br><br>
                    <table class="table table-bordered" id="users-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Customer</th>
                                <th>No HP</th>
                                <th>Alamat</th>
                                <th>Tanggal</th>
                                <th>Trouble</th>
                                <th>Penanganan</th>
                                <th>latitude</th>
                                <th>longitude</th>
                                <th>Status</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($history as $index => $history)
                                <tr>


                                    <td>{{ $index + 1 }}</td>

                                    <td>{{ $history->customer->nama }}</td>
                                    <td>{{ $history->customer->no_hp }}</td>
                                    <td>{{ $history->customer->alamat }}</td>
                                    <td>{{ $history->tanggal }}</td>
                                    <td>{{ $history->trouble }}</td>
                                    <td>{{ $history->action }}</td>
                                    <td>{{ $history->customer->latitude }}</td>
                                    <td>{{ $history->customer->longitude }}</td>
                                    <td>
                                        @if ($history->status == 'Belum Dikerjakan')
                                            <span class="label label-danger">{{ $history->status }}</span>
                                        @endif
                                        @if ($history->status == 'On Progress')
                                            <span class="label label-warning">{{ $history->status }}</span>
                                        @endif
                                        @if ($history->status == 'Selesai')
                                            <span class="label label-success">{{ $history->status }}</span>
                                        @endif
                                    </td>

                                    <td>
                                        {{-- <a href="{{ url('admin/customer/cetak/'.$customer->id) }}" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i></a> --}}
                                        <a href="{{ url('admin/riwayat/' . $history->id) }}" class="btn btn-warning"><i
                                                class="fa fa-pencil"></i></a>
                                        <a href="{{ url('admin/riwayat/delete/' . $history->id) }}"
                                            class="btn btn-danger btn-hapus"><i class="fa fa-trash"></i></a>
                                    </td>

                                </tr>

                                <input type="hidden" value="{{ $history->id }}" id="id{{ $loop->index }}">
                                <input type="hidden" value="{{ $history->nama }}" id="nama{{ $loop->index }}">
                                <input type="hidden" value="{{ $history->customer->alamat }}"
                                    id="alamat{{ $loop->index }}">
                                <input type="hidden" value="{{ $history->customer->latitude }}"
                                    id="lat{{ $loop->index }}">
                                <input type="hidden" value="{{ $history->customer->longitude }}"
                                    id="lon{{ $loop->index }}">
                                @php
                                    $a = '';
                                    $a = $loop->index;
                                @endphp
                            @endforeach


                            <input type="hidden" value="{{ $a ?? '' }}" id="index">
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
@endsection

@push('style')
    <link type="text/css" rel="stylesheet"
        href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
    <link type="text/css" rel="stylesheet"
        href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.css" />
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
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.js" charset="utf-8"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

    <script>
        var mymap = L.map('mapid').setView([-7.563828, 110.8173266], 6);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'sk.eyJ1IjoibWFyaWZmaW4iLCJhIjoiY2tqM3V3OHByMGY4ejJybnE0ZDZpN2JpdSJ9.VkZp3cjQSPoL7lpc-VWsCg'
        }).addTo(mymap);
        var a = []
        var longlat = [];
        var label = [];
        var marker = [];
        var index = document.getElementById('index').value;
        if (index == '') {
            var a = 1;
        } else {
            // Coordinate
            for (c = 0; c <= index; c++) {
                var lat = parseFloat(document.getElementById('lat' + [c]).value);
                var lon = parseFloat(document.getElementById('lon' + [c]).value);
                var arr = [lat, lon];
                longlat.push(arr);

            }
            // LabelPopup

            for (d = 0; d <= index; d++) {
                var nama = document.getElementById('nama' + [d]).value;
                var alamat = document.getElementById('alamat' + [d]).value;

                var arr = [nama, alamat];
                label.push(arr);
            }
            for (i = 0; i < longlat.length; i++) {
                var push = L.marker(longlat[i]).addTo(mymap)
                marker.push(push);

            }

            for (a = 0; a < label.length; a++) {
                marker[a].bindPopup("Nama  " + label[a][0] + "<br>" + "Alamat = " + label[a][1]);
            }
        }


        // var marker = L.marker([-7.514980942395872, 110.93994140625001]).addTo(mymap);
        lc = L.control.locate({
            strings: {
                title: "Lokasi Mu Saat ini!!"
            }
        }).addTo(mymap);
    </script>
    <script type="text/javascript">
        var table = $('#users-table').DataTable({
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        });
        $(document).ready(function() {
            var flash = "{{ Session::has('pesan') }}";
            if (flash) {
                var pesan = "{{ Session::get('pesan') }}";
                alert(pesan);
            }

            $('body').on('click', '.btn-hapus', function(e) {
                e.preventDefault();
                var id = $(this).attr('id');
                var url = $(this).attr('href');
                $('.btn-submit-hapus').attr('href', url);

                $('#modal-danger').modal();
            })
        })
    </script>
@endpush
