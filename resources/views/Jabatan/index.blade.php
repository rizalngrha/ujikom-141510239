 @extends('layouts.ujikom')

@section('content')

            <div class="panel panel-primary">
                <div class="panel-heading">     
                <h3><font face="Maiandra GD" color="white"><CENTER>Table Data Jabatan</CENTER></font></h3></CENTER>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
            <thead>
                <tr>
                    <th><center>No</center></th>
                    <th><center>Kode Jabatan</center></th>
                    <th><center>Nama Jabatan</center></th>
                    <th><center>Besaran Uang</center></th>
                    <th colspan="2"><center>Selection</center></th>

                </tr>
            </thead>
            @php
            $no = 1;
            @endphp
            <tbody>
                @foreach ($Jabatan as $data)
                <tr>
                    <td><center>{{ $no++ }}</center></td>
                    <td><center>{{ $data->Kode_Jabatan }}</center></td>
                    <td><center>{{ $data->Nama_Jabatan }}</center></td>
                     <td><center><?php echo 'Rp'. number_format($data->Besaran_Uang, 2,",","."); ?></center>
             </td>
                    
             
                    <td><a href="{{route('Jabatan.edit',$data->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['Jabatan.destroy', $data->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
                    </tr>
                @endforeach
          

            </tbody>
        </table>
        <a href="{{url('/Jabatan/create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Jabatan</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
@endsection