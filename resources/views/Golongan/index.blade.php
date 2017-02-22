 @extends('layouts.master')

@section('content')

            <div class="panel panel-primary">
                <div class="panel-heading">     
                <h3><font face="Maiandra GD" color="white"><CENTER>Table Data Golongan</CENTER></font></h3></CENTER>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
            <thead>
                <tr>
                    <th><center>No</center></th>
                    <th><center>Kode Golongan</center></th>
                    <th><center>Nama Golongan</center></th>
                    <th><center>Besaran Uang</center></th>
                    <th colspan="2"><center>Selection</center></th>

                </tr>
            </thead>
            @php
            $no = 1;
            @endphp
            <tbody>
                @foreach ($Golongan as $data)
                <tr>
                    <td><center>{{ $no++ }}</center></td>
                    <td><center>{{ $data->Kode_Golongan }}</center></td>
                    <td><center>{{ $data->Nama_Golongan }}</center></td>
                     <td><center><?php echo 'Rp'. number_format($data->Besaran_Uang, 2,",","."); ?></center>
             </td>
                    
             
           
                                <td><center>
                            <a href="{{ route('Golongan.edit', $data->id) }}"  button class="btn btn-primary" type="submit"><i class="fa fa-pencil-square-o"></i></a></center>
                             <?php $id=$data->id;?>
                             {!! Form::open(['method' => 'DELETE', 'route'=>['Golongan.destroy', $id]]) !!}
                                    
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
        <a href="{{url('/Golongan/create')}}" class="btn btn-success"><span class="fa fa-plus" aria-hidden="true"></span> Data</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
@endsection