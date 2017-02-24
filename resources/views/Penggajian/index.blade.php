 @extends('layouts.master')

@section('content')

            <div class="panel panel-primary">
                <div class="panel-heading">     
                <h3><font face="Maiandra GD" color="white"><CENTER>Table Data Penggajian</CENTER></font></h3></CENTER>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
            <thead>
                <tr>
                    <th><p class="center"><center>No.</center></p></th>
                          <th><p class="center"><center>Pegawai</center></p></th>
                          <th><p class="center"><center>Jumlah Jam Lembur</center></p></th>
                          <th><p class="center"><center>Jumlah Uang Lembur</center></p></p></th>
                          <th><p class="center"><center>Gaji Pokok</center></p></p></th>
                          <th><p class="center"><center>Total Gaji</center></p></p></th>
                          <th><p class="center"><center>Tanggal Pengambilan</center></p></p></th>
                          <th><p class="center"><center>Status Pengambilan</center></p></p></th>
                          <th><p class="center"><center>Petuga Penerima</center></p></p></th>
                          <th colspan="3"><p class="center"><center>Selection</center></p></th>
                        </tr>
                      </thead>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($Gaji as $data)
                            <tbody>
                                <tr>
                                
                                    <td>{{$no++}}</td>
                                    <td>{{$data->Tunjangan_Pegawai->Pegawai->User->name}}</td>
                                    <td>{{$data->Jumlah_jam_lembur}} </td>
                                    <td>{{$data->Jumlah_uang_lembur}} </td>
                                    <td><?php echo 'Rp.'. number_format($data->Gaji_pokok, 2,",","."); ?> </td>
                                    <td><?php echo 'Rp.'. number_format($data->Total_gaji, 2,",","."); ?></td>
                                  

                                    <td>{{$data->updated_at}} </td>
                                    

                                   
                                    @if($data->Status_pengambilan == 0)
                                    
                                        <td>Belum Diambil </td>
                                    
                                    @endif
                                    @if($data->Status_pengambilan == 1)
                                    
                                        <td>Sudah Diambil</td>
                                    
                                    @endif
                                  <td>{{$data->Petugas_penerima}} </td>
                    <td><center>
                            <a href="{{ route('Penggajian.edit', $data->id) }}"  button class="btn btn-primary" type="submit"><i class="fa fa-pencil-square-o"></i></a></center>
                             <?php $id=$data->id;?>
                             {!! Form::open(['method' => 'DELETE', 'route'=>['Penggajian.destroy', $id]]) !!}
                                    
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
        <a href="{{url('/Penggajian/create')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Penggajian</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
@endsection