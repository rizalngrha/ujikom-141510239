<?php

namespace App\Http\Controllers;

use Request;
use App\Golongan;
use DB;
use Validator;
use Input;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('Admin');
    }
    public function index()
    {
        //
         $Golongan = Golongan::all();
        return view('Golongan.index',compact('Golongan'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Golongan.create');
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
         $rules = ['Kode_Golongan'=>'required|unique:Golongan',
                 'Nama_Golongan'=>'required'];
        $message = ['Kode_Golongan.required' => 'Isi dulu', 
                    'Kode_Golongan.unique' => 'Harap Gunakan Kode lain, Karena Kode sudah Digunakan',
                    'Nama_Golongan.required' => 'Isi dulu'];
        $validator = Validator::make(Input::all(),$rules,$message);
        
        if ($validator->fails())
        {

            return redirect('/Golongan/create')
            ->withErrors($validator)
            ->withInput();

        }
        else
        {
            $Golongan = Request::all();
            Golongan::create($Golongan);
            return redirect('Golongan');
        }
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
        $Golongan=Golongan::find($id);
        return view('Golongan.edit',compact('Golongan'));
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
        $GolonganUpdate=Request::all();
        $Golongan=Golongan::find($id);
        $Golongan->update($GolonganUpdate);
        return redirect('Golongan'); 
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
         Golongan::find($id)->delete();
        return redirect('Golongan');
    }
}
