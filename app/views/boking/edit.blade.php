@extends('layout.bootstrap3.index')

@section('title')
Projek Akhir WEB II
@stop

@section('content')
<div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-info">
        <div class="panel-heading">
            Form Edit Boking
        </div>
        <div class="panel-body">
            <form action="{{ URL::to('/boking/ubah/proses/'.$isi->id); }}" method="POST" class="form-horizontal">
               <div class="form-group">
                    <label class="col-sm-3 control-label">Tanggal</label>
                    <div class="col-sm-6">
                        <input type="date" name="tanggal" class="form-control" value="{{ $isi->tanggal;}}"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Waktu Main</label>
                    <div class="col-sm-6">
                        <input type="time" name="waktu" class="form-control" value="{{ $isi->waktu;}}"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Lama Main</label>
                    <div class="col-sm-6">
                        <input type="text" name="lama_main" class="form-control" value="{{$isi->lama_main;}}"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Harga</label>
                    <div class="col-sm-6">
                        <input type="text" name="harga" class="form-control" value="{{$isi->harga;}}"/>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label">Lapangan</label>
                    <div class="col-sm-6">
                        <input type="text" name="nama_lapangan" class="form-control" value="{{$isi->nama_lapangan;}}"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Penyewa</label>
                    <div class="col-sm-6">
                        <input type="text" name="nama" class="form-control" value="{{$isi->nama;}}"/>
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
