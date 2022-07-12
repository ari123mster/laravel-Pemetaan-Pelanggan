@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-body" id="mapid"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3>Detail Wilayah</h3>
                </div>
                <!-- <div class="w-full h-96 relative flex bg-gray-400" id="mapid"></div> -->
                <div class="box-body">
                    <form role="form" action="{{ url('admin/customer/' . $customer->id) }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <!-- <div class="form-group {{ $errors->has('kode_wilayah') ? ' has-error' : '' }}">
                                                                                                                                                                                    <div class="form-group" >
                                                                                                                                                                                        <label>Nama Wilayah</label>
                                                                                                                                                                                        <select class="form-control" name="region_id">
                                                                                                                                                                                            <option>--pilih--</option>
                                                                                                                                                                                            @foreach ($region as $region)
                                                                                                                                                                                          
                                                                                                                                                                                            <option readonly value="{{ $region->region->id }}" {{ $customer->region_id == $region->region->id ? 'selected' : '' }}>{{ $region->region->nama_wilayah }}</option>
                                                                                                                                                                                            @endforeach
                                                                                                                                                                                        </select>
                                                                                                                                                                                    </div> -->

                            <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                                <div class="form-group">
                                    <label for="nama">Nama Wilayah</label>
                                    <input readonly id="nama" type="text" name="region_id" class="form-control"
                                        value="{{ $region->region->nama_wilayah }}" autofocus>
                                    @if ($errors->has('nama'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nama') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                                    <div class="form-group">
                                        <label for="nama">Nama </label>
                                        <input readonly id="nama" type="text" name="nama" class="form-control"
                                            value="{{ $customer->nama }}" autofocus>
                                        @if ($errors->has('nama'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('nama') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                                        <div class="form-group">
                                            <label for="alamat">Alamat </label>
                                            <input readonly id="alamat" type="text" name="alamat" class="form-control"
                                                value="{{ $customer->alamat }}" autofocus>
                                            @if ($errors->has('alamat'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('alamat') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
                                            <div class="form-group">
                                                <label for="no_hp">No HP</label>
                                                <input readonly id="no_hp" type="text" name="no_hp" class="form-control"
                                                    value="{{ $customer->no_hp }}" autofocus>
                                                @if ($errors->has('no_hp'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('no_hp') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group {{ $errors->has('file') ? ' has-error' : '' }}">
                                                <div class="form-group">
                                                    <label for="file">Foto Rumah </label>
                                                    {{-- <input readonly id="file" type="text" name="file"
                                                        class="form-control" value="{{ $customer->file }}"
                                                        autofocus> --}}
                                                    <img src="{{ url('storage/images/' . $customer->file) }}"
                                                        height="500px" width="300px" border="5">
                                                    @if ($errors->has('file'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('file') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                                <div
                                                    class="form-group {{ $errors->has('latitude') ? ' has-error' : '' }}">
                                                    <div class="form-group">
                                                        <label for="latitude">latitude </label>
                                                        <input readonly id="latitude" type="text" name="latitude"
                                                            class="form-control" value="{{ $customer->latitude }}"
                                                            autofocus>
                                                        @if ($errors->has('latitude'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('latitude') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div
                                                        class="form-group {{ $errors->has('longitude') ? ' has-error' : '' }}">
                                                        <div class="form-group">
                                                            <label for="longitude">Longitude </label>
                                                            <input readonly id="longitude" type="text" name="longitude"
                                                                class="form-control" value="{{ $customer->longitude }}"
                                                                autofocus>
                                                            @if ($errors->has('longitude'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('longitude') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>

                    </form>
                    <button class="btn btn-success btn-tambah" onClick="refreshPage()">Refresh Halaman</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        #mapid {
            min-height: 500px;
        }

    </style>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />


    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <style>
        .leaflet-top {
            display: none;
        }

    </style>
@endpush

@push('scripts')

    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.js" charset="utf-8"></script>

    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

    <script>
        var map = L.map('mapid').setView([-7.563828, 110.8173266], 6);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 20,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'sk.eyJ1IjoibWFyaWZmaW4iLCJhIjoiY2tqM3V3OHByMGY4ejJybnE0ZDZpN2JpdSJ9.VkZp3cjQSPoL7lpc-VWsCg'
        }).addTo(map);

        // L.Routing.control({
        //     createMarker: function(i, wp, nWps) {
        //         return L.marker(wp.latLng)
        //             .bindPopup('Titik ke ' + i);
        //     },
        //     waypoints: [
        //         L.latLng(-7.5200732, 110.7320762),
        //         L.latLng({{ $customer->latitude }}, {{ $customer->longitude }})
        //     ],
        //     routeWhileDragging: true
        // }).addTo(map);

        setInterval(() => {
            map.locate({
                setView: true,
                maxZoom: 16
            });

        }, 3000);

        // map.locate({
        //     setView: true,
        //     maxZoom: 16
        // });


        function onLocationFound(e) {
            var radius = e.accuracy;

            L.marker(e.latlng).addTo(map)
                .bindPopup("You are within " + radius + " meters from this point").openPopup();

            L.circle(e.latlng, radius).addTo(map);
            L.Routing.control({
                waypoints: [
                    L.latLng(e.latlng),
                    L.latLng({{ $customer->latitude }}, {{ $customer->longitude }})
                ]
            }).addTo(map);
        }

        map.on('locationfound', onLocationFound);

        // lc = L.control.locate({
        //     strings: {
        //         title: "Show me where I am, yo!"
        //     }
        // }).addTo(map);
    </script>
    <script>
        function refreshPage() {
            window.location.reload();
        }
    </script>
@endpush
