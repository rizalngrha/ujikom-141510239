@extends('layouts.master')
@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading"><center><h3><font color="white" face="Maindra GD" >Tambah Data Golongan</h3></font></div>
</center>
                <div class="panel-body">
    {!! Form::open(['url' => 'Golongan']) !!}
     <div class="form-group{{ $errors->has('Kode_Golongan') ? ' has-error' : '' }}">
                            {!! Form::label('Kode', 'Kode Golongan:') !!}
                            <input type="text" name="Kode_Golongan" class="form-control" required>

                            @if ($errors->has('Kode_Golongan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Kode_Golongan') }}</strong>
                                </span>
                            @endif 
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