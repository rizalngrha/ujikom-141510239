@extends('layouts.master')
@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading"><h3><font face="Maiandra GD" color="white"><CENTER>Edit Data Tunjangan</font></div></CENTER></font>
</center>
                <div class="panel-body">
    {!! Form::model($Tunjangan, ['class' => 'form-horizontal',  'enctype' => 'multipart/form-data', 'method' => 'PATCH', 'route' => ['Tunjangan.update', $Tunjangan->id], 'files' => true]) !!}
 <div class="form-group">
        {!! Form::label('Kode Tunjangan', 'Kode Tunjangan') !!}
        {!! Form::text('Kode_Tunjangan',null,['class'=>'form-control','required','readonly']) !!}
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
 
        {!! Form::label('Status', 'Status') !!} &nbsp;<br>
        <form method="post" action="#">
        <input type="radio" name="Status" value="Menikah" readonly="" />  Menikah &nbsp;&nbsp;
        <input type="radio" name="Status" value="Belum Menikah" readonly="" />  Belum Menikah
    </div>
    

    <div class="form-group">
      {!! Form::label('Jumlah Anak','Jumlah Anak') !!}
      {!! Form::text ('Jumlah_Anak',null,['class'=>'form-control','required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('Besaran Uang','Besaran Uang') !!}
      {!! Form::text ('Besaran_Uang',null,['class'=>'form-control','required']) !!}
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

