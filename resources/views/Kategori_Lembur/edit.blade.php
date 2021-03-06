@extends('layouts.master')
@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading"><center><h3><font color="white" face="Maiandra GD">Edit Data Kategori Lembur</font></h3></div>
</center>
                <div class="panel-body">
  {!! Form::model($Kategori_Lembur,['method' => 'PATCH','route'=>['Kategori_Lembur.update',$Kategori_Lembur->id]]) !!}
    <div class="form-group">
        {!! Form::label('Kode Lembur', 'Kode Lembur') !!}
        {!! Form::text('Kode_Lembur',null,['class'=>'form-control','required','readonly']) !!}
    </div>

    
     <div class="form-group">
      {!! Form::label('Jabatan', 'Jabatan') !!}
            <select class="form-control" name="Kode_Jabatan">   
            
            @foreach ($Jabatan as $data)
            <option value='{!! $data->id !!}'>{!! $data->Nama_Jabatan !!}</option>
            @endforeach
            </select>
    </div>

  <div class="form-group">
      {!! Form::label('Golongan', 'Golongan') !!}
      
            <select class="form-control" name="Kode_Golongan">   
          
            @foreach ($Golongan as $data)
            <option value='{!! $data->id !!}'>{!! $data->Nama_Golongan !!}</option>
            @endforeach
            </select>
    </div>
    <div class="form-group">
        {!! Form::label('Besaran Uang', 'Besaran Uang') !!}
        {!! Form::text('Besaran_Uang',null,['class'=>'form-control','required']) !!}
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

