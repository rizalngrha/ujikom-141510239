@extends('layouts.master')

@section('content')

            <div class="panel panel-primary">
                <div class="panel-heading">     
                <h3><font face="Maiandra GD" color="white"><CENTER>Table Tunjangan Pegawai</CENTER></font></h3></CENTER>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
            <thead>
                <tr>
                   <th><center>No</center></th>
					<th><center>Kode Tunjangan</center></th>
					<th><center>NIP</center></th>
					<th><center>Nama Pegawai</center></th>
					<th><center>Besaran Uang</center></th>
					
					<th colspan="3"><center>Pilihan </center></th>

                </tr>
            </thead>
            <?php
				$no = 1;
			?>
				@foreach($Tunjangan_Pegawai as $data)
            <tbody>
               
                <tr>
						<td><center>{{ $no++ }}</center></td>
						<th><center>{{ $data->Tunjangan->Kode_Tunjangan }}</center></th>
                                 <th><center>{{ $data->Pegawai->Nip }}</center></th>
                                 <th><center>{{ $data->Pegawai->User->name }}</center></th>
                                 <th><center><?php echo 'Rp.'. number_format($data->Tunjangan->Besaran_Uang, 2,",","."); ?></center></th>
						
           
                                <td><center>
                            <a href="{{ route('Tunjangan_Pegawai.edit', $data->id) }}"  button class="btn btn-primary" type="submit"><i class="fa fa-pencil-square-o"></i></a></center>
                             <?php $id=$data->id;?>
                             {!! Form::open(['method' => 'DELETE', 'route'=>['Tunjangan_Pegawai.destroy', $id]]) !!}
                                    
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
        <a href="{{url('/Tunjangan_Pegawai/create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tunjangan Pegawai</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
@endsection