@extends('layout.bootstrap3.index')

@section('title')
Projek Akhir WEB II
@stop

@section('content')
<a href="{{URL::to('/boking/tambah')}}" class="btn btn-primary">
    <i class="glyphicon glyphicon-plus"></i>
    Tambah
</a>
<br/>
<br/>
<div class="panel panel-primary">
    <div class="panel-heading">
        Form View Boking
    </div>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Tanggal</th>
            <th>Waktu Boking</th>
            <th>Lama Main/Jam</th>
            <th>Harga</th>
            <th>Lapangan</th>
            <th>Penyewa</th>
            <th>AKSI</th>
        </tr>
        <?php foreach ($boking as $val) { ?>
            <tr>
                
                <td>{{ $val['id'];}}</td>
                <td>{{ $val['tanggal'];}}</td>
                <td>{{ $val['waktu'];}}</td>
                <td>{{ $val['lama_main'];}}</td>
                <td>{{ $val['harga'];}}</td>
                <td>{{ $val->lapangan->nama_lapangan}}</td>
                <td>{{ $val->penyewa->nama}}</td>
                
                
                
                <td>
                    <a href="{{URL::to('/boking/ubah/'.$val['id']);}}" class="btn btn-info">
                        <i class="glyphicon glyphicon-edit"></i>
                        Ubah
                    </a>
                    <a href="{{URL::to('/boking/hapus/'.$val['id']);}}" class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i>
                        Hapus
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <div class="panel-footer"></div>
</div>
@stop

