@extends('layout.bootstrap3.index')

@section('title')
Projek Akhir WEB II
@stop

@section('content')
<div class="col-sm-9 col-sm-offset-3">
    <div class="panel panel-info">
        <div class="panel-heading">
            Form Tambah Lapangan
        </div>
        <div class="panel-body">
            <form action="{{ URL::to('/lapangan/tambah/proses') }}" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-3 control-label"> Nama Lapangan </label>
                    <div class="col-sm-6">
                        <input type="text" name="nama_lapangan" class="form-control" required=""/>
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