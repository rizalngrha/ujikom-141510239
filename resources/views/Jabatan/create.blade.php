@extends('layouts.ujikom')
@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">
                <center><h3><font face="Maiandra GD" color="white">Tambah Data Jabatan</font></div></h3>
</center>
                <div class="panel-body">
    {!! Form::open(['url' => 'Jabatan']) !!}
    <div class="form-group">
     <div class="form-group {{ $errors->has('Kode_Jabatan') ? ' has-error' : 'message' }}">
        {!! Form::label('Kode Jabatan', 'Kode Jabatan') !!}
        {!! Form::text('Kode_Jabatan',null,['class'=>'form-control','required']) !!}
           @if ($errors->has('Nama_Jabatan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Kode_Jabatan') }}</strong>
                                    </span>
                                @endif
        </div>            
    </div>

    <div class="form-group">
        {!! Form::label('Nama Jabatan', 'Nama Jabatan') !!}
        {!! Form::text('Nama_Jabatan',null,['class'=>'form-control','required']) !!}
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