@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3>Edit Wilayah</h3>
                </div>
                <div class="w-full h-96 relative flex bg-gray-400" id="mapid"></div>

                <div class="box-body">
                    <form role="form" action="{{ url('admin/customer/' . $customer->id) }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group {{ $errors->has('kode_wilayah') ? ' has-error' : '' }}">
                                <div class="form-group">
                                    <nama_wilayah>Nama Wilayah</nama_wilayah>
                                    <select class="form-control" name="region_id">
                                        <option>--pilih--</option>
                                        @foreach ($region as $region)

                                            <option value="{{ $region->region->id }}"
                                                {{ $customer->region_id == $region->region->id ? 'selected' : '' }}>
                                                {{ $region->region->nama_wilayah }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                                    <div class="form-group">
                                        <nama_wilayah for="nama">Nama </nama_wilayah>
                                        <input id="nama" type="text" name="nama" class="form-control"
                                            value="{{ $customer->nama }}" autofocus>
                                        @if ($errors->has('nama'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('nama') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                                        <div class="form-group">
                                            <nama_wilayah for="alamat">Alamat </nama_wilayah>
                                            <input id="alamat" type="text" name="alamat" class="form-control"
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
                                                <input id="no_hp" type="text" name="no_hp" class="form-control"
                                                    value="{{ $customer->no_hp }}" autofocus>
                                                @if ($errors->has('no_hp'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('no_hp') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group ">
                                                <label for="file">Foto ktp</label>
                                                <input id="file" type="file" name="file" class="form-control"
                                                    value="{{ $customer->file }}">
                                                <label name="file">{{ $customer->file }}</label>
                                                <br>
                                                <img src="{{ url('storage/images/' . $customer->file) }}" height="500px"
                                                    width="300px" border="5">
                                            </div>
                                            <div class="form-group {{ $errors->has('latitude') ? ' has-error' : '' }}">
                                                <div class="form-group">
                                                    <label for="latitude">latitude </label>
                                                    <input id="latitude" type="text" name="latitude" class="form-control"
                                                        value="{{ $customer->latitude }}" autofocus>
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
                                                        <input id="longitude" type="text" name="longitude"
                                                            class="form-control" value="{{ $customer->longitude }}"
                                                            autofocus>
                                                        @if ($errors->has('longitude'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('longitude') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <button type="submit" class="btn btn-success btn-block">Update</button>
                    </form>
                    @foreach ($customer as $customer)
                        @php
                            $a = '';
                            $a = $loop->index;
                        @endphp
                    @endforeach
                    <input type="hidden" value="{{ $a ?? '' }}" id="index">
                </div>
            </div>
        </div>
    </div>

@endsection

@push('style')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
@endpush

@push('scripts')
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    {{-- <script type="text/javascript">
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
    </script> --}}
    <script>
        var mymap = L.map('mapid').setView([-7.563828, 110.8173266], 6);
        var popup = L.popup();
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'sk.eyJ1IjoibWFyaWZmaW4iLCJhIjoiY2tqM3V3OHByMGY4ejJybnE0ZDZpN2JpdSJ9.VkZp3cjQSPoL7lpc-VWsCg'
        }).addTo(mymap);
        // Coordinate
        var lat = parseFloat(document.getElementById('latitude').value);
        var lon = parseFloat(document.getElementById('longitude').value);
        var nama = document.getElementById('nama').value;
        var alamat = document.getElementById('alamat').value;
        // var label = document.getElementById('nama_wilayah').value;
        var arr = [lat, lon];
        var marker = L.marker(arr).addTo(mymap)
        marker.bindPopup("<center>Ini lokasi lama</center>" + "<br>" + "nama = " + nama +
            "<br>" +
            "alamat = " + alamat).openPopup();


        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("<center>Ini lokasi baru yang anda pilih</center <br> Latitude = " + e.latlng.lat + "<br>" +
                    "Longitude = " + e.latlng.lng)
                .openOn(mymap);
            var a = e.latlng.toString();
            var latitude = e.latlng.lat;
            var longitude = e.latlng.lng;
            document.getElementById('latitude').value = latitude;
            document.getElementById('longitude').value = longitude;

            function simpleReverseGeocoding(lon, lat) {
                fetch('http://nominatim.openstreetmap.org/reverse?format=json&lon=' + lon + '&lat=' + lat).then(function(
                    response) {
                    return response.json();
                }).then(function(json) {
                    if (json.address.county == undefined && json.address.village == undefined) {
                        document.getElementById('nama').value = json.address.city;
                    } else if (json.address.county == undefined) {
                        document.getElementById('nama').value = json.address.village;
                    } else {
                        document.getElementById('nama').value = json.address.county;
                    }
                    if (json.address.state == undefined && json.address.city_district == undefined) {
                        document.getElementById('nama').value = json.address.municipality;
                    } else if (json.address.state == undefined) {
                        document.getElementById('alamat').value = json.address.city_district;
                    } else {
                        document.getElementById('alamat').value = json.address.state;

                    }
                })
            }
            simpleReverseGeocoding(longitude, latitude);
        }


        mymap.on('click', onMapClick);
    </script>
@endpush
