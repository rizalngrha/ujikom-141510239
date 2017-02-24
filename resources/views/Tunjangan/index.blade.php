@extends('layouts.master')

@section('content')

            <div class="panel panel-primary">
                <div class="panel-heading">     
                <h3><font face="Maiandra GD" color="white"><CENTER>Table Data Tunjangan</CENTER></font></h3></CENTER>
                </div>

                <div class="panel-body">
                    <table class="table table-striped">
            <thead>
                <tr>
                   <th><center>No</center></th>
					<th><center>Kode Tunjangan</center></th>
					<th><center>Jabatan</center></th>
					<th><center>Golongan</center></th>
					<th><center>Status</center></th>
					<th><center>Jumlah&nbsp;Anak</center></th>
					<th><center>Besaran&nbsp;Uang</center></th>
                    
					<th colspan="2"><center>Pilihan</center></th>

                </tr>
            </thead>
            <?php
				$no = 1;
			?>
				@foreach($Tunjangan as $data)
            <tbody>
               
                <tr>
						<td><center>{{ $no++ }}</center></td>
						<td><center>{{ $data->Kode_Tunjangan }}</center></td>
						<td><center>{{ $data->Jabatan->Nama_Jabatan }}</center></td>
						<td><center>{{ $data->Golongan->Nama_Golongan }}</center></td>
						<td><center>{{ $data->Status}}</center></td>
						<td><center>{{ $data->Jumlah_Anak }}</center></td>
					<th><center><?php echo 'Rp.'. number_format($data->Besaran_Uang, 2,",","."); ?></center></th>
						
                                <td><center>
                            <a href="{{ route('Tunjangan.edit', $data->id) }}"  button class="btn btn-primary" type="submit"><i class="fa fa-pencil-square-o"></i></a></center>
                             <?php $id=$data->id;?>
                             {!! Form::open(['method' => 'DELETE', 'route'=>['Tunjangan.destroy', $id]]) !!}
                                    
                                 </td>
                                 <td>
                                 <center>
                                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button></center>
                                    {!! Form::close() !!}
                                </td>
					</tr>
				@endforeach

            </tbody>
        </table>
        <a href="{{url('/Tunjangan/create')}}" class="btn btn-success"><span class="fa fa-plus" aria-hidden="true"></span> Data</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
@endsection