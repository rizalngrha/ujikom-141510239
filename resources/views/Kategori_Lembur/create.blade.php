@extends('layouts.master')
@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading"><center><font color="black" size="6%">Create Kategori Lembur</font></div>
</center>
                <div class="panel-body">
    {!! Form::open(['url' => 'Kategori_Lembur']) !!}
    <div class="form-group">
     {!! Form::label('Kode Lembur', 'Kode Lembur') !!}
       
     <div class="form-group {{ $errors->has('Kode_Lembur') ? ' has-error' : 'message' }}">
         {!! Form::text('Kode_Lembur',null,['class'=>'form-control','required']) !!}
           @if ($errors->has('Besaran_Uang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Kode_Lembur') }}</strong>
                                    </span>
                                @endif
        </div>            
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

