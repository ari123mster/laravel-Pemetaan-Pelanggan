<?php

namespace App\Http\Controllers;
use App\Models\region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $region=region::orderby('id','desc')->get();

    	return view('admin.region.region_index',compact('region'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
public function create(Request $request){
    $this->validate($request, [
        'kode_wilayah' => 'required|string',
        'nama_wilayah' => 'required|string|max:255',
        
    ]);
    region::create([
        'kode_wilayah' => $request['kode_wilayah'],
        'nama_wilayah' => $request['nama_wilayah'],
        
    ]);
    return redirect('admin/region/')->withSuccess('Task Created Successfully!');
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $region=region::get();
        // $region=region::orderby('id','desc')->get();
        return view('admin.region.create',compact('region'));
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
        $region=region::find($id);

        return view('admin.region.region_edit',compact('region'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $this->validate($request, [
            'kode_wilayah' => 'required|string',
          'nama_wilayah' => 'required|string|max:255',
        ]);
        $region=region::find($id);
        $region -> kode_wilayah = $request->kode_wilayah;
        $region -> nama_wilayah = $request->nama_wilayah;
    
          $region->save();
    // alert()->success('Succes','Data Berhasil diupdate');
        return redirect('admin/region');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    // region::where('id',$id)->destroy();
    // // alert()->error('Succes','Data Berhasil didelete');
    //     return redirect('admin/region');
    }
    public function delete($id)
    {
        
    region::where('id',$id)->delete();
    // alert()->error('Succes','Data Berhasil didelete');
        return redirect('admin/region');
    }
}
