<?php

namespace App\Http\Controllers;

use App\Models\history;
use App\Models\customer;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history = history::with('customer')->get();

        $customer = customer::get();
        // foreach ($history as $key => $value) {
        //     dd($value->region->id);
        // }
        return view('admin.riwayat.index', compact('history', 'customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'customer_id' => 'required|string|max:255',
            'tanggal' => 'required|string|max:255',
            'trouble' => 'required|string|max:255',
            'action' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);
        history::create([
            'customer_id' => $request['customer_id'],
            'tanggal' => $request['tanggal'],
            'trouble' => $request['trouble'],
            'action' => $request['action'],
            'status' => $request['status'],

        ]);

        return redirect('admin/riwayat/')->withSuccess('Task Created Successfully!');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = customer::get();

        return view('admin.riwayat.create', compact('customer'));
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
        $history = history::find($id);
        $customer = customer::get();
        return view('admin.riwayat.edit', compact('customer', 'history'));
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
        $this->validate($request, [
            'customer_id' => 'required|string|max:255',
            'tanggal' => 'required|string|max:255',
            'trouble' => 'required|string|max:255',
            'action' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);
        $history = history::find($id);
        $history->customer_id = $request->customer_id;
        $history->tanggal = $request->tanggal;
        $history->trouble = $request->trouble;
        $history->action = $request->action;
        $history->status = $request->status;
        $history->save();
        // alert()->success('Succes','Data Berhasil diupdate');
        return redirect('admin/riwayat');
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

    public function delete($id)
    {

        history::where('id', $id)->delete();
        // alert()->error('Succes','Data Berhasil didelete');
        return redirect('admin/riwayat');
    }
}
