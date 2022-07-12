<?php

namespace App\Http\Controllers;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;
use App\Models\region;
use App\Models\history;
use App\Models\customer;
class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
       
        $regions = region::count();
        $customers = customer::count();
        $historys = history::count();
         
$chart_options = [
    'chart_title' => 'Jumlah Komplain',
    'report_type' => 'group_by_date',
    'model' => 'App\Models\history',
    'group_by_field' => 'created_at',
    'group_by_period' => 'day',
    'chart_type' => 'line',
    'chart_color' => '0, 0, 244',
];
$chart1 = new LaravelChart($chart_options);
        return view('admin.dashboard.index', compact('regions', 'customers', 'historys','chart1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
