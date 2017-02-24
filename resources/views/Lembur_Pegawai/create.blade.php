@extends('layouts.master')
@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading"><center><h3><font face="Maiandra GD" color="white">Tambah Data Lembur Pegawai</font></div></h3></center>
</center>
                <div class="panel-body">
    {!! Form::open(['url' => 'Lembur_Pegawai']) !!}

      <div class="form-group">
          
              {!! Form::label('Kode Lembur', 'Kode Lembur ') !!}
               <span class="required"></span>
          
            <select class="form-control col-md-7 col-xs-12" name="Kode_Lembur">
            @foreach($Kategori_Lembur as $data)
                <option value="{{$data->id}}">{{$data->Kode_Lembur}}</option>
            @endforeach
            </select>
        </div>




     <div class="form-group">
            {!! Form::label('Pegawai', 'Pegawai ') !!}
             <span class="required"></span>
        
            <select class="form-control col-md-7 col-xs-12" name="Kode_Pegawai">
      
            @foreach($Pegawai as $data)
                <option value="{{$data->id}}">{{$data->Nip}}&nbsp;|&nbsp;{{$data->User->name}}</option>
            @endforeach
            </select>
        </div>

      <div class="form-group">
              {!! Form::label('Jumlah Jam', 'Jumlah Jam') !!}
             
          </div>
              {!! Form::number('Jumlah_Jam',null,['class'=>'form-control col-md-7 col-xs-12']) !!}
        
      </div>
      <div class="form-group">
              {!! Form::submit('Save', ['class' => 'btn btn-success form-control']) !!}
    
      </div>
    </div>
    {!! Form::close() !!}
    @endsection