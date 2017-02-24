@extends('layouts.master')
@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading"><h3><font face="Maiandra GD" color="white"><CENTER>Tambah Data Tunjangan Pegawai</font></div></CENTER></font>
</center>
                <div class="panel-body">
    {!! Form::open(['url' => 'Tunjangan_Pegawai', 'class' => 'form-horizontal form-label-left']) !!}
     <div class="form-group">
        <div class="control-label col-md-3 col-sm-3 col-xs-12">
            {!! Form::label('Kode Tunjangan', 'Kode Tunjangan ') !!}
             
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control col-md-7 col-xs-12" name="Kode_Tunjangan">
            @foreach($Tunjangan as $data)
                <option value="{{$data->id}}">{{$data->Kode_Tunjangan}}</option>
            @endforeach
            </select>
        </div>
    </div>
      <div class="form-group">
          <div class="control-label col-md-3 col-sm-3 col-xs-12">
              {!! Form::label('Pegawai ', 'Pegawai ') !!}
            
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control col-md-7 col-xs-12" name="Kode_Pegawai">
            <option>--NIP | Nama Pegawai--</option>
            @foreach($Pegawai as $data)
                <option value="{{$data->id}}">{{$data->Nip}}&nbsp;|&nbsp;{{$data->User->name}}</option>
            @endforeach
            </select>
        </div>
      </div>
      <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
          </div>
      </div>
    {!! Form::close() !!}
</div>
@endsection