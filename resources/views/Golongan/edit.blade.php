@extends('layouts.ujikom')
@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading"><center><h3><font color="white" face="Maindra GD">Edit Data Golongan</h3></font></div>
</center>
                <div class="panel-body">
   {!! Form::model($Golongan,['method' => 'PATCH','route'=>['Golongan.update',$Golongan->id]]) !!}
    <div class="form-group">
        {!! Form::label('Kode Golongan', 'Kode Golongan') !!}
        {!! Form::text('Kode_Golongan',null,['class'=>'form-control','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Nama Golongan', 'Nama Golongan') !!}
        {!! Form::text('Nama_Golongan',null,['class'=>'form-control','required']) !!}
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