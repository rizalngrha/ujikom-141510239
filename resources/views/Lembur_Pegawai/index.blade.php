 @extends('layouts.master')

@section('content')

            <div class="panel panel-primary">
                <div class="panel-heading">     
                <h3><font face="Maiandra GD" color="white"><CENTER>Table Data Lembur Pegawai</CENTER></font></h3></CENTER>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
            <thead>
                <tr>
                    <th><center>No</center></th>
                    <th><center>Kode Lembur</center></th>
                    <th><center>NIP</center></th>
                    <th><center>Nama Pegawai</center></th>
                    <th><center>Jumlah Jam</center></th>
                    <th><center>Besaran Uang</center></th>
                </tr>
            </thead>
            @php
            $no = 1;
            @endphp
            <tbody>
                @foreach ($Lembur_Pegawai as $data)
                <tr>
                    <td><center>{{ $no++ }}</center></td>
                    <td><center>{{ $data->Kategori_Lembur->Kode_Lembur}}</center></td>
                     <th><center>{{ $data->Pegawai->Nip}}</center></th>
                    <td><center>{{ $data->Pegawai->User->name}}</center></td>
                  
                    <td><center>{{ $data->Jumlah_Jam}}</center></td>
                     <th><center><?php echo 'Rp.'. number_format($data->Kategori_lembur->Besaran_Uang*$data->Jumlah_Jam, 2,",","."); ?></center></th>
             </td>
                   
           
                                <td><center>
                            <a href="{{ route('Lembur_Pegawai.edit', $data->id) }}"  button class="btn btn-primary" type="submit"><i class="fa fa-pencil-square-o"></i></a></center>
                             <?php $id=$data->id;?>
                             {!! Form::open(['method' => 'DELETE', 'route'=>['Lembur_Pegawai.destroy', $id]]) !!}
                                    
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
        <a href="{{url('/Lembur_Pegawai/create')}}" class="btn btn-success"><span class="fa fa-plus" aria-hidden="true"></span> Data</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
@endsection