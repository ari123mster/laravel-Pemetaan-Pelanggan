<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\region;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Alert;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //   $regions=region::with('region')->get();
        $customer = customer::with('region')->get();
        $region = region::get();
        // foreach ($customer as $key => $value) {
        //     dd($value->region->id);
        // }
        return view('admin.customer.customer_index', compact('customer', 'region'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        $this->validate($request, [
            'region_id' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:255',
            'file'  => 'required|file|image|mimes:jpeg,png,jpg',
            'latitude' => 'required|string|max:255',
            'longitude' => 'required|string|max:255',

        ]);
        $file = $request->file('file');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = Storage::putFileAs('public/images/', $request->file('file'), $nama_file);
        customer::create([
            'region_id' => $request['region_id'],
            'nama' => $request['nama'],
            'alamat' => $request['alamat'],
            'no_hp' => $request['no_hp'],
            'file' => $nama_file,
            'latitude' => $request['latitude'],
            'longitude' => $request['longitude'],

        ]);
        // $customer = customer::with('region')->get();
        // $reg = region::all();
        // return view('admin.customer.customer_index',compact('reg','customer'));
        return redirect('admin/customer/')->withSuccess('Task Created Successfully!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $region = region::get();
        return view('admin.customer.create', compact('region'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = customer::find($id);
        $region = customer::get();
        return view('admin.customer.detail', compact('customer', 'region'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = customer::find($id);
        $region = customer::get();
        return view('admin.customer.customer_edit', compact('customer', 'region'));
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
            'region_id' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:255',
            'file'  => 'required|file|image|mimes:jpeg,png,jpg',
            'latitude' => 'required|string|max:255',
            'longitude' => 'required|string|max:255',
        ]);
        $customer = customer::find($id);
        $customer->region_id = $request->region_id;
        $customer->nama = $request->nama;
        $customer->alamat = $request->alamat;
        $customer->no_hp = $request->no_hp;
        $customer->file = $request->file;
        $customer->latitude = $request->latitude;
        $customer->longitude = $request->longitude;
        if ($request->file('file')) {
            $file = $request->file('file');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan = Storage::putFileAs('public/images/', $request->file('file'), $nama_file);
            $customer->file = $nama_file;
            $customer->save();
        }


        // alert()->success('Succes','Data Berhasil diupdate');
        return redirect('admin/customer');
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

        customer::where('id', $id)->delete();
        // alert()->error('Succes','Data Berhasil didelete');
        return redirect('admin/customer');
    }
    public function detail($id)
    {

        $customer = customer::find($id);
        $region = customer::get();
        return view('admin.customer.detail', compact('customer', 'region'));
    }
}
