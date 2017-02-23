@extends('layouts.master')
@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading"><h3><font face="Maiandra GD" color="white"><CENTER>Tambah Data Tunjangan Pegawai</font></div></CENTER></font>
</center>
                <div class="panel-body">
    {!! Form::open(['url' => 'Tunjangan_Pegawai']) !!}


      <div class="form-group">
      {!! Form::label('Kode Tunjangan', 'Kode Tunjangan') !!}
            <select class="form-control" name="Kode_Tunjangan">   
            
            @foreach ($Tunjangan as $data)
            <option value='{!! $data->id !!}'>{!! $data->Kode_Tunjangan !!}</option>
            @endforeach
            </select>
    </div>

  
 <div class="form-group">
  {!! Form::label('Nama Pegawai', 'Nama Pegawai') !!}
        
            <select class="form-control" name="Kode_Pegawai">   
             @foreach ($Pegawai as $data)
            <option value='{!! $data->id !!}'>{!! $data->User->name !!}</option>
            @endforeach
            </select>
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

