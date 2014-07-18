<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Penyewa;
use View;
use Redirect;
use Input;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PenyewaControllers
 *
 * @author KAWAN
 */
class PenyewaControllers extends BaseController {

    //put your code here
    public function tampil() {
        $tampil = Penyewa::all();
        $data = array(
            'penyewa' => $tampil,
        );
//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';
        return View::make('penyewa.view', $data);
    }

    public function tambah() {

        return View::make('penyewa.add');
    }

    public function tambahProses() {
        $add = Input::all();
        $proses = new Penyewa();
        $proses->nama = $add['nama'];
        $proses->no_hp = $add['no_hp'];
        $proses->save();

        return Redirect::to('/penyewa');
    }

    public function ubah($id) {
        $edit = Penyewa::find($id);
        $data = array(
            'isi' => $edit,
        );

        return View::make('penyewa.edit', $data);
    }
    
    public function ubahProses($id) {
        $update = Input::all();
        $ket = Penyewa::find($id);
        $ket->nama = $update['nama'];
        $ket->no_hp = $update['no_hp'];
        $ket->update();
        
        return Redirect::to('/penyewa');   
    }

    public function hapus($id) {
        $hapus = Penyewa::find($id);
        $hapus->delete();
        return Redirect::to('/penyewa');
    }

}
