<?php

namespace App\Http\Controllers;

use App\Tunjangan;
use App\Penggajian;
use App\Tunjangan_Pegawai;
use App\Pegawai;
use App\Jabatan;
use App\Golongan;
use App\Kategori_Lembur;
use App\Lembur_Pegawai;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Form;
use Html;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use View;
use App\User;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class PenggajianController extends Controller
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
       $Gaji = Penggajian::paginate(3);
        return view('Penggajian.index',compact('Gaji'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $Gaji2 = Tunjangan_Pegawai::paginate(10);
        return view('Penggajian.create',compact('Gaji2')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 $this->validate($request, [
           'Kode_Tunjangan' => 'required',
           'Status_pengambilan' => 'required',
        ]);

        $i_gaji=Input::all();

       $Tunjangan_Pegawai=Tunjangan_Pegawai::where('id',$i_gaji['Kode_Tunjangan'])->first();

       $WPenggajian=Penggajian::where('Kode_Tunjangan',$Tunjangan_Pegawai->id)->first();

       $Tunjangan=Tunjangan::where('id',$Tunjangan_Pegawai->Kode_Tunjangan)->first();

       $Pegawai=Pegawai::where('id',$Tunjangan_Pegawai->Kode_Pegawai)->first();

       $Kategori_Lembur=Kategori_Lembur::where('Kode_Jabatan',$Pegawai->Kode_Jabatan)->where('Kode_Golongan',$Pegawai->Kode_Golongan)->first();

       $Lembur_Pegawai=Lembur_Pegawai::where('Kode_Pegawai',$Pegawai->id)->first();

       $Jabatan=Jabatan::where('id',$Pegawai->Kode_Jabatan)->first();
 
       $Golongan=Golongan::where('id',$Pegawai->Kode_Golongan)->first();


       $gaji = new Penggajian ;

       if (isset($WPenggajian)) {
           $error=true ;
           $Tunjangan=Tunjangan_Pegawai::paginate(10);
           // dd($WPenggajian);
           return view('Penggajian.create',compact('Tunjangan','error'));
       }
       elseif (!isset($Lembur_Pegawai)) {
            $nol = 0;
            $gaji->Jumlah_jam_lembur= $nol;
            $gaji->Jumlah_uang_lembur = $nol;
            $gaji->Gaji_pokok=$Jabatan->Besaran_Uang+$Golongan->Besaran_Uang;
            $gaji->Total_gaji=($Tunjangan->Jumlah_Anak*$Tunjangan->Besaran_Uang)+($Jabatan->Besaran_Uang+$Golongan->Besaran_Uang);
            $gaji->Tanggal_pengambilan = date('d-m-y');
            $gaji->Status_pengambilan = Input::get('Status_pengambilan');
            $gaji->Kode_Tunjangan = Input::get('Kode_Tunjangan');
            $gaji->Petugas_penerima = Auth::user()->name;
            $gaji->save();
        }
        elseif(!isset($Lembur_Pegawai) || !isset($Kategori_Lembur))
        {
            $nol = 0;
            $gaji->Jumlah_jam_lembur= $nol;
            $gaji->Jumlah_uang_lembur = $nol;
            $gaji->Gaji_pokok=$Jabatan->Besaran_Uang+$Golongan->Besaran_Uang;
            $gaji->Total_gaji = ($Tunjangan->Jumlah_Anak*$Tunjangan->Besaran_Uang)+($Jabatan->Besaran_Uang+$Golongan->Besaran_Uang);

            $gaji->Tanggal_pengambilan = date('d-m-y');
            $gaji->Status_pengambilan = Input::get('Status_pengambilan');
            $gaji->Kode_Tunjangan = Input::get('Kode_Tunjangan');
            $gaji->Petugas_penerima = Auth::user()->name;
            $gaji->save();

        }
        else
        {
            $gaji->Jumlah_jam_lembur = $Lembur_Pegawai->Jumlah_Jam;
            $gaji->Jumlah_uang_lembur =($Lembur_Pegawai->Jumlah_Jam)*($Kategori_Lembur->Besaran_Uang);
            $gaji->Gaji_pokok=$Jabatan->Besaran_Uang+$Golongan->Besaran_Uang;
           
            $gaji->Total_gaji = ($Lembur_Pegawai->Jumlah_jam*$Kategori_Lembur->Besaran_Uang)+($Tunjangan->Jumlah_Anak*$Tunjangan->Besaran_Uang)+($Jabatan->Besaran_Uang+$Golongan->Besaran_Uang);
           
            $gaji->Tanggal_pengambilan = date('d-m-y');
            $gaji->Status_pengambilan = Input::get('Status_pengambilan');
            $gaji->Kode_Tunjangan = Input::get('Kode_Tunjangan');
            $gaji->Petugas_penerima = Auth::user()->name;
            $gaji->save();
        }

        if ($gaji->save()) {
            Session::flash('pesan_sukses','Berhasil Menambahkan Data Penggajian');
        }
        else{
            Session::flash('pesan_gagal','Gagal Menambahkan Data Penggajian');
        }

        return redirect('Penggajian');
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

        Penggajian::find($id)->delete();
        return redirect('Penggajian');
    }
}
