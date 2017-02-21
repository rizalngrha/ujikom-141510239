<?php

namespace App\Http\Controllers;

use Request;
use App\Jabatan;
use Validator;
use Input;
class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //  public function __construct()
    // {
    //     $this->middleware('Admin');
    // }
    public function index()
    {
        //kategori
        $Jabatan = Jabatan::all();
        return view('Jabatan.index',compact('Jabatan'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('Jabatan.create');
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
       $rules = ['Kode_Jabatan'=>'required|unique:Jabatan',
                 'Nama_Jabatan'=>'required'];
        $message = ['Kode_Jabatan.required' => 'Isi dulu', 
                    'Kode_Jabatan.unique' => 'Harap Gunakan Kode lain, Karena Kode sudah Digunakan',
                    'Nama_Jabatan.required' => 'Isi dulu'];
        $validator = Validator::make(Input::all(),$rules,$message);
        
        if ($validator->fails())
        {

            return redirect('/Jabatan/create')
            ->withErrors($validator)
            ->withInput();

        }
        else
        {
            $Jabatan = Request::all();
            Jabatan::create($Jabatan);
            return redirect('Jabatan');
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
        $Jabatan=Jabatan::find($id);
        return view('Jabatan.edit',compact('Jabatan'));
  
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
        $JabatanUpdate=Request::all();
        $Jabatan=Jabatan::find($id);
        $Jabatan->update($JabatanUpdate);
        return redirect('Jabatan'); 
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
         Jabatan::find($id)->delete();
        return redirect('Jabatan');
    }
}
