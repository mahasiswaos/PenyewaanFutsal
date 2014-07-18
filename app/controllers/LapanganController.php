<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Lapangan;
use View;
use Redirect;
use Input;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LapanganController
 *
 * @author KAWAN
 */
class LapanganController extends BaseController {
    //put your code here
 public function tampil() {
        $tampil = Lapangan::all();
        $data = array(
            'lapangan' => $tampil,
        );
//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';
        return View::make('lapangan.view', $data);
    }

    public function tambah() {

        return View::make('lapangan.add');
    }

    public function tambahProses() {
        $add = Input::all();
        $proses = new Lapangan();
        $proses->nama_lapangan = $add['nama_lapangan'];
        $proses->save();

        return Redirect::to('/lapangan');
    }

    public function ubah($id) {
        $edit = Lapangan::find($id);
        $data = array(
            'isi' => $edit,
        );

        return View::make('lapangan.edit', $data);
    }
    
    public function ubahProses($id) {
        $update = Input::all();
        $ket = Lapangan::find($id);
        $ket->nama_lapangan = $update['nama_lapangan'];
        $ket->update();
        
        return Redirect::to('/lapangan');   
    }

    public function hapus($id) {
        $hapus = Lapangan::find($id);
        $hapus->delete();
        return Redirect::to('/lapangan');
    }

}
