<?php

namespace App\Http\Controllers\Teknisi;

use App\Models\User;
use App\Charts\Grafik;
use App\Charts\Tampil;
use App\Models\customer;
use App\Models\region;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TampilTeknisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $region = region::get();
        $reg = [];
        $count = [];
        foreach ($region as $key => $value) {
            array_push($reg, $value->nama_wilayah);
            $cus = customer::where("region_id", $value->id)->count();
            array_push($count, $cus);
        }
        $chart = new Tampil;
        $chart->labels($reg);
        $chart->dataset('Jumlah Pelanggan', 'bar', $count)->options([
            'color' => '#1c6ae8',
            'backgroundColor' => '#1c6ae8'
        ]);

        return view('teknisi.tampil.tampil_index', compact('chart'));
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
