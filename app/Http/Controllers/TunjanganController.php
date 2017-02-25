<?php

namespace App\Http\Controllers;

use Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Jabatan;
use App\Tunjangan;
use App\Golongan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class TunjanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('Keuangan');
    }
    public function index()
    {
        //
        $Jabatan = Jabatan::all();
        $Golongan = Golongan::all();
        $Tunjangan = Tunjangan::all();
        return view('Tunjangan.index', compact('Jabatan', 'Golongan', 'Tunjangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Jabatan = Jabatan::all();
        $Golongan = Golongan::all();
        return view('Tunjangan.create',compact('Golongan','Jabatan'));
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
        $this -> validate($request, [
            'Kode_Tunjangan' => 'required|min:3|unique:Tunjangan',
            ]);

        $Tunjangan = new Tunjangan;
        $Tunjangan->Kode_Tunjangan = $request->get('Kode_Tunjangan');
        $Tunjangan->Kode_Jabatan = $request->get('Kode_Jabatan');
        $Tunjangan->Kode_Golongan = $request->get('Kode_Golongan');

        $Tunjangan->Status = $request->get('Status');
        $Tunjangan->Jumlah_Anak = $request->get('Jumlah_Anak');
        
        $Tunjangan->Besaran_Uang = $request->get('Besaran_Uang');
        $Tunjangan->save();

        return redirect('Tunjangan');
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
        $Tunjangan=Tunjangan::findOrFail($id);
        $Golongan=Golongan::all();
        $Jabatan=Jabatan::all();
        return view('Tunjangan.edit',compact('Tunjangan','Golongan','Jabatan'));
   
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
        $Tunjangan = Tunjangan::find($id);

        $this -> validate($request, [
            'Kode_Tunjangan' => 'required|min:3',
            ]);
        $Tunjangan->Kode_Tunjangan = $request->get('Kode_Tunjangan');
        $Tunjangan->Kode_Jabatan = $request->get('Kode_Jabatan');
        $Tunjangan->Kode_Golongan = $request->get('Kode_Golongan');
        $Tunjangan->Status = $request->get('Status');
        $Tunjangan->Jumlah_Anak = $request->get('Jumlah_Anak');
        $Tunjangan->Besaran_Uang = $request->get('Besaran_Uang');
        $Tunjangan->save();

        return redirect('Tunjangan');

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
         Tunjangan::find($id)->delete();
        return redirect('Tunjangan');
    }
}
