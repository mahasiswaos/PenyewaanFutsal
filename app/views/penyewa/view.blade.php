@extends('layout.bootstrap3.index')

@section('title')
Projek Akhir WEB II
@stop

@section('content')
<a href="{{URL::to('/penyewa/tambah')}}" class="btn btn-primary">
    <i class="glyphicon glyphicon-plus"></i>
    Tambah
</a>
<br/>
<br/>
<div class="panel panel-primary">
    <div class="panel-heading">
        Form View Penyewa
    </div>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>NAMA PENYEWA</th>
            <th>NO. HP</th>
            <th>AKSI</th>
        </tr>
        <?php foreach ($penyewa as $val) { ?>
            <tr>
                <td>{{ $val['id'];}}</td>
                <td>{{ $val['nama'];}}</td>
                <td>{{ $val['no_hp'];}}</td>
                <td>
                    <a href="{{URL::to('/penyewa/ubah/'.$val['id']);}}" class="btn btn-info">
                        <i class="glyphicon glyphicon-edit"></i>
                        Ubah
                    </a>
                    <a href="{{URL::to('/penyewa/hapus/'.$val['id']);}}" class="btn btn-danger">
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

