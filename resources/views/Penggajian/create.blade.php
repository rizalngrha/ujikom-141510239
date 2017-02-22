@extends('layouts.master')
@section('content')
            <div class="panel panel-default">
                <div class="panel-heading"><center><font color="black" size="6%">Tambah Data Penggajian</font></div>
</center>
                <div class="panel-body">
    {!! Form::open(['url' => 'Penggajian']) !!}
      <div class="form-group">
      {!! Form::label('Kode Tunjangan', 'Kode Tunjangan') !!}
            <select class="form-control" name="Kode_Tunjangan">   
        
            @foreach ($Tunjangan as $data)
            <option value='{!! $data->id !!}'>{!! $data->Kode_Tunjangan !!}</option>
            @endforeach
            </select>
    </div>    
  <div class="form-group">
        {!! Form::label('Jumlah Jam Lembur', 'Jumlah Jam Lembur') !!}
        {!! Form::text('Jumlah_jam_lembur',null,['class'=>'form-control','required']) !!}
    </div>
      <div class="form-group">
        {!! Form::label('Jumlah Uang Lembur', 'Jumlah Uang Lembur') !!}
        {!! Form::text('Jumlah_uang_lembur',null,['class'=>'form-control','required']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('Gaji Pokok', 'Gaji Pokok') !!}
        {!! Form::text('Gaji_pokok',null,['class'=>'form-control','required']) !!}
    </div>
    
     <div class="form-group">
        {!! Form::label('Status Pengambilan', 'Status Pengambilan') !!}
        {!! Form::text('Status_pengambilan',null,['class'=>'form-control','required']) !!}
    </div>
       
     <div class="form-group">
        {!! Form::label('Petugas Penerima', 'Petugas Penerima') !!}
        {!! Form::text('Petugas_penerima',null,['class'=>'form-control','required']) !!}
    </div>
       
      <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div> 
    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

    
@stop

