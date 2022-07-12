@extends('layouts.dashboard2')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3>Manage Wilayah</h3>
                </div>
                <div class="box-body">
                    <div id="chart-container">
                        {!! $chart->container() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    {!! $chart->script() !!}
@endpush
