@extends('layout.bootstrap3.index')

@section('title')
Projek Akhir WEB II
@stop

@section('content')
<div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-info">
        <div class="panel-heading">
            Form Edit Penyewa
        </div>
        <div class="panel-body">
            <form action="{{ URL::to('/penyewa/ubah/proses/'.$isi->id); }}" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Nama Penyewa</label>
                    <div class="col-sm-6">
                        <input type="text" name="nama" class="form-control" value="{{ $isi->nama;}}"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">No. Telepon</label>
                    <div class="col-sm-6">
                        <input type="text" name="no_hp" class="form-control" value="{{$isi->no_hp;}}"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" name="submit" class="btn btn-default">
                            <i class="glyphicon glyphicon-floppy-save"></i>
                            Simpan
                        </button>
                        <button type="reset" name="reset" class="btn btn-info">
                            <i class="glyphicon glyphicon-minus-sign"></i>
                            Reset
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="panel-footer">

        </div>
    </div>
</div>
@stop
