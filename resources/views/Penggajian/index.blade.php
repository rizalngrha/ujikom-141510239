 @extends('layouts.ujikom')

@section('content')

            <div class="panel panel-primary">
                <div class="panel-heading">     
                <h3><font face="Maiandra GD" color="white"><CENTER>Table Data Penggajian</CENTER></font></h3></CENTER>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
            <thead>
                <tr>
                    <th><center>No</center></th>
                    <th><center>Kode Tunjangan</center></th>
                    <th><center>Jumlah Jam Lembur</center></th>
                    <th><center>Jumlah Uang lembur</center></th>
                    <th><center>Gaji Pokok</center></th>
                    <th><center>Total Gaji </center></th>
                    <th><center>Tanggal Pengambilan</center></th>
                    <th><center>Status Pengambilan</center></th>
                    <th><center>Petugas Penerima</center></th>

                    <th colspan="2"><center>Selection</center></th>

                </tr>
            </thead>
            @php
            $no = 1;
            @endphp
            <tbody>
                @foreach ($Penggajian as $data)
                <tr>
              
                    <td><center>{{ $no++ }}</center></td>
                    <td><center>{{ $data->Tunjangan_Pegawai->Tunjangan->Kode_Tunjangan }}</center></td>
                    <td><center>{{ $data->Jumlah_jam_lembur }}</center></td>
                    <td><center>{{ $data->Jumlah_uang_lembur }}</center></td>
                    <td><center>{{ $data->Gaji_pokok }}</center></td>
                    <td><center>{{ $data->Total_gaji }}</center></td>
                    <td><center>{{ $data->created_at }}</center></td>
                    <td><center>{{ $data->Status_pengambilan }}</center></td>
                    <td><center>{{ $data->Petugas_penerima }}</center></td>
             
                    <td><a href="{{route('Penggajian.edit',$data->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['Penggajian.destroy', $data->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
                    </tr>
                @endforeach
          

            </tbody>
        </table>
        <a href="{{url('/Penggajian/create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Penggajian</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
@endsection