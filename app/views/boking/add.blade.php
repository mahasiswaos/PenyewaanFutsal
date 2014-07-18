@extends('layout.bootstrap3.index')

@section('title')
Projek Akhir WEB II
@stop

@section('content')
<div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-info">
        <div class="panel-heading">
            Form Tambah Boking
        </div>
        <div class="panel-body">
            <form action="{{ URL::to('/boking/tambah/proses') }}" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Tanggal</label>
                    <div class="col-sm-6">
                        <input type="date" name="tanggal" class="form-control" required=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Waktu Boking</label>
                    <div class="col-sm-6">
                        <input type="time" name="waktu" class="form-control" required=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Lama Main</label>
                    <div class="col-sm-6">
                        <input type="text" name="lama_main" class="form-control" placeholder="" required=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Harga</label>
                    <div class="col-sm-6">
                        <input type="text" name="harga" class="form-control" placeholder="" required=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Lapangan</label>
                    <div class="col-sm-6">
                        <select name="lapangan_id" class="form-control">
                            <?php
                            foreach ($isi_lap as $lap) {
                                ?>
                                <option value="<?php echo $lap->id; ?>"><?php echo $lap->nama_lapangan; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Penyewa</label>
                    <div class="col-sm-6">
                        <select name="penyewa_id" class="form-control">
                            <?php
                            foreach ($isi_penyewa as $peny) {
                                ?>
                                <option value="<?php echo $peny->id; ?>"><?php echo $peny->nama; ?></option>
                                <?php
                            }
                            ?>
                        </select>
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