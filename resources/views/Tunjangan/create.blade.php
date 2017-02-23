@extends('layouts.master')
@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading"><h3><font face="Maiandra GD" color="white"><CENTER>Tambah Data Tunjangan</font></div></CENTER></font>
</center>
                <div class="panel-body">
    {!! Form::open(['url' => 'Tunjangan']) !!}
   <div class="form-group{{ $errors->has('Kode_Tunjangan') ? ' has-error' : '' }}">
                            {!! Form::label('Kode', 'Kode Jabatan:') !!}
                            <input type="text" name="Kode_Tunjangan" class="form-control" required>

                            @if ($errors->has('Kode_Tunjangan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Kode_Tunjangan') }}</strong>
                                </span>
                            @endif 
                        </div>


      <div class="form-group">
      {!! Form::label('Jabatan', 'Jabatan') !!}
            <select class="form-control" name="Kode_Jabatan">   
            
            @foreach ($Jabatan as $data)
            <option value='{!! $data->id !!}'>{!! $data->Nama_Jabatan !!}</option>
            @endforeach
            </select>
    </div>
<br>
       <div class="form-group">
      {!! Form::label('Golongan', 'Golongan') !!}
      
            <select class="form-control" name="Kode_Golongan">   
          
            @foreach ($Golongan as $data)
            <option value='{!! $data->id !!}'>{!! $data->Nama_Golongan !!}</option>
            @endforeach
            </select>
    </div>
<br>
    <div class="form-group">
 
        {!! Form::label('Status', 'Status') !!} &nbsp;<br>
        <form method="post" action="#">
        <input type="radio" name="Status" value="Menikah"/>  Menikah &nbsp;&nbsp;
        <input type="radio" name="Status" value="Belum Menikah"/>  Belum Menikah
    </div>
    <br>

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

