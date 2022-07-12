@extends('layouts.dashboard2')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3>Dashboard</h3>
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>{{ $regions }}</h3>

                                <p>wilayah</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-map"></i>
                            </div>
                            <a href="{{ url('admin/region') }}" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>{{ $customers }}</h3>

                                <p>Pelanggan</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="{{ url('teknisi/customer') }}" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>

                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>{{ $historys }}</h3>

                                <p>Riwayat Komplain</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-table"></i>
                            </div>
                            <a href="{{ url('teknisi/riwayat') }}" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    @endsection
