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
                    <div class="w-full h-96 relative flex bg-gray-400" id="maps"></div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('admin/customer/create') }}" method="POST">
                        @csrf
                        <div class="box-body">

                            <div class="form-group">
                                <label>Nama Wilayah</label>
                                <select class="form-control" name="region_id">
                                    <option>--pilih--</option>
                                    @foreach ($region as $region)

                                        <option value="{{ $region->id }}">{{ $region->nama_wilayah }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                                <label for="nama">Nama </label>
                                <input id="nama" type="text" name="nama" class="form-control" value="" placeholder=""
                                    autofocus>
                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                                <label for="alamat">Alamat </label>
                                <input id="alamat" type="text" name="alamat" class="form-control" value=""
                                    placeholder="" autofocus>
                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
                                <label for="no_hp">NO HP </label>
                                <input id="no_hp" type="text" name="no_hp" class="form-control" value="" placeholder=""
                                    autofocus>
                                @if ($errors->has('no_hp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('no_hp') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('latitude') ? ' has-error' : '' }}">
                                <label for="latitude">Latitude </label>
                                <input id="latitude" type="text" name="latitude" class="form-control" value=""
                                    placeholder="" autofocus>
                                @if ($errors->has('latitude'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('latitude') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('longitude') ? ' has-error' : '' }}">
                                <label for="longitude">Longitude </label>
                                <input id="longitude" type="text" name="longitude" class="form-control" value=""
                                    placeholder="" autofocus>
                                @if ($errors->has('longitude'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('longitude') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                </div>

                <input type="hidden" value="" id="index">

            </div>
        </div>
    </div>
</div>

@push('style')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
@endpush
@push('scripts')
    {{-- <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
crossorigin=""></script>
<script>
    var mymap = L.map('maps').setView([-7.449, 109.2150], 6);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'sk.eyJ1IjoibWFyaWZmaW4iLCJhIjoiY2tqM3V3OHByMGY4ejJybnE0ZDZpN2JpdSJ9.VkZp3cjQSPoL7lpc-VWsCg'
}).addTo(mymap);
var popup = L.popup();
var longlat = [];
var label = [];
var marker = [];
var index = document.getElementById('index').value;
if(index===''){
    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("<center>Lokasi yang anda pilih</center><br>Latitude = "+e.latlng.lat+"<br>"+"Longitude = "+e.latlng.lng)
            .openOn(mymap);
            var a = e.latlng.toString();
            var latitude = e.latlng.lat;
            var longitude = e.latlng.lng;
        document.getElementById('latitude').value = latitude;
        document.getElementById('longitude').value = longitude;
        function simpleReverseGeocoding(lon, lat) {
            fetch('http://nominatim.openstreetmap.org/reverse?format=json&lon=' + lon + '&lat=' + lat).then(function (response) {
                return response.json();
            }).then(function (json) {
                if (json.address.county == undefined && json.address.village == undefined) {
                    document.getElementById('kotaorkab').value = json.address.city;
                }
                else if (json.address.county == undefined) {
                    document.getElementById('kotaorkab').value = json.address.village;
                }
                else {
                    document.getElementById('kotaorkab').value = json.address.county;
                }
                if (json.address.state == undefined && json.address.city_district == undefined){
                    document.getElementById('kotaorkab').value = json.address.municipality;
                }
                else if (json.address.state == undefined) {
                    document.getElementById('provinsi').value = json.address.city_district;
                }
                else {
                    document.getElementById('provinsi').value = json.address.state;
    
                }
            })
        }
        simpleReverseGeocoding(longitude, latitude); 
    }
    
    mymap.on('click', onMapClick);
} else {
// Coordinate
for(c=0;c<=index;c++){
    var lat = parseFloat(document.getElementById('lat'+[c]).value);
    var lon = parseFloat(document.getElementById('lon'+[c]).value);
    var arr = [lat,lon];
    longlat.push(arr);
}
// LabelPopup
for(d=0;d<=index;d++){
    var lab = document.getElementById('lab'+[d]).value;
    var kab = document.getElementById('kab'+[d]).value;
    var prov = document.getElementById('prov'+[d]).value;
    var arr = [lab,kab,prov];
    label.push(arr);
}
for(i=0;i<longlat.length;i++){
    var push = L.marker(longlat[i]).addTo(mymap)
    marker.push(push);
}

for(a=0;a<label.length;a++){
marker[a].bindPopup("Point "+label[a][0]+"<br>"+"Kab/Kota = "+label[a][1]+"<br>"+"Provinsi = "+label[a][2]);
}

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("<center>Ini lokasi yang anda pilih</center> <br> Latitude = "+e.latlng.lat+"<br>"+"Longitude = "+e.latlng.lng)
        .openOn(mymap);
        var a = e.latlng.toString();
        var latitude = e.latlng.lat;
        var longitude = e.latlng.lng;
    document.getElementById('latitude').value = latitude;
    document.getElementById('longitude').value = longitude;
    function simpleReverseGeocoding(lon, lat) {
        fetch('http://nominatim.openstreetmap.org/reverse?format=json&lon=' + lon + '&lat=' + lat).then(function (response) {
            return response.json();
        }).then(function (json) {

            if (json.address.county == undefined && json.address.village == undefined) {
                document.getElementById('kotaorkab').value = json.address.city;
            }
            else if (json.address.county == undefined) {
                document.getElementById('kotaorkab').value = json.address.village;
            }
            else {
                document.getElementById('kotaorkab').value = json.address.county;
            }
            if (json.address.state == undefined) {
                document.getElementById('provinsi').value = json.address.city_district;
            }
            else {
                document.getElementById('provinsi').value = json.address.state;

            }
        })
    }
    simpleReverseGeocoding(longitude, latitude); 
}

mymap.on('click', onMapClick); --}}
    }</script>
@endpush
